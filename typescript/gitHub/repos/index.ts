/* tslint:disable */
/* eslint-disable */
// Generated by Microsoft Kiota
// @ts-ignore
import { type WithOwnerItemRequestBuilder, WithOwnerItemRequestBuilderNavigationMetadata } from './item/index.js';
// @ts-ignore
import { type BaseRequestBuilder, type KeysToExcludeForNavigationMetadata, type NavigationMetadata } from '@microsoft/kiota-abstractions';

/**
 * Builds and executes requests for operations under /repos
 */
export interface ReposRequestBuilder extends BaseRequestBuilder<ReposRequestBuilder> {
    /**
     * Gets an item from the GitHubTodoDemo.GitHub.repos.item collection
     * @param owner The account owner of the repository. The name is not case sensitive.
     * @returns {WithOwnerItemRequestBuilder}
     */
     byOwner(owner: string) : WithOwnerItemRequestBuilder;
}
/**
 * Uri template for the request builder.
 */
export const ReposRequestBuilderUriTemplate = "{+baseurl}/repos";
/**
 * Metadata for all the navigation properties in the request builder.
 */
export const ReposRequestBuilderNavigationMetadata: Record<Exclude<keyof ReposRequestBuilder, KeysToExcludeForNavigationMetadata>, NavigationMetadata> = {
    byOwner: {
        navigationMetadata: WithOwnerItemRequestBuilderNavigationMetadata,
        pathParametersMappings: ["owner"],
    },
};
/* tslint:enable */
/* eslint-enable */