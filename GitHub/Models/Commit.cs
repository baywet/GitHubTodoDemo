using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.GitHub.Models {
    /// <summary>Commit</summary>
    public class Commit : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The author property</summary>
        public SimpleUser Author { get; set; }
        /// <summary>The comments_url property</summary>
        public string Comments_url { get; set; }
        /// <summary>The commit property</summary>
        public Commit_commit Commit_prop { get; set; }
        /// <summary>The committer property</summary>
        public SimpleUser Committer { get; set; }
        /// <summary>The files property</summary>
        public List<Commit_files> Files { get; set; }
        /// <summary>The html_url property</summary>
        public string Html_url { get; set; }
        /// <summary>The node_id property</summary>
        public string Node_id { get; set; }
        /// <summary>The parents property</summary>
        public List<Commit_parents> Parents { get; set; }
        /// <summary>The sha property</summary>
        public string Sha { get; set; }
        /// <summary>The stats property</summary>
        public Commit_stats Stats { get; set; }
        /// <summary>The url property</summary>
        public string Url { get; set; }
        /// <summary>
        /// Instantiates a new Commit and sets the default values.
        /// </summary>
        public Commit() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static Commit CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Commit();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"author", n => { Author = n.GetObjectValue<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue); } },
                {"comments_url", n => { Comments_url = n.GetStringValue(); } },
                {"commit", n => { Commit_prop = n.GetObjectValue<Commit_commit>(Commit_commit.CreateFromDiscriminatorValue); } },
                {"committer", n => { Committer = n.GetObjectValue<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue); } },
                {"files", n => { Files = n.GetCollectionOfObjectValues<Commit_files>(Commit_files.CreateFromDiscriminatorValue)?.ToList(); } },
                {"html_url", n => { Html_url = n.GetStringValue(); } },
                {"node_id", n => { Node_id = n.GetStringValue(); } },
                {"parents", n => { Parents = n.GetCollectionOfObjectValues<Commit_parents>(Commit_parents.CreateFromDiscriminatorValue)?.ToList(); } },
                {"sha", n => { Sha = n.GetStringValue(); } },
                {"stats", n => { Stats = n.GetObjectValue<Commit_stats>(Commit_stats.CreateFromDiscriminatorValue); } },
                {"url", n => { Url = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteObjectValue<SimpleUser>("author", Author);
            writer.WriteStringValue("comments_url", Comments_url);
            writer.WriteObjectValue<Commit_commit>("commit", Commit_prop);
            writer.WriteObjectValue<SimpleUser>("committer", Committer);
            writer.WriteCollectionOfObjectValues<Commit_files>("files", Files);
            writer.WriteStringValue("html_url", Html_url);
            writer.WriteStringValue("node_id", Node_id);
            writer.WriteCollectionOfObjectValues<Commit_parents>("parents", Parents);
            writer.WriteStringValue("sha", Sha);
            writer.WriteObjectValue<Commit_stats>("stats", Stats);
            writer.WriteStringValue("url", Url);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
