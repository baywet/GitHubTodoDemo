/* tslint:disable */
/* eslint-disable */
// Generated by Microsoft Kiota
// @ts-ignore
import { type WithRepoItemRequestBuilder, WithRepoItemRequestBuilderNavigationMetadata } from './item/index.js';
// @ts-ignore
import { type BaseRequestBuilder, type KeysToExcludeForNavigationMetadata, type NavigationMetadata } from '@microsoft/kiota-abstractions';

/**
 * Builds and executes requests for operations under /repos/{owner}
 */
export interface WithOwnerItemRequestBuilder extends BaseRequestBuilder<WithOwnerItemRequestBuilder> {
    /**
     * Gets an item from the GitHubTodoDemo.GitHub.repos.item.item collection
     * @param repo The name of the repository. The name is not case sensitive.
     * @returns {WithRepoItemRequestBuilder}
     */
     byRepo(repo: string) : WithRepoItemRequestBuilder;
}
/**
 * Uri template for the request builder.
 */
export const WithOwnerItemRequestBuilderUriTemplate = "{+baseurl}/repos/{owner}";
/**
 * Metadata for all the navigation properties in the request builder.
 */
export const WithOwnerItemRequestBuilderNavigationMetadata: Record<Exclude<keyof WithOwnerItemRequestBuilder, KeysToExcludeForNavigationMetadata>, NavigationMetadata> = {
    byRepo: {
        navigationMetadata: WithRepoItemRequestBuilderNavigationMetadata,
        pathParametersMappings: ["repo"],
    },
};
/* tslint:enable */
/* eslint-enable */