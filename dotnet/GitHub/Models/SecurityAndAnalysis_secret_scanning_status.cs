using System.Runtime.Serialization;
using System;
namespace GitHubTodoDemo.GitHub.Models {
    public enum SecurityAndAnalysis_secret_scanning_status {
        [EnumMember(Value = "enabled")]
        Enabled,
        [EnumMember(Value = "disabled")]
        Disabled,
    }
}