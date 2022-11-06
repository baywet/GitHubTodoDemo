using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.GitHub.Models {
    /// <summary>Pull requests let you tell others about changes you&apos;ve pushed to a repository on GitHub. Once a pull request is sent, interested parties can review the set of changes, discuss potential modifications, and even push follow-up commits if necessary.</summary>
    public class PullRequest : IAdditionalDataHolder, IParsable {
        /// <summary>The _links property</summary>
        public PullRequest__links _links { get; set; }
        /// <summary>The active_lock_reason property</summary>
        public string Active_lock_reason { get; set; }
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The additions property</summary>
        public int? Additions { get; set; }
        /// <summary>The assignee property</summary>
        public SimpleUser Assignee { get; set; }
        /// <summary>The assignees property</summary>
        public List<SimpleUser> Assignees { get; set; }
        /// <summary>How the author is associated with the repository.</summary>
        public GitHubTodoDemo.GitHub.Models.Author_association? Author_association { get; set; }
        /// <summary>The status of auto merging a pull request.</summary>
        public GitHubTodoDemo.GitHub.Models.Auto_merge Auto_merge { get; set; }
        /// <summary>The base property</summary>
        public PullRequest_base Base { get; set; }
        /// <summary>The body property</summary>
        public string Body { get; set; }
        /// <summary>The changed_files property</summary>
        public int? Changed_files { get; set; }
        /// <summary>The closed_at property</summary>
        public DateTimeOffset? Closed_at { get; set; }
        /// <summary>The comments property</summary>
        public int? Comments { get; set; }
        /// <summary>The comments_url property</summary>
        public string Comments_url { get; set; }
        /// <summary>The commits property</summary>
        public int? Commits { get; set; }
        /// <summary>The commits_url property</summary>
        public string Commits_url { get; set; }
        /// <summary>The created_at property</summary>
        public DateTimeOffset? Created_at { get; set; }
        /// <summary>The deletions property</summary>
        public int? Deletions { get; set; }
        /// <summary>The diff_url property</summary>
        public string Diff_url { get; set; }
        /// <summary>Indicates whether or not the pull request is a draft.</summary>
        public bool? Draft { get; set; }
        /// <summary>The head property</summary>
        public PullRequest_head Head { get; set; }
        /// <summary>The html_url property</summary>
        public string Html_url { get; set; }
        /// <summary>The id property</summary>
        public int? Id { get; set; }
        /// <summary>The issue_url property</summary>
        public string Issue_url { get; set; }
        /// <summary>The labels property</summary>
        public List<PullRequest_labels> Labels { get; set; }
        /// <summary>The locked property</summary>
        public bool? Locked { get; set; }
        /// <summary>Indicates whether maintainers can modify the pull request.</summary>
        public bool? Maintainer_can_modify { get; set; }
        /// <summary>The merge_commit_sha property</summary>
        public string Merge_commit_sha { get; set; }
        /// <summary>The mergeable property</summary>
        public bool? Mergeable { get; set; }
        /// <summary>The mergeable_state property</summary>
        public string Mergeable_state { get; set; }
        /// <summary>The merged property</summary>
        public bool? Merged { get; set; }
        /// <summary>The merged_at property</summary>
        public DateTimeOffset? Merged_at { get; set; }
        /// <summary>The merged_by property</summary>
        public SimpleUser Merged_by { get; set; }
        /// <summary>The milestone property</summary>
        public GitHubTodoDemo.GitHub.Models.Milestone Milestone { get; set; }
        /// <summary>The node_id property</summary>
        public string Node_id { get; set; }
        /// <summary>Number uniquely identifying the pull request within its repository.</summary>
        public int? Number { get; set; }
        /// <summary>The patch_url property</summary>
        public string Patch_url { get; set; }
        /// <summary>The rebaseable property</summary>
        public bool? Rebaseable { get; set; }
        /// <summary>The requested_reviewers property</summary>
        public List<SimpleUser> Requested_reviewers { get; set; }
        /// <summary>The requested_teams property</summary>
        public List<TeamSimple> Requested_teams { get; set; }
        /// <summary>The review_comment_url property</summary>
        public string Review_comment_url { get; set; }
        /// <summary>The review_comments property</summary>
        public int? Review_comments { get; set; }
        /// <summary>The review_comments_url property</summary>
        public string Review_comments_url { get; set; }
        /// <summary>State of this Pull Request. Either `open` or `closed`.</summary>
        public PullRequest_state? State { get; set; }
        /// <summary>The statuses_url property</summary>
        public string Statuses_url { get; set; }
        /// <summary>The title of the pull request.</summary>
        public string Title { get; set; }
        /// <summary>The updated_at property</summary>
        public DateTimeOffset? Updated_at { get; set; }
        /// <summary>The url property</summary>
        public string Url { get; set; }
        /// <summary>The user property</summary>
        public SimpleUser User { get; set; }
        /// <summary>
        /// Instantiates a new PullRequest and sets the default values.
        /// </summary>
        public PullRequest() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static PullRequest CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new PullRequest();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"_links", n => { _links = n.GetObjectValue<PullRequest__links>(PullRequest__links.CreateFromDiscriminatorValue); } },
                {"active_lock_reason", n => { Active_lock_reason = n.GetStringValue(); } },
                {"additions", n => { Additions = n.GetIntValue(); } },
                {"assignee", n => { Assignee = n.GetObjectValue<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue); } },
                {"assignees", n => { Assignees = n.GetCollectionOfObjectValues<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue)?.ToList(); } },
                {"author_association", n => { Author_association = n.GetEnumValue<Author_association>(); } },
                {"auto_merge", n => { Auto_merge = n.GetObjectValue<GitHubTodoDemo.GitHub.Models.Auto_merge>(GitHubTodoDemo.GitHub.Models.Auto_merge.CreateFromDiscriminatorValue); } },
                {"base", n => { Base = n.GetObjectValue<PullRequest_base>(PullRequest_base.CreateFromDiscriminatorValue); } },
                {"body", n => { Body = n.GetStringValue(); } },
                {"changed_files", n => { Changed_files = n.GetIntValue(); } },
                {"closed_at", n => { Closed_at = n.GetDateTimeOffsetValue(); } },
                {"comments", n => { Comments = n.GetIntValue(); } },
                {"comments_url", n => { Comments_url = n.GetStringValue(); } },
                {"commits", n => { Commits = n.GetIntValue(); } },
                {"commits_url", n => { Commits_url = n.GetStringValue(); } },
                {"created_at", n => { Created_at = n.GetDateTimeOffsetValue(); } },
                {"deletions", n => { Deletions = n.GetIntValue(); } },
                {"diff_url", n => { Diff_url = n.GetStringValue(); } },
                {"draft", n => { Draft = n.GetBoolValue(); } },
                {"head", n => { Head = n.GetObjectValue<PullRequest_head>(PullRequest_head.CreateFromDiscriminatorValue); } },
                {"html_url", n => { Html_url = n.GetStringValue(); } },
                {"id", n => { Id = n.GetIntValue(); } },
                {"issue_url", n => { Issue_url = n.GetStringValue(); } },
                {"labels", n => { Labels = n.GetCollectionOfObjectValues<PullRequest_labels>(PullRequest_labels.CreateFromDiscriminatorValue)?.ToList(); } },
                {"locked", n => { Locked = n.GetBoolValue(); } },
                {"maintainer_can_modify", n => { Maintainer_can_modify = n.GetBoolValue(); } },
                {"merge_commit_sha", n => { Merge_commit_sha = n.GetStringValue(); } },
                {"mergeable", n => { Mergeable = n.GetBoolValue(); } },
                {"mergeable_state", n => { Mergeable_state = n.GetStringValue(); } },
                {"merged", n => { Merged = n.GetBoolValue(); } },
                {"merged_at", n => { Merged_at = n.GetDateTimeOffsetValue(); } },
                {"merged_by", n => { Merged_by = n.GetObjectValue<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue); } },
                {"milestone", n => { Milestone = n.GetObjectValue<GitHubTodoDemo.GitHub.Models.Milestone>(GitHubTodoDemo.GitHub.Models.Milestone.CreateFromDiscriminatorValue); } },
                {"node_id", n => { Node_id = n.GetStringValue(); } },
                {"number", n => { Number = n.GetIntValue(); } },
                {"patch_url", n => { Patch_url = n.GetStringValue(); } },
                {"rebaseable", n => { Rebaseable = n.GetBoolValue(); } },
                {"requested_reviewers", n => { Requested_reviewers = n.GetCollectionOfObjectValues<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue)?.ToList(); } },
                {"requested_teams", n => { Requested_teams = n.GetCollectionOfObjectValues<TeamSimple>(TeamSimple.CreateFromDiscriminatorValue)?.ToList(); } },
                {"review_comment_url", n => { Review_comment_url = n.GetStringValue(); } },
                {"review_comments", n => { Review_comments = n.GetIntValue(); } },
                {"review_comments_url", n => { Review_comments_url = n.GetStringValue(); } },
                {"state", n => { State = n.GetEnumValue<PullRequest_state>(); } },
                {"statuses_url", n => { Statuses_url = n.GetStringValue(); } },
                {"title", n => { Title = n.GetStringValue(); } },
                {"updated_at", n => { Updated_at = n.GetDateTimeOffsetValue(); } },
                {"url", n => { Url = n.GetStringValue(); } },
                {"user", n => { User = n.GetObjectValue<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteObjectValue<PullRequest__links>("_links", _links);
            writer.WriteStringValue("active_lock_reason", Active_lock_reason);
            writer.WriteIntValue("additions", Additions);
            writer.WriteObjectValue<SimpleUser>("assignee", Assignee);
            writer.WriteCollectionOfObjectValues<SimpleUser>("assignees", Assignees);
            writer.WriteEnumValue<Author_association>("author_association", Author_association);
            writer.WriteObjectValue<GitHubTodoDemo.GitHub.Models.Auto_merge>("auto_merge", Auto_merge);
            writer.WriteObjectValue<PullRequest_base>("base", Base);
            writer.WriteStringValue("body", Body);
            writer.WriteIntValue("changed_files", Changed_files);
            writer.WriteDateTimeOffsetValue("closed_at", Closed_at);
            writer.WriteIntValue("comments", Comments);
            writer.WriteStringValue("comments_url", Comments_url);
            writer.WriteIntValue("commits", Commits);
            writer.WriteStringValue("commits_url", Commits_url);
            writer.WriteDateTimeOffsetValue("created_at", Created_at);
            writer.WriteIntValue("deletions", Deletions);
            writer.WriteStringValue("diff_url", Diff_url);
            writer.WriteBoolValue("draft", Draft);
            writer.WriteObjectValue<PullRequest_head>("head", Head);
            writer.WriteStringValue("html_url", Html_url);
            writer.WriteIntValue("id", Id);
            writer.WriteStringValue("issue_url", Issue_url);
            writer.WriteCollectionOfObjectValues<PullRequest_labels>("labels", Labels);
            writer.WriteBoolValue("locked", Locked);
            writer.WriteBoolValue("maintainer_can_modify", Maintainer_can_modify);
            writer.WriteStringValue("merge_commit_sha", Merge_commit_sha);
            writer.WriteBoolValue("mergeable", Mergeable);
            writer.WriteStringValue("mergeable_state", Mergeable_state);
            writer.WriteBoolValue("merged", Merged);
            writer.WriteDateTimeOffsetValue("merged_at", Merged_at);
            writer.WriteObjectValue<SimpleUser>("merged_by", Merged_by);
            writer.WriteObjectValue<GitHubTodoDemo.GitHub.Models.Milestone>("milestone", Milestone);
            writer.WriteStringValue("node_id", Node_id);
            writer.WriteIntValue("number", Number);
            writer.WriteStringValue("patch_url", Patch_url);
            writer.WriteBoolValue("rebaseable", Rebaseable);
            writer.WriteCollectionOfObjectValues<SimpleUser>("requested_reviewers", Requested_reviewers);
            writer.WriteCollectionOfObjectValues<TeamSimple>("requested_teams", Requested_teams);
            writer.WriteStringValue("review_comment_url", Review_comment_url);
            writer.WriteIntValue("review_comments", Review_comments);
            writer.WriteStringValue("review_comments_url", Review_comments_url);
            writer.WriteEnumValue<PullRequest_state>("state", State);
            writer.WriteStringValue("statuses_url", Statuses_url);
            writer.WriteStringValue("title", Title);
            writer.WriteDateTimeOffsetValue("updated_at", Updated_at);
            writer.WriteStringValue("url", Url);
            writer.WriteObjectValue<SimpleUser>("user", User);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
