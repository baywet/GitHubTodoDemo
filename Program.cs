// See https://aka.ms/new-console-template for more information
using Azure.Identity;
using GithubTodoDemo.GitHub;
using GithubTodoDemo.MicrosoftGraph;
using GithubTodoDemo.MicrosoftGraph.Models;
using Microsoft.Kiota.Authentication.Azure;
using Microsoft.Kiota.Http.HttpClientLibrary;

Console.WriteLine("Hello, World!");

var gitHubClient = new GitHubClient(null);
var pullRequests = await gitHubClient.Repos["baywet"]["demo"].Pulls.GetAsync();

var tokenCredential = new DeviceCodeCredential(
    clientId: "f19e2a30-d500-4fa7-8582-bd6099088b37",
    tenantId: "09988f3c-947e-4986-a87e-37ad49a3b175",
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
			Title = pullRequest.Title,
			DueDateTime = new DateTimeTimeZone {
				DateTime = pullRequest.Created_at.Value.Add(TimeSpan.FromDays(7)).ToString("o"),
				TimeZone = "UTC"
			},
			Importance = Importance.High,
			LinkedResources = new List<LinkedResource> {
				new LinkedResource {
					WebUrl = pullRequest.Html_url
				}
			}
	});
	Console.WriteLine($"Added task {addedTask.Title} to your todo list");
}