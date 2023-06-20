using GitHubTodoDemo.GitHub.Repos.Item.Item.Commits.Item.Pulls;
using Microsoft.Kiota.Abstractions;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Threading.Tasks;
using System;
namespace GitHubTodoDemo.GitHub.Repos.Item.Item.Commits.Item {
    /// <summary>
    /// Builds and executes requests for operations under \repos\{owner}\{repo}\commits\{commit_sha}
    /// </summary>
    public class WithCommit_shaItemRequestBuilder : BaseRequestBuilder {
        /// <summary>The pulls property</summary>
        public PullsRequestBuilder Pulls { get =>
            new PullsRequestBuilder(PathParameters, RequestAdapter);
        }
        /// <summary>
        /// Instantiates a new WithCommit_shaItemRequestBuilder and sets the default values.
        /// </summary>
        /// <param name="pathParameters">Path parameters for the request</param>
        /// <param name="requestAdapter">The request adapter to use to execute the requests.</param>
        public WithCommit_shaItemRequestBuilder(Dictionary<string, object> pathParameters, IRequestAdapter requestAdapter) : base(requestAdapter, "{+baseurl}/repos/{owner}/{repo}/commits/{commit_sha}", pathParameters) {
        }
        /// <summary>
        /// Instantiates a new WithCommit_shaItemRequestBuilder and sets the default values.
        /// </summary>
        /// <param name="rawUrl">The raw URL to use for the request builder.</param>
        /// <param name="requestAdapter">The request adapter to use to execute the requests.</param>
        public WithCommit_shaItemRequestBuilder(string rawUrl, IRequestAdapter requestAdapter) : base(requestAdapter, "{+baseurl}/repos/{owner}/{repo}/commits/{commit_sha}", rawUrl) {
        }
    }
}
