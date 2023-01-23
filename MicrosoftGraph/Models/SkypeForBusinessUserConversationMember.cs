using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models {
    public class SkypeForBusinessUserConversationMember : ConversationMember, IParsable {
        /// <summary>The tenantId property</summary>
        public string TenantId { get; set; }
        /// <summary>The userId property</summary>
        public string UserId { get; set; }
        /// <summary>
        /// Instantiates a new SkypeForBusinessUserConversationMember and sets the default values.
        /// </summary>
        public SkypeForBusinessUserConversationMember() : base() {
            OdataType = "#microsoft.graph.skypeForBusinessUserConversationMember";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static new SkypeForBusinessUserConversationMember CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new SkypeForBusinessUserConversationMember();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"tenantId", n => { TenantId = n.GetStringValue(); } },
                {"userId", n => { UserId = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteStringValue("tenantId", TenantId);
            writer.WriteStringValue("userId", UserId);
        }
    }
}
