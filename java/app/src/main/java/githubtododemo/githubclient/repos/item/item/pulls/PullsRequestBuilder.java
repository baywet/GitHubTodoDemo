package githubtododemo.githubclient.repos.item.item.pulls;

import com.microsoft.kiota.BaseRequestBuilder;
import com.microsoft.kiota.BaseRequestConfiguration;
import com.microsoft.kiota.HttpMethod;
import com.microsoft.kiota.RequestAdapter;
import com.microsoft.kiota.RequestInformation;
import com.microsoft.kiota.RequestOption;
import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParsableFactory;
import githubtododemo.githubclient.models.PullRequestSimple;
import githubtododemo.githubclient.models.ValidationError;
import java.net.URISyntaxException;
import java.util.Collection;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
/**
 * Builds and executes requests for operations under /repos/{owner}/{repo}/pulls
 */
public class PullsRequestBuilder extends BaseRequestBuilder {
    /**
     * Instantiates a new PullsRequestBuilder and sets the default values.
     * @param pathParameters Path parameters for the request
     * @param requestAdapter The request adapter to use to execute the requests.
     * @return a void
     */
    @javax.annotation.Nullable
    public PullsRequestBuilder(@javax.annotation.Nonnull final HashMap<String, Object> pathParameters, @javax.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/repos/{owner}/{repo}/pulls{?state*,head*,base*,sort*,direction*,per_page*,page*}", pathParameters);
    }
    /**
     * Instantiates a new PullsRequestBuilder and sets the default values.
     * @param rawUrl The raw URL to use for the request builder.
     * @param requestAdapter The request adapter to use to execute the requests.
     * @return a void
     */
    @javax.annotation.Nullable
    public PullsRequestBuilder(@javax.annotation.Nonnull final String rawUrl, @javax.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/repos/{owner}/{repo}/pulls{?state*,head*,base*,sort*,direction*,per_page*,page*}", rawUrl);
    }
    /**
     * Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://docs.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     * @return a CompletableFuture of PullRequestSimple
     * @see <a href="https://docs.github.com/rest/reference/pulls#list-pull-requests">API method documentation</a>
     */
    @javax.annotation.Nonnull
    public java.util.concurrent.CompletableFuture<java.util.List<PullRequestSimple>> get() {
        try {
            final RequestInformation requestInfo = toGetRequestInformation(null);
            final HashMap<String, ParsableFactory<? extends Parsable>> errorMapping = new HashMap<String, ParsableFactory<? extends Parsable>>();
            errorMapping.put("422", ValidationError::createFromDiscriminatorValue);
            return this.requestAdapter.sendCollectionAsync(requestInfo, PullRequestSimple::createFromDiscriminatorValue, errorMapping);
        } catch (URISyntaxException ex) {
            final java.util.concurrent.CompletableFuture<java.util.List<PullRequestSimple>> executionException = new java.util.concurrent.CompletableFuture<java.util.List<PullRequestSimple>>();
            executionException.completeExceptionally(ex);
            return executionException;
        }
    }
    /**
     * Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://docs.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     * @param requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return a CompletableFuture of PullRequestSimple
     * @see <a href="https://docs.github.com/rest/reference/pulls#list-pull-requests">API method documentation</a>
     */
    @javax.annotation.Nonnull
    public java.util.concurrent.CompletableFuture<java.util.List<PullRequestSimple>> get(@javax.annotation.Nullable final java.util.function.Consumer<GetRequestConfiguration> requestConfiguration) {
        try {
            final RequestInformation requestInfo = toGetRequestInformation(requestConfiguration);
            final HashMap<String, ParsableFactory<? extends Parsable>> errorMapping = new HashMap<String, ParsableFactory<? extends Parsable>>();
            errorMapping.put("422", ValidationError::createFromDiscriminatorValue);
            return this.requestAdapter.sendCollectionAsync(requestInfo, PullRequestSimple::createFromDiscriminatorValue, errorMapping);
        } catch (URISyntaxException ex) {
            final java.util.concurrent.CompletableFuture<java.util.List<PullRequestSimple>> executionException = new java.util.concurrent.CompletableFuture<java.util.List<PullRequestSimple>>();
            executionException.completeExceptionally(ex);
            return executionException;
        }
    }
    /**
     * Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://docs.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     * @return a RequestInformation
     */
    @javax.annotation.Nonnull
    public RequestInformation toGetRequestInformation() throws URISyntaxException {
        return toGetRequestInformation(null);
    }
    /**
     * Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://docs.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     * @param requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return a RequestInformation
     */
    @javax.annotation.Nonnull
    public RequestInformation toGetRequestInformation(@javax.annotation.Nullable final java.util.function.Consumer<GetRequestConfiguration> requestConfiguration) throws URISyntaxException {
        final RequestInformation requestInfo = new RequestInformation();
        requestInfo.httpMethod = HttpMethod.GET;
        requestInfo.urlTemplate = urlTemplate;
        requestInfo.pathParameters = pathParameters;
        requestInfo.headers.add("Accept", "application/json");
        if (requestConfiguration != null) {
            final GetRequestConfiguration requestConfig = new GetRequestConfiguration();
            requestConfiguration.accept(requestConfig);
            requestInfo.addQueryParameters(requestConfig.queryParameters);
            requestInfo.headers.putAll(requestConfig.headers);
            requestInfo.addRequestOptions(requestConfig.options);
        }
        return requestInfo;
    }
    /**
     * Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://docs.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     */
    public class GetQueryParameters {
        /** Filter pulls by base branch name. Example: `gh-pages`. */
        @javax.annotation.Nullable
        public String base;
        /** The direction of the sort. Default: `desc` when sort is `created` or sort is not specified, otherwise `asc`. */
        @javax.annotation.Nullable
        public String direction;
        /** Filter pulls by head user or head organization and branch name in the format of `user:ref-name` or `organization:ref-name`. For example: `github:new-script-format` or `octocat:test-branch`. */
        @javax.annotation.Nullable
        public String head;
        /** Page number of the results to fetch. */
        @javax.annotation.Nullable
        public Integer page;
        /** The number of results per page (max 100). */
        @javax.annotation.Nullable
        public Integer per_page;
        /** What to sort results by. `popularity` will sort by the number of comments. `long-running` will sort by date created and will limit the results to pull requests that have been open for more than a month and have had activity within the past month. */
        @javax.annotation.Nullable
        public String sort;
        /** Either `open`, `closed`, or `all` to filter by state. */
        @javax.annotation.Nullable
        public String state;
    }
    /**
     * Configuration for the request such as headers, query parameters, and middleware options.
     */
    public class GetRequestConfiguration extends BaseRequestConfiguration {
        /** Request query parameters */
        @javax.annotation.Nullable
        public GetQueryParameters queryParameters = new GetQueryParameters();
    }
}
