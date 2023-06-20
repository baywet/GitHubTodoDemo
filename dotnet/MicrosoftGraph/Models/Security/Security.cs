using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models.Security {
    public class Security : Entity, IParsable {
        /// <summary>The alerts property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<GitHubTodoDemo.MicrosoftGraph.Models.Alert>? Alerts { get; set; }
#nullable restore
#else
        public List<GitHubTodoDemo.MicrosoftGraph.Models.Alert> Alerts { get; set; }
#endif
        /// <summary>A collection of alerts in Microsoft 365 Defender.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<Alert>? Alerts_v2 { get; set; }
#nullable restore
#else
        public List<Alert> Alerts_v2 { get; set; }
#endif
        /// <summary>The attackSimulation property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.AttackSimulationRoot? AttackSimulation { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.AttackSimulationRoot AttackSimulation { get; set; }
#endif
        /// <summary>The cases property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public CasesRoot? Cases { get; set; }
#nullable restore
#else
        public CasesRoot Cases { get; set; }
#endif
        /// <summary>A collection of incidents in Microsoft 365 Defender, each of which is a set of correlated alerts and associated metadata that reflects the story of an attack.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<Incident>? Incidents { get; set; }
#nullable restore
#else
        public List<Incident> Incidents { get; set; }
#endif
        /// <summary>The secureScoreControlProfiles property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<GitHubTodoDemo.MicrosoftGraph.Models.SecureScoreControlProfile>? SecureScoreControlProfiles { get; set; }
#nullable restore
#else
        public List<GitHubTodoDemo.MicrosoftGraph.Models.SecureScoreControlProfile> SecureScoreControlProfiles { get; set; }
#endif
        /// <summary>The secureScores property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<GitHubTodoDemo.MicrosoftGraph.Models.SecureScore>? SecureScores { get; set; }
#nullable restore
#else
        public List<GitHubTodoDemo.MicrosoftGraph.Models.SecureScore> SecureScores { get; set; }
#endif
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
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
                {"alerts_v2", n => { Alerts_v2 = n.GetCollectionOfObjectValues<Alert>(Alert.CreateFromDiscriminatorValue)?.ToList(); } },
                {"attackSimulation", n => { AttackSimulation = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.AttackSimulationRoot>(GitHubTodoDemo.MicrosoftGraph.Models.AttackSimulationRoot.CreateFromDiscriminatorValue); } },
                {"cases", n => { Cases = n.GetObjectValue<CasesRoot>(CasesRoot.CreateFromDiscriminatorValue); } },
                {"incidents", n => { Incidents = n.GetCollectionOfObjectValues<Incident>(Incident.CreateFromDiscriminatorValue)?.ToList(); } },
                {"secureScoreControlProfiles", n => { SecureScoreControlProfiles = n.GetCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.SecureScoreControlProfile>(GitHubTodoDemo.MicrosoftGraph.Models.SecureScoreControlProfile.CreateFromDiscriminatorValue)?.ToList(); } },
                {"secureScores", n => { SecureScores = n.GetCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.SecureScore>(GitHubTodoDemo.MicrosoftGraph.Models.SecureScore.CreateFromDiscriminatorValue)?.ToList(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.Alert>("alerts", Alerts);
            writer.WriteCollectionOfObjectValues<Alert>("alerts_v2", Alerts_v2);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.AttackSimulationRoot>("attackSimulation", AttackSimulation);
            writer.WriteObjectValue<CasesRoot>("cases", Cases);
            writer.WriteCollectionOfObjectValues<Incident>("incidents", Incidents);
            writer.WriteCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.SecureScoreControlProfile>("secureScoreControlProfiles", SecureScoreControlProfiles);
            writer.WriteCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.SecureScore>("secureScores", SecureScores);
        }
    }
}
