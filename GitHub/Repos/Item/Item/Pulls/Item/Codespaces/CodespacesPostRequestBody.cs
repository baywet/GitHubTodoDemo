using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.GitHub.Repos.Item.Item.Pulls.Item.Codespaces {
    public class CodespacesPostRequestBody : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>IP for location auto-detection when proxying a request</summary>
        public string Client_ip { get; set; }
        /// <summary>Path to devcontainer.json config to use for this codespace</summary>
        public string Devcontainer_path { get; set; }
        /// <summary>Display name for this codespace</summary>
        public string Display_name { get; set; }
        /// <summary>Time in minutes before codespace stops from inactivity</summary>
        public int? Idle_timeout_minutes { get; set; }
        /// <summary>Location for this codespace. Assigned by IP if not provided</summary>
        public string Location { get; set; }
        /// <summary>Machine type to use for this codespace</summary>
        public string Machine { get; set; }
        /// <summary>Whether to authorize requested permissions from devcontainer.json</summary>
        public bool? Multi_repo_permissions_opt_out { get; set; }
        /// <summary>Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).</summary>
        public int? Retention_period_minutes { get; set; }
        /// <summary>Working directory for this codespace</summary>
        public string Working_directory { get; set; }
        /// <summary>
        /// Instantiates a new codespacesPostRequestBody and sets the default values.
        /// </summary>
        public CodespacesPostRequestBody() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static CodespacesPostRequestBody CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new CodespacesPostRequestBody();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"client_ip", n => { Client_ip = n.GetStringValue(); } },
                {"devcontainer_path", n => { Devcontainer_path = n.GetStringValue(); } },
                {"display_name", n => { Display_name = n.GetStringValue(); } },
                {"idle_timeout_minutes", n => { Idle_timeout_minutes = n.GetIntValue(); } },
                {"location", n => { Location = n.GetStringValue(); } },
                {"machine", n => { Machine = n.GetStringValue(); } },
                {"multi_repo_permissions_opt_out", n => { Multi_repo_permissions_opt_out = n.GetBoolValue(); } },
                {"retention_period_minutes", n => { Retention_period_minutes = n.GetIntValue(); } },
                {"working_directory", n => { Working_directory = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteStringValue("client_ip", Client_ip);
            writer.WriteStringValue("devcontainer_path", Devcontainer_path);
            writer.WriteStringValue("display_name", Display_name);
            writer.WriteIntValue("idle_timeout_minutes", Idle_timeout_minutes);
            writer.WriteStringValue("location", Location);
            writer.WriteStringValue("machine", Machine);
            writer.WriteBoolValue("multi_repo_permissions_opt_out", Multi_repo_permissions_opt_out);
            writer.WriteIntValue("retention_period_minutes", Retention_period_minutes);
            writer.WriteStringValue("working_directory", Working_directory);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
