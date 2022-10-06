// See https://aka.ms/new-console-template for more information
using GithubTodoDemo.GitHub;
using GithubTodoDemo.MicrosoftGraph;

Console.WriteLine("Hello, World!");

var gitHubClient = new GitHubClient(null);
var pullRequests = await gitHubClient.Repos["baywet"]["demo"].Pulls.GetAsync();
var graphClient = new MicrosoftGraphClient(null);
var todoLists = await graphClient.Me.Todo.Lists.GetAsync();
var todoList = todoLists.Value.First();