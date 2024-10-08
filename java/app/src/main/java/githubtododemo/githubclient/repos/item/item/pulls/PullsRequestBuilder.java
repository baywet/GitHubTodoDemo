package githubtododemo.githubclient.repos.item.item.pulls;

import com.microsoft.kiota.BaseRequestBuilder;
import com.microsoft.kiota.BaseRequestConfiguration;
import com.microsoft.kiota.HttpMethod;
import com.microsoft.kiota.QueryParameters;
import com.microsoft.kiota.RequestAdapter;
import com.microsoft.kiota.RequestInformation;
import com.microsoft.kiota.RequestOption;
import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParsableFactory;
import githubtododemo.githubclient.models.PullRequestSimple;
import githubtododemo.githubclient.models.ValidationError;
import java.util.Collection;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
/**
 * Builds and executes requests for operations under /repos/{owner}/{repo}/pulls
 */
@jakarta.annotation.Generated("com.microsoft.kiota")
public class PullsRequestBuilder extends BaseRequestBuilder {
    /**
     * Instantiates a new {@link PullsRequestBuilder} and sets the default values.
     * @param pathParameters Path parameters for the request
     * @param requestAdapter The request adapter to use to execute the requests.
     */
    public PullsRequestBuilder(@jakarta.annotation.Nonnull final HashMap<String, Object> pathParameters, @jakarta.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/repos/{owner}/{repo}/pulls{?base*,direction*,head*,page*,per_page*,sort*,state*}", pathParameters);
    }
    /**
     * Instantiates a new {@link PullsRequestBuilder} and sets the default values.
     * @param rawUrl The raw URL to use for the request builder.
     * @param requestAdapter The request adapter to use to execute the requests.
     */
    public PullsRequestBuilder(@jakarta.annotation.Nonnull final String rawUrl, @jakarta.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/repos/{owner}/{repo}/pulls{?base*,direction*,head*,page*,per_page*,sort*,state*}", rawUrl);
    }
    /**
     * Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://docs.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     * @return a {@link java.util.List<PullRequestSimple>}
     * @throws ValidationError When receiving a 422 status code
     * @see <a href="https://docs.github.com/rest/reference/pulls#list-pull-requests">API method documentation</a>
     */
    @jakarta.annotation.Nullable
    public java.util.List<PullRequestSimple> get() {
        return get(null);
    }
    /**
     * Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://docs.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     * @param requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return a {@link java.util.List<PullRequestSimple>}
     * @throws ValidationError When receiving a 422 status code
     * @see <a href="https://docs.github.com/rest/reference/pulls#list-pull-requests">API method documentation</a>
     */
    @jakarta.annotation.Nullable
    public java.util.List<PullRequestSimple> get(@jakarta.annotation.Nullable final java.util.function.Consumer<GetRequestConfiguration> requestConfiguration) {
        final RequestInformation requestInfo = toGetRequestInformation(requestConfiguration);
        final HashMap<String, ParsableFactory<? extends Parsable>> errorMapping = new HashMap<String, ParsableFactory<? extends Parsable>>();
        errorMapping.put("422", ValidationError::createFromDiscriminatorValue);
        return this.requestAdapter.sendCollection(requestInfo, errorMapping, PullRequestSimple::createFromDiscriminatorValue);
    }
    /**
     * Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://docs.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     * @return a {@link RequestInformation}
     */
    @jakarta.annotation.Nonnull
    public RequestInformation toGetRequestInformation() {
        return toGetRequestInformation(null);
    }
    /**
     * Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://docs.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     * @param requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return a {@link RequestInformation}
     */
    @jakarta.annotation.Nonnull
    public RequestInformation toGetRequestInformation(@jakarta.annotation.Nullable final java.util.function.Consumer<GetRequestConfiguration> requestConfiguration) {
        final RequestInformation requestInfo = new RequestInformation(HttpMethod.GET, urlTemplate, pathParameters);
        requestInfo.configure(requestConfiguration, GetRequestConfiguration::new, x -> x.queryParameters);
        requestInfo.headers.tryAdd("Accept", "application/json");
        return requestInfo;
    }
    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param rawUrl The raw URL to use for the request builder.
     * @return a {@link PullsRequestBuilder}
     */
    @jakarta.annotation.Nonnull
    public PullsRequestBuilder withUrl(@jakarta.annotation.Nonnull final String rawUrl) {
        Objects.requireNonNull(rawUrl);
        return new PullsRequestBuilder(rawUrl, requestAdapter);
    }
    /**
     * Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://docs.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     */
    @jakarta.annotation.Generated("com.microsoft.kiota")
    public class GetQueryParameters implements QueryParameters {
        /**
         * Filter pulls by base branch name. Example: `gh-pages`.
         */
        @jakarta.annotation.Nullable
        public String base;
        /**
         * The direction of the sort. Default: `desc` when sort is `created` or sort is not specified, otherwise `asc`.
         */
        @jakarta.annotation.Nullable
        public GetDirectionQueryParameterType direction;
        /**
         * Filter pulls by head user or head organization and branch name in the format of `user:ref-name` or `organization:ref-name`. For example: `github:new-script-format` or `octocat:test-branch`.
         */
        @jakarta.annotation.Nullable
        public String head;
        /**
         * Page number of the results to fetch.
         */
        @jakarta.annotation.Nullable
        public Integer page;
        /**
         * The number of results per page (max 100).
         */
        @jakarta.annotation.Nullable
        public Integer perPage;
        /**
         * What to sort results by. `popularity` will sort by the number of comments. `long-running` will sort by date created and will limit the results to pull requests that have been open for more than a month and have had activity within the past month.
         */
        @jakarta.annotation.Nullable
        public GetSortQueryParameterType sort;
        /**
         * Either `open`, `closed`, or `all` to filter by state.
         */
        @jakarta.annotation.Nullable
        public GetStateQueryParameterType state;
        /**
         * Extracts the query parameters into a map for the URI template parsing.
         * @return a {@link Map<String, Object>}
         */
        @jakarta.annotation.Nonnull
        public Map<String, Object> toQueryParameters() {
            final Map<String, Object> allQueryParams = new HashMap();
            allQueryParams.put("direction", direction);
            allQueryParams.put("sort", sort);
            allQueryParams.put("state", state);
            allQueryParams.put("base", base);
            allQueryParams.put("head", head);
            allQueryParams.put("page", page);
            allQueryParams.put("per_page", perPage);
            return allQueryParams;
        }
    }
    /**
     * Configuration for the request such as headers, query parameters, and middleware options.
     */
    @jakarta.annotation.Generated("com.microsoft.kiota")
    public class GetRequestConfiguration extends BaseRequestConfiguration {
        /**
         * Request query parameters
         */
        @jakarta.annotation.Nullable
        public GetQueryParameters queryParameters = new GetQueryParameters();
    }
}
