namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum ComplianceState {
        /// <summary>Unknown.</summary>
        Unknown,
        /// <summary>Compliant.</summary>
        Compliant,
        /// <summary>Device is non-compliant and is blocked from corporate resources.</summary>
        Noncompliant,
        /// <summary>Conflict with other rules.</summary>
        Conflict,
        /// <summary>Error.</summary>
        Error,
        /// <summary>Device is non-compliant but still has access to corporate resources</summary>
        InGracePeriod,
        /// <summary>Managed by Config Manager</summary>
        ConfigManager,
    }
}
