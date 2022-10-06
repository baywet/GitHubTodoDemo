namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum VppTokenSyncStatus {
        /// <summary>Default status.</summary>
        None,
        /// <summary>Last Sync in progress.</summary>
        InProgress,
        /// <summary>Last Sync completed successfully.</summary>
        Completed,
        /// <summary>Last Sync failed.</summary>
        Failed,
    }
}
