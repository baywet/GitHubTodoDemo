# GitHub To-Do console app integration demo with Kiota (dotnet)

## Pre-reqs

1. Windows terminal `winget install Microsoft.WindowsTerminal`.
1. PowerShell core `winget install Microsoft.PowerShell`.
1. Dotnet `winget install Microsoft.DotNet.SDK.8`.
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
1. A blank console application. /!\ No space, underscore, dashes in last directory name. /!\

   ```shell
   dotnet new console
   dotnet new gitignore
   ```

1. Add the following to the CSproj in a property group tag

   ```xml
   <NoWarn>0114</NoWarn>
   <RootNamespace>GitHubTodoDemo</RootNamespace>
   ```

1. Add a Constants.cs file with.

   ```CSharp
   public static class Constants {
      public const string GraphTenantId = "09988f3c-947e-4986-a87e-37ad49a3b175";
      public const string GraphClientId = "f19e2a30-d500-4fa7-8582-bd6099088b37";
      public const string GithubClientId = "62e33d5226194c3dfbd4";
   }
   ```

1. Copy the **.vscode** directory to add debug and build configuration.
1. Make sure you install the recommended extensions (type `@recommended` in the extensions search bar, and install all the `Workspace recommendations`).
1. Copy the **GitHubAuthentication** directory to add the authentication provider for GitHub.

## Getting ready

1. [Todo open](https://to-do.office.com/tasks/inbox)
1. [Device login](https://www.microsoft.com/devicelogin)
1. Code open to the blank console application.
1. A windows terminal open with PowerShell core cd'ed into the dotnet project repository.

   ```PowerShell
   $projectName = "GitHubTodoDemo" #update this with your namespace name
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
   - Path : GitHub
   - Language : CSharp

## Demo - Adding the client for Tasks

1. `kiota search todo`
1. `kiota show -k github::microsoftgraph/msgraph-metadata/graph.microsoft.com/v1.0 -i "/me/todo/**/tasks" -i "/me/todo/lists"`
1. `kiota show -k github::microsoftgraph/msgraph-metadata/graph.microsoft.com/v1.0 -i "/me/todo/**/tasks" -i "/me/todo/lists" -e "**/*delta*" -e "**/*count"`
1. `kiota client add -l CSharp -n "$projectName.MicrosoftGraph" -o $PWD/MicrosoftGraph --cn MicrosoftGraphClient -d https://raw.githubusercontent.com/microsoftgraph/msgraph-metadata/master/openapi/v1.0/openapi.yaml -i "/me/todo/**/tasks" -i "/me/todo/lists" -e "**/*delta*" -e "**/*count"`

## Demo - Getting pull requests from GitHub

1. In program.cs add the **todo-usings** snippet.
1. In program.cs navigate while dotting through to

   ```CSharp
   var gitHubClient = new GitHubClient(null);
   var pullRequests = await gitHubClient.Repos["baywet"]["demo"].Pulls.
   ```

1. Outline we don't have a GetAsync, this is most likely because we forgot a path in the generation. It's ok let's generate again.
1. In the console `kiota client add -l CSharp -n "$projectName.GitHub" -o $PWD/GitHub --cn GitHubClient  -d https://raw.githubusercontent.com/github/rest-api-description/main/descriptions/api.github.com/api.github.com.json -i "**/pulls/**" -e "**/comments/**" -e "**/comments" -i "**/pulls"`
1. In program.cs finish the navigation with `.GetAsync()`

## Demo - Creating tasks on Microsoft Graph

1. In program.cs dot your way through.

   ```CSharp
   var graphClient = new MicrosoftGraphClient(null);
   var todoLists = await graphClient.Me.Todo.Lists.GetAsync();
   var todoList = todoLists?.Value?.FirstOrDefault();
   var addedTask = await graphClient.Me.Todo.Lists[todoList.Id].Tasks.PostAsync(new TodoTask() { Title = "Test task" });
   ```

1. In program.cs replace the Task creation line by the **todo** snippet.

## Demo - Wrapping authentication for Microsoft Graph

1. `dotnet add package Azure.Identity`.
1. Add the **todo-graph-auth** snippet in Program.cs and update the null value for the client.

## Demo - Wrapping authentication for GitHub

1. Add the **todo-github-auth** snippet in Program.cs and update the value for the client.

## Answer code

```CSharp
var githubAuthenticationProvider = new GitHubAuthenticationProvider(Constants.GithubClientId, "repo", new[] { "api.github.com" });
var githubRequestAdapter = new DefaultRequestAdapter(githubAuthenticationProvider);

var gitHubClient = new GitHubClient(githubRequestAdapter);
var pullRequests = await gitHubClient.Repos["baywet"]["demo"].Pulls.GetAsync();

var tokenCredential = new DeviceCodeCredential(
    clientId: Constants.GraphClientId,
    tenantId: Constants.GraphTenantId,
    deviceCodeCallback: (deviceCodeInfo, _) =>
    {
        Console.WriteLine(deviceCodeInfo.Message);
        return Task.FromResult(0);
});
var graphAuthenticationProvider = new AzureIdentityAuthenticationProvider(tokenCredential, new string[] {"graph.microsoft.com"}, scopes: new string[] { "Tasks.ReadWrite"});
var graphRequestAdapter = new DefaultRequestAdapter(graphAuthenticationProvider);

var graphClient = new MicrosoftGraphClient(graphRequestAdapter);
var todoLists = await graphClient.Me.Todo.Lists.GetAsync();
var todoList = todoLists?.Value?.FirstOrDefault();

if(todoList == null || string.IsNullOrEmpty(todoList.Id)) {
 await Console.Error.WriteLineAsync("No todo list found. Exiting.");
 return;
}
if (pullRequests == null) {
 await Console.Error.WriteLineAsync("No pull requests found. Exiting.");
 return;
}

foreach(var pullRequest in pullRequests) {
 var addedTask = await graphClient.Me.Todo.Lists[todoList.Id].Tasks.PostAsync(
  new TodoTask() {
   OdataType = null,
   Title = pullRequest.Title,
   DueDateTime = new DateTimeTimeZone {
    OdataType = null,
    DateTime = pullRequest.Created_at?.Add(TimeSpan.FromDays(7)).ToString("o"),
    TimeZone = "UTC"
   },
   Importance = Importance.High,
   LinkedResources = new List<LinkedResource> {
    new LinkedResource {
     OdataType = null,
     WebUrl = pullRequest.Html_url,
     ApplicationName = "GitHub",
    }
   }
 });
 Console.WriteLine($"Added task {addedTask?.Title} to your todo list");
}
```

## Run the client

1. Show that todo doesn't have any task.
1. Run the client.
1. Show that todo has tasks.
