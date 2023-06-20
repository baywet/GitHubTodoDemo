using System.Runtime.Serialization;
using System;
namespace GitHubTodoDemo.GitHub.Models {
    /// <summary>State of this Pull Request. Either `open` or `closed`.</summary>
    public enum PullRequest_state {
        [EnumMember(Value = "open")]
        Open,
        [EnumMember(Value = "closed")]
        Closed,
    }
}
