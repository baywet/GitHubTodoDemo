using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.GitHub.Models {
    public class PullRequest_base_repo : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The allow_merge_commit property</summary>
        public bool? Allow_merge_commit { get; set; }
        /// <summary>The allow_rebase_merge property</summary>
        public bool? Allow_rebase_merge { get; set; }
        /// <summary>The allow_squash_merge property</summary>
        public bool? Allow_squash_merge { get; set; }
        /// <summary>The archive_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Archive_url { get; set; }
#nullable restore
#else
        public string Archive_url { get; set; }
#endif
        /// <summary>The archived property</summary>
        public bool? Archived { get; set; }
        /// <summary>The assignees_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Assignees_url { get; set; }
#nullable restore
#else
        public string Assignees_url { get; set; }
#endif
        /// <summary>The blobs_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Blobs_url { get; set; }
#nullable restore
#else
        public string Blobs_url { get; set; }
#endif
        /// <summary>The branches_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Branches_url { get; set; }
#nullable restore
#else
        public string Branches_url { get; set; }
#endif
        /// <summary>The clone_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Clone_url { get; set; }
#nullable restore
#else
        public string Clone_url { get; set; }
#endif
        /// <summary>The collaborators_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Collaborators_url { get; set; }
#nullable restore
#else
        public string Collaborators_url { get; set; }
#endif
        /// <summary>The comments_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Comments_url { get; set; }
#nullable restore
#else
        public string Comments_url { get; set; }
#endif
        /// <summary>The commits_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Commits_url { get; set; }
#nullable restore
#else
        public string Commits_url { get; set; }
#endif
        /// <summary>The compare_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Compare_url { get; set; }
#nullable restore
#else
        public string Compare_url { get; set; }
#endif
        /// <summary>The contents_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Contents_url { get; set; }
#nullable restore
#else
        public string Contents_url { get; set; }
#endif
        /// <summary>The contributors_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Contributors_url { get; set; }
#nullable restore
#else
        public string Contributors_url { get; set; }
#endif
        /// <summary>The created_at property</summary>
        public DateTimeOffset? Created_at { get; set; }
        /// <summary>The default_branch property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Default_branch { get; set; }
#nullable restore
#else
        public string Default_branch { get; set; }
#endif
        /// <summary>The deployments_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Deployments_url { get; set; }
#nullable restore
#else
        public string Deployments_url { get; set; }
#endif
        /// <summary>The description property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Description { get; set; }
#nullable restore
#else
        public string Description { get; set; }
#endif
        /// <summary>The disabled property</summary>
        public bool? Disabled { get; set; }
        /// <summary>The downloads_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Downloads_url { get; set; }
#nullable restore
#else
        public string Downloads_url { get; set; }
#endif
        /// <summary>The events_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Events_url { get; set; }
#nullable restore
#else
        public string Events_url { get; set; }
#endif
        /// <summary>The fork property</summary>
        public bool? Fork { get; set; }
        /// <summary>The forks property</summary>
        public int? Forks { get; set; }
        /// <summary>The forks_count property</summary>
        public int? Forks_count { get; set; }
        /// <summary>The forks_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Forks_url { get; set; }
#nullable restore
#else
        public string Forks_url { get; set; }
#endif
        /// <summary>The full_name property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Full_name { get; set; }
#nullable restore
#else
        public string Full_name { get; set; }
#endif
        /// <summary>The git_commits_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Git_commits_url { get; set; }
#nullable restore
#else
        public string Git_commits_url { get; set; }
#endif
        /// <summary>The git_refs_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Git_refs_url { get; set; }
#nullable restore
#else
        public string Git_refs_url { get; set; }
#endif
        /// <summary>The git_tags_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Git_tags_url { get; set; }
#nullable restore
#else
        public string Git_tags_url { get; set; }
#endif
        /// <summary>The git_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Git_url { get; set; }
#nullable restore
#else
        public string Git_url { get; set; }
#endif
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
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Homepage { get; set; }
#nullable restore
#else
        public string Homepage { get; set; }
#endif
        /// <summary>The hooks_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Hooks_url { get; set; }
#nullable restore
#else
        public string Hooks_url { get; set; }
#endif
        /// <summary>The html_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Html_url { get; set; }
#nullable restore
#else
        public string Html_url { get; set; }
#endif
        /// <summary>The id property</summary>
        public int? Id { get; set; }
        /// <summary>The issue_comment_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Issue_comment_url { get; set; }
#nullable restore
#else
        public string Issue_comment_url { get; set; }
#endif
        /// <summary>The issue_events_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Issue_events_url { get; set; }
#nullable restore
#else
        public string Issue_events_url { get; set; }
#endif
        /// <summary>The issues_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Issues_url { get; set; }
#nullable restore
#else
        public string Issues_url { get; set; }
#endif
        /// <summary>The keys_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Keys_url { get; set; }
#nullable restore
#else
        public string Keys_url { get; set; }
#endif
        /// <summary>The labels_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Labels_url { get; set; }
#nullable restore
#else
        public string Labels_url { get; set; }
#endif
        /// <summary>The language property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Language { get; set; }
#nullable restore
#else
        public string Language { get; set; }
#endif
        /// <summary>The languages_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Languages_url { get; set; }
#nullable restore
#else
        public string Languages_url { get; set; }
#endif
        /// <summary>The license property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public LicenseSimple? License { get; set; }
#nullable restore
#else
        public LicenseSimple License { get; set; }
#endif
        /// <summary>The master_branch property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Master_branch { get; set; }
#nullable restore
#else
        public string Master_branch { get; set; }
#endif
        /// <summary>The merges_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Merges_url { get; set; }
#nullable restore
#else
        public string Merges_url { get; set; }
#endif
        /// <summary>The milestones_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Milestones_url { get; set; }
#nullable restore
#else
        public string Milestones_url { get; set; }
#endif
        /// <summary>The mirror_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Mirror_url { get; set; }
#nullable restore
#else
        public string Mirror_url { get; set; }
#endif
        /// <summary>The name property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Name { get; set; }
#nullable restore
#else
        public string Name { get; set; }
#endif
        /// <summary>The node_id property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Node_id { get; set; }
#nullable restore
#else
        public string Node_id { get; set; }
#endif
        /// <summary>The notifications_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Notifications_url { get; set; }
#nullable restore
#else
        public string Notifications_url { get; set; }
#endif
        /// <summary>The open_issues property</summary>
        public int? Open_issues { get; set; }
        /// <summary>The open_issues_count property</summary>
        public int? Open_issues_count { get; set; }
        /// <summary>The owner property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public PullRequest_base_repo_owner? Owner { get; set; }
#nullable restore
#else
        public PullRequest_base_repo_owner Owner { get; set; }
#endif
        /// <summary>The permissions property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public PullRequest_base_repo_permissions? Permissions { get; set; }
#nullable restore
#else
        public PullRequest_base_repo_permissions Permissions { get; set; }
#endif
        /// <summary>The private property</summary>
        public bool? Private { get; set; }
        /// <summary>The pulls_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Pulls_url { get; set; }
#nullable restore
#else
        public string Pulls_url { get; set; }
#endif
        /// <summary>The pushed_at property</summary>
        public DateTimeOffset? Pushed_at { get; set; }
        /// <summary>The releases_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Releases_url { get; set; }
#nullable restore
#else
        public string Releases_url { get; set; }
#endif
        /// <summary>The size property</summary>
        public int? Size { get; set; }
        /// <summary>The ssh_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Ssh_url { get; set; }
#nullable restore
#else
        public string Ssh_url { get; set; }
#endif
        /// <summary>The stargazers_count property</summary>
        public int? Stargazers_count { get; set; }
        /// <summary>The stargazers_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Stargazers_url { get; set; }
#nullable restore
#else
        public string Stargazers_url { get; set; }
#endif
        /// <summary>The statuses_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Statuses_url { get; set; }
#nullable restore
#else
        public string Statuses_url { get; set; }
#endif
        /// <summary>The subscribers_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Subscribers_url { get; set; }
#nullable restore
#else
        public string Subscribers_url { get; set; }
#endif
        /// <summary>The subscription_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Subscription_url { get; set; }
#nullable restore
#else
        public string Subscription_url { get; set; }
#endif
        /// <summary>The svn_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Svn_url { get; set; }
#nullable restore
#else
        public string Svn_url { get; set; }
#endif
        /// <summary>The tags_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Tags_url { get; set; }
#nullable restore
#else
        public string Tags_url { get; set; }
#endif
        /// <summary>The teams_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Teams_url { get; set; }
#nullable restore
#else
        public string Teams_url { get; set; }
#endif
        /// <summary>The temp_clone_token property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Temp_clone_token { get; set; }
#nullable restore
#else
        public string Temp_clone_token { get; set; }
#endif
        /// <summary>The topics property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<string>? Topics { get; set; }
#nullable restore
#else
        public List<string> Topics { get; set; }
#endif
        /// <summary>The trees_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Trees_url { get; set; }
#nullable restore
#else
        public string Trees_url { get; set; }
#endif
        /// <summary>The updated_at property</summary>
        public DateTimeOffset? Updated_at { get; set; }
        /// <summary>The url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Url { get; set; }
#nullable restore
#else
        public string Url { get; set; }
#endif
        /// <summary>The watchers property</summary>
        public int? Watchers { get; set; }
        /// <summary>The watchers_count property</summary>
        public int? Watchers_count { get; set; }
        /// <summary>
        /// Instantiates a new PullRequest_base_repo and sets the default values.
        /// </summary>
        public PullRequest_base_repo() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static PullRequest_base_repo CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new PullRequest_base_repo();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"allow_merge_commit", n => { Allow_merge_commit = n.GetBoolValue(); } },
                {"allow_rebase_merge", n => { Allow_rebase_merge = n.GetBoolValue(); } },
                {"allow_squash_merge", n => { Allow_squash_merge = n.GetBoolValue(); } },
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
                {"created_at", n => { Created_at = n.GetDateTimeOffsetValue(); } },
                {"default_branch", n => { Default_branch = n.GetStringValue(); } },
                {"deployments_url", n => { Deployments_url = n.GetStringValue(); } },
                {"description", n => { Description = n.GetStringValue(); } },
                {"disabled", n => { Disabled = n.GetBoolValue(); } },
                {"downloads_url", n => { Downloads_url = n.GetStringValue(); } },
                {"events_url", n => { Events_url = n.GetStringValue(); } },
                {"fork", n => { Fork = n.GetBoolValue(); } },
                {"forks", n => { Forks = n.GetIntValue(); } },
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
                {"issue_comment_url", n => { Issue_comment_url = n.GetStringValue(); } },
                {"issue_events_url", n => { Issue_events_url = n.GetStringValue(); } },
                {"issues_url", n => { Issues_url = n.GetStringValue(); } },
                {"keys_url", n => { Keys_url = n.GetStringValue(); } },
                {"labels_url", n => { Labels_url = n.GetStringValue(); } },
                {"language", n => { Language = n.GetStringValue(); } },
                {"languages_url", n => { Languages_url = n.GetStringValue(); } },
                {"license", n => { License = n.GetObjectValue<LicenseSimple>(LicenseSimple.CreateFromDiscriminatorValue); } },
                {"master_branch", n => { Master_branch = n.GetStringValue(); } },
                {"merges_url", n => { Merges_url = n.GetStringValue(); } },
                {"milestones_url", n => { Milestones_url = n.GetStringValue(); } },
                {"mirror_url", n => { Mirror_url = n.GetStringValue(); } },
                {"name", n => { Name = n.GetStringValue(); } },
                {"node_id", n => { Node_id = n.GetStringValue(); } },
                {"notifications_url", n => { Notifications_url = n.GetStringValue(); } },
                {"open_issues", n => { Open_issues = n.GetIntValue(); } },
                {"open_issues_count", n => { Open_issues_count = n.GetIntValue(); } },
                {"owner", n => { Owner = n.GetObjectValue<PullRequest_base_repo_owner>(PullRequest_base_repo_owner.CreateFromDiscriminatorValue); } },
                {"permissions", n => { Permissions = n.GetObjectValue<PullRequest_base_repo_permissions>(PullRequest_base_repo_permissions.CreateFromDiscriminatorValue); } },
                {"private", n => { Private = n.GetBoolValue(); } },
                {"pulls_url", n => { Pulls_url = n.GetStringValue(); } },
                {"pushed_at", n => { Pushed_at = n.GetDateTimeOffsetValue(); } },
                {"releases_url", n => { Releases_url = n.GetStringValue(); } },
                {"size", n => { Size = n.GetIntValue(); } },
                {"ssh_url", n => { Ssh_url = n.GetStringValue(); } },
                {"stargazers_count", n => { Stargazers_count = n.GetIntValue(); } },
                {"stargazers_url", n => { Stargazers_url = n.GetStringValue(); } },
                {"statuses_url", n => { Statuses_url = n.GetStringValue(); } },
                {"subscribers_url", n => { Subscribers_url = n.GetStringValue(); } },
                {"subscription_url", n => { Subscription_url = n.GetStringValue(); } },
                {"svn_url", n => { Svn_url = n.GetStringValue(); } },
                {"tags_url", n => { Tags_url = n.GetStringValue(); } },
                {"teams_url", n => { Teams_url = n.GetStringValue(); } },
                {"temp_clone_token", n => { Temp_clone_token = n.GetStringValue(); } },
                {"topics", n => { Topics = n.GetCollectionOfPrimitiveValues<string>()?.ToList(); } },
                {"trees_url", n => { Trees_url = n.GetStringValue(); } },
                {"updated_at", n => { Updated_at = n.GetDateTimeOffsetValue(); } },
                {"url", n => { Url = n.GetStringValue(); } },
                {"watchers", n => { Watchers = n.GetIntValue(); } },
                {"watchers_count", n => { Watchers_count = n.GetIntValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteBoolValue("allow_merge_commit", Allow_merge_commit);
            writer.WriteBoolValue("allow_rebase_merge", Allow_rebase_merge);
            writer.WriteBoolValue("allow_squash_merge", Allow_squash_merge);
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
            writer.WriteDateTimeOffsetValue("created_at", Created_at);
            writer.WriteStringValue("default_branch", Default_branch);
            writer.WriteStringValue("deployments_url", Deployments_url);
            writer.WriteStringValue("description", Description);
            writer.WriteBoolValue("disabled", Disabled);
            writer.WriteStringValue("downloads_url", Downloads_url);
            writer.WriteStringValue("events_url", Events_url);
            writer.WriteBoolValue("fork", Fork);
            writer.WriteIntValue("forks", Forks);
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
            writer.WriteStringValue("issue_comment_url", Issue_comment_url);
            writer.WriteStringValue("issue_events_url", Issue_events_url);
            writer.WriteStringValue("issues_url", Issues_url);
            writer.WriteStringValue("keys_url", Keys_url);
            writer.WriteStringValue("labels_url", Labels_url);
            writer.WriteStringValue("language", Language);
            writer.WriteStringValue("languages_url", Languages_url);
            writer.WriteObjectValue<LicenseSimple>("license", License);
            writer.WriteStringValue("master_branch", Master_branch);
            writer.WriteStringValue("merges_url", Merges_url);
            writer.WriteStringValue("milestones_url", Milestones_url);
            writer.WriteStringValue("mirror_url", Mirror_url);
            writer.WriteStringValue("name", Name);
            writer.WriteStringValue("node_id", Node_id);
            writer.WriteStringValue("notifications_url", Notifications_url);
            writer.WriteIntValue("open_issues", Open_issues);
            writer.WriteIntValue("open_issues_count", Open_issues_count);
            writer.WriteObjectValue<PullRequest_base_repo_owner>("owner", Owner);
            writer.WriteObjectValue<PullRequest_base_repo_permissions>("permissions", Permissions);
            writer.WriteBoolValue("private", Private);
            writer.WriteStringValue("pulls_url", Pulls_url);
            writer.WriteDateTimeOffsetValue("pushed_at", Pushed_at);
            writer.WriteStringValue("releases_url", Releases_url);
            writer.WriteIntValue("size", Size);
            writer.WriteStringValue("ssh_url", Ssh_url);
            writer.WriteIntValue("stargazers_count", Stargazers_count);
            writer.WriteStringValue("stargazers_url", Stargazers_url);
            writer.WriteStringValue("statuses_url", Statuses_url);
            writer.WriteStringValue("subscribers_url", Subscribers_url);
            writer.WriteStringValue("subscription_url", Subscription_url);
            writer.WriteStringValue("svn_url", Svn_url);
            writer.WriteStringValue("tags_url", Tags_url);
            writer.WriteStringValue("teams_url", Teams_url);
            writer.WriteStringValue("temp_clone_token", Temp_clone_token);
            writer.WriteCollectionOfPrimitiveValues<string>("topics", Topics);
            writer.WriteStringValue("trees_url", Trees_url);
            writer.WriteDateTimeOffsetValue("updated_at", Updated_at);
            writer.WriteStringValue("url", Url);
            writer.WriteIntValue("watchers", Watchers);
            writer.WriteIntValue("watchers_count", Watchers_count);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
