using GithubTodoDemo.MicrosoftGraph.Models;
using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models {
    public class IdentityUserFlowAttribute : Entity, IParsable {
        /// <summary>The dataType property</summary>
        public IdentityUserFlowAttributeDataType? DataType { get; set; }
        /// <summary>The description of the user flow attribute that&apos;s shown to the user at the time of sign-up.</summary>
        public string Description { get; set; }
        /// <summary>The display name of the user flow attribute.</summary>
        public string DisplayName { get; set; }
        /// <summary>The userFlowAttributeType property</summary>
        public IdentityUserFlowAttributeType? UserFlowAttributeType { get; set; }
        /// <summary>
        /// Instantiates a new identityUserFlowAttribute and sets the default values.
        /// </summary>
        public IdentityUserFlowAttribute() : base() {
            OdataType = "#microsoft.graph.identityUserFlowAttribute";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static new IdentityUserFlowAttribute CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            var mappingValue = parseNode.GetChildNode("@odata.type")?.GetStringValue();
            return mappingValue switch {
                "#microsoft.graph.identityBuiltInUserFlowAttribute" => new IdentityBuiltInUserFlowAttribute(),
                "#microsoft.graph.identityCustomUserFlowAttribute" => new IdentityCustomUserFlowAttribute(),
                _ => new IdentityUserFlowAttribute(),
            };
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"dataType", n => { DataType = n.GetEnumValue<IdentityUserFlowAttributeDataType>(); } },
                {"description", n => { Description = n.GetStringValue(); } },
                {"displayName", n => { DisplayName = n.GetStringValue(); } },
                {"userFlowAttributeType", n => { UserFlowAttributeType = n.GetEnumValue<IdentityUserFlowAttributeType>(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteEnumValue<IdentityUserFlowAttributeDataType>("dataType", DataType);
            writer.WriteStringValue("description", Description);
            writer.WriteStringValue("displayName", DisplayName);
            writer.WriteEnumValue<IdentityUserFlowAttributeType>("userFlowAttributeType", UserFlowAttributeType);
        }
    }
}