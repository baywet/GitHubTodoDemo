using Microsoft.Kiota.Abstractions.Serialization;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System;
namespace GitHubTodoDemo.GitHub.Repos.Item.Item.Pulls.Item.Codespaces {
    public class CodespacesPostRequestBody : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>IP for location auto-detection when proxying a request</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? ClientIp { get; set; }
#nullable restore
#else
        public string ClientIp { get; set; }
#endif
        /// <summary>Path to devcontainer.json config to use for this codespace</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? DevcontainerPath { get; set; }
#nullable restore
#else
        public string DevcontainerPath { get; set; }
#endif
        /// <summary>Display name for this codespace</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? DisplayName { get; set; }
#nullable restore
#else
        public string DisplayName { get; set; }
#endif
        /// <summary>Time in minutes before codespace stops from inactivity</summary>
        public int? IdleTimeoutMinutes { get; set; }
        /// <summary>Location for this codespace. Assigned by IP if not provided</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Location { get; set; }
#nullable restore
#else
        public string Location { get; set; }
#endif
        /// <summary>Machine type to use for this codespace</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Machine { get; set; }
#nullable restore
#else
        public string Machine { get; set; }
#endif
        /// <summary>Whether to authorize requested permissions from devcontainer.json</summary>
        public bool? MultiRepoPermissionsOptOut { get; set; }
        /// <summary>Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).</summary>
        public int? RetentionPeriodMinutes { get; set; }
        /// <summary>Working directory for this codespace</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? WorkingDirectory { get; set; }
#nullable restore
#else
        public string WorkingDirectory { get; set; }
#endif
        /// <summary>
        /// Instantiates a new codespacesPostRequestBody and sets the default values.
        /// </summary>
        public CodespacesPostRequestBody() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static CodespacesPostRequestBody CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new CodespacesPostRequestBody();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"client_ip", n => { ClientIp = n.GetStringValue(); } },
                {"devcontainer_path", n => { DevcontainerPath = n.GetStringValue(); } },
                {"display_name", n => { DisplayName = n.GetStringValue(); } },
                {"idle_timeout_minutes", n => { IdleTimeoutMinutes = n.GetIntValue(); } },
                {"location", n => { Location = n.GetStringValue(); } },
                {"machine", n => { Machine = n.GetStringValue(); } },
                {"multi_repo_permissions_opt_out", n => { MultiRepoPermissionsOptOut = n.GetBoolValue(); } },
                {"retention_period_minutes", n => { RetentionPeriodMinutes = n.GetIntValue(); } },
                {"working_directory", n => { WorkingDirectory = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteStringValue("client_ip", ClientIp);
            writer.WriteStringValue("devcontainer_path", DevcontainerPath);
            writer.WriteStringValue("display_name", DisplayName);
            writer.WriteIntValue("idle_timeout_minutes", IdleTimeoutMinutes);
            writer.WriteStringValue("location", Location);
            writer.WriteStringValue("machine", Machine);
            writer.WriteBoolValue("multi_repo_permissions_opt_out", MultiRepoPermissionsOptOut);
            writer.WriteIntValue("retention_period_minutes", RetentionPeriodMinutes);
            writer.WriteStringValue("working_directory", WorkingDirectory);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}