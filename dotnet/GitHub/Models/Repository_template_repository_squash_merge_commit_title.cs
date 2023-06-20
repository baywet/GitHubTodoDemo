using System.Runtime.Serialization;
using System;
namespace GitHubTodoDemo.GitHub.Models {
    /// <summary>The default value for a squash merge commit title:- `PR_TITLE` - default to the pull request&apos;s title.- `COMMIT_OR_PR_TITLE` - default to the commit&apos;s title (if only one commit) or the pull request&apos;s title (when more than one commit).</summary>
    public enum Repository_template_repository_squash_merge_commit_title {
        [EnumMember(Value = "PR_TITLE")]
        PR_TITLE,
        [EnumMember(Value = "COMMIT_OR_PR_TITLE")]
        COMMIT_OR_PR_TITLE,
    }
}
