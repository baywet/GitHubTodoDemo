import asyncio
from kiota_http.httpx_request_adapter import HttpxRequestAdapter
from githubauthentication.github_authentication_provider import GitHubAuthenticationProvider
from githubclient.git_hub_service_client import GitHubServiceClient
from constants import githubClientId

async def main():
    # You may need this if your're using asyncio on windows
    # See: https://stackoverflow.com/questions/63860576
    # asyncio.set_event_loop_policy(asyncio.WindowsSelectorEventLoopPolicy())

    github_auth_provider = GitHubAuthenticationProvider(githubClientId, "repo")
    github_request_adapter = HttpxRequestAdapter(github_auth_provider)
    github_client = GitHubServiceClient(github_request_adapter)

    pull_requests = await github_client.repos.by_owner("baywet").by_repo("demo").pulls.get()
    print(f"Retrieved {len(pull_requests)} pull requests.")

# Run main
asyncio.run(main())