// See https://aka.ms/new-console-template for more information
using GithubTodoDemo.GitHub;
using GithubTodoDemo.MicrosoftGraph;
using GithubTodoDemo.MicrosoftGraph.Models;

Console.WriteLine("Hello, World!");

var gitHubClient = new GitHubClient(null);
var pullRequests = await gitHubClient.Repos["baywet"]["demo"].Pulls.GetAsync();
var graphClient = new MicrosoftGraphClient(null);
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