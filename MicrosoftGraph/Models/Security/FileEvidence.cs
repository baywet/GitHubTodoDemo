using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models.Security {
    public class FileEvidence : AlertEvidence, IParsable {
        /// <summary>The status of the detection.The possible values are: detected, blocked, prevented, unknownFutureValue.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.Security.DetectionStatus? DetectionStatus { get; set; }
        /// <summary>The file details.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.Security.FileDetails FileDetails { get; set; }
        /// <summary>A unique identifier assigned to a device by Microsoft Defender for Endpoint.</summary>
        public string MdeDeviceId { get; set; }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static new FileEvidence CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new FileEvidence();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"detectionStatus", n => { DetectionStatus = n.GetEnumValue<DetectionStatus>(); } },
                {"fileDetails", n => { FileDetails = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Security.FileDetails>(GitHubTodoDemo.MicrosoftGraph.Models.Security.FileDetails.CreateFromDiscriminatorValue); } },
                {"mdeDeviceId", n => { MdeDeviceId = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteEnumValue<DetectionStatus>("detectionStatus", DetectionStatus);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Security.FileDetails>("fileDetails", FileDetails);
            writer.WriteStringValue("mdeDeviceId", MdeDeviceId);
        }
    }
}
