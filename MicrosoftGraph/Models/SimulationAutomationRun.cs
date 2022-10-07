using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public class SimulationAutomationRun : Entity, IParsable {
        /// <summary>Date and time when the run ends in an attack simulation automation.</summary>
        public DateTimeOffset? EndDateTime { get; set; }
        /// <summary>Unique identifier for the attack simulation campaign initiated in the attack simulation automation run.</summary>
        public string SimulationId { get; set; }
        /// <summary>Date and time when the run starts in an attack simulation automation.</summary>
        public DateTimeOffset? StartDateTime { get; set; }
        /// <summary>Status of the attack simulation automation run. The possible values are: unknown, running, succeeded, failed, skipped, unknownFutureValue.</summary>
        public SimulationAutomationRunStatus? Status { get; set; }
        /// <summary>
        /// Instantiates a new simulationAutomationRun and sets the default values.
        /// </summary>
        public SimulationAutomationRun() : base() {
            OdataType = "#microsoft.graph.simulationAutomationRun";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static new SimulationAutomationRun CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new SimulationAutomationRun();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"endDateTime", n => { EndDateTime = n.GetDateTimeOffsetValue(); } },
                {"simulationId", n => { SimulationId = n.GetStringValue(); } },
                {"startDateTime", n => { StartDateTime = n.GetDateTimeOffsetValue(); } },
                {"status", n => { Status = n.GetEnumValue<SimulationAutomationRunStatus>(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteDateTimeOffsetValue("endDateTime", EndDateTime);
            writer.WriteStringValue("simulationId", SimulationId);
            writer.WriteDateTimeOffsetValue("startDateTime", StartDateTime);
            writer.WriteEnumValue<SimulationAutomationRunStatus>("status", Status);
        }
    }
}