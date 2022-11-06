using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.GitHub.Models {
    /// <summary>Pull Request Simple</summary>
    public class PullRequestSimple : IAdditionalDataHolder, IParsable {
        /// <summary>The _links property</summary>
        public PullRequestSimple__links _links { get; set; }
        /// <summary>The active_lock_reason property</summary>
        public string Active_lock_reason { get; set; }
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The assignee property</summary>
        public SimpleUser Assignee { get; set; }
        /// <summary>The assignees property</summary>
        public List<SimpleUser> Assignees { get; set; }
        /// <summary>How the author is associated with the repository.</summary>
        public GitHubTodoDemo.GitHub.Models.Author_association? Author_association { get; set; }
        /// <summary>The status of auto merging a pull request.</summary>
        public GitHubTodoDemo.GitHub.Models.Auto_merge Auto_merge { get; set; }
        /// <summary>The base property</summary>
        public PullRequestSimple_base Base { get; set; }
        /// <summary>The body property</summary>
        public string Body { get; set; }
        /// <summary>The closed_at property</summary>
        public DateTimeOffset? Closed_at { get; set; }
        /// <summary>The comments_url property</summary>
        public string Comments_url { get; set; }
        /// <summary>The commits_url property</summary>
        public string Commits_url { get; set; }
        /// <summary>The created_at property</summary>
        public DateTimeOffset? Created_at { get; set; }
        /// <summary>The diff_url property</summary>
        public string Diff_url { get; set; }
        /// <summary>Indicates whether or not the pull request is a draft.</summary>
        public bool? Draft { get; set; }
        /// <summary>The head property</summary>
        public PullRequestSimple_head Head { get; set; }
        /// <summary>The html_url property</summary>
        public string Html_url { get; set; }
        /// <summary>The id property</summary>
        public int? Id { get; set; }
        /// <summary>The issue_url property</summary>
        public string Issue_url { get; set; }
        /// <summary>The labels property</summary>
        public List<PullRequestSimple_labels> Labels { get; set; }
        /// <summary>The locked property</summary>
        public bool? Locked { get; set; }
        /// <summary>The merge_commit_sha property</summary>
        public string Merge_commit_sha { get; set; }
        /// <summary>The merged_at property</summary>
        public DateTimeOffset? Merged_at { get; set; }
        /// <summary>The milestone property</summary>
        public GitHubTodoDemo.GitHub.Models.Milestone Milestone { get; set; }
        /// <summary>The node_id property</summary>
        public string Node_id { get; set; }
        /// <summary>The number property</summary>
        public int? Number { get; set; }
        /// <summary>The patch_url property</summary>
        public string Patch_url { get; set; }
        /// <summary>The requested_reviewers property</summary>
        public List<SimpleUser> Requested_reviewers { get; set; }
        /// <summary>The requested_teams property</summary>
        public List<TeamSimple> Requested_teams { get; set; }
        /// <summary>The review_comment_url property</summary>
        public string Review_comment_url { get; set; }
        /// <summary>The review_comments_url property</summary>
        public string Review_comments_url { get; set; }
        /// <summary>The state property</summary>
        public string State { get; set; }
        /// <summary>The statuses_url property</summary>
        public string Statuses_url { get; set; }
        /// <summary>The title property</summary>
        public string Title { get; set; }
        /// <summary>The updated_at property</summary>
        public DateTimeOffset? Updated_at { get; set; }
        /// <summary>The url property</summary>
        public string Url { get; set; }
        /// <summary>The user property</summary>
        public SimpleUser User { get; set; }
        /// <summary>
        /// Instantiates a new PullRequestSimple and sets the default values.
        /// </summary>
        public PullRequestSimple() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static PullRequestSimple CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new PullRequestSimple();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"_links", n => { _links = n.GetObjectValue<PullRequestSimple__links>(PullRequestSimple__links.CreateFromDiscriminatorValue); } },
                {"active_lock_reason", n => { Active_lock_reason = n.GetStringValue(); } },
                {"assignee", n => { Assignee = n.GetObjectValue<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue); } },
                {"assignees", n => { Assignees = n.GetCollectionOfObjectValues<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue)?.ToList(); } },
                {"author_association", n => { Author_association = n.GetEnumValue<Author_association>(); } },
                {"auto_merge", n => { Auto_merge = n.GetObjectValue<GitHubTodoDemo.GitHub.Models.Auto_merge>(GitHubTodoDemo.GitHub.Models.Auto_merge.CreateFromDiscriminatorValue); } },
                {"base", n => { Base = n.GetObjectValue<PullRequestSimple_base>(PullRequestSimple_base.CreateFromDiscriminatorValue); } },
                {"body", n => { Body = n.GetStringValue(); } },
                {"closed_at", n => { Closed_at = n.GetDateTimeOffsetValue(); } },
                {"comments_url", n => { Comments_url = n.GetStringValue(); } },
                {"commits_url", n => { Commits_url = n.GetStringValue(); } },
                {"created_at", n => { Created_at = n.GetDateTimeOffsetValue(); } },
                {"diff_url", n => { Diff_url = n.GetStringValue(); } },
                {"draft", n => { Draft = n.GetBoolValue(); } },
                {"head", n => { Head = n.GetObjectValue<PullRequestSimple_head>(PullRequestSimple_head.CreateFromDiscriminatorValue); } },
                {"html_url", n => { Html_url = n.GetStringValue(); } },
                {"id", n => { Id = n.GetIntValue(); } },
                {"issue_url", n => { Issue_url = n.GetStringValue(); } },
                {"labels", n => { Labels = n.GetCollectionOfObjectValues<PullRequestSimple_labels>(PullRequestSimple_labels.CreateFromDiscriminatorValue)?.ToList(); } },
                {"locked", n => { Locked = n.GetBoolValue(); } },
                {"merge_commit_sha", n => { Merge_commit_sha = n.GetStringValue(); } },
                {"merged_at", n => { Merged_at = n.GetDateTimeOffsetValue(); } },
                {"milestone", n => { Milestone = n.GetObjectValue<GitHubTodoDemo.GitHub.Models.Milestone>(GitHubTodoDemo.GitHub.Models.Milestone.CreateFromDiscriminatorValue); } },
                {"node_id", n => { Node_id = n.GetStringValue(); } },
                {"number", n => { Number = n.GetIntValue(); } },
                {"patch_url", n => { Patch_url = n.GetStringValue(); } },
                {"requested_reviewers", n => { Requested_reviewers = n.GetCollectionOfObjectValues<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue)?.ToList(); } },
                {"requested_teams", n => { Requested_teams = n.GetCollectionOfObjectValues<TeamSimple>(TeamSimple.CreateFromDiscriminatorValue)?.ToList(); } },
                {"review_comment_url", n => { Review_comment_url = n.GetStringValue(); } },
                {"review_comments_url", n => { Review_comments_url = n.GetStringValue(); } },
                {"state", n => { State = n.GetStringValue(); } },
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
            writer.WriteObjectValue<PullRequestSimple__links>("_links", _links);
            writer.WriteStringValue("active_lock_reason", Active_lock_reason);
            writer.WriteObjectValue<SimpleUser>("assignee", Assignee);
            writer.WriteCollectionOfObjectValues<SimpleUser>("assignees", Assignees);
            writer.WriteEnumValue<Author_association>("author_association", Author_association);
            writer.WriteObjectValue<GitHubTodoDemo.GitHub.Models.Auto_merge>("auto_merge", Auto_merge);
            writer.WriteObjectValue<PullRequestSimple_base>("base", Base);
            writer.WriteStringValue("body", Body);
            writer.WriteDateTimeOffsetValue("closed_at", Closed_at);
            writer.WriteStringValue("comments_url", Comments_url);
            writer.WriteStringValue("commits_url", Commits_url);
            writer.WriteDateTimeOffsetValue("created_at", Created_at);
            writer.WriteStringValue("diff_url", Diff_url);
            writer.WriteBoolValue("draft", Draft);
            writer.WriteObjectValue<PullRequestSimple_head>("head", Head);
            writer.WriteStringValue("html_url", Html_url);
            writer.WriteIntValue("id", Id);
            writer.WriteStringValue("issue_url", Issue_url);
            writer.WriteCollectionOfObjectValues<PullRequestSimple_labels>("labels", Labels);
            writer.WriteBoolValue("locked", Locked);
            writer.WriteStringValue("merge_commit_sha", Merge_commit_sha);
            writer.WriteDateTimeOffsetValue("merged_at", Merged_at);
            writer.WriteObjectValue<GitHubTodoDemo.GitHub.Models.Milestone>("milestone", Milestone);
            writer.WriteStringValue("node_id", Node_id);
            writer.WriteIntValue("number", Number);
            writer.WriteStringValue("patch_url", Patch_url);
            writer.WriteCollectionOfObjectValues<SimpleUser>("requested_reviewers", Requested_reviewers);
            writer.WriteCollectionOfObjectValues<TeamSimple>("requested_teams", Requested_teams);
            writer.WriteStringValue("review_comment_url", Review_comment_url);
            writer.WriteStringValue("review_comments_url", Review_comments_url);
            writer.WriteStringValue("state", State);
            writer.WriteStringValue("statuses_url", Statuses_url);
            writer.WriteStringValue("title", Title);
            writer.WriteDateTimeOffsetValue("updated_at", Updated_at);
            writer.WriteStringValue("url", Url);
            writer.WriteObjectValue<SimpleUser>("user", User);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
