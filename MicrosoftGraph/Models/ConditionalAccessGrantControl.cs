namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum ConditionalAccessGrantControl {
        Block,
        Mfa,
        CompliantDevice,
        DomainJoinedDevice,
        ApprovedApplication,
        CompliantApplication,
        PasswordChange,
        UnknownFutureValue,
    }
}
