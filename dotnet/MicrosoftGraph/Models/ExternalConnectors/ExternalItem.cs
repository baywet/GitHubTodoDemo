using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors {
    public class ExternalItem : Entity, IParsable {
        /// <summary>An array of access control entries. Each entry specifies the access granted to a user or group. Required.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors.Acl>? Acl { get; set; }
#nullable restore
#else
        public List<GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors.Acl> Acl { get; set; }
#endif
        /// <summary>A plain-text  representation of the contents of the item. The text in this property is full-text indexed. Optional.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public ExternalItemContent? Content { get; set; }
#nullable restore
#else
        public ExternalItemContent Content { get; set; }
#endif
        /// <summary>A property bag with the properties of the item. The properties MUST conform to the schema defined for the externalConnection. Required.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors.Properties? Properties { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors.Properties Properties { get; set; }
#endif
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
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
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors.Acl>("acl", Acl);
            writer.WriteObjectValue<ExternalItemContent>("content", Content);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.ExternalConnectors.Properties>("properties", Properties);
        }
    }
}
