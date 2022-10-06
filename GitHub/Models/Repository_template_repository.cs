using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.GitHub.Models {
    public class Repository_template_repository : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The allow_auto_merge property</summary>
        public bool? Allow_auto_merge { get; set; }
        /// <summary>The allow_merge_commit property</summary>
        public bool? Allow_merge_commit { get; set; }
        /// <summary>The allow_rebase_merge property</summary>
        public bool? Allow_rebase_merge { get; set; }
        /// <summary>The allow_squash_merge property</summary>
        public bool? Allow_squash_merge { get; set; }
        /// <summary>The allow_update_branch property</summary>
        public bool? Allow_update_branch { get; set; }
        /// <summary>The archive_url property</summary>
        public string Archive_url { get; set; }
        /// <summary>The archived property</summary>
        public bool? Archived { get; set; }
        /// <summary>The assignees_url property</summary>
        public string Assignees_url { get; set; }
        /// <summary>The blobs_url property</summary>
        public string Blobs_url { get; set; }
        /// <summary>The branches_url property</summary>
        public string Branches_url { get; set; }
        /// <summary>The clone_url property</summary>
        public string Clone_url { get; set; }
        /// <summary>The collaborators_url property</summary>
        public string Collaborators_url { get; set; }
        /// <summary>The comments_url property</summary>
        public string Comments_url { get; set; }
        /// <summary>The commits_url property</summary>
        public string Commits_url { get; set; }
        /// <summary>The compare_url property</summary>
        public string Compare_url { get; set; }
        /// <summary>The contents_url property</summary>
        public string Contents_url { get; set; }
        /// <summary>The contributors_url property</summary>
        public string Contributors_url { get; set; }
        /// <summary>The created_at property</summary>
        public string Created_at { get; set; }
        /// <summary>The default_branch property</summary>
        public string Default_branch { get; set; }
        /// <summary>The delete_branch_on_merge property</summary>
        public bool? Delete_branch_on_merge { get; set; }
        /// <summary>The deployments_url property</summary>
        public string Deployments_url { get; set; }
        /// <summary>The description property</summary>
        public string Description { get; set; }
        /// <summary>The disabled property</summary>
        public bool? Disabled { get; set; }
        /// <summary>The downloads_url property</summary>
        public string Downloads_url { get; set; }
        /// <summary>The events_url property</summary>
        public string Events_url { get; set; }
        /// <summary>The fork property</summary>
        public bool? Fork { get; set; }
        /// <summary>The forks_count property</summary>
        public int? Forks_count { get; set; }
        /// <summary>The forks_url property</summary>
        public string Forks_url { get; set; }
        /// <summary>The full_name property</summary>
        public string Full_name { get; set; }
        /// <summary>The git_commits_url property</summary>
        public string Git_commits_url { get; set; }
        /// <summary>The git_refs_url property</summary>
        public string Git_refs_url { get; set; }
        /// <summary>The git_tags_url property</summary>
        public string Git_tags_url { get; set; }
        /// <summary>The git_url property</summary>
        public string Git_url { get; set; }
        /// <summary>The has_downloads property</summary>
        public bool? Has_downloads { get; set; }
        /// <summary>The has_issues property</summary>
        public bool? Has_issues { get; set; }
        /// <summary>The has_pages property</summary>
        public bool? Has_pages { get; set; }
        /// <summary>The has_projects property</summary>
        public bool? Has_projects { get; set; }
        /// <summary>The has_wiki property</summary>
        public bool? Has_wiki { get; set; }
        /// <summary>The homepage property</summary>
        public string Homepage { get; set; }
        /// <summary>The hooks_url property</summary>
        public string Hooks_url { get; set; }
        /// <summary>The html_url property</summary>
        public string Html_url { get; set; }
        /// <summary>The id property</summary>
        public int? Id { get; set; }
        /// <summary>The is_template property</summary>
        public bool? Is_template { get; set; }
        /// <summary>The issue_comment_url property</summary>
        public string Issue_comment_url { get; set; }
        /// <summary>The issue_events_url property</summary>
        public string Issue_events_url { get; set; }
        /// <summary>The issues_url property</summary>
        public string Issues_url { get; set; }
        /// <summary>The keys_url property</summary>
        public string Keys_url { get; set; }
        /// <summary>The labels_url property</summary>
        public string Labels_url { get; set; }
        /// <summary>The language property</summary>
        public string Language { get; set; }
        /// <summary>The languages_url property</summary>
        public string Languages_url { get; set; }
        /// <summary>The default value for a merge commit message.- `PR_TITLE` - default to the pull request&apos;s title.- `PR_BODY` - default to the pull request&apos;s body.- `BLANK` - default to a blank commit message.</summary>
        public Repository_template_repository_merge_commit_message? Merge_commit_message { get; set; }
        /// <summary>The default value for a merge commit title.- `PR_TITLE` - default to the pull request&apos;s title.- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).</summary>
        public Repository_template_repository_merge_commit_title? Merge_commit_title { get; set; }
        /// <summary>The merges_url property</summary>
        public string Merges_url { get; set; }
        /// <summary>The milestones_url property</summary>
        public string Milestones_url { get; set; }
        /// <summary>The mirror_url property</summary>
        public string Mirror_url { get; set; }
        /// <summary>The name property</summary>
        public string Name { get; set; }
        /// <summary>The network_count property</summary>
        public int? Network_count { get; set; }
        /// <summary>The node_id property</summary>
        public string Node_id { get; set; }
        /// <summary>The notifications_url property</summary>
        public string Notifications_url { get; set; }
        /// <summary>The open_issues_count property</summary>
        public int? Open_issues_count { get; set; }
        /// <summary>The owner property</summary>
        public Repository_template_repository_owner Owner { get; set; }
        /// <summary>The permissions property</summary>
        public Repository_template_repository_permissions Permissions { get; set; }
        /// <summary>The private property</summary>
        public bool? Private { get; set; }
        /// <summary>The pulls_url property</summary>
        public string Pulls_url { get; set; }
        /// <summary>The pushed_at property</summary>
        public string Pushed_at { get; set; }
        /// <summary>The releases_url property</summary>
        public string Releases_url { get; set; }
        /// <summary>The size property</summary>
        public int? Size { get; set; }
        /// <summary>The default value for a squash merge commit message:- `PR_BODY` - default to the pull request&apos;s body.- `COMMIT_MESSAGES` - default to the branch&apos;s commit messages.- `BLANK` - default to a blank commit message.</summary>
        public Repository_template_repository_squash_merge_commit_message? Squash_merge_commit_message { get; set; }
        /// <summary>The default value for a squash merge commit title:- `PR_TITLE` - default to the pull request&apos;s title.- `COMMIT_OR_PR_TITLE` - default to the commit&apos;s title (if only one commit) or the pull request&apos;s title (when more than one commit).</summary>
        public Repository_template_repository_squash_merge_commit_title? Squash_merge_commit_title { get; set; }
        /// <summary>The ssh_url property</summary>
        public string Ssh_url { get; set; }
        /// <summary>The stargazers_count property</summary>
        public int? Stargazers_count { get; set; }
        /// <summary>The stargazers_url property</summary>
        public string Stargazers_url { get; set; }
        /// <summary>The statuses_url property</summary>
        public string Statuses_url { get; set; }
        /// <summary>The subscribers_count property</summary>
        public int? Subscribers_count { get; set; }
        /// <summary>The subscribers_url property</summary>
        public string Subscribers_url { get; set; }
        /// <summary>The subscription_url property</summary>
        public string Subscription_url { get; set; }
        /// <summary>The svn_url property</summary>
        public string Svn_url { get; set; }
        /// <summary>The tags_url property</summary>
        public string Tags_url { get; set; }
        /// <summary>The teams_url property</summary>
        public string Teams_url { get; set; }
        /// <summary>The temp_clone_token property</summary>
        public string Temp_clone_token { get; set; }
        /// <summary>The topics property</summary>
        public List<string> Topics { get; set; }
        /// <summary>The trees_url property</summary>
        public string Trees_url { get; set; }
        /// <summary>The updated_at property</summary>
        public string Updated_at { get; set; }
        /// <summary>The url property</summary>
        public string Url { get; set; }
        /// <summary>The use_squash_pr_title_as_default property</summary>
        public bool? Use_squash_pr_title_as_default { get; set; }
        /// <summary>The visibility property</summary>
        public string Visibility { get; set; }
        /// <summary>The watchers_count property</summary>
        public int? Watchers_count { get; set; }
        /// <summary>
        /// Instantiates a new repository_template_repository and sets the default values.
        /// </summary>
        public Repository_template_repository() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static Repository_template_repository CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Repository_template_repository();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"allow_auto_merge", n => { Allow_auto_merge = n.GetBoolValue(); } },
                {"allow_merge_commit", n => { Allow_merge_commit = n.GetBoolValue(); } },
                {"allow_rebase_merge", n => { Allow_rebase_merge = n.GetBoolValue(); } },
                {"allow_squash_merge", n => { Allow_squash_merge = n.GetBoolValue(); } },
                {"allow_update_branch", n => { Allow_update_branch = n.GetBoolValue(); } },
                {"archive_url", n => { Archive_url = n.GetStringValue(); } },
                {"archived", n => { Archived = n.GetBoolValue(); } },
                {"assignees_url", n => { Assignees_url = n.GetStringValue(); } },
                {"blobs_url", n => { Blobs_url = n.GetStringValue(); } },
                {"branches_url", n => { Branches_url = n.GetStringValue(); } },
                {"clone_url", n => { Clone_url = n.GetStringValue(); } },
                {"collaborators_url", n => { Collaborators_url = n.GetStringValue(); } },
                {"comments_url", n => { Comments_url = n.GetStringValue(); } },
                {"commits_url", n => { Commits_url = n.GetStringValue(); } },
                {"compare_url", n => { Compare_url = n.GetStringValue(); } },
                {"contents_url", n => { Contents_url = n.GetStringValue(); } },
                {"contributors_url", n => { Contributors_url = n.GetStringValue(); } },
                {"created_at", n => { Created_at = n.GetStringValue(); } },
                {"default_branch", n => { Default_branch = n.GetStringValue(); } },
                {"delete_branch_on_merge", n => { Delete_branch_on_merge = n.GetBoolValue(); } },
                {"deployments_url", n => { Deployments_url = n.GetStringValue(); } },
                {"description", n => { Description = n.GetStringValue(); } },
                {"disabled", n => { Disabled = n.GetBoolValue(); } },
                {"downloads_url", n => { Downloads_url = n.GetStringValue(); } },
                {"events_url", n => { Events_url = n.GetStringValue(); } },
                {"fork", n => { Fork = n.GetBoolValue(); } },
                {"forks_count", n => { Forks_count = n.GetIntValue(); } },
                {"forks_url", n => { Forks_url = n.GetStringValue(); } },
                {"full_name", n => { Full_name = n.GetStringValue(); } },
                {"git_commits_url", n => { Git_commits_url = n.GetStringValue(); } },
                {"git_refs_url", n => { Git_refs_url = n.GetStringValue(); } },
                {"git_tags_url", n => { Git_tags_url = n.GetStringValue(); } },
                {"git_url", n => { Git_url = n.GetStringValue(); } },
                {"has_downloads", n => { Has_downloads = n.GetBoolValue(); } },
                {"has_issues", n => { Has_issues = n.GetBoolValue(); } },
                {"has_pages", n => { Has_pages = n.GetBoolValue(); } },
                {"has_projects", n => { Has_projects = n.GetBoolValue(); } },
                {"has_wiki", n => { Has_wiki = n.GetBoolValue(); } },
                {"homepage", n => { Homepage = n.GetStringValue(); } },
                {"hooks_url", n => { Hooks_url = n.GetStringValue(); } },
                {"html_url", n => { Html_url = n.GetStringValue(); } },
                {"id", n => { Id = n.GetIntValue(); } },
                {"is_template", n => { Is_template = n.GetBoolValue(); } },
                {"issue_comment_url", n => { Issue_comment_url = n.GetStringValue(); } },
                {"issue_events_url", n => { Issue_events_url = n.GetStringValue(); } },
                {"issues_url", n => { Issues_url = n.GetStringValue(); } },
                {"keys_url", n => { Keys_url = n.GetStringValue(); } },
                {"labels_url", n => { Labels_url = n.GetStringValue(); } },
                {"language", n => { Language = n.GetStringValue(); } },
                {"languages_url", n => { Languages_url = n.GetStringValue(); } },
                {"merge_commit_message", n => { Merge_commit_message = n.GetEnumValue<Repository_template_repository_merge_commit_message>(); } },
                {"merge_commit_title", n => { Merge_commit_title = n.GetEnumValue<Repository_template_repository_merge_commit_title>(); } },
                {"merges_url", n => { Merges_url = n.GetStringValue(); } },
                {"milestones_url", n => { Milestones_url = n.GetStringValue(); } },
                {"mirror_url", n => { Mirror_url = n.GetStringValue(); } },
                {"name", n => { Name = n.GetStringValue(); } },
                {"network_count", n => { Network_count = n.GetIntValue(); } },
                {"node_id", n => { Node_id = n.GetStringValue(); } },
                {"notifications_url", n => { Notifications_url = n.GetStringValue(); } },
                {"open_issues_count", n => { Open_issues_count = n.GetIntValue(); } },
                {"owner", n => { Owner = n.GetObjectValue<Repository_template_repository_owner>(Repository_template_repository_owner.CreateFromDiscriminatorValue); } },
                {"permissions", n => { Permissions = n.GetObjectValue<Repository_template_repository_permissions>(Repository_template_repository_permissions.CreateFromDiscriminatorValue); } },
                {"private", n => { Private = n.GetBoolValue(); } },
                {"pulls_url", n => { Pulls_url = n.GetStringValue(); } },
                {"pushed_at", n => { Pushed_at = n.GetStringValue(); } },
                {"releases_url", n => { Releases_url = n.GetStringValue(); } },
                {"size", n => { Size = n.GetIntValue(); } },
                {"squash_merge_commit_message", n => { Squash_merge_commit_message = n.GetEnumValue<Repository_template_repository_squash_merge_commit_message>(); } },
                {"squash_merge_commit_title", n => { Squash_merge_commit_title = n.GetEnumValue<Repository_template_repository_squash_merge_commit_title>(); } },
                {"ssh_url", n => { Ssh_url = n.GetStringValue(); } },
                {"stargazers_count", n => { Stargazers_count = n.GetIntValue(); } },
                {"stargazers_url", n => { Stargazers_url = n.GetStringValue(); } },
                {"statuses_url", n => { Statuses_url = n.GetStringValue(); } },
                {"subscribers_count", n => { Subscribers_count = n.GetIntValue(); } },
                {"subscribers_url", n => { Subscribers_url = n.GetStringValue(); } },
                {"subscription_url", n => { Subscription_url = n.GetStringValue(); } },
                {"svn_url", n => { Svn_url = n.GetStringValue(); } },
                {"tags_url", n => { Tags_url = n.GetStringValue(); } },
                {"teams_url", n => { Teams_url = n.GetStringValue(); } },
                {"temp_clone_token", n => { Temp_clone_token = n.GetStringValue(); } },
                {"topics", n => { Topics = n.GetCollectionOfPrimitiveValues<string>()?.ToList(); } },
                {"trees_url", n => { Trees_url = n.GetStringValue(); } },
                {"updated_at", n => { Updated_at = n.GetStringValue(); } },
                {"url", n => { Url = n.GetStringValue(); } },
                {"use_squash_pr_title_as_default", n => { Use_squash_pr_title_as_default = n.GetBoolValue(); } },
                {"visibility", n => { Visibility = n.GetStringValue(); } },
                {"watchers_count", n => { Watchers_count = n.GetIntValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteBoolValue("allow_auto_merge", Allow_auto_merge);
            writer.WriteBoolValue("allow_merge_commit", Allow_merge_commit);
            writer.WriteBoolValue("allow_rebase_merge", Allow_rebase_merge);
            writer.WriteBoolValue("allow_squash_merge", Allow_squash_merge);
            writer.WriteBoolValue("allow_update_branch", Allow_update_branch);
            writer.WriteStringValue("archive_url", Archive_url);
            writer.WriteBoolValue("archived", Archived);
            writer.WriteStringValue("assignees_url", Assignees_url);
            writer.WriteStringValue("blobs_url", Blobs_url);
            writer.WriteStringValue("branches_url", Branches_url);
            writer.WriteStringValue("clone_url", Clone_url);
            writer.WriteStringValue("collaborators_url", Collaborators_url);
            writer.WriteStringValue("comments_url", Comments_url);
            writer.WriteStringValue("commits_url", Commits_url);
            writer.WriteStringValue("compare_url", Compare_url);
            writer.WriteStringValue("contents_url", Contents_url);
            writer.WriteStringValue("contributors_url", Contributors_url);
            writer.WriteStringValue("created_at", Created_at);
            writer.WriteStringValue("default_branch", Default_branch);
            writer.WriteBoolValue("delete_branch_on_merge", Delete_branch_on_merge);
            writer.WriteStringValue("deployments_url", Deployments_url);
            writer.WriteStringValue("description", Description);
            writer.WriteBoolValue("disabled", Disabled);
            writer.WriteStringValue("downloads_url", Downloads_url);
            writer.WriteStringValue("events_url", Events_url);
            writer.WriteBoolValue("fork", Fork);
            writer.WriteIntValue("forks_count", Forks_count);
            writer.WriteStringValue("forks_url", Forks_url);
            writer.WriteStringValue("full_name", Full_name);
            writer.WriteStringValue("git_commits_url", Git_commits_url);
            writer.WriteStringValue("git_refs_url", Git_refs_url);
            writer.WriteStringValue("git_tags_url", Git_tags_url);
            writer.WriteStringValue("git_url", Git_url);
            writer.WriteBoolValue("has_downloads", Has_downloads);
            writer.WriteBoolValue("has_issues", Has_issues);
            writer.WriteBoolValue("has_pages", Has_pages);
            writer.WriteBoolValue("has_projects", Has_projects);
            writer.WriteBoolValue("has_wiki", Has_wiki);
            writer.WriteStringValue("homepage", Homepage);
            writer.WriteStringValue("hooks_url", Hooks_url);
            writer.WriteStringValue("html_url", Html_url);
            writer.WriteIntValue("id", Id);
            writer.WriteBoolValue("is_template", Is_template);
            writer.WriteStringValue("issue_comment_url", Issue_comment_url);
            writer.WriteStringValue("issue_events_url", Issue_events_url);
            writer.WriteStringValue("issues_url", Issues_url);
            writer.WriteStringValue("keys_url", Keys_url);
            writer.WriteStringValue("labels_url", Labels_url);
            writer.WriteStringValue("language", Language);
            writer.WriteStringValue("languages_url", Languages_url);
            writer.WriteEnumValue<Repository_template_repository_merge_commit_message>("merge_commit_message", Merge_commit_message);
            writer.WriteEnumValue<Repository_template_repository_merge_commit_title>("merge_commit_title", Merge_commit_title);
            writer.WriteStringValue("merges_url", Merges_url);
            writer.WriteStringValue("milestones_url", Milestones_url);
            writer.WriteStringValue("mirror_url", Mirror_url);
            writer.WriteStringValue("name", Name);
            writer.WriteIntValue("network_count", Network_count);
            writer.WriteStringValue("node_id", Node_id);
            writer.WriteStringValue("notifications_url", Notifications_url);
            writer.WriteIntValue("open_issues_count", Open_issues_count);
            writer.WriteObjectValue<Repository_template_repository_owner>("owner", Owner);
            writer.WriteObjectValue<Repository_template_repository_permissions>("permissions", Permissions);
            writer.WriteBoolValue("private", Private);
            writer.WriteStringValue("pulls_url", Pulls_url);
            writer.WriteStringValue("pushed_at", Pushed_at);
            writer.WriteStringValue("releases_url", Releases_url);
            writer.WriteIntValue("size", Size);
            writer.WriteEnumValue<Repository_template_repository_squash_merge_commit_message>("squash_merge_commit_message", Squash_merge_commit_message);
            writer.WriteEnumValue<Repository_template_repository_squash_merge_commit_title>("squash_merge_commit_title", Squash_merge_commit_title);
            writer.WriteStringValue("ssh_url", Ssh_url);
            writer.WriteIntValue("stargazers_count", Stargazers_count);
            writer.WriteStringValue("stargazers_url", Stargazers_url);
            writer.WriteStringValue("statuses_url", Statuses_url);
            writer.WriteIntValue("subscribers_count", Subscribers_count);
            writer.WriteStringValue("subscribers_url", Subscribers_url);
            writer.WriteStringValue("subscription_url", Subscription_url);
            writer.WriteStringValue("svn_url", Svn_url);
            writer.WriteStringValue("tags_url", Tags_url);
            writer.WriteStringValue("teams_url", Teams_url);
            writer.WriteStringValue("temp_clone_token", Temp_clone_token);
            writer.WriteCollectionOfPrimitiveValues<string>("topics", Topics);
            writer.WriteStringValue("trees_url", Trees_url);
            writer.WriteStringValue("updated_at", Updated_at);
            writer.WriteStringValue("url", Url);
            writer.WriteBoolValue("use_squash_pr_title_as_default", Use_squash_pr_title_as_default);
            writer.WriteStringValue("visibility", Visibility);
            writer.WriteIntValue("watchers_count", Watchers_count);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
