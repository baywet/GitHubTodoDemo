// See https://aka.ms/new-console-template for more information
using Azure.Identity;
using GitHubTodoDemo.GitHub;
using GitHubTodoDemo.GitHubAuthentication;
using GitHubTodoDemo.MicrosoftGraph;
using GitHubTodoDemo.MicrosoftGraph.Models;
using Microsoft.Kiota.Authentication.Azure;
using Microsoft.Kiota.Http.HttpClientLibrary;

Console.WriteLine("Hello, World!");

var githubAuthenticationProvider = new GitHubAuthenticationProvider(Constants.GithubClientId, "repo", new[] { "api.github.com" });
var githubRequestAdapter = new HttpClientRequestAdapter(githubAuthenticationProvider);

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
var graphRequestAdapter = new HttpClientRequestAdapter(graphAuthenticationProvider);

var graphClient = new MicrosoftGraphClient(graphRequestAdapter);
var todoLists = await graphClient.Me.Todo.Lists.GetAsync();
var todoList = todoLists.Value.First();

foreach(var pullRequest in pullRequests) {
	var addedTask = await graphClient.Me.Todo.Lists[todoList.Id].Tasks.PostAsync(
		new TodoTask() {
			OdataType = null,
			Title = pullRequest.Title,
			DueDateTime = new DateTimeTimeZone {
				OdataType = null,
				DateTime = pullRequest.Created_at.Value.Add(TimeSpan.FromDays(7)).ToString("o"),
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
	Console.WriteLine($"Added task {addedTask.Title} to your todo list");
}