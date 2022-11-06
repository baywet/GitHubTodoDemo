using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.GitHub.Models {
    public class PullRequest_head : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The label property</summary>
        public string Label { get; set; }
        /// <summary>The ref property</summary>
        public string Ref { get; set; }
        /// <summary>The repo property</summary>
        public PullRequest_head_repo Repo { get; set; }
        /// <summary>The sha property</summary>
        public string Sha { get; set; }
        /// <summary>The user property</summary>
        public PullRequest_head_user User { get; set; }
        /// <summary>
        /// Instantiates a new PullRequest_head and sets the default values.
        /// </summary>
        public PullRequest_head() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static PullRequest_head CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new PullRequest_head();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"label", n => { Label = n.GetStringValue(); } },
                {"ref", n => { Ref = n.GetStringValue(); } },
                {"repo", n => { Repo = n.GetObjectValue<PullRequest_head_repo>(PullRequest_head_repo.CreateFromDiscriminatorValue); } },
                {"sha", n => { Sha = n.GetStringValue(); } },
                {"user", n => { User = n.GetObjectValue<PullRequest_head_user>(PullRequest_head_user.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteStringValue("label", Label);
            writer.WriteStringValue("ref", Ref);
            writer.WriteObjectValue<PullRequest_head_repo>("repo", Repo);
            writer.WriteStringValue("sha", Sha);
            writer.WriteObjectValue<PullRequest_head_user>("user", User);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
