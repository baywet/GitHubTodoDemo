using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models {
    public class BookingQuestionAssignment : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The ID of the custom question.</summary>
        public bool? IsRequired { get; set; }
        /// <summary>The OdataType property</summary>
        public string OdataType { get; set; }
        /// <summary>Indicates whether it is mandatory to answer the custom question.</summary>
        public string QuestionId { get; set; }
        /// <summary>
        /// Instantiates a new bookingQuestionAssignment and sets the default values.
        /// </summary>
        public BookingQuestionAssignment() {
            AdditionalData = new Dictionary<string, object>();
            OdataType = "#microsoft.graph.bookingQuestionAssignment";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static BookingQuestionAssignment CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new BookingQuestionAssignment();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"isRequired", n => { IsRequired = n.GetBoolValue(); } },
                {"@odata.type", n => { OdataType = n.GetStringValue(); } },
                {"questionId", n => { QuestionId = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteBoolValue("isRequired", IsRequired);
            writer.WriteStringValue("@odata.type", OdataType);
            writer.WriteStringValue("questionId", QuestionId);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}