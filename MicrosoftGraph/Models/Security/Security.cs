using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models.Security {
    public class Security : Entity, IParsable {
        /// <summary>The alerts property</summary>
        public List<GitHubTodoDemo.MicrosoftGraph.Models.Alert> Alerts { get; set; }
        /// <summary>The attackSimulation property</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.AttackSimulationRoot AttackSimulation { get; set; }
        /// <summary>The cases property</summary>
        public CasesRoot Cases { get; set; }
        /// <summary>The secureScoreControlProfiles property</summary>
        public List<GitHubTodoDemo.MicrosoftGraph.Models.SecureScoreControlProfile> SecureScoreControlProfiles { get; set; }
        /// <summary>The secureScores property</summary>
        public List<GitHubTodoDemo.MicrosoftGraph.Models.SecureScore> SecureScores { get; set; }
        /// <summary>
        /// Instantiates a new Security and sets the default values.
        /// </summary>
        public Security() : base() {
            OdataType = "#microsoft.graph.security";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static new Security CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Security();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"alerts", n => { Alerts = n.GetCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.Alert>(GitHubTodoDemo.MicrosoftGraph.Models.Alert.CreateFromDiscriminatorValue)?.ToList(); } },
                {"attackSimulation", n => { AttackSimulation = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.AttackSimulationRoot>(GitHubTodoDemo.MicrosoftGraph.Models.AttackSimulationRoot.CreateFromDiscriminatorValue); } },
                {"cases", n => { Cases = n.GetObjectValue<CasesRoot>(CasesRoot.CreateFromDiscriminatorValue); } },
                {"secureScoreControlProfiles", n => { SecureScoreControlProfiles = n.GetCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.SecureScoreControlProfile>(GitHubTodoDemo.MicrosoftGraph.Models.SecureScoreControlProfile.CreateFromDiscriminatorValue)?.ToList(); } },
                {"secureScores", n => { SecureScores = n.GetCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.SecureScore>(GitHubTodoDemo.MicrosoftGraph.Models.SecureScore.CreateFromDiscriminatorValue)?.ToList(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.Alert>("alerts", Alerts);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.AttackSimulationRoot>("attackSimulation", AttackSimulation);
            writer.WriteObjectValue<CasesRoot>("cases", Cases);
            writer.WriteCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.SecureScoreControlProfile>("secureScoreControlProfiles", SecureScoreControlProfiles);
            writer.WriteCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.SecureScore>("secureScores", SecureScores);
        }
    }
}
