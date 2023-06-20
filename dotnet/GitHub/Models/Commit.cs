using Microsoft.Kiota.Abstractions.Serialization;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System;
namespace GitHubTodoDemo.GitHub.Models {
    /// <summary>
    /// Commit
    /// </summary>
    public class Commit : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>A GitHub user.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public NullableSimpleUser? Author { get; set; }
#nullable restore
#else
        public NullableSimpleUser Author { get; set; }
#endif
        /// <summary>The comments_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? CommentsUrl { get; set; }
#nullable restore
#else
        public string CommentsUrl { get; set; }
#endif
        /// <summary>The commit property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public Commit_commit? CommitProp { get; set; }
#nullable restore
#else
        public Commit_commit CommitProp { get; set; }
#endif
        /// <summary>A GitHub user.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public NullableSimpleUser? Committer { get; set; }
#nullable restore
#else
        public NullableSimpleUser Committer { get; set; }
#endif
        /// <summary>The files property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<DiffEntry>? Files { get; set; }
#nullable restore
#else
        public List<DiffEntry> Files { get; set; }
#endif
        /// <summary>The html_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? HtmlUrl { get; set; }
#nullable restore
#else
        public string HtmlUrl { get; set; }
#endif
        /// <summary>The node_id property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? NodeId { get; set; }
#nullable restore
#else
        public string NodeId { get; set; }
#endif
        /// <summary>The parents property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<Commit_parents>? Parents { get; set; }
#nullable restore
#else
        public List<Commit_parents> Parents { get; set; }
#endif
        /// <summary>The sha property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Sha { get; set; }
#nullable restore
#else
        public string Sha { get; set; }
#endif
        /// <summary>The stats property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public Commit_stats? Stats { get; set; }
#nullable restore
#else
        public Commit_stats Stats { get; set; }
#endif
        /// <summary>The url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Url { get; set; }
#nullable restore
#else
        public string Url { get; set; }
#endif
        /// <summary>
        /// Instantiates a new Commit and sets the default values.
        /// </summary>
        public Commit() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static Commit CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Commit();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"author", n => { Author = n.GetObjectValue<NullableSimpleUser>(NullableSimpleUser.CreateFromDiscriminatorValue); } },
                {"comments_url", n => { CommentsUrl = n.GetStringValue(); } },
                {"commit", n => { CommitProp = n.GetObjectValue<Commit_commit>(Commit_commit.CreateFromDiscriminatorValue); } },
                {"committer", n => { Committer = n.GetObjectValue<NullableSimpleUser>(NullableSimpleUser.CreateFromDiscriminatorValue); } },
                {"files", n => { Files = n.GetCollectionOfObjectValues<DiffEntry>(DiffEntry.CreateFromDiscriminatorValue)?.ToList(); } },
                {"html_url", n => { HtmlUrl = n.GetStringValue(); } },
                {"node_id", n => { NodeId = n.GetStringValue(); } },
                {"parents", n => { Parents = n.GetCollectionOfObjectValues<Commit_parents>(Commit_parents.CreateFromDiscriminatorValue)?.ToList(); } },
                {"sha", n => { Sha = n.GetStringValue(); } },
                {"stats", n => { Stats = n.GetObjectValue<Commit_stats>(Commit_stats.CreateFromDiscriminatorValue); } },
                {"url", n => { Url = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteObjectValue<NullableSimpleUser>("author", Author);
            writer.WriteStringValue("comments_url", CommentsUrl);
            writer.WriteObjectValue<Commit_commit>("commit", CommitProp);
            writer.WriteObjectValue<NullableSimpleUser>("committer", Committer);
            writer.WriteCollectionOfObjectValues<DiffEntry>("files", Files);
            writer.WriteStringValue("html_url", HtmlUrl);
            writer.WriteStringValue("node_id", NodeId);
            writer.WriteCollectionOfObjectValues<Commit_parents>("parents", Parents);
            writer.WriteStringValue("sha", Sha);
            writer.WriteObjectValue<Commit_stats>("stats", Stats);
            writer.WriteStringValue("url", Url);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
