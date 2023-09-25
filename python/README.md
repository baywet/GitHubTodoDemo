# GitHub To-Do console app integration demo with Kiota (python)

## Pre-reqs

1. Windows terminal `winget install Microsoft.WindowsTerminal`.
1. PowerShell core `winget install Microsoft.PowerShell`.
1. Dotnet `winget install Microsoft.DotNet.SDK.7`.
1. Kiota installed `dotnet tool install -g Microsoft.OpenAPI.Kiota --prerelease`.
1. Python `winget install Python.Python.3.11`.
1. Pip

   ```shell
   py -m ensurepip
   ```

1. VSCode `winget install Microsoft.VisualStudioCode`.
1. Edit the following configuration file `%USERPROFILE%\.dotnet\tools\.store\microsoft.openapi.kiota\<kiota-version>\microsoft.openapi.kiota\<kiota-version>\tools\net7.0\any\appsettings.json` to contain the following entry under `Generation`.

   ```json
   "DisabledValidationRules": ["all"]
   ```

1. A repository with a couple of pull requests open.
1. A developer tenant for office 365.
1. A [GitHub app](https://github.com/settings/applications/new) (check enable device flow).
1. [This repo](https://github.com/baywet/GitHubTodoDemo) cloned locally.
1. An empty directory where the project will live.
1. Copy the **.vscode** directory to add debug and build configuration.
1. Make sure you install the recommended extensions (type `@recommended` in the extensions search bar, and install all the `Workspace recommendations`).
1. Copy the **GitHubAuthentication** directory to add the authentication provider for GitHub.
1. Add a Constants.py file with.

   ```Python
   graphTenantId = "09988f3c-947e-4986-a87e-37ad49a3b175"
   graphClientId = "f19e2a30-d500-4fa7-8582-bd6099088b37"
   githubClientId = "62e33d5226194c3dfbd4"
   ```

1. Add an empty main.py file at the root of the project.

## Getting ready

1. [Todo open](https://to-do.office.com/tasks/inbox)
1. [Device login](https://www.microsoft.com/devicelogin)
1. Code open to the blank console application.
1. A windows terminal open with PowerShell core cd'ed into the dotnet project repository.

## Demo - Adding the client for GitHub

1. In VS Code hit ctrl + shift + P and search for **search for API description**, search for **GitHub**, select **api.github.com**.
1. In the Kiota API Explorer pane, click on the funnel icon (filter) and type **pull**.
1. Select the **GET** entry under **pull_number** with the + sign. (this is wrong on purpose for the rest of the demo)
1. Outline the documentation icon next to the + sign.
1. Click on the play sign (generate) and enter the following information:

   - Client Name : GitHubServiceClient
   - Namespace Name : githubtododemo.githubclient
   - Path : githubclient
   - Language : python

## Demo - Adding the client for Tasks

1. `kiota search todo`
1. `kiota show -k github::microsoftgraph/msgraph-metadata/graph.microsoft.com/v1.0 -i "/me/todo/**/tasks" -i "/me/todo/lists"`
1. `kiota show -k github::microsoftgraph/msgraph-metadata/graph.microsoft.com/v1.0 -i "/me/todo/**/tasks" -i "/me/todo/lists" -e "**/*delta*" -e "**/*count"`
1. `kiota generate -l python -n githubtododemo.microsoftgraphclient -o $PWD/microsoftgraphclient -c MicrosoftGraphServiceClient -d https://raw.githubusercontent.com/microsoftgraph/msgraph-metadata/master/openapi/v1.0/openapi.yaml -i "/me/todo/**/tasks" -i "/me/todo/lists" -e "**/*delta*" -e "**/*count"`
1. `kiota info -l python`
1. Run the following commands to install dependencies.

   ```shell
   pip install microsoft-kiota-abstractions
   pip install microsoft-kiota-http
   pip install microsoft-kiota-serialization-json
   pip install microsoft-kiota-serialization-text
   pip install microsoft-kiota-authentication-azure
   pip freeze > requirements.txt
   ```

## Demo - Getting pull requests from GitHub

1. In main.py add the **todo-usings** snippet.
1. In main.py navigate while dotting through to

   ```python
   github_client = GitHubServiceClient(None)
   pull_requests = await github_client.repos.by_owner("baywet").by_repo("demo").pulls
   ```

1. Outline we don't have a Get, this is most likely because we forgot a path in the generation. It's ok let's generate again.
1. In the kiota explorer view, unselect the **GET** operation under **pull_number** and select the one under **pulls** instead. Click generate.
1. In main.py finish the navigation with `.get()`

## Demo - Creating tasks on Microsoft Graph

1. In main.py dot your way through.

   ```python
    graph_client = MicrosoftGraphServiceClient(None)
    todo_lists = await graph_client.me.todo.lists.get()
    task = TodoTask()
    task.title = "test task"
    await graph_client.me.todo.lists.by_todo_task_list_id(todo_list.id).tasks.post(task)
   ```

1. In main.py replace the Task creation line by the **todo** snippet.

## Demo - Wrapping authentication for Microsoft Graph

1. Add the **todo-graph-auth** snippet in main.py and update the null value for the client.

## Demo - Wrapping authentication for GitHub

1. Add the **todo-github-auth** snippet in main.py and update the value for the client.

## Answer code

```python
import asyncio
from datetime import timedelta
from kiota_http.httpx_request_adapter import HttpxRequestAdapter
from githubauthentication.github_authentication_provider import GitHubAuthenticationProvider
from githubclient.git_hub_service_client import GitHubServiceClient
from microsoftgraphclient.microsoft_graph_service_client import MicrosoftGraphServiceClient
from kiota_authentication_azure.azure_identity_authentication_provider import AzureIdentityAuthenticationProvider
from azure.identity import DeviceCodeCredential
from constants import githubClientId, graphClientId, graphTenantId
from microsoftgraphclient.models.date_time_time_zone import DateTimeTimeZone
from microsoftgraphclient.models.importance import Importance
from microsoftgraphclient.models.linked_resource import LinkedResource
from microsoftgraphclient.models.todo_task import TodoTask

async def main():
    github_auth_provider = GitHubAuthenticationProvider(githubClientId, "repo")
    github_request_adapter = HttpxRequestAdapter(github_auth_provider)
    github_client = GitHubServiceClient(github_request_adapter)

    pull_requests = await github_client.repos.by_owner("baywet").by_repo("demo").pulls.get()
    print(f"Retrieved {len(pull_requests)} pull requests.")

    graph_credentials = DeviceCodeCredential(graphClientId, tenant_id = graphTenantId, prompt_callback = lambda uri, code, date: print(f"Please sign in at {uri} with code {code}"))
    graph_auth_provider = AzureIdentityAuthenticationProvider(graph_credentials, scopes=["Tasks.ReadWrite"], allowed_hosts=["graph.microsoft.com"])
    graph_request_adapter = HttpxRequestAdapter(graph_auth_provider)
    graph_client = MicrosoftGraphServiceClient(graph_request_adapter)
    todo_lists = await graph_client.me.todo.lists.get()
    print(f"Retrieved {len(todo_lists.value)} lists.")
    todo_list = todo_lists.value[0]
    
    for pull_request in pull_requests:
        print(f"Pull request #{pull_request.number}: {pull_request.title}")
        task = TodoTask()
        task.title = f"review {pull_request.title}"
        task.due_date_time = DateTimeTimeZone()
        task.due_date_time.time_zone = "UTC"
        task.due_date_time.date_time = (pull_request.created_at + timedelta(days=7)).isoformat()
        task.importance = Importance("high")
        task.linked_resources = [LinkedResource()]
        task.linked_resources[0].web_url = pull_request.html_url
        task.linked_resources[0].application_name = "GitHub"
        await graph_client.me.todo.lists.by_todo_task_list_id(todo_list.id).tasks.post(task)
    
    print("Done!")
        

# Run main
asyncio.run(main())
```

## IMPORTANT DEBUG

In `githubclient\models\nullable_milestone.py` remove `if TYPE_CHECKING:` (line 7 or so)

## Run the client

1. Show that todo doesn't have any task.
1. Show the pull requests.
1. Run the client with `py main.py`.
1. Show that todo now has tasks.
