using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models {
    public class MicrosoftAuthenticatorFeatureSettings : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>Determines whether the user&apos;s Authenticator app will show them the client app they are signing into.</summary>
        public AuthenticationMethodFeatureConfiguration DisplayAppInformationRequiredState { get; set; }
        /// <summary>Determines whether the user&apos;s Authenticator app will show them the geographic location of where the authentication request originated from.</summary>
        public AuthenticationMethodFeatureConfiguration DisplayLocationInformationRequiredState { get; set; }
        /// <summary>The OdataType property</summary>
        public string OdataType { get; set; }
        /// <summary>
        /// Instantiates a new microsoftAuthenticatorFeatureSettings and sets the default values.
        /// </summary>
        public MicrosoftAuthenticatorFeatureSettings() {
            AdditionalData = new Dictionary<string, object>();
            OdataType = "#microsoft.graph.microsoftAuthenticatorFeatureSettings";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static MicrosoftAuthenticatorFeatureSettings CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new MicrosoftAuthenticatorFeatureSettings();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"displayAppInformationRequiredState", n => { DisplayAppInformationRequiredState = n.GetObjectValue<AuthenticationMethodFeatureConfiguration>(AuthenticationMethodFeatureConfiguration.CreateFromDiscriminatorValue); } },
                {"displayLocationInformationRequiredState", n => { DisplayLocationInformationRequiredState = n.GetObjectValue<AuthenticationMethodFeatureConfiguration>(AuthenticationMethodFeatureConfiguration.CreateFromDiscriminatorValue); } },
                {"@odata.type", n => { OdataType = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteObjectValue<AuthenticationMethodFeatureConfiguration>("displayAppInformationRequiredState", DisplayAppInformationRequiredState);
            writer.WriteObjectValue<AuthenticationMethodFeatureConfiguration>("displayLocationInformationRequiredState", DisplayLocationInformationRequiredState);
            writer.WriteStringValue("@odata.type", OdataType);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
