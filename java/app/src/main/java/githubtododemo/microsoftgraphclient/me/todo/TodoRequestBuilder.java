package githubtododemo.microsoftgraphclient.me.todo;

import com.microsoft.kiota.BaseRequestBuilder;
import com.microsoft.kiota.RequestAdapter;
import githubtododemo.microsoftgraphclient.me.todo.lists.ListsRequestBuilder;
import java.util.HashMap;
import java.util.Objects;
/**
 * Builds and executes requests for operations under /me/todo
 */
@jakarta.annotation.Generated("com.microsoft.kiota")
public class TodoRequestBuilder extends BaseRequestBuilder {
    /**
     * Provides operations to manage the lists property of the microsoft.graph.todo entity.
     */
    @jakarta.annotation.Nonnull
    public ListsRequestBuilder lists() {
        return new ListsRequestBuilder(pathParameters, requestAdapter);
    }
    /**
     * Instantiates a new TodoRequestBuilder and sets the default values.
     * @param pathParameters Path parameters for the request
     * @param requestAdapter The request adapter to use to execute the requests.
     */
    public TodoRequestBuilder(@jakarta.annotation.Nonnull final HashMap<String, Object> pathParameters, @jakarta.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/me/todo", pathParameters);
    }
    /**
     * Instantiates a new TodoRequestBuilder and sets the default values.
     * @param rawUrl The raw URL to use for the request builder.
     * @param requestAdapter The request adapter to use to execute the requests.
     */
    public TodoRequestBuilder(@jakarta.annotation.Nonnull final String rawUrl, @jakarta.annotation.Nonnull final RequestAdapter requestAdapter) {
        super(requestAdapter, "{+baseurl}/me/todo", rawUrl);
    }
}
