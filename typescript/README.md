# GitHub To-Do console app integration demo with Kiota (typescript)

## Pre-reqs

1. Windows terminal `winget install Microsoft.WindowsTerminal`.
1. NodeJS 20+ `winget install CoreyButler.NVMforWindows && nvm install lts && nvm use lts`
1. TypeScript 5+ `npm i -g typescript`
1. Kiota installed `dotnet tool install -g Microsoft.OpenAPI.Kiota --prerelease`.
1. VSCode `winget install Microsoft.VisualStudioCode`.
1. Edit the following configuration file `%USERPROFILE%\.dotnet\tools\.store\microsoft.openapi.kiota\<kiota-version>\microsoft.openapi.kiota\<kiota-version>\tools\net8.0\any\appsettings.json` to contain the following entry under `Generation`.

   ```json
   "DisabledValidationRules": ["all"]
   ```

1. A repository with a couple of pull requests open.
1. A developer tenant for office 365.
1. A [GitHub app](https://github.com/settings/applications/new) (check enable device flow).
1. [This repo](https://github.com/baywet/GitHubTodoDemo) cloned locally.
1. A blank console app.

    ```PowerShell
    npm init -y
    npx tsc --init
    npm i -D typescript ts-node @types/node
    npm i -S @microsoft/kiota-bundle
    new-Item index.ts
    ```

1. Updated configuration

    1. **package.json** > **type** > "module".
    1. **tsconfig.json** > **compilerOptions** > **lib** > ["ES2015", "ES2016", "ES2017", "ES2018", "ES2019", "ES2020", "ES2021", "ES2022"].
    1. **tsconfig.json** > **compilerOptions** > **target** > "ES2020".
    1. **tsconfig.json** > **compilerOptions** > **module** > "NodeNext".
    1. **tsconfig.json** > **compilerOptions** > **moduleResolution** > "NodeNext".
    1. **tsconfig.json** > **compilerOptions** > **sourceMap** > true.
1. Copy the **.vscode** directory to add debug and build configuration.
1. Make sure you install the recommended extensions (type `@recommended` in the extensions search bar, and install all the `Workspace recommendations`).
1. Copy the **gitHubAuthentication** directory to add the authentication provider for GitHub.
1. Add a constants.ts file with.

   ```TypeScript
   export const GraphTenantId = "09988f3c-947e-4986-a87e-37ad49a3b175";
   export const GraphClientId = "f19e2a30-d500-4fa7-8582-bd6099088b37";
   export const GithubClientId = "62e33d5226194c3dfbd4";
   ```

## Getting ready

1. [Todo open](https://to-do.office.com/tasks/inbox)
1. [Device login](https://www.microsoft.com/devicelogin)
1. Code open to the blank console application.
1. A windows terminal open with PowerShell core cd'ed into the dotnet project repository.

   ```PowerShell
   $Env:KIOTA_CONFIG_PREVIEW = $true
   ```

## Demo - Adding the client for GitHub

1. In VS Code hit ctrl + shift + P and search for **search for API description**, search for **GitHub**, select **api.github.com**.
1. In the Kiota API Explorer pane, click on the funnel icon (filter) and type **pull**.
1. Select the **GET** entry under **pull_number** with the + sign. (this is wrong on purpose for the rest of the demo)
1. Outline the documentation icon next to the + sign.
1. Click on the play sign (generate) and enter the following information:

   - Client Name : GitHubClient
   - Namespace Name : GitHubTodoDemo.GitHub
   - Path : gitHub
   - Language : TypeScript

## Demo - Adding the client for Tasks

1. `kiota search todo`
1. `kiota show -k github::microsoftgraph/msgraph-metadata/graph.microsoft.com/v1.0 -i "/me/todo/**/tasks" -i "/me/todo/lists"`
1. `kiota show -k github::microsoftgraph/msgraph-metadata/graph.microsoft.com/v1.0 -i "/me/todo/**/tasks" -i "/me/todo/lists" -e "**/*delta*" -e "**/*count"`
1. `kiota client add -l TypeScript -n "GitHubTodoDemo.MicrosoftGraph" -o $PWD/microsoftGraph --cn MicrosoftGraphClient -d https://raw.githubusercontent.com/microsoftgraph/msgraph-metadata/master/openapi/v1.0/openapi.yaml -i "/me/todo/**/tasks" -i "/me/todo/lists" -e "**/*delta*" -e "**/*count"`

## Demo - Getting pull requests from GitHub

1. In program.cs add the **todo-usings** snippet.
1. In program.cs navigate while dotting through to

   ```TypeScript
   const githubClient = createGitHubClient(null!);
   const pullRequests = await githubClient.repos.byOwner('baywet').byRepo('demo').pulls.
   ```

1. Outline we don't have a GetAsync, this is most likely because we forgot a path in the generation. It's ok let's generate again.
1. In the console `kiota client add -l TypeScript -n "GitHubTodoDemo.GitHub" -o $PWD/gitHub --cn GitHubClient  -d https://raw.githubusercontent.com/github/rest-api-description/main/descriptions/api.github.com/api.github.com.json -i "**/pulls/**" -e "**/comments/**" -e "**/comments" -i "**/pulls"`
1. In program.cs finish the navigation with `.get()`

> NOTE: composed types are not working as expected, in **gitHub/models/index.ts** replace:
>
> - `deserializeIntoValidationError_errors_value` by `return () => { return {}};`.
> - `writer.writeCollectionOfPrimitiveValues<string>(key, validationError_errors_value);` by nothing.

## Demo - Creating tasks on Microsoft Graph

1. In program.cs dot your way through.

   ```TypeScript
   const graphClient = createMicrosoftGraphClient(null!);
   const todoLists = await graphClient.me.todo.lists.get();
   const todoList = todoLists?.value?.[0];
   const addedTask = await graphClient.me.todo.lists.byTodoTaskListId(todoList?.id!).tasks.post({ title: 'Task 1' });
   ```

1. In program.cs replace the Task creation line by the **todo** snippet.

## Demo - Wrapping authentication for Microsoft Graph

1. `npm i -S @microsoft/kiota-authentication-azure @azure/identity`.
1. Add the **todo-graph-auth** snippet in Program.cs and update the null value for the client.

## Demo - Wrapping authentication for GitHub

1. Add the **todo-github-auth** snippet in Program.cs and update the value for the client.

## Answer code

```TypeScript
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
			timeZone: 'UTC',
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
```

## Run the client

1. Show that todo doesn't have any task.
1. Run the client.
1. Show that todo has tasks.


## TODO:

- [ ] dry run