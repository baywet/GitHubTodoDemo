from __future__ import annotations
from collections.abc import Callable
from kiota_abstractions.base_request_builder import BaseRequestBuilder
from kiota_abstractions.get_path_parameters import get_path_parameters
from kiota_abstractions.request_adapter import RequestAdapter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .tasks.tasks_request_builder import TasksRequestBuilder


class TodoTaskListItemRequestBuilder(BaseRequestBuilder):
    """
    Builds and executes requests for operations under /me/todo/lists/{todoTaskList-id}
    """

    def __init__(self, request_adapter: RequestAdapter,
                 path_parameters: Union[str, dict[str, Any]]) -> None:
        """
        Instantiates a new TodoTaskListItemRequestBuilder and sets the default values.
        param path_parameters: The raw url or the url-template parameters for the request.
        param request_adapter: The request adapter to use to execute the requests.
        Returns: None
        """
        super().__init__(request_adapter,
                         "{+baseurl}/me/todo/lists/{todoTaskList%2Did}",
                         path_parameters)

    @property
    def tasks(self) -> TasksRequestBuilder:
        """
        Provides operations to manage the tasks property of the microsoft.graph.todoTaskList entity.
        """
        from .tasks.tasks_request_builder import TasksRequestBuilder

        return TasksRequestBuilder(self.request_adapter, self.path_parameters)
