using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models {
    public class TeamsAppInstallation : Entity, IParsable {
        /// <summary>The app that is installed.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.TeamsApp? TeamsApp { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.TeamsApp TeamsApp { get; set; }
#endif
        /// <summary>The details of this version of the app.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.TeamsAppDefinition? TeamsAppDefinition { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.TeamsAppDefinition TeamsAppDefinition { get; set; }
#endif
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static new TeamsAppInstallation CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            var mappingValue = parseNode.GetChildNode("@odata.type")?.GetStringValue();
            return mappingValue switch {
                "#microsoft.graph.userScopeTeamsAppInstallation" => new UserScopeTeamsAppInstallation(),
                _ => new TeamsAppInstallation(),
            };
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"teamsApp", n => { TeamsApp = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.TeamsApp>(GitHubTodoDemo.MicrosoftGraph.Models.TeamsApp.CreateFromDiscriminatorValue); } },
                {"teamsAppDefinition", n => { TeamsAppDefinition = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.TeamsAppDefinition>(GitHubTodoDemo.MicrosoftGraph.Models.TeamsAppDefinition.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.TeamsApp>("teamsApp", TeamsApp);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.TeamsAppDefinition>("teamsAppDefinition", TeamsAppDefinition);
        }
    }
}
