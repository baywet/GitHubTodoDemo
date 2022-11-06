using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.GitHub.Repos.Item.Item.Pulls.Item.UpdateBranch {
    public class UpdateBranchPutRequestBody : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The expected SHA of the pull request&apos;s HEAD ref. This is the most recent commit on the pull request&apos;s branch. If the expected SHA does not match the pull request&apos;s HEAD, you will receive a `422 Unprocessable Entity` status. You can use the &quot;[List commits](https://docs.github.com/rest/reference/repos#list-commits)&quot; endpoint to find the most recent commit SHA. Default: SHA of the pull request&apos;s current HEAD ref.</summary>
        public string Expected_head_sha { get; set; }
        /// <summary>
        /// Instantiates a new updateBranchPutRequestBody and sets the default values.
        /// </summary>
        public UpdateBranchPutRequestBody() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static UpdateBranchPutRequestBody CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new UpdateBranchPutRequestBody();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"expected_head_sha", n => { Expected_head_sha = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteStringValue("expected_head_sha", Expected_head_sha);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
