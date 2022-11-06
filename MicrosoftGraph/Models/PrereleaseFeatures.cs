namespace GitHubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum PrereleaseFeatures {
        /// <summary>User Defined, default value, no intent.</summary>
        UserDefined,
        /// <summary>Settings only pre-release features.</summary>
        SettingsOnly,
        /// <summary>Settings and experimentations pre-release features.</summary>
        SettingsAndExperimentations,
        /// <summary>Pre-release features not allowed.</summary>
        NotAllowed,
    }
}
