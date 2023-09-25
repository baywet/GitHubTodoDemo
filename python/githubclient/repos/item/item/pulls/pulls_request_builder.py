from __future__ import annotations
from dataclasses import dataclass, field
from kiota_abstractions.base_request_builder import BaseRequestBuilder
from kiota_abstractions.get_path_parameters import get_path_parameters
from kiota_abstractions.method import Method
from kiota_abstractions.request_adapter import RequestAdapter
from kiota_abstractions.request_information import RequestInformation
from kiota_abstractions.request_option import RequestOption
from kiota_abstractions.serialization import Parsable, ParsableFactory
from typing import Any, Callable, Dict, List, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .....models.pull_request_simple import PullRequestSimple
    from .....models.validation_error import ValidationError

class PullsRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /repos/{owner}/{repo}/pulls
    """
    def __init__(self,request_adapter: RequestAdapter, path_parameters: Optional[Union[Dict[str, Any], str]] = None) -> None:
        """
        Instantiates a new PullsRequestBuilder and sets the default values.
        param path_parameters: The raw url or the Url template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/repos/{owner}/{repo}/pulls{?state*,head*,base*,sort*,direction*,per_page*,page*}", path_parameters)
    
    async def get(self,request_configuration: Optional[PullsRequestBuilderGetRequestConfiguration] = None) -> Optional[List[PullRequestSimple]]:
        """
        Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://docs.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: Optional[List[PullRequestSimple]]
        API method documentation: https://docs.github.com/rest/reference/pulls#list-pull-requests
        """
        request_info = self.to_get_request_information(
            request_configuration
        )
        from .....models.validation_error import ValidationError

        error_mapping: Dict[str, ParsableFactory] = {
            "422": ValidationError,
        }
        if not self.request_adapter:
            raise Exception("Http core is null") 
        from .....models.pull_request_simple import PullRequestSimple

        return await self.request_adapter.send_collection_async(request_info, PullRequestSimple, error_mapping)
    
    def to_get_request_information(self,request_configuration: Optional[PullsRequestBuilderGetRequestConfiguration] = None) -> RequestInformation:
        """
        Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://docs.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
        param request_configuration: Configuration for the request such as headers, query parameters, and middleware options.
        Returns: RequestInformation
        """
        request_info = RequestInformation()
        request_info.url_template = self.url_template
        request_info.path_parameters = self.path_parameters
        request_info.http_method = Method.GET
        request_info.headers["Accept"] = ["application/json"]
        if request_configuration:
            request_info.add_request_headers(request_configuration.headers)
            request_info.set_query_string_parameters_from_raw_object(request_configuration.query_parameters)
            request_info.add_request_options(request_configuration.options)
        return request_info
    
    def with_url(self,raw_url: Optional[str] = None) -> PullsRequestBuilder:
        """
        Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
        param raw_url: The raw URL to use for the request builder.
        Returns: PullsRequestBuilder
        """
        if not raw_url:
            raise TypeError("raw_url cannot be null.")
        return PullsRequestBuilder(raw_url, self.request_adapter)
    
    @dataclass
    class PullsRequestBuilderGetQueryParameters():
        """
        Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://docs.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
        """
        # Filter pulls by base branch name. Example: `gh-pages`.
        base: Optional[str] = None

        # The direction of the sort. Default: `desc` when sort is `created` or sort is not specified, otherwise `asc`.
        direction: Optional[str] = None

        # Filter pulls by head user or head organization and branch name in the format of `user:ref-name` or `organization:ref-name`. For example: `github:new-script-format` or `octocat:test-branch`.
        head: Optional[str] = None

        # Page number of the results to fetch.
        page: Optional[int] = None

        # The number of results per page (max 100).
        per_page: Optional[int] = None

        # What to sort results by. `popularity` will sort by the number of comments. `long-running` will sort by date created and will limit the results to pull requests that have been open for more than a month and have had activity within the past month.
        sort: Optional[str] = None

        # Either `open`, `closed`, or `all` to filter by state.
        state: Optional[str] = None

    
    from kiota_abstractions.base_request_configuration import BaseRequestConfiguration

    @dataclass
    class PullsRequestBuilderGetRequestConfiguration(BaseRequestConfiguration):
        from kiota_abstractions.base_request_configuration import BaseRequestConfiguration

        """
        Configuration for the request such as headers, query parameters, and middleware options.
        """
        # Request query parameters
        query_parameters: Optional[PullsRequestBuilder.PullsRequestBuilderGetQueryParameters] = None

    

