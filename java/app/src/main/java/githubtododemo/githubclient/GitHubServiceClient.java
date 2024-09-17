package githubtododemo.githubclient;

import com.microsoft.kiota.ApiClientBuilder;
import com.microsoft.kiota.BaseRequestBuilder;
import com.microsoft.kiota.RequestAdapter;
import com.microsoft.kiota.serialization.ParseNodeFactoryRegistry;
import com.microsoft.kiota.serialization.SerializationWriterFactoryRegistry;
import githubtododemo.githubclient.repos.ReposRequestBuilder;
import java.util.HashMap;
import java.util.Objects;
/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
 */
@jakarta.annotation.Generated("com.microsoft.kiota")
public class GitHubServiceClient extends BaseRequestBuilder {
    /**
     * The repos property
     * @return a {@link ReposRequestBuilder}
     */
    @jakarta.annotation.Nonnull
    public ReposRequestBuilder repos() {
        return new ReposRequestBuilder(pathParameters, requestAdapter);
    }
    /**
     * Instantiates a new {@link GitHubServiceClient} and sets the default values.
     * @param requestAdapter The request adapter to use to execute the requests.
     */
    public GitHubServiceClient(@jakarta.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}");
        this.pathParameters = new HashMap<>();
        if (requestAdapter.getBaseUrl() == null || requestAdapter.getBaseUrl().isEmpty()) {
            requestAdapter.setBaseUrl("https://api.github.com");
        }
        pathParameters.put("baseurl", requestAdapter.getBaseUrl());
    }
}
