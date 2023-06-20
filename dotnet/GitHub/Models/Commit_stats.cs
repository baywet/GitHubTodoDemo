using Microsoft.Kiota.Abstractions.Serialization;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System;
namespace GitHubTodoDemo.GitHub.Models {
    public class Commit_stats : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The additions property</summary>
        public int? Additions { get; set; }
        /// <summary>The deletions property</summary>
        public int? Deletions { get; set; }
        /// <summary>The total property</summary>
        public int? Total { get; set; }
        /// <summary>
        /// Instantiates a new Commit_stats and sets the default values.
        /// </summary>
        public Commit_stats() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static Commit_stats CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Commit_stats();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"additions", n => { Additions = n.GetIntValue(); } },
                {"deletions", n => { Deletions = n.GetIntValue(); } },
                {"total", n => { Total = n.GetIntValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteIntValue("additions", Additions);
            writer.WriteIntValue("deletions", Deletions);
            writer.WriteIntValue("total", Total);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
