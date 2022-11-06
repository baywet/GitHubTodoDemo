namespace GitHubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum WelcomeScreenMeetingInformation {
        /// <summary>User Defined, default value, no intent.</summary>
        UserDefined,
        /// <summary>Show organizer and time only.</summary>
        ShowOrganizerAndTimeOnly,
        /// <summary>Show organizer, time and subject (subject is hidden for private meetings).</summary>
        ShowOrganizerAndTimeAndSubject,
    }
}
