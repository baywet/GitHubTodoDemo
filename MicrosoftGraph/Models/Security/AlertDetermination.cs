namespace GitHubTodoDemo.MicrosoftGraph.Models.Security {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum AlertDetermination {
        Unknown,
        Apt,
        Malware,
        SecurityPersonnel,
        SecurityTesting,
        UnwantedSoftware,
        Other,
        MultiStagedAttack,
        CompromisedAccount,
        Phishing,
        MaliciousUserActivity,
        NotMalicious,
        NotEnoughDataToValidate,
        ConfirmedActivity,
        LineOfBusinessApplication,
        UnknownFutureValue,
    }
}
