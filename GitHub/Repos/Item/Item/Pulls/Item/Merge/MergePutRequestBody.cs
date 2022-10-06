using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.GitHub.Repos.Item.Item.Pulls.Item.Merge {
    public class MergePutRequestBody : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>Extra detail to append to automatic commit message.</summary>
        public string Commit_message { get; set; }
        /// <summary>Title for the automatic commit message.</summary>
        public string Commit_title { get; set; }
        /// <summary>Merge method to use. Possible values are `merge`, `squash` or `rebase`. Default is `merge`.</summary>
        public MergePutRequestBody_merge_method? Merge_method { get; set; }
        /// <summary>SHA that pull request head must match to allow merge.</summary>
        public string Sha { get; set; }
        /// <summary>
        /// Instantiates a new mergePutRequestBody and sets the default values.
        /// </summary>
        public MergePutRequestBody() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static MergePutRequestBody CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new MergePutRequestBody();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"commit_message", n => { Commit_message = n.GetStringValue(); } },
                {"commit_title", n => { Commit_title = n.GetStringValue(); } },
                {"merge_method", n => { Merge_method = n.GetEnumValue<MergePutRequestBody_merge_method>(); } },
                {"sha", n => { Sha = n.GetStringValue(); } },
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
            writer.WriteEnumValue<MergePutRequestBody_merge_method>("merge_method", Merge_method);
            writer.WriteStringValue("sha", Sha);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
