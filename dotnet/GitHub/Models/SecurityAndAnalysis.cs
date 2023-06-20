using Microsoft.Kiota.Abstractions.Serialization;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System;
namespace GitHubTodoDemo.GitHub.Models {
    public class SecurityAndAnalysis : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The advanced_security property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public SecurityAndAnalysis_advanced_security? AdvancedSecurity { get; set; }
#nullable restore
#else
        public SecurityAndAnalysis_advanced_security AdvancedSecurity { get; set; }
#endif
        /// <summary>The secret_scanning property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public SecurityAndAnalysis_secret_scanning? SecretScanning { get; set; }
#nullable restore
#else
        public SecurityAndAnalysis_secret_scanning SecretScanning { get; set; }
#endif
        /// <summary>The secret_scanning_push_protection property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public SecurityAndAnalysis_secret_scanning_push_protection? SecretScanningPushProtection { get; set; }
#nullable restore
#else
        public SecurityAndAnalysis_secret_scanning_push_protection SecretScanningPushProtection { get; set; }
#endif
        /// <summary>
        /// Instantiates a new securityAndAnalysis and sets the default values.
        /// </summary>
        public SecurityAndAnalysis() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static SecurityAndAnalysis CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new SecurityAndAnalysis();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"advanced_security", n => { AdvancedSecurity = n.GetObjectValue<SecurityAndAnalysis_advanced_security>(SecurityAndAnalysis_advanced_security.CreateFromDiscriminatorValue); } },
                {"secret_scanning", n => { SecretScanning = n.GetObjectValue<SecurityAndAnalysis_secret_scanning>(SecurityAndAnalysis_secret_scanning.CreateFromDiscriminatorValue); } },
                {"secret_scanning_push_protection", n => { SecretScanningPushProtection = n.GetObjectValue<SecurityAndAnalysis_secret_scanning_push_protection>(SecurityAndAnalysis_secret_scanning_push_protection.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteObjectValue<SecurityAndAnalysis_advanced_security>("advanced_security", AdvancedSecurity);
            writer.WriteObjectValue<SecurityAndAnalysis_secret_scanning>("secret_scanning", SecretScanning);
            writer.WriteObjectValue<SecurityAndAnalysis_secret_scanning_push_protection>("secret_scanning_push_protection", SecretScanningPushProtection);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
