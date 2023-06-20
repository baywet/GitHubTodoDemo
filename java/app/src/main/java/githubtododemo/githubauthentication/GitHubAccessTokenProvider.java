package githubtododemo.githubauthentication;

import com.google.common.net.MediaType;
import com.microsoft.kiota.authentication.AccessTokenProvider;
import com.microsoft.kiota.authentication.AllowedHostsValidator;

import java.io.IOException;
import java.net.URI;
import java.util.Map;
import java.util.Objects;
import java.util.concurrent.CompletableFuture;
import java.util.concurrent.ExecutionException;

import javax.annotation.Nonnull;
import javax.annotation.Nullable;

import okhttp3.OkHttpClient;
import okhttp3.Request;
import okhttp3.FormBody;
import okhttp3.RequestBody;
import okhttp3.Response;

import com.google.gson.Gson;

public class GitHubAccessTokenProvider implements AccessTokenProvider {
	private final AllowedHostsValidator _allowedHostsValidator;
	private final OkHttpClient client = new OkHttpClient();
	private final Gson gson = new Gson();
	private final String _clientId;
	private final String _scope;
	public GitHubAccessTokenProvider(@Nonnull final String clientId, @Nonnull final String scope) {
		this(clientId, scope, "api.github.com");
	}
	public GitHubAccessTokenProvider(@Nonnull final String clientId, @Nonnull final String scope, @Nonnull final String allowedHost) {
		Objects.requireNonNull(clientId);
		Objects.requireNonNull(scope);
		Objects.requireNonNull(allowedHost);
		if (clientId.isBlank()) {
			throw new IllegalArgumentException("clientId cannot be blank");
		}
		if (scope.isBlank()) {
			throw new IllegalArgumentException("scope cannot be blank");
		}
		if (allowedHost.isBlank()) {
			throw new IllegalArgumentException("allowedHost cannot be blank");
		}
		_clientId = clientId;
		_scope = scope;
		_allowedHostsValidator = new AllowedHostsValidator(allowedHost);
	}
	@Nonnull
    public CompletableFuture<String> getAuthorizationToken(@Nonnull final URI uri, @Nullable final Map<String, Object> additionalAuthenticationContext)
	{
		Objects.requireNonNull(uri);
		if(!_allowedHostsValidator.isUrlHostValid(uri)) {
			throw new IllegalArgumentException("uri is not valid");
		}
		try 
		{
			final var deviceCodeResponse = getDeviceCode();
			System.out.println("Please go to " + deviceCodeResponse.verification_uri + " and enter the code " + deviceCodeResponse.user_code + " to authenticate.");
			final var tokenResponse = pollForToken(deviceCodeResponse);
			return CompletableFuture.completedFuture(tokenResponse.access_token);
		}
		catch (Exception ex)
		{
			return CompletableFuture.failedFuture(ex);
		}
	}
	private GitHubAccessCodeResponse pollForToken(final GitHubDeviceCodeResponse deviceCodeResponse) throws InterruptedException, ExecutionException, IOException {
		var tokenResponse = getToken(deviceCodeResponse);
		do
		{
			Thread.sleep(deviceCodeResponse.interval * 1000 + 1000);
			tokenResponse = getToken(deviceCodeResponse);
		}
		while (tokenResponse == null);
		return tokenResponse;
	}
	private GitHubAccessCodeResponse getToken(@Nonnull final GitHubDeviceCodeResponse deviceCodeResponse) throws IOException
	{
		Objects.requireNonNull(deviceCodeResponse);
		if (deviceCodeResponse.device_code == null || deviceCodeResponse.device_code.isBlank()) {
			throw new IllegalArgumentException("deviceCodeResponse.device_code cannot be null or blank");
		}
		RequestBody body = new FormBody.Builder()
								.add("client_id", _clientId)
								.add("device_code", deviceCodeResponse.device_code)
								.add("grant_type", "urn:ietf:params:oauth:grant-type:device_code")
								.build();
		Request request = new Request.Builder()
			.url("https://github.com/login/oauth/access_token")
			.addHeader("Accept", MediaType.JSON_UTF_8.toString())
			.post(body)
			.build();
		try (final Response response = client.newCall(request).execute()) {
			final var result = response.body().string();
			final GitHubAccessCodeResponse deserialized = gson.fromJson(result, GitHubAccessCodeResponse.class);
			if ("authorization_pending".equals(deserialized.error)) {
				return null;
			}
			if (deserialized.error != null && !deserialized.error.isBlank()) {
				throw new RuntimeException(deserialized.error);
			}
			return deserialized;
		}
	}
	private GitHubDeviceCodeResponse getDeviceCode() throws IOException
	{
		RequestBody body = new FormBody.Builder()
								.add("client_id", _clientId)
								.add("scope", _scope)
								.build();
		Request request = new Request.Builder()
			.url("https://github.com/login/device/code")
			.addHeader("Accept", MediaType.JSON_UTF_8.toString())
			.post(body)
			.build();
		try (final Response response = client.newCall(request).execute()) {
			final var result = response.body().string();
			final GitHubDeviceCodeResponse deserialized = gson.fromJson(result, GitHubDeviceCodeResponse.class);
			return deserialized;
		}
	}
	@Nonnull
    public AllowedHostsValidator getAllowedHostsValidator()
	{
		return _allowedHostsValidator;
	}
}
