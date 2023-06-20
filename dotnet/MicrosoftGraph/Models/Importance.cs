using System.Runtime.Serialization;
using System;
namespace GitHubTodoDemo.MicrosoftGraph.Models {
    public enum Importance {
        [EnumMember(Value = "low")]
        Low,
        [EnumMember(Value = "normal")]
        Normal,
        [EnumMember(Value = "high")]
        High,
    }
}
