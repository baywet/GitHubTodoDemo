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

    pull_requests = await github_client.repos.by_owner("baywet").by_repo(
        "demo").pulls.get()
    print(f"Retrieved {len(pull_requests)} pull requests.")

    graph_credentials = DeviceCodeCredential(
        graphClientId,
        tenant_id=graphTenantId,
        prompt_callback=lambda uri, code, date: print(
            f"Please sign in at {uri} with code {code}"))
    graph_auth_provider = AzureIdentityAuthenticationProvider(
        graph_credentials,
        scopes=["Tasks.ReadWrite"],
        allowed_hosts=["graph.microsoft.com"])
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
        task.due_date_time.date_time = (pull_request.created_at +
                                        timedelta(days=7)).isoformat()
        task.importance = Importance("high")
        task.linked_resources = [LinkedResource()]
        task.linked_resources[0].web_url = pull_request.html_url
        task.linked_resources[0].application_name = "GitHub"
        await graph_client.me.todo.lists.by_todo_task_list_id(
            todo_list.id).tasks.post(task)

    print("Done!")


# Run main
asyncio.run(main())
