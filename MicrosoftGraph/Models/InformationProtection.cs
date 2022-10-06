using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models {
    public class InformationProtection : Entity, IParsable {
        /// <summary>The bitlocker property</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.Bitlocker Bitlocker { get; set; }
        /// <summary>The threatAssessmentRequests property</summary>
        public List<ThreatAssessmentRequest> ThreatAssessmentRequests { get; set; }
        /// <summary>
        /// Instantiates a new InformationProtection and sets the default values.
        /// </summary>
        public InformationProtection() : base() {
            OdataType = "#microsoft.graph.informationProtection";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static new InformationProtection CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new InformationProtection();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"bitlocker", n => { Bitlocker = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Bitlocker>(GithubTodoDemo.MicrosoftGraph.Models.Bitlocker.CreateFromDiscriminatorValue); } },
                {"threatAssessmentRequests", n => { ThreatAssessmentRequests = n.GetCollectionOfObjectValues<ThreatAssessmentRequest>(ThreatAssessmentRequest.CreateFromDiscriminatorValue)?.ToList(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Bitlocker>("bitlocker", Bitlocker);
            writer.WriteCollectionOfObjectValues<ThreatAssessmentRequest>("threatAssessmentRequests", ThreatAssessmentRequests);
        }
    }
}
