import { DeviceCodeCredential } from '@azure/identity';
import { addSevenDays, GithubClientId, GraphClientId } from './constants.js';
import { createGitHubClient } from './gitHub/gitHubClient.js';
import { createMicrosoftGraphClient } from './microsoftGraph/microsoftGraphClient.js';
import { AzureIdentityAuthenticationProvider } from '@microsoft/kiota-authentication-azure';
import { DefaultRequestAdapter } from '@microsoft/kiota-bundle';
import { GitHubAuthenticationProvider } from './gitHubAuthentication/gitHubAuthenticationProvider.js';
console.log('Hello, world!');

const githubAuthProvider = new GitHubAuthenticationProvider(GithubClientId, 'repo');
const gitHubAdapter = new DefaultRequestAdapter(githubAuthProvider);

const githubClient = createGitHubClient(gitHubAdapter);
const pullRequests = await githubClient.repos.byOwner('baywet').byRepo('demo').pulls.get();

const credential = new DeviceCodeCredential({
  clientId: GraphClientId,
  userPromptCallback: (deviceCodeInfo) => {
    console.log(deviceCodeInfo.message);
  }
});

const graphAuthProvider = new AzureIdentityAuthenticationProvider(credential);
const graphAdapter = new DefaultRequestAdapter(graphAuthProvider);

const graphClient = createMicrosoftGraphClient(graphAdapter);
const todoLists = await graphClient.me.todo.lists.get();
const todoList = todoLists?.value?.[0];

pullRequests!.forEach(async pullRequest => {
	const addedTask = await graphClient.me.todo.lists.byTodoTaskListId(todoList?.id!).tasks.post({ 
		title: pullRequest.title,
		dueDateTime: {
			timeZone: "UTC",
			dateTime: addSevenDays(pullRequest.createdAt!).toISOString(),
		},
		importance: 'high',
		linkedResources: [
			{
				applicationName: 'GitHub',
				displayName: pullRequest.htmlUrl,
			}
		]
	});
	console.log(`Added task ${addedTask?.title} to your todo list`);
});