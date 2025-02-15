from __future__ import annotations
from collections.abc import Callable
from kiota_abstractions.base_request_builder import BaseRequestBuilder
from kiota_abstractions.get_path_parameters import get_path_parameters
from kiota_abstractions.request_adapter import RequestAdapter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .item.with_repo_item_request_builder import WithRepoItemRequestBuilder


class WithOwnerItemRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /repos/{owner}
    """

    def __init__(self, request_adapter: RequestAdapter,
                 path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new WithOwnerItemRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter, "{+baseurl}/repos/{owner}",
                         path_parameters)

    def by_repo(self, repo: str) -> WithRepoItemRequestBuilder:
        """
        Gets an item from the githubtododemo.githubclient.repos.item.item collection
        param repo: The name of the repository. The name is not case sensitive.
        Returns: WithRepoItemRequestBuilder
        """
        if repo is None:
            raise TypeError("repo cannot be null.")
        from .item.with_repo_item_request_builder import WithRepoItemRequestBuilder

        url_tpl_params = get_path_parameters(self.path_parameters)
        url_tpl_params["repo"] = repo
        return WithRepoItemRequestBuilder(self.request_adapter, url_tpl_params)
