using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models {
    /// <summary>
    /// Network Usage Rules allow enterprises to specify how managed apps use networks, such as cellular data networks.
    /// </summary>
    public class IosNetworkUsageRule : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>If set to true, corresponding managed apps will not be allowed to use cellular data at any time.</summary>
        public bool? CellularDataBlocked { get; set; }
        /// <summary>If set to true, corresponding managed apps will not be allowed to use cellular data when roaming.</summary>
        public bool? CellularDataBlockWhenRoaming { get; set; }
        /// <summary>Information about the managed apps that this rule is going to apply to. This collection can contain a maximum of 500 elements.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<AppListItem>? ManagedApps { get; set; }
#nullable restore
#else
        public List<AppListItem> ManagedApps { get; set; }
#endif
        /// <summary>The OdataType property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? OdataType { get; set; }
#nullable restore
#else
        public string OdataType { get; set; }
#endif
        /// <summary>
        /// Instantiates a new iosNetworkUsageRule and sets the default values.
        /// </summary>
        public IosNetworkUsageRule() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static IosNetworkUsageRule CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new IosNetworkUsageRule();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"cellularDataBlocked", n => { CellularDataBlocked = n.GetBoolValue(); } },
                {"cellularDataBlockWhenRoaming", n => { CellularDataBlockWhenRoaming = n.GetBoolValue(); } },
                {"managedApps", n => { ManagedApps = n.GetCollectionOfObjectValues<AppListItem>(AppListItem.CreateFromDiscriminatorValue)?.ToList(); } },
                {"@odata.type", n => { OdataType = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteBoolValue("cellularDataBlocked", CellularDataBlocked);
            writer.WriteBoolValue("cellularDataBlockWhenRoaming", CellularDataBlockWhenRoaming);
            writer.WriteCollectionOfObjectValues<AppListItem>("managedApps", ManagedApps);
            writer.WriteStringValue("@odata.type", OdataType);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}