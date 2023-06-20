using System.Runtime.Serialization;
using System;
namespace GitHubTodoDemo.GitHub.Models {
    /// <summary>The default value for a merge commit title.- `PR_TITLE` - default to the pull request&apos;s title.- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).</summary>
    public enum Repository_template_repository_merge_commit_title {
        [EnumMember(Value = "PR_TITLE")]
        PR_TITLE,
        [EnumMember(Value = "MERGE_MESSAGE")]
        MERGE_MESSAGE,
    }
}
