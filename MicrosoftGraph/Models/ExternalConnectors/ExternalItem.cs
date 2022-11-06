using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public class ExternalItem : Entity, IParsable {
        /// <summary>An array of access control entries. Each entry specifies the access granted to a user or group. Required.</summary>
        public List<GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors.Acl> Acl { get; set; }
        /// <summary>A plain-text  representation of the contents of the item. The text in this property is full-text indexed. Optional.</summary>
        public ExternalItemContent Content { get; set; }
        /// <summary>A property bag with the properties of the item. The properties MUST conform to the schema defined for the externalConnection. Required.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors.Properties Properties { get; set; }
        /// <summary>
        /// Instantiates a new externalItem and sets the default values.
        /// </summary>
        public ExternalItem() : base() {
            OdataType = "#microsoft.graph.externalConnectors.externalItem";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static new ExternalItem CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new ExternalItem();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"acl", n => { Acl = n.GetCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors.Acl>(GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors.Acl.CreateFromDiscriminatorValue)?.ToList(); } },
                {"content", n => { Content = n.GetObjectValue<ExternalItemContent>(ExternalItemContent.CreateFromDiscriminatorValue); } },
                {"properties", n => { Properties = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors.Properties>(GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors.Properties.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors.Acl>("acl", Acl);
            writer.WriteObjectValue<ExternalItemContent>("content", Content);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors.Properties>("properties", Properties);
        }
    }
}
