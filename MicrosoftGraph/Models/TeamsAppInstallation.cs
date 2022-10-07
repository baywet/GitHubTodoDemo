using GithubTodoDemo.MicrosoftGraph.Models;
using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public class TeamsAppInstallation : Entity, IParsable {
        /// <summary>The app that is installed.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.TeamsApp TeamsApp { get; set; }
        /// <summary>The details of this version of the app.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.TeamsAppDefinition TeamsAppDefinition { get; set; }
        /// <summary>
        /// Instantiates a new teamsAppInstallation and sets the default values.
        /// </summary>
        public TeamsAppInstallation() : base() {
            OdataType = "#microsoft.graph.teamsAppInstallation";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
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
                {"teamsApp", n => { TeamsApp = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.TeamsApp>(GithubTodoDemo.MicrosoftGraph.Models.TeamsApp.CreateFromDiscriminatorValue); } },
                {"teamsAppDefinition", n => { TeamsAppDefinition = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.TeamsAppDefinition>(GithubTodoDemo.MicrosoftGraph.Models.TeamsAppDefinition.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.TeamsApp>("teamsApp", TeamsApp);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.TeamsAppDefinition>("teamsAppDefinition", TeamsAppDefinition);
        }
    }
}