using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models {
    public class DeviceConfigurationUserOverview : Entity, IParsable {
        /// <summary>Version of the policy for that overview</summary>
        public int? ConfigurationVersion { get; set; }
        /// <summary>Number of error Users</summary>
        public int? ErrorCount { get; set; }
        /// <summary>Number of failed Users</summary>
        public int? FailedCount { get; set; }
        /// <summary>Last update time</summary>
        public DateTimeOffset? LastUpdateDateTime { get; set; }
        /// <summary>Number of not applicable users</summary>
        public int? NotApplicableCount { get; set; }
        /// <summary>Number of pending Users</summary>
        public int? PendingCount { get; set; }
        /// <summary>Number of succeeded Users</summary>
        public int? SuccessCount { get; set; }
        /// <summary>
        /// Instantiates a new deviceConfigurationUserOverview and sets the default values.
        /// </summary>
        public DeviceConfigurationUserOverview() : base() {
            OdataType = "#microsoft.graph.deviceConfigurationUserOverview";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static new DeviceConfigurationUserOverview CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new DeviceConfigurationUserOverview();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"configurationVersion", n => { ConfigurationVersion = n.GetIntValue(); } },
                {"errorCount", n => { ErrorCount = n.GetIntValue(); } },
                {"failedCount", n => { FailedCount = n.GetIntValue(); } },
                {"lastUpdateDateTime", n => { LastUpdateDateTime = n.GetDateTimeOffsetValue(); } },
                {"notApplicableCount", n => { NotApplicableCount = n.GetIntValue(); } },
                {"pendingCount", n => { PendingCount = n.GetIntValue(); } },
                {"successCount", n => { SuccessCount = n.GetIntValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteIntValue("configurationVersion", ConfigurationVersion);
            writer.WriteIntValue("errorCount", ErrorCount);
            writer.WriteIntValue("failedCount", FailedCount);
            writer.WriteDateTimeOffsetValue("lastUpdateDateTime", LastUpdateDateTime);
            writer.WriteIntValue("notApplicableCount", NotApplicableCount);
            writer.WriteIntValue("pendingCount", PendingCount);
            writer.WriteIntValue("successCount", SuccessCount);
        }
    }
}