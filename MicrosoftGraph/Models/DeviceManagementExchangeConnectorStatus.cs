namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum DeviceManagementExchangeConnectorStatus {
        /// <summary>No Connector exists.</summary>
        None,
        /// <summary>Pending Connection to the Exchange Environment.</summary>
        ConnectionPending,
        /// <summary>Connected to the Exchange Environment</summary>
        Connected,
        /// <summary>Disconnected from the Exchange Environment</summary>
        Disconnected,
    }
}
