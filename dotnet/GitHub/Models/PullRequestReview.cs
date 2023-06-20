using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.GitHub.Models {
    /// <summary>
    /// Pull Request Reviews are reviews on pull requests.
    /// </summary>
    public class PullRequestReview : IAdditionalDataHolder, IParsable {
        /// <summary>The _links property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public PullRequestReview__links? _links { get; set; }
#nullable restore
#else
        public PullRequestReview__links _links { get; set; }
#endif
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>How the author is associated with the repository.</summary>
        public GitHubTodoDemo.GitHub.Models.Author_association? Author_association { get; set; }
        /// <summary>The text of the review.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Body { get; set; }
#nullable restore
#else
        public string Body { get; set; }
#endif
        /// <summary>The body_html property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Body_html { get; set; }
#nullable restore
#else
        public string Body_html { get; set; }
#endif
        /// <summary>The body_text property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Body_text { get; set; }
#nullable restore
#else
        public string Body_text { get; set; }
#endif
        /// <summary>A commit SHA for the review.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Commit_id { get; set; }
#nullable restore
#else
        public string Commit_id { get; set; }
#endif
        /// <summary>The html_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Html_url { get; set; }
#nullable restore
#else
        public string Html_url { get; set; }
#endif
        /// <summary>Unique identifier of the review</summary>
        public int? Id { get; set; }
        /// <summary>The node_id property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Node_id { get; set; }
#nullable restore
#else
        public string Node_id { get; set; }
#endif
        /// <summary>The pull_request_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Pull_request_url { get; set; }
#nullable restore
#else
        public string Pull_request_url { get; set; }
#endif
        /// <summary>The state property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? State { get; set; }
#nullable restore
#else
        public string State { get; set; }
#endif
        /// <summary>The submitted_at property</summary>
        public DateTimeOffset? Submitted_at { get; set; }
        /// <summary>The user property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public SimpleUser? User { get; set; }
#nullable restore
#else
        public SimpleUser User { get; set; }
#endif
        /// <summary>
        /// Instantiates a new PullRequestReview and sets the default values.
        /// </summary>
        public PullRequestReview() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static PullRequestReview CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new PullRequestReview();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"_links", n => { _links = n.GetObjectValue<PullRequestReview__links>(PullRequestReview__links.CreateFromDiscriminatorValue); } },
                {"author_association", n => { Author_association = n.GetEnumValue<Author_association>(); } },
                {"body", n => { Body = n.GetStringValue(); } },
                {"body_html", n => { Body_html = n.GetStringValue(); } },
                {"body_text", n => { Body_text = n.GetStringValue(); } },
                {"commit_id", n => { Commit_id = n.GetStringValue(); } },
                {"html_url", n => { Html_url = n.GetStringValue(); } },
                {"id", n => { Id = n.GetIntValue(); } },
                {"node_id", n => { Node_id = n.GetStringValue(); } },
                {"pull_request_url", n => { Pull_request_url = n.GetStringValue(); } },
                {"state", n => { State = n.GetStringValue(); } },
                {"submitted_at", n => { Submitted_at = n.GetDateTimeOffsetValue(); } },
                {"user", n => { User = n.GetObjectValue<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteObjectValue<PullRequestReview__links>("_links", _links);
            writer.WriteEnumValue<Author_association>("author_association", Author_association);
            writer.WriteStringValue("body", Body);
            writer.WriteStringValue("body_html", Body_html);
            writer.WriteStringValue("body_text", Body_text);
            writer.WriteStringValue("commit_id", Commit_id);
            writer.WriteStringValue("html_url", Html_url);
            writer.WriteIntValue("id", Id);
            writer.WriteStringValue("node_id", Node_id);
            writer.WriteStringValue("pull_request_url", Pull_request_url);
            writer.WriteStringValue("state", State);
            writer.WriteDateTimeOffsetValue("submitted_at", Submitted_at);
            writer.WriteObjectValue<SimpleUser>("user", User);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
