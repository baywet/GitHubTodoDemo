namespace GitHubTodoDemo.MicrosoftGraph.Models.Security {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum ServiceSource {
        Unknown,
        MicrosoftDefenderForEndpoint,
        MicrosoftDefenderForIdentity,
        MicrosoftDefenderForCloudApps,
        MicrosoftDefenderForOffice365,
        Microsoft365Defender,
        AzureAdIdentityProtection,
        MicrosoftAppGovernance,
        DataLossPrevention,
        UnknownFutureValue,
    }
}
