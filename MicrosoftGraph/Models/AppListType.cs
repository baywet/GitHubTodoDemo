namespace GitHubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum AppListType {
        /// <summary>Default value, no intent.</summary>
        None,
        /// <summary>The list represents the apps that will be considered compliant (only apps on the list are compliant).</summary>
        AppsInListCompliant,
        /// <summary>The list represents the apps that will be considered non compliant (all apps are compliant except apps on the list).</summary>
        AppsNotInListCompliant,
    }
}
