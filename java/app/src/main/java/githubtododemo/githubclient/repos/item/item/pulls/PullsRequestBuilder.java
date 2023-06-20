package githubtododemo.githubclient.repos.item.item.pulls;

import com.microsoft.kiota.BaseRequestBuilder;
import com.microsoft.kiota.RequestAdapter;
import githubtododemo.githubclient.repos.item.item.pulls.item.WithPullNumberItemRequestBuilder;
import java.util.HashMap;
import java.util.Objects;
/**
 * Builds and executes requests for operations under /repos/{owner}/{repo}/pulls
 */
public class PullsRequestBuilder extends BaseRequestBuilder {
    /**
     * Gets an item from the GitHubTodoDemo.GitHubClient.repos.item.item.pulls.item collection
     * @param pull_number Unique identifier of the item
     * @return a WithPullNumberItemRequestBuilder
     */
    @javax.annotation.Nonnull
    public WithPullNumberItemRequestBuilder byPull_number(@javax.annotation.Nonnull final String pull_number) {
        Objects.requireNonNull(pull_number);
        final HashMap<String, Object> urlTplParams = new HashMap<String, Object>(this.pathParameters);
        urlTplParams.put("pull_number", pull_number);
        return new WithPullNumberItemRequestBuilder(urlTplParams, requestAdapter);
    }
    /**
     * Instantiates a new PullsRequestBuilder and sets the default values.
     * @param pathParameters Path parameters for the request
     * @param requestAdapter The request adapter to use to execute the requests.
     * @return a void
     */
    @javax.annotation.Nullable
    public PullsRequestBuilder(@javax.annotation.Nonnull final HashMap<String, Object> pathParameters, @javax.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/repos/{owner}/{repo}/pulls", pathParameters);
    }
    /**
     * Instantiates a new PullsRequestBuilder and sets the default values.
     * @param rawUrl The raw URL to use for the request builder.
     * @param requestAdapter The request adapter to use to execute the requests.
     * @return a void
     */
    @javax.annotation.Nullable
    public PullsRequestBuilder(@javax.annotation.Nonnull final String rawUrl, @javax.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/repos/{owner}/{repo}/pulls", rawUrl);
    }
}
