/* tslint:disable */
/* eslint-disable */
// Generated by Microsoft Kiota
// @ts-ignore
import { createTodoTaskListCollectionResponseFromDiscriminatorValue, createTodoTaskListFromDiscriminatorValue, serializeTodoTaskList, type TodoTaskList, type TodoTaskListCollectionResponse } from '../../../models/index.js';
// @ts-ignore
import { createODataErrorFromDiscriminatorValue, type ODataError } from '../../../models/oDataErrors/index.js';
// @ts-ignore
import { TodoTaskListItemRequestBuilderNavigationMetadata, type TodoTaskListItemRequestBuilder } from './item/index.js';
// @ts-ignore
import { type BaseRequestBuilder, type KeysToExcludeForNavigationMetadata, type NavigationMetadata, type Parsable, type ParsableFactory, type RequestConfiguration, type RequestInformation, type RequestsMetadata } from '@microsoft/kiota-abstractions';

/**
 * Provides operations to manage the lists property of the microsoft.graph.todo entity.
 */
export interface ListsRequestBuilder extends BaseRequestBuilder<ListsRequestBuilder> {
    /**
     * Gets an item from the GitHubTodoDemo.me.todo.lists.item collection
     * @param todoTaskListId The unique identifier of todoTaskList
     * @returns {TodoTaskListItemRequestBuilder}
     */
     byTodoTaskListId(todoTaskListId: string) : TodoTaskListItemRequestBuilder;
    /**
     * Get a list of the todoTaskList objects and their properties.
     * @param requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @returns {Promise<TodoTaskListCollectionResponse>}
     * @throws {ODataError} error when the service returns a 4XX or 5XX status code
     * @see {@link https://learn.microsoft.com/graph/api/todo-list-lists?view=graph-rest-1.0|Find more info here}
     */
     get(requestConfiguration?: RequestConfiguration<ListsRequestBuilderGetQueryParameters> | undefined) : Promise<TodoTaskListCollectionResponse | undefined>;
    /**
     * Create a new lists object.
     * @param body The request body
     * @param requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @returns {Promise<TodoTaskList>}
     * @throws {ODataError} error when the service returns a 4XX or 5XX status code
     * @see {@link https://learn.microsoft.com/graph/api/todo-post-lists?view=graph-rest-1.0|Find more info here}
     */
     post(body: TodoTaskList, requestConfiguration?: RequestConfiguration<object> | undefined) : Promise<TodoTaskList | undefined>;
    /**
     * Get a list of the todoTaskList objects and their properties.
     * @param requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @returns {RequestInformation}
     */
     toGetRequestInformation(requestConfiguration?: RequestConfiguration<ListsRequestBuilderGetQueryParameters> | undefined) : RequestInformation;
    /**
     * Create a new lists object.
     * @param body The request body
     * @param requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @returns {RequestInformation}
     */
     toPostRequestInformation(body: TodoTaskList, requestConfiguration?: RequestConfiguration<object> | undefined) : RequestInformation;
}
/**
 * Get a list of the todoTaskList objects and their properties.
 */
export interface ListsRequestBuilderGetQueryParameters {
    /**
     * Include count of items
     */
    count?: boolean;
    /**
     * Expand related entities
     */
    expand?: string[];
    /**
     * Filter items by property values
     */
    filter?: string;
    /**
     * Order items by property values
     */
    orderby?: string[];
    /**
     * Search items by search phrases
     */
    search?: string;
    /**
     * Select properties to be returned
     */
    select?: string[];
    /**
     * Skip the first n items
     */
    skip?: number;
    /**
     * Show only the first n items
     */
    top?: number;
}
/**
 * Uri template for the request builder.
 */
export const ListsRequestBuilderUriTemplate = "{+baseurl}/me/todo/lists{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}";
/**
 * Mapper for query parameters from symbol name to serialization name represented as a constant.
 */
const ListsRequestBuilderGetQueryParametersMapper: Record<string, string> = {
    "count": "%24count",
    "expand": "%24expand",
    "filter": "%24filter",
    "orderby": "%24orderby",
    "search": "%24search",
    "select": "%24select",
    "skip": "%24skip",
    "top": "%24top",
};
/**
 * Metadata for all the navigation properties in the request builder.
 */
export const ListsRequestBuilderNavigationMetadata: Record<Exclude<keyof ListsRequestBuilder, KeysToExcludeForNavigationMetadata>, NavigationMetadata> = {
    byTodoTaskListId: {
        navigationMetadata: TodoTaskListItemRequestBuilderNavigationMetadata,
        pathParametersMappings: ["todoTaskList%2Did"],
    },
};
/**
 * Metadata for all the requests in the request builder.
 */
export const ListsRequestBuilderRequestsMetadata: RequestsMetadata = {
    get: {
        uriTemplate: ListsRequestBuilderUriTemplate,
        responseBodyContentType: "application/json",
        errorMappings: {
            XXX: createODataErrorFromDiscriminatorValue as ParsableFactory<Parsable>,
        },
        adapterMethodName: "send",
        responseBodyFactory:  createTodoTaskListCollectionResponseFromDiscriminatorValue,
        queryParametersMapper: ListsRequestBuilderGetQueryParametersMapper,
    },
    post: {
        uriTemplate: ListsRequestBuilderUriTemplate,
        responseBodyContentType: "application/json",
        errorMappings: {
            XXX: createODataErrorFromDiscriminatorValue as ParsableFactory<Parsable>,
        },
        adapterMethodName: "send",
        responseBodyFactory:  createTodoTaskListFromDiscriminatorValue,
        requestBodyContentType: "application/json",
        requestBodySerializer: serializeTodoTaskList,
        requestInformationContentSetMethod: "setContentFromParsable",
    },
};
/* tslint:enable */
/* eslint-enable */