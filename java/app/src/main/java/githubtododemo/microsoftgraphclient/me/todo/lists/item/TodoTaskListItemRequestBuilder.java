package githubtododemo.microsoftgraphclient.me.todo.lists.item;

import com.microsoft.kiota.BaseRequestBuilder;
import com.microsoft.kiota.RequestAdapter;
import githubtododemo.microsoftgraphclient.me.todo.lists.item.tasks.TasksRequestBuilder;
import java.util.HashMap;
import java.util.Objects;
/**
 * Builds and executes requests for operations under /me/todo/lists/{todoTaskList-id}
 */
public class TodoTaskListItemRequestBuilder extends BaseRequestBuilder {
    /** Provides operations to manage the tasks property of the microsoft.graph.todoTaskList entity. */
    @javax.annotation.Nonnull
    public TasksRequestBuilder tasks() {
        return new TasksRequestBuilder(pathParameters, requestAdapter);
    }
    /**
     * Instantiates a new TodoTaskListItemRequestBuilder and sets the default values.
     * @param pathParameters Path parameters for the request
     * @param requestAdapter The request adapter to use to execute the requests.
     * @return a void
     */
    @javax.annotation.Nullable
    public TodoTaskListItemRequestBuilder(@javax.annotation.Nonnull final HashMap<String, Object> pathParameters, @javax.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/me/todo/lists/{todoTaskList%2Did}", pathParameters);
    }
    /**
     * Instantiates a new TodoTaskListItemRequestBuilder and sets the default values.
     * @param rawUrl The raw URL to use for the request builder.
     * @param requestAdapter The request adapter to use to execute the requests.
     * @return a void
     */
    @javax.annotation.Nullable
    public TodoTaskListItemRequestBuilder(@javax.annotation.Nonnull final String rawUrl, @javax.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/me/todo/lists/{todoTaskList%2Did}", rawUrl);
    }
}
