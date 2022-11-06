using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.GitHub.Models {
    public class Commit_files : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The additions property</summary>
        public int? Additions { get; set; }
        /// <summary>The blob_url property</summary>
        public string Blob_url { get; set; }
        /// <summary>The changes property</summary>
        public int? Changes { get; set; }
        /// <summary>The contents_url property</summary>
        public string Contents_url { get; set; }
        /// <summary>The deletions property</summary>
        public int? Deletions { get; set; }
        /// <summary>The filename property</summary>
        public string Filename { get; set; }
        /// <summary>The patch property</summary>
        public string Patch { get; set; }
        /// <summary>The previous_filename property</summary>
        public string Previous_filename { get; set; }
        /// <summary>The raw_url property</summary>
        public string Raw_url { get; set; }
        /// <summary>The sha property</summary>
        public string Sha { get; set; }
        /// <summary>The status property</summary>
        public string Status { get; set; }
        /// <summary>
        /// Instantiates a new Commit_files and sets the default values.
        /// </summary>
        public Commit_files() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static Commit_files CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Commit_files();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"additions", n => { Additions = n.GetIntValue(); } },
                {"blob_url", n => { Blob_url = n.GetStringValue(); } },
                {"changes", n => { Changes = n.GetIntValue(); } },
                {"contents_url", n => { Contents_url = n.GetStringValue(); } },
                {"deletions", n => { Deletions = n.GetIntValue(); } },
                {"filename", n => { Filename = n.GetStringValue(); } },
                {"patch", n => { Patch = n.GetStringValue(); } },
                {"previous_filename", n => { Previous_filename = n.GetStringValue(); } },
                {"raw_url", n => { Raw_url = n.GetStringValue(); } },
                {"sha", n => { Sha = n.GetStringValue(); } },
                {"status", n => { Status = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteIntValue("additions", Additions);
            writer.WriteStringValue("blob_url", Blob_url);
            writer.WriteIntValue("changes", Changes);
            writer.WriteStringValue("contents_url", Contents_url);
            writer.WriteIntValue("deletions", Deletions);
            writer.WriteStringValue("filename", Filename);
            writer.WriteStringValue("patch", Patch);
            writer.WriteStringValue("previous_filename", Previous_filename);
            writer.WriteStringValue("raw_url", Raw_url);
            writer.WriteStringValue("sha", Sha);
            writer.WriteStringValue("status", Status);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
