using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.GitHub.Models {
    /// <summary>Groups of organization members that gives permissions on specified repositories.</summary>
    public class Team : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The description property</summary>
        public string Description { get; set; }
        /// <summary>The html_url property</summary>
        public string Html_url { get; set; }
        /// <summary>The id property</summary>
        public int? Id { get; set; }
        /// <summary>The members_url property</summary>
        public string Members_url { get; set; }
        /// <summary>The name property</summary>
        public string Name { get; set; }
        /// <summary>The node_id property</summary>
        public string Node_id { get; set; }
        /// <summary>Groups of organization members that gives permissions on specified repositories.</summary>
        public NullableTeamSimple Parent { get; set; }
        /// <summary>The permission property</summary>
        public string Permission { get; set; }
        /// <summary>The permissions property</summary>
        public Team_permissions Permissions { get; set; }
        /// <summary>The privacy property</summary>
        public string Privacy { get; set; }
        /// <summary>The repositories_url property</summary>
        public string Repositories_url { get; set; }
        /// <summary>The slug property</summary>
        public string Slug { get; set; }
        /// <summary>The url property</summary>
        public string Url { get; set; }
        /// <summary>
        /// Instantiates a new team and sets the default values.
        /// </summary>
        public Team() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static Team CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Team();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"description", n => { Description = n.GetStringValue(); } },
                {"html_url", n => { Html_url = n.GetStringValue(); } },
                {"id", n => { Id = n.GetIntValue(); } },
                {"members_url", n => { Members_url = n.GetStringValue(); } },
                {"name", n => { Name = n.GetStringValue(); } },
                {"node_id", n => { Node_id = n.GetStringValue(); } },
                {"parent", n => { Parent = n.GetObjectValue<NullableTeamSimple>(NullableTeamSimple.CreateFromDiscriminatorValue); } },
                {"permission", n => { Permission = n.GetStringValue(); } },
                {"permissions", n => { Permissions = n.GetObjectValue<Team_permissions>(Team_permissions.CreateFromDiscriminatorValue); } },
                {"privacy", n => { Privacy = n.GetStringValue(); } },
                {"repositories_url", n => { Repositories_url = n.GetStringValue(); } },
                {"slug", n => { Slug = n.GetStringValue(); } },
                {"url", n => { Url = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteStringValue("description", Description);
            writer.WriteStringValue("html_url", Html_url);
            writer.WriteIntValue("id", Id);
            writer.WriteStringValue("members_url", Members_url);
            writer.WriteStringValue("name", Name);
            writer.WriteStringValue("node_id", Node_id);
            writer.WriteObjectValue<NullableTeamSimple>("parent", Parent);
            writer.WriteStringValue("permission", Permission);
            writer.WriteObjectValue<Team_permissions>("permissions", Permissions);
            writer.WriteStringValue("privacy", Privacy);
            writer.WriteStringValue("repositories_url", Repositories_url);
            writer.WriteStringValue("slug", Slug);
            writer.WriteStringValue("url", Url);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
