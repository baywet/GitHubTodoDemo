using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models.CallRecords {
    public class Segment : Entity, IParsable {
        /// <summary>Endpoint that answered this segment.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public Endpoint? Callee { get; set; }
#nullable restore
#else
        public Endpoint Callee { get; set; }
#endif
        /// <summary>Endpoint that initiated this segment.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public Endpoint? Caller { get; set; }
#nullable restore
#else
        public Endpoint Caller { get; set; }
#endif
        /// <summary>UTC time when the segment ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z</summary>
        public DateTimeOffset? EndDateTime { get; set; }
        /// <summary>Failure information associated with the segment if it failed.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.CallRecords.FailureInfo? FailureInfo { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.CallRecords.FailureInfo FailureInfo { get; set; }
#endif
        /// <summary>Media associated with this segment.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<GitHubTodoDemo.MicrosoftGraph.Models.CallRecords.Media>? Media { get; set; }
#nullable restore
#else
        public List<GitHubTodoDemo.MicrosoftGraph.Models.CallRecords.Media> Media { get; set; }
#endif
        /// <summary>UTC time when the segment started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z</summary>
        public DateTimeOffset? StartDateTime { get; set; }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static new Segment CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Segment();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"callee", n => { Callee = n.GetObjectValue<Endpoint>(Endpoint.CreateFromDiscriminatorValue); } },
                {"caller", n => { Caller = n.GetObjectValue<Endpoint>(Endpoint.CreateFromDiscriminatorValue); } },
                {"endDateTime", n => { EndDateTime = n.GetDateTimeOffsetValue(); } },
                {"failureInfo", n => { FailureInfo = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.CallRecords.FailureInfo>(GitHubTodoDemo.MicrosoftGraph.Models.CallRecords.FailureInfo.CreateFromDiscriminatorValue); } },
                {"media", n => { Media = n.GetCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.CallRecords.Media>(GitHubTodoDemo.MicrosoftGraph.Models.CallRecords.Media.CreateFromDiscriminatorValue)?.ToList(); } },
                {"startDateTime", n => { StartDateTime = n.GetDateTimeOffsetValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteObjectValue<Endpoint>("callee", Callee);
            writer.WriteObjectValue<Endpoint>("caller", Caller);
            writer.WriteDateTimeOffsetValue("endDateTime", EndDateTime);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.CallRecords.FailureInfo>("failureInfo", FailureInfo);
            writer.WriteCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.CallRecords.Media>("media", Media);
            writer.WriteDateTimeOffsetValue("startDateTime", StartDateTime);
        }
    }
}
