using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models {
    public class Bundle : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>If the bundle is an [album][], then the album property is included</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.Album Album { get; set; }
        /// <summary>Number of children contained immediately within this container.</summary>
        public int? ChildCount { get; set; }
        /// <summary>The OdataType property</summary>
        public string OdataType { get; set; }
        /// <summary>
        /// Instantiates a new bundle and sets the default values.
        /// </summary>
        public Bundle() {
            AdditionalData = new Dictionary<string, object>();
            OdataType = "#microsoft.graph.bundle";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static Bundle CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Bundle();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"album", n => { Album = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Album>(GithubTodoDemo.MicrosoftGraph.Models.Album.CreateFromDiscriminatorValue); } },
                {"childCount", n => { ChildCount = n.GetIntValue(); } },
                {"@odata.type", n => { OdataType = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Album>("album", Album);
            writer.WriteIntValue("childCount", ChildCount);
            writer.WriteStringValue("@odata.type", OdataType);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}