package githubtododemo.githubclient.repos;

import com.microsoft.kiota.BaseRequestBuilder;
import com.microsoft.kiota.RequestAdapter;
import githubtododemo.githubclient.repos.item.WithOwnerItemRequestBuilder;
import java.util.HashMap;
import java.util.Objects;
/**
 * Builds and executes requests for operations under /repos
 */
@jakarta.annotation.Generated("com.microsoft.kiota")
public class ReposRequestBuilder extends BaseRequestBuilder {
    /**
     * Gets an item from the githubtododemo.githubclient.repos.item collection
     * @param owner The account owner of the repository. The name is not case sensitive.
     * @return a {@link WithOwnerItemRequestBuilder}
     */
    @jakarta.annotation.Nonnull
    public WithOwnerItemRequestBuilder byOwner(@jakarta.annotation.Nonnull final String owner) {
        Objects.requireNonNull(owner);
        final HashMap<String, Object> urlTplParams = new HashMap<String, Object>(this.pathParameters);
        urlTplParams.put("owner", owner);
        return new WithOwnerItemRequestBuilder(urlTplParams, requestAdapter);
    }
    /**
     * Instantiates a new {@link ReposRequestBuilder} and sets the default values.
     * @param pathParameters Path parameters for the request
     * @param requestAdapter The request adapter to use to execute the requests.
     */
    public ReposRequestBuilder(@jakarta.annotation.Nonnull final HashMap<String, Object> pathParameters, @jakarta.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/repos", pathParameters);
    }
    /**
     * Instantiates a new {@link ReposRequestBuilder} and sets the default values.
     * @param rawUrl The raw URL to use for the request builder.
     * @param requestAdapter The request adapter to use to execute the requests.
     */
    public ReposRequestBuilder(@jakarta.annotation.Nonnull final String rawUrl, @jakarta.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/repos", rawUrl);
    }
}
