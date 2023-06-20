package githubtododemo.githubclient.repos.item;

import com.microsoft.kiota.BaseRequestBuilder;
import com.microsoft.kiota.RequestAdapter;
import githubtododemo.githubclient.repos.item.item.WithRepoItemRequestBuilder;
import java.util.HashMap;
import java.util.Objects;
/**
 * Builds and executes requests for operations under /repos/{owner}
 */
public class WithOwnerItemRequestBuilder extends BaseRequestBuilder {
    /**
     * Gets an item from the GitHubTodoDemo.GitHubClient.repos.item.item collection
     * @param repo Unique identifier of the item
     * @return a WithRepoItemRequestBuilder
     */
    @javax.annotation.Nonnull
    public WithRepoItemRequestBuilder byRepo(@javax.annotation.Nonnull final String repo) {
        Objects.requireNonNull(repo);
        final HashMap<String, Object> urlTplParams = new HashMap<String, Object>(this.pathParameters);
        urlTplParams.put("repo", repo);
        return new WithRepoItemRequestBuilder(urlTplParams, requestAdapter);
    }
    /**
     * Instantiates a new WithOwnerItemRequestBuilder and sets the default values.
     * @param pathParameters Path parameters for the request
     * @param requestAdapter The request adapter to use to execute the requests.
     * @return a void
     */
    @javax.annotation.Nullable
    public WithOwnerItemRequestBuilder(@javax.annotation.Nonnull final HashMap<String, Object> pathParameters, @javax.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/repos/{owner}", pathParameters);
    }
    /**
     * Instantiates a new WithOwnerItemRequestBuilder and sets the default values.
     * @param rawUrl The raw URL to use for the request builder.
     * @param requestAdapter The request adapter to use to execute the requests.
     * @return a void
     */
    @javax.annotation.Nullable
    public WithOwnerItemRequestBuilder(@javax.annotation.Nonnull final String rawUrl, @javax.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/repos/{owner}", rawUrl);
    }
}
