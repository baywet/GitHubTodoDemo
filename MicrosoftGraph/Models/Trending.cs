using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public class Trending : Entity, IParsable {
        /// <summary>The lastModifiedDateTime property</summary>
        public DateTimeOffset? LastModifiedDateTime { get; set; }
        /// <summary>Used for navigating to the trending document.</summary>
        public Entity Resource { get; set; }
        /// <summary>Reference properties of the trending document, such as the url and type of the document.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.ResourceReference ResourceReference { get; private set; }
        /// <summary>Properties that you can use to visualize the document in your experience.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.ResourceVisualization ResourceVisualization { get; private set; }
        /// <summary>Value indicating how much the document is currently trending. The larger the number, the more the document is currently trending around the user (the more relevant it is). Returned documents are sorted by this value.</summary>
        public double? Weight { get; set; }
        /// <summary>
        /// Instantiates a new trending and sets the default values.
        /// </summary>
        public Trending() : base() {
            OdataType = "#microsoft.graph.trending";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static new Trending CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Trending();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"lastModifiedDateTime", n => { LastModifiedDateTime = n.GetDateTimeOffsetValue(); } },
                {"resource", n => { Resource = n.GetObjectValue<Entity>(Entity.CreateFromDiscriminatorValue); } },
                {"resourceReference", n => { ResourceReference = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.ResourceReference>(GithubTodoDemo.MicrosoftGraph.Models.ResourceReference.CreateFromDiscriminatorValue); } },
                {"resourceVisualization", n => { ResourceVisualization = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.ResourceVisualization>(GithubTodoDemo.MicrosoftGraph.Models.ResourceVisualization.CreateFromDiscriminatorValue); } },
                {"weight", n => { Weight = n.GetDoubleValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteDateTimeOffsetValue("lastModifiedDateTime", LastModifiedDateTime);
            writer.WriteObjectValue<Entity>("resource", Resource);
            writer.WriteDoubleValue("weight", Weight);
        }
    }
}