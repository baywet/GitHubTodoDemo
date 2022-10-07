using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models {
    public class UserTrainingContentEventInfo : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>Browser of the user from where the training event was generated.</summary>
        public string Browser { get; set; }
        /// <summary>Date and time of the training content playback by the user.</summary>
        public DateTimeOffset? ContentDateTime { get; set; }
        /// <summary>IP address of the user for the training event.</summary>
        public string IpAddress { get; set; }
        /// <summary>The OdataType property</summary>
        public string OdataType { get; set; }
        /// <summary>The operating system, platform, and device details of the user for the training event.</summary>
        public string OsPlatformDeviceDetails { get; set; }
        /// <summary>Potential improvement in the tenant security posture after completion of the training by the user.</summary>
        public double? PotentialScoreImpact { get; set; }
        /// <summary>
        /// Instantiates a new userTrainingContentEventInfo and sets the default values.
        /// </summary>
        public UserTrainingContentEventInfo() {
            AdditionalData = new Dictionary<string, object>();
            OdataType = "#microsoft.graph.userTrainingContentEventInfo";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static UserTrainingContentEventInfo CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new UserTrainingContentEventInfo();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"browser", n => { Browser = n.GetStringValue(); } },
                {"contentDateTime", n => { ContentDateTime = n.GetDateTimeOffsetValue(); } },
                {"ipAddress", n => { IpAddress = n.GetStringValue(); } },
                {"@odata.type", n => { OdataType = n.GetStringValue(); } },
                {"osPlatformDeviceDetails", n => { OsPlatformDeviceDetails = n.GetStringValue(); } },
                {"potentialScoreImpact", n => { PotentialScoreImpact = n.GetDoubleValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteStringValue("browser", Browser);
            writer.WriteDateTimeOffsetValue("contentDateTime", ContentDateTime);
            writer.WriteStringValue("ipAddress", IpAddress);
            writer.WriteStringValue("@odata.type", OdataType);
            writer.WriteStringValue("osPlatformDeviceDetails", OsPlatformDeviceDetails);
            writer.WriteDoubleValue("potentialScoreImpact", PotentialScoreImpact);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}