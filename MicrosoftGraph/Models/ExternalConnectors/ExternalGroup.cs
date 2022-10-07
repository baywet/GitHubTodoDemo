using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models.ExternalConnectors {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public class ExternalGroup : Entity, IParsable {
        /// <summary>The description of the external group. Optional.</summary>
        public string Description { get; set; }
        /// <summary>The friendly name of the external group. Optional.</summary>
        public string DisplayName { get; set; }
        /// <summary>A member added to an externalGroup. You can add Azure Active Directory users, Azure Active Directory groups, or an externalGroup as members.</summary>
        public List<Identity> Members { get; set; }
        /// <summary>
        /// Instantiates a new externalGroup and sets the default values.
        /// </summary>
        public ExternalGroup() : base() {
            OdataType = "#microsoft.graph.externalConnectors.externalGroup";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static new ExternalGroup CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new ExternalGroup();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"description", n => { Description = n.GetStringValue(); } },
                {"displayName", n => { DisplayName = n.GetStringValue(); } },
                {"members", n => { Members = n.GetCollectionOfObjectValues<Identity>(Identity.CreateFromDiscriminatorValue)?.ToList(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteStringValue("description", Description);
            writer.WriteStringValue("displayName", DisplayName);
            writer.WriteCollectionOfObjectValues<Identity>("members", Members);
        }
    }
}