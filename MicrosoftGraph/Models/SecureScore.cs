using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public class SecureScore : Entity, IParsable {
        /// <summary>Active user count of the given tenant.</summary>
        public int? ActiveUserCount { get; set; }
        /// <summary>Average score by different scopes (for example, average by industry, average by seating) and control category (Identity, Data, Device, Apps, Infrastructure) within the scope.</summary>
        public List<AverageComparativeScore> AverageComparativeScores { get; set; }
        /// <summary>GUID string for tenant ID.</summary>
        public string AzureTenantId { get; set; }
        /// <summary>Contains tenant scores for a set of controls.</summary>
        public List<ControlScore> ControlScores { get; set; }
        /// <summary>The date when the entity is created.</summary>
        public DateTimeOffset? CreatedDateTime { get; set; }
        /// <summary>Tenant current attained score on specified date.</summary>
        public double? CurrentScore { get; set; }
        /// <summary>Microsoft-provided services for the tenant (for example, Exchange online, Skype, Sharepoint).</summary>
        public List<string> EnabledServices { get; set; }
        /// <summary>Licensed user count of the given tenant.</summary>
        public int? LicensedUserCount { get; set; }
        /// <summary>Tenant maximum possible score on specified date.</summary>
        public double? MaxScore { get; set; }
        /// <summary>Complex type containing details about the security product/service vendor, provider, and subprovider (for example, vendor=Microsoft; provider=SecureScore). Required.</summary>
        public SecurityVendorInformation VendorInformation { get; set; }
        /// <summary>
        /// Instantiates a new secureScore and sets the default values.
        /// </summary>
        public SecureScore() : base() {
            OdataType = "#microsoft.graph.secureScore";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static new SecureScore CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new SecureScore();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"activeUserCount", n => { ActiveUserCount = n.GetIntValue(); } },
                {"averageComparativeScores", n => { AverageComparativeScores = n.GetCollectionOfObjectValues<AverageComparativeScore>(AverageComparativeScore.CreateFromDiscriminatorValue)?.ToList(); } },
                {"azureTenantId", n => { AzureTenantId = n.GetStringValue(); } },
                {"controlScores", n => { ControlScores = n.GetCollectionOfObjectValues<ControlScore>(ControlScore.CreateFromDiscriminatorValue)?.ToList(); } },
                {"createdDateTime", n => { CreatedDateTime = n.GetDateTimeOffsetValue(); } },
                {"currentScore", n => { CurrentScore = n.GetDoubleValue(); } },
                {"enabledServices", n => { EnabledServices = n.GetCollectionOfPrimitiveValues<string>()?.ToList(); } },
                {"licensedUserCount", n => { LicensedUserCount = n.GetIntValue(); } },
                {"maxScore", n => { MaxScore = n.GetDoubleValue(); } },
                {"vendorInformation", n => { VendorInformation = n.GetObjectValue<SecurityVendorInformation>(SecurityVendorInformation.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteIntValue("activeUserCount", ActiveUserCount);
            writer.WriteCollectionOfObjectValues<AverageComparativeScore>("averageComparativeScores", AverageComparativeScores);
            writer.WriteStringValue("azureTenantId", AzureTenantId);
            writer.WriteCollectionOfObjectValues<ControlScore>("controlScores", ControlScores);
            writer.WriteDateTimeOffsetValue("createdDateTime", CreatedDateTime);
            writer.WriteDoubleValue("currentScore", CurrentScore);
            writer.WriteCollectionOfPrimitiveValues<string>("enabledServices", EnabledServices);
            writer.WriteIntValue("licensedUserCount", LicensedUserCount);
            writer.WriteDoubleValue("maxScore", MaxScore);
            writer.WriteObjectValue<SecurityVendorInformation>("vendorInformation", VendorInformation);
        }
    }
}