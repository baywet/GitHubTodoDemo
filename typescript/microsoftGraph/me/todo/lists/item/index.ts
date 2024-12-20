/* tslint:disable */
/* eslint-disable */
// Generated by Microsoft Kiota
// @ts-ignore
import { TasksRequestBuilderRequestsMetadata, type TasksRequestBuilder } from './tasks/index.js';
// @ts-ignore
import { type BaseRequestBuilder, type KeysToExcludeForNavigationMetadata, type NavigationMetadata } from '@microsoft/kiota-abstractions';

/**
 * Builds and executes requests for operations under /me/todo/lists/{todoTaskList-id}
 */
export interface TodoTaskListItemRequestBuilder extends BaseRequestBuilder<TodoTaskListItemRequestBuilder> {
    /**
     * Provides operations to manage the tasks property of the microsoft.graph.todoTaskList entity.
     */
    get tasks(): TasksRequestBuilder;
}
/**
 * Uri template for the request builder.
 */
export const TodoTaskListItemRequestBuilderUriTemplate = "{+baseurl}/me/todo/lists/{todoTaskList%2Did}";
/**
 * Metadata for all the navigation properties in the request builder.
 */
export const TodoTaskListItemRequestBuilderNavigationMetadata: Record<Exclude<keyof TodoTaskListItemRequestBuilder, KeysToExcludeForNavigationMetadata>, NavigationMetadata> = {
    tasks: {
        requestsMetadata: TasksRequestBuilderRequestsMetadata,
    },
};
/* tslint:enable */
/* eslint-enable */
