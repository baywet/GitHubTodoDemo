namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum MeetingRequestType {
        None,
        NewMeetingRequest,
        FullUpdate,
        InformationalUpdate,
        SilentUpdate,
        Outdated,
        PrincipalWantsCopy,
    }
}
