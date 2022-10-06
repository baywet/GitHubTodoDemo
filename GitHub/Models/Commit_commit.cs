using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.GitHub.Models {
    public class Commit_commit : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>Metaproperties for Git author/committer information.</summary>
        public NullableGitUser Author { get; set; }
        /// <summary>The comment_count property</summary>
        public int? Comment_count { get; set; }
        /// <summary>Metaproperties for Git author/committer information.</summary>
        public NullableGitUser Committer { get; set; }
        /// <summary>The message property</summary>
        public string Message { get; set; }
        /// <summary>The tree property</summary>
        public Commit_commit_tree Tree { get; set; }
        /// <summary>The url property</summary>
        public string Url { get; set; }
        /// <summary>The verification property</summary>
        public GithubTodoDemo.GitHub.Models.Verification Verification { get; set; }
        /// <summary>
        /// Instantiates a new Commit_commit and sets the default values.
        /// </summary>
        public Commit_commit() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static Commit_commit CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Commit_commit();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"author", n => { Author = n.GetObjectValue<NullableGitUser>(NullableGitUser.CreateFromDiscriminatorValue); } },
                {"comment_count", n => { Comment_count = n.GetIntValue(); } },
                {"committer", n => { Committer = n.GetObjectValue<NullableGitUser>(NullableGitUser.CreateFromDiscriminatorValue); } },
                {"message", n => { Message = n.GetStringValue(); } },
                {"tree", n => { Tree = n.GetObjectValue<Commit_commit_tree>(Commit_commit_tree.CreateFromDiscriminatorValue); } },
                {"url", n => { Url = n.GetStringValue(); } },
                {"verification", n => { Verification = n.GetObjectValue<GithubTodoDemo.GitHub.Models.Verification>(GithubTodoDemo.GitHub.Models.Verification.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteObjectValue<NullableGitUser>("author", Author);
            writer.WriteIntValue("comment_count", Comment_count);
            writer.WriteObjectValue<NullableGitUser>("committer", Committer);
            writer.WriteStringValue("message", Message);
            writer.WriteObjectValue<Commit_commit_tree>("tree", Tree);
            writer.WriteStringValue("url", Url);
            writer.WriteObjectValue<GithubTodoDemo.GitHub.Models.Verification>("verification", Verification);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
