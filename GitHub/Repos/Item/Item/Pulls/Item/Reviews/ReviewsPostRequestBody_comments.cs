using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.GitHub.Repos.Item.Item.Pulls.Item.Reviews {
    public class ReviewsPostRequestBody_comments : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>Text of the review comment.</summary>
        public string Body { get; set; }
        /// <summary>The line property</summary>
        public int? Line { get; set; }
        /// <summary>The relative path to the file that necessitates a review comment.</summary>
        public string PathObject { get; set; }
        /// <summary>The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below.</summary>
        public int? Position { get; set; }
        /// <summary>The side property</summary>
        public string Side { get; set; }
        /// <summary>The start_line property</summary>
        public int? Start_line { get; set; }
        /// <summary>The start_side property</summary>
        public string Start_side { get; set; }
        /// <summary>
        /// Instantiates a new reviewsPostRequestBody_comments and sets the default values.
        /// </summary>
        public ReviewsPostRequestBody_comments() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static ReviewsPostRequestBody_comments CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new ReviewsPostRequestBody_comments();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"body", n => { Body = n.GetStringValue(); } },
                {"line", n => { Line = n.GetIntValue(); } },
                {"path", n => { PathObject = n.GetStringValue(); } },
                {"position", n => { Position = n.GetIntValue(); } },
                {"side", n => { Side = n.GetStringValue(); } },
                {"start_line", n => { Start_line = n.GetIntValue(); } },
                {"start_side", n => { Start_side = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteStringValue("body", Body);
            writer.WriteIntValue("line", Line);
            writer.WriteStringValue("path", PathObject);
            writer.WriteIntValue("position", Position);
            writer.WriteStringValue("side", Side);
            writer.WriteIntValue("start_line", Start_line);
            writer.WriteStringValue("start_side", Start_side);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
