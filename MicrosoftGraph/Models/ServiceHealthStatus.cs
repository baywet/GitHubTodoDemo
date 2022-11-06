namespace GitHubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum ServiceHealthStatus {
        ServiceOperational,
        Investigating,
        RestoringService,
        VerifyingService,
        ServiceRestored,
        PostIncidentReviewPublished,
        ServiceDegradation,
        ServiceInterruption,
        ExtendedRecovery,
        FalsePositive,
        InvestigationSuspended,
        Resolved,
        MitigatedExternal,
        Mitigated,
        ResolvedExternal,
        Confirmed,
        Reported,
        UnknownFutureValue,
    }
}
