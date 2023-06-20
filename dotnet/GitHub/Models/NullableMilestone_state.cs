using System.Runtime.Serialization;
using System;
namespace GitHubTodoDemo.GitHub.Models {
    /// <summary>The state of the milestone.</summary>
    public enum NullableMilestone_state {
        [EnumMember(Value = "open")]
        Open,
        [EnumMember(Value = "closed")]
        Closed,
    }
}
