using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models {
    public class SimulationReportOverview : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The OdataType property</summary>
        public string OdataType { get; set; }
        /// <summary>List of recommended actions for a tenant to improve its security posture based on the attack simulation and training campaign attack type.</summary>
        public List<RecommendedAction> RecommendedActions { get; set; }
        /// <summary>Number of valid users in the attack simulation and training campaign.</summary>
        public int? ResolvedTargetsCount { get; set; }
        /// <summary>Summary of simulation events in the attack simulation and training campaign.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.SimulationEventsContent SimulationEventsContent { get; set; }
        /// <summary>Summary of assigned trainings in the attack simulation and training campaign.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.TrainingEventsContent TrainingEventsContent { get; set; }
        /// <summary>
        /// Instantiates a new simulationReportOverview and sets the default values.
        /// </summary>
        public SimulationReportOverview() {
            AdditionalData = new Dictionary<string, object>();
            OdataType = "#microsoft.graph.simulationReportOverview";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static SimulationReportOverview CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new SimulationReportOverview();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"@odata.type", n => { OdataType = n.GetStringValue(); } },
                {"recommendedActions", n => { RecommendedActions = n.GetCollectionOfObjectValues<RecommendedAction>(RecommendedAction.CreateFromDiscriminatorValue)?.ToList(); } },
                {"resolvedTargetsCount", n => { ResolvedTargetsCount = n.GetIntValue(); } },
                {"simulationEventsContent", n => { SimulationEventsContent = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.SimulationEventsContent>(GitHubTodoDemo.MicrosoftGraph.Models.SimulationEventsContent.CreateFromDiscriminatorValue); } },
                {"trainingEventsContent", n => { TrainingEventsContent = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.TrainingEventsContent>(GitHubTodoDemo.MicrosoftGraph.Models.TrainingEventsContent.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteStringValue("@odata.type", OdataType);
            writer.WriteCollectionOfObjectValues<RecommendedAction>("recommendedActions", RecommendedActions);
            writer.WriteIntValue("resolvedTargetsCount", ResolvedTargetsCount);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.SimulationEventsContent>("simulationEventsContent", SimulationEventsContent);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.TrainingEventsContent>("trainingEventsContent", TrainingEventsContent);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
