# GitHub To-Do console app integration demo with Kiota (java)

## Pre-reqs

1. Windows terminal `winget install Microsoft.WindowsTerminal`.
1. PowerShell core `winget install Microsoft.PowerShell`.
1. Dotnet `winget install Microsoft.DotNet.SDK.8`.
1. Kiota installed `dotnet tool install -g Microsoft.OpenAPI.Kiota --prerelease`.
1. Java `winget install EclipseAdoptium.Temurin.18.JDK`.
1. VSCode `winget install Microsoft.VisualStudioCode`.
1. Gradle `choco install gradle`.
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
   gradle init
   # application, java, no subprojects, groovy, junit jupiter, GitHubTodoDemo, githubtododemo, 18, no
   ```

1. Copy the **.vscode** directory to add debug and build configuration.
1. Make sure you install the recommended extensions (type `@recommended` in the extensions search bar, and install all the `Workspace recommendations`).
1. Copy the **GitHubAuthentication** directory to add the authentication provider for GitHub.
1. Add a Constants.java file with.

   ```Java
   package githubtododemo;

   public class Constants {
           public static String graphTenantId = "09988f3c-947e-4986-a87e-37ad49a3b175";
           public static String graphClientId = "f19e2a30-d500-4fa7-8582-bd6099088b37";
           public static String githubClientId = "62e33d5226194c3dfbd4";
   }
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

   - Client Name : GitHubServiceClient
   - Namespace Name : githubtododemo.githubclient
   - Path : app/src/main/java/githubtododemo/githubclient
   - Language : Java

## Demo - Adding the client for Tasks

1. `kiota search todo`
1. `kiota show -k github::microsoftgraph/msgraph-metadata/graph.microsoft.com/v1.0 -i "/me/todo/**/tasks" -i "/me/todo/lists"`
1. `kiota show -k github::microsoftgraph/msgraph-metadata/graph.microsoft.com/v1.0 -i "/me/todo/**/tasks" -i "/me/todo/lists" -e "**/*delta*" -e "**/*count"`
1. `kiota client add -l Java -n githubtododemo.microsoftgraphclient -o $PWD/app/src/main/java/githubtododemo/microsoftgraphclient --cn MicrosoftGraphServiceClient -d https://raw.githubusercontent.com/microsoftgraph/msgraph-metadata/master/openapi/v1.0/openapi.yaml -i "/me/todo/**/tasks" -i "/me/todo/lists" -e "**/*delta*" -e "**/*count"`
1. `kiota info -l java`
1. Edit `app/build.gradle` and in the **dependencies** section add the following.

   ```groovy
   implementation 'com.microsoft.kiota:microsoft-kiota-http-okHttp:1.4.0'
   implementation 'com.microsoft.kiota:microsoft-kiota-authentication-azure:1.4.0'
   implementation 'jakarta.annotation:jakarta.annotation-api:2.1.1'
   implementation 'com.azure:azure-identity:1.10.1'
   implementation 'com.squareup.okhttp3:okhttp:4.11.0'
   implementation 'com.google.code.gson:gson:2.10.1'
   ```

## Demo - Getting pull requests from GitHub

1. In App.java add the **todo-usings** snippet.
1. In App.java navigate while dotting through to

   ```Java
   final var gitHubClient = new GitHubServiceClient(null);
   final var pullRequests = gitHubClient.repos().byOwner("baywet").byRepo("demo").pulls()
   ```

1. Outline we don't have a Get, this is most likely because we forgot a path in the generation. It's ok let's generate again.
1. In the kiota explorer view, unselect the **GET** operation under **pull_number** and select the one under **pulls** instead. Click generate.
1. In App.java finish the navigation with `.get().get()`

## Demo - Creating tasks on Microsoft Graph

1. In App.java dot your way through.

   ```Java
   final var graphClient = new MicrosoftGraphServiceClient(null);
   final var todoLists = graphClient.me().todo().lists().get().get();
   final var todoList = todoLists.getValue().get(0);
   final var todoTasks = graphClient.me().todo().lists().byTodoTaskListId(todoList.getId()).tasks().post(new TodoTask() {{
      setTitle("test Task");
   }}).get();
   ```

1. In App.java replace the Task creation line by the **todo** snippet.

## Demo - Wrapping authentication for Microsoft Graph

1. Add the **todo-graph-auth** snippet in App.java and update the null value for the client.

## Demo - Wrapping authentication for GitHub

1. Add the **todo-github-auth** snippet in App.java and update the value for the client.

## Answer code

```Java
public class App {
    public String getGreeting() {
        return "Hello World!";
    }

    public static void main(String[] args) throws Exception {
        final var gitHubAuthenticationProvider = new GitHubAuthenticationProvider(Constants.githubClientId, "repo");
        final var gitHubRequestAdapter = new DefaultRequestAdapter(gitHubAuthenticationProvider);
        final var gitHubClient = new GitHubServiceClient(gitHubRequestAdapter);
        final var pullRequests = gitHubClient.repos().byOwner("baywet").byRepo("demo").pulls().get().get();

        final var microsoftGraphTokenCredentials = new DeviceCodeCredentialBuilder()
            .clientId(Constants.graphClientId)
            .tenantId(Constants.graphTenantId)
            .challengeConsumer(challenge -> {
                // lets user know of the challenge
                System.out.println(challenge.getMessage());
            }).build();
        final var microsoftGraphAuthenticationProvider = new AzureIdentityAuthenticationProvider(microsoftGraphTokenCredentials, new String[] {"graph.microsoft.com"}, "Tasks.ReadWrite");
        final var microsoftGraphRequestAdapter = new DefaultRequestAdapter(microsoftGraphAuthenticationProvider);
        final var graphClient = new MicrosoftGraphServiceClient(microsoftGraphRequestAdapter);
        final var todoLists = graphClient.me().todo().lists().get().get();
        final var todoList = todoLists.getValue().get(0);
        for (final var pullRequest : pullRequests) {
            final var todoTask = graphClient.me().todo().lists().byTodoTaskListId(todoList.getId()).tasks().post(new TodoTask() {{
                setTitle("review" + pullRequest.getTitle());
                setDueDateTime(new DateTimeTimeZone() {{
                    setDateTime(pullRequest.getCreatedAt().plusDays(7).format(DateTimeFormatter.ISO_DATE_TIME));
                    setTimeZone("UTC");
                }});
                setImportance(Importance.High);
                setLinkedResources(new ArrayList<>() {{
                    add(new LinkedResource() {{
                        setWebUrl(pullRequest.getHtmlUrl());
                        setApplicationName("GitHub");
                    }});
                }});
            }}).get();
            System.out.println("Added task " + todoTask.getTitle() + " to your todo list");
        }
        
        System.out.println(new App().getGreeting());
    }
}
```

## Run the client

1. Show that todo doesn't have any task.
1. Show the pull requests.
1. Run the client with `gradle run`.
1. Show that todo now has tasks.
