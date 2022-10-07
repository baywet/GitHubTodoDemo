using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models {
    public class ExcludeTarget : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The object identifier of an Azure Active Directory user or group.</summary>
        public string Id { get; set; }
        /// <summary>The OdataType property</summary>
        public string OdataType { get; set; }
        /// <summary>The targetType property</summary>
        public AuthenticationMethodTargetType? TargetType { get; set; }
        /// <summary>
        /// Instantiates a new excludeTarget and sets the default values.
        /// </summary>
        public ExcludeTarget() {
            AdditionalData = new Dictionary<string, object>();
            OdataType = "#microsoft.graph.excludeTarget";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static ExcludeTarget CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new ExcludeTarget();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"id", n => { Id = n.GetStringValue(); } },
                {"@odata.type", n => { OdataType = n.GetStringValue(); } },
                {"targetType", n => { TargetType = n.GetEnumValue<AuthenticationMethodTargetType>(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteStringValue("id", Id);
            writer.WriteStringValue("@odata.type", OdataType);
            writer.WriteEnumValue<AuthenticationMethodTargetType>("targetType", TargetType);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}