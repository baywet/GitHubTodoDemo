package githubtododemo.githubclient.repos.item.item;

import com.microsoft.kiota.BaseRequestBuilder;
import com.microsoft.kiota.RequestAdapter;
import githubtododemo.githubclient.repos.item.item.pulls.PullsRequestBuilder;
import java.util.HashMap;
import java.util.Objects;
/**
 * Builds and executes requests for operations under /repos/{owner}/{repo}
 */
@jakarta.annotation.Generated("com.microsoft.kiota")
public class WithRepoItemRequestBuilder extends BaseRequestBuilder {
    /**
     * The pulls property
     * @return a {@link PullsRequestBuilder}
     */
    @jakarta.annotation.Nonnull
    public PullsRequestBuilder pulls() {
        return new PullsRequestBuilder(pathParameters, requestAdapter);
    }
    /**
     * Instantiates a new {@link WithRepoItemRequestBuilder} and sets the default values.
     * @param pathParameters Path parameters for the request
     * @param requestAdapter The request adapter to use to execute the requests.
     */
    public WithRepoItemRequestBuilder(@jakarta.annotation.Nonnull final HashMap<String, Object> pathParameters, @jakarta.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/repos/{owner}/{repo}", pathParameters);
    }
    /**
     * Instantiates a new {@link WithRepoItemRequestBuilder} and sets the default values.
     * @param rawUrl The raw URL to use for the request builder.
     * @param requestAdapter The request adapter to use to execute the requests.
     */
    public WithRepoItemRequestBuilder(@jakarta.annotation.Nonnull final String rawUrl, @jakarta.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/repos/{owner}/{repo}", rawUrl);
    }
}
