namespace GitHubTodoDemo.MicrosoftGraph.Models.Security {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum DetectionSource {
        Unknown,
        MicrosoftDefenderForEndpoint,
        Antivirus,
        SmartScreen,
        CustomTi,
        MicrosoftDefenderForOffice365,
        AutomatedInvestigation,
        MicrosoftThreatExperts,
        CustomDetection,
        MicrosoftDefenderForIdentity,
        CloudAppSecurity,
        Microsoft365Defender,
        AzureAdIdentityProtection,
        Manual,
        MicrosoftDataLossPrevention,
        AppGovernancePolicy,
        AppGovernanceDetection,
        UnknownFutureValue,
    }
}
