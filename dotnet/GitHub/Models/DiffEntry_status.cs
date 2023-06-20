using System.Runtime.Serialization;
using System;
namespace GitHubTodoDemo.GitHub.Models {
    public enum DiffEntry_status {
        [EnumMember(Value = "added")]
        Added,
        [EnumMember(Value = "removed")]
        Removed,
        [EnumMember(Value = "modified")]
        Modified,
        [EnumMember(Value = "renamed")]
        Renamed,
        [EnumMember(Value = "copied")]
        Copied,
        [EnumMember(Value = "changed")]
        Changed,
        [EnumMember(Value = "unchanged")]
        Unchanged,
    }
}
