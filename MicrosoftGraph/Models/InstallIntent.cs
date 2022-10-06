namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum InstallIntent {
        /// <summary>Available install intent.</summary>
        Available,
        /// <summary>Required install intent.</summary>
        Required,
        /// <summary>Uninstall install intent.</summary>
        Uninstall,
        /// <summary>Available without enrollment install intent.</summary>
        AvailableWithoutEnrollment,
    }
}
