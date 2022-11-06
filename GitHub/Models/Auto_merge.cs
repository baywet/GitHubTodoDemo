using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.GitHub.Models {
    /// <summary>The status of auto merging a pull request.</summary>
    public class Auto_merge : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>Commit message for the merge commit.</summary>
        public string Commit_message { get; set; }
        /// <summary>Title for the merge commit message.</summary>
        public string Commit_title { get; set; }
        /// <summary>Simple User</summary>
        public SimpleUser Enabled_by { get; set; }
        /// <summary>The merge method to use.</summary>
        public Auto_merge_merge_method? Merge_method { get; set; }
        /// <summary>
        /// Instantiates a new auto_merge and sets the default values.
        /// </summary>
        public Auto_merge() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static Auto_merge CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Auto_merge();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"commit_message", n => { Commit_message = n.GetStringValue(); } },
                {"commit_title", n => { Commit_title = n.GetStringValue(); } },
                {"enabled_by", n => { Enabled_by = n.GetObjectValue<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue); } },
                {"merge_method", n => { Merge_method = n.GetEnumValue<Auto_merge_merge_method>(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteStringValue("commit_message", Commit_message);
            writer.WriteStringValue("commit_title", Commit_title);
            writer.WriteObjectValue<SimpleUser>("enabled_by", Enabled_by);
            writer.WriteEnumValue<Auto_merge_merge_method>("merge_method", Merge_method);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
