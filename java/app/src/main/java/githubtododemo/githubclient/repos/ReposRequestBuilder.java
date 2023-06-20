package githubtododemo.githubclient.repos;

import com.microsoft.kiota.BaseRequestBuilder;
import com.microsoft.kiota.RequestAdapter;
import githubtododemo.githubclient.repos.item.WithOwnerItemRequestBuilder;
import java.util.HashMap;
import java.util.Objects;
/**
 * Builds and executes requests for operations under /repos
 */
public class ReposRequestBuilder extends BaseRequestBuilder {
    /**
     * Gets an item from the GitHubTodoDemo.GitHubClient.repos.item collection
     * @param owner Unique identifier of the item
     * @return a WithOwnerItemRequestBuilder
     */
    @javax.annotation.Nonnull
    public WithOwnerItemRequestBuilder byOwner(@javax.annotation.Nonnull final String owner) {
        Objects.requireNonNull(owner);
        final HashMap<String, Object> urlTplParams = new HashMap<String, Object>(this.pathParameters);
        urlTplParams.put("owner", owner);
        return new WithOwnerItemRequestBuilder(urlTplParams, requestAdapter);
    }
    /**
     * Instantiates a new ReposRequestBuilder and sets the default values.
     * @param pathParameters Path parameters for the request
     * @param requestAdapter The request adapter to use to execute the requests.
     * @return a void
     */
    @javax.annotation.Nullable
    public ReposRequestBuilder(@javax.annotation.Nonnull final HashMap<String, Object> pathParameters, @javax.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/repos", pathParameters);
    }
    /**
     * Instantiates a new ReposRequestBuilder and sets the default values.
     * @param rawUrl The raw URL to use for the request builder.
     * @param requestAdapter The request adapter to use to execute the requests.
     * @return a void
     */
    @javax.annotation.Nullable
    public ReposRequestBuilder(@javax.annotation.Nonnull final String rawUrl, @javax.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/repos", rawUrl);
    }
}
