namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum DeviceManagementExchangeConnectorType {
        /// <summary>Connects to on-premises Exchange Environment.</summary>
        OnPremises,
        /// <summary>Connects to O365 multi-tenant Exchange environment</summary>
        Hosted,
        /// <summary>Intune Service connects directly to O365 multi-tenant Exchange environment</summary>
        ServiceToService,
        /// <summary>Connects to O365 Dedicated Exchange environment.</summary>
        Dedicated,
    }
}
