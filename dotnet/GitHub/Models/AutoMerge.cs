using Microsoft.Kiota.Abstractions.Serialization;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System;
namespace GitHubTodoDemo.GitHub.Models {
    /// <summary>
    /// The status of auto merging a pull request.
    /// </summary>
    public class AutoMerge : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>Commit message for the merge commit.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? CommitMessage { get; set; }
#nullable restore
#else
        public string CommitMessage { get; set; }
#endif
        /// <summary>Title for the merge commit message.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? CommitTitle { get; set; }
#nullable restore
#else
        public string CommitTitle { get; set; }
#endif
        /// <summary>A GitHub user.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public SimpleUser? EnabledBy { get; set; }
#nullable restore
#else
        public SimpleUser EnabledBy { get; set; }
#endif
        /// <summary>The merge method to use.</summary>
        public AutoMerge_merge_method? MergeMethod { get; set; }
        /// <summary>
        /// Instantiates a new AutoMerge and sets the default values.
        /// </summary>
        public AutoMerge() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static AutoMerge CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new AutoMerge();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"commit_message", n => { CommitMessage = n.GetStringValue(); } },
                {"commit_title", n => { CommitTitle = n.GetStringValue(); } },
                {"enabled_by", n => { EnabledBy = n.GetObjectValue<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue); } },
                {"merge_method", n => { MergeMethod = n.GetEnumValue<AutoMerge_merge_method>(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteStringValue("commit_message", CommitMessage);
            writer.WriteStringValue("commit_title", CommitTitle);
            writer.WriteObjectValue<SimpleUser>("enabled_by", EnabledBy);
            writer.WriteEnumValue<AutoMerge_merge_method>("merge_method", MergeMethod);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
