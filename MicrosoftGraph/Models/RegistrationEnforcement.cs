using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models {
    public class RegistrationEnforcement : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>Run campaigns to remind users to set up targeted authentication methods.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.AuthenticationMethodsRegistrationCampaign AuthenticationMethodsRegistrationCampaign { get; set; }
        /// <summary>The OdataType property</summary>
        public string OdataType { get; set; }
        /// <summary>
        /// Instantiates a new registrationEnforcement and sets the default values.
        /// </summary>
        public RegistrationEnforcement() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static RegistrationEnforcement CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new RegistrationEnforcement();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"authenticationMethodsRegistrationCampaign", n => { AuthenticationMethodsRegistrationCampaign = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.AuthenticationMethodsRegistrationCampaign>(GitHubTodoDemo.MicrosoftGraph.Models.AuthenticationMethodsRegistrationCampaign.CreateFromDiscriminatorValue); } },
                {"@odata.type", n => { OdataType = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.AuthenticationMethodsRegistrationCampaign>("authenticationMethodsRegistrationCampaign", AuthenticationMethodsRegistrationCampaign);
            writer.WriteStringValue("@odata.type", OdataType);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
