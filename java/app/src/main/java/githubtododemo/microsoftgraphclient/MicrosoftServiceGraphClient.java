package githubtododemo.microsoftgraphclient;

import com.microsoft.kiota.ApiClientBuilder;
import com.microsoft.kiota.BaseRequestBuilder;
import com.microsoft.kiota.RequestAdapter;
import com.microsoft.kiota.serialization.FormParseNodeFactory;
import com.microsoft.kiota.serialization.FormSerializationWriterFactory;
import com.microsoft.kiota.serialization.JsonParseNodeFactory;
import com.microsoft.kiota.serialization.JsonSerializationWriterFactory;
import com.microsoft.kiota.serialization.ParseNodeFactoryRegistry;
import com.microsoft.kiota.serialization.SerializationWriterFactoryRegistry;
import com.microsoft.kiota.serialization.TextParseNodeFactory;
import com.microsoft.kiota.serialization.TextSerializationWriterFactory;
import githubtododemo.microsoftgraphclient.me.MeRequestBuilder;
import java.util.HashMap;
import java.util.Objects;
/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
 */
public class MicrosoftServiceGraphClient extends BaseRequestBuilder {
    /** The me property */
    @javax.annotation.Nonnull
    public MeRequestBuilder me() {
        return new MeRequestBuilder(pathParameters, requestAdapter);
    }
    /**
     * Instantiates a new MicrosoftServiceGraphClient and sets the default values.
     * @param requestAdapter The request adapter to use to execute the requests.
     * @return a void
     */
    @javax.annotation.Nullable
    public MicrosoftServiceGraphClient(@javax.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}");
        this.pathParameters = new HashMap<>();
        ApiClientBuilder.registerDefaultSerializer(JsonSerializationWriterFactory.class);
        ApiClientBuilder.registerDefaultSerializer(TextSerializationWriterFactory.class);
        ApiClientBuilder.registerDefaultSerializer(FormSerializationWriterFactory.class);
        ApiClientBuilder.registerDefaultDeserializer(JsonParseNodeFactory.class);
        ApiClientBuilder.registerDefaultDeserializer(FormParseNodeFactory.class);
        ApiClientBuilder.registerDefaultDeserializer(TextParseNodeFactory.class);
        if (requestAdapter.getBaseUrl() == null || requestAdapter.getBaseUrl().isEmpty()) {
            requestAdapter.setBaseUrl("https://graph.microsoft.com/v1.0");
        }
        pathParameters.put("baseurl", requestAdapter.getBaseUrl());
    }
}