using Microsoft.Kiota.Abstractions.Serialization;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System;
namespace GitHubTodoDemo.GitHub.Models {
    public class SecurityAndAnalysis_secret_scanning_push_protection : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The status property</summary>
        public SecurityAndAnalysis_secret_scanning_push_protection_status? Status { get; set; }
        /// <summary>
        /// Instantiates a new SecurityAndAnalysis_secret_scanning_push_protection and sets the default values.
        /// </summary>
        public SecurityAndAnalysis_secret_scanning_push_protection() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static SecurityAndAnalysis_secret_scanning_push_protection CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new SecurityAndAnalysis_secret_scanning_push_protection();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"status", n => { Status = n.GetEnumValue<SecurityAndAnalysis_secret_scanning_push_protection_status>(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteEnumValue<SecurityAndAnalysis_secret_scanning_push_protection_status>("status", Status);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
