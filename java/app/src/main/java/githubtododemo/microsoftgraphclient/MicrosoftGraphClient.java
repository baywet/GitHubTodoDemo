package githubtododemo.microsoftgraphclient;

import com.microsoft.kiota.ApiClientBuilder;
import com.microsoft.kiota.BaseRequestBuilder;
import com.microsoft.kiota.RequestAdapter;
import com.microsoft.kiota.serialization.ParseNodeFactoryRegistry;
import com.microsoft.kiota.serialization.SerializationWriterFactoryRegistry;
import githubtododemo.microsoftgraphclient.me.MeRequestBuilder;
import java.util.HashMap;
import java.util.Objects;
/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
 */
@jakarta.annotation.Generated("com.microsoft.kiota")
public class MicrosoftGraphClient extends BaseRequestBuilder {
    /**
     * The me property
     * @return a {@link MeRequestBuilder}
     */
    @jakarta.annotation.Nonnull
    public MeRequestBuilder me() {
        return new MeRequestBuilder(pathParameters, requestAdapter);
    }
    /**
     * Instantiates a new {@link MicrosoftGraphClient} and sets the default values.
     * @param requestAdapter The request adapter to use to execute the requests.
     */
    public MicrosoftGraphClient(@jakarta.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}");
        this.pathParameters = new HashMap<>();
        if (requestAdapter.getBaseUrl() == null || requestAdapter.getBaseUrl().isEmpty()) {
            requestAdapter.setBaseUrl("https://graph.microsoft.com/v1.0");
        }
        pathParameters.put("baseurl", requestAdapter.getBaseUrl());
    }
}
