using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.GitHub.Models {
    /// <summary>A collection of related issues and pull requests.</summary>
    public class Milestone : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The closed_at property</summary>
        public DateTimeOffset? Closed_at { get; set; }
        /// <summary>The closed_issues property</summary>
        public int? Closed_issues { get; set; }
        /// <summary>The created_at property</summary>
        public DateTimeOffset? Created_at { get; set; }
        /// <summary>The creator property</summary>
        public SimpleUser Creator { get; set; }
        /// <summary>The description property</summary>
        public string Description { get; set; }
        /// <summary>The due_on property</summary>
        public DateTimeOffset? Due_on { get; set; }
        /// <summary>The html_url property</summary>
        public string Html_url { get; set; }
        /// <summary>The id property</summary>
        public int? Id { get; set; }
        /// <summary>The labels_url property</summary>
        public string Labels_url { get; set; }
        /// <summary>The node_id property</summary>
        public string Node_id { get; set; }
        /// <summary>The number of the milestone.</summary>
        public int? Number { get; set; }
        /// <summary>The open_issues property</summary>
        public int? Open_issues { get; set; }
        /// <summary>The state of the milestone.</summary>
        public Milestone_state? State { get; set; }
        /// <summary>The title of the milestone.</summary>
        public string Title { get; set; }
        /// <summary>The updated_at property</summary>
        public DateTimeOffset? Updated_at { get; set; }
        /// <summary>The url property</summary>
        public string Url { get; set; }
        /// <summary>
        /// Instantiates a new Milestone and sets the default values.
        /// </summary>
        public Milestone() {
            AdditionalData = new Dictionary<string, object>();
            State = Milestone_state.Open;
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static Milestone CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Milestone();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"closed_at", n => { Closed_at = n.GetDateTimeOffsetValue(); } },
                {"closed_issues", n => { Closed_issues = n.GetIntValue(); } },
                {"created_at", n => { Created_at = n.GetDateTimeOffsetValue(); } },
                {"creator", n => { Creator = n.GetObjectValue<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue); } },
                {"description", n => { Description = n.GetStringValue(); } },
                {"due_on", n => { Due_on = n.GetDateTimeOffsetValue(); } },
                {"html_url", n => { Html_url = n.GetStringValue(); } },
                {"id", n => { Id = n.GetIntValue(); } },
                {"labels_url", n => { Labels_url = n.GetStringValue(); } },
                {"node_id", n => { Node_id = n.GetStringValue(); } },
                {"number", n => { Number = n.GetIntValue(); } },
                {"open_issues", n => { Open_issues = n.GetIntValue(); } },
                {"state", n => { State = n.GetEnumValue<Milestone_state>(); } },
                {"title", n => { Title = n.GetStringValue(); } },
                {"updated_at", n => { Updated_at = n.GetDateTimeOffsetValue(); } },
                {"url", n => { Url = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteDateTimeOffsetValue("closed_at", Closed_at);
            writer.WriteIntValue("closed_issues", Closed_issues);
            writer.WriteDateTimeOffsetValue("created_at", Created_at);
            writer.WriteObjectValue<SimpleUser>("creator", Creator);
            writer.WriteStringValue("description", Description);
            writer.WriteDateTimeOffsetValue("due_on", Due_on);
            writer.WriteStringValue("html_url", Html_url);
            writer.WriteIntValue("id", Id);
            writer.WriteStringValue("labels_url", Labels_url);
            writer.WriteStringValue("node_id", Node_id);
            writer.WriteIntValue("number", Number);
            writer.WriteIntValue("open_issues", Open_issues);
            writer.WriteEnumValue<Milestone_state>("state", State);
            writer.WriteStringValue("title", Title);
            writer.WriteDateTimeOffsetValue("updated_at", Updated_at);
            writer.WriteStringValue("url", Url);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
