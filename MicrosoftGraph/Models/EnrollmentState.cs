namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum EnrollmentState {
        /// <summary>Device enrollment state is unknown</summary>
        Unknown,
        /// <summary>Device is Enrolled.</summary>
        Enrolled,
        /// <summary>Enrolled but it&apos;s enrolled via enrollment profile and the enrolled profile is different from the assigned profile.</summary>
        PendingReset,
        /// <summary>Not enrolled and there is enrollment failure record.</summary>
        Failed,
        /// <summary>Device is imported but not enrolled.</summary>
        NotContacted,
    }
}
