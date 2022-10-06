using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.GitHub.Models {
    /// <summary>A codespace.</summary>
    public class Codespace : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>Simple User</summary>
        public SimpleUser Billable_owner { get; set; }
        /// <summary>The created_at property</summary>
        public DateTimeOffset? Created_at { get; set; }
        /// <summary>Path to devcontainer.json from repo root used to create Codespace.</summary>
        public string Devcontainer_path { get; set; }
        /// <summary>Display name for this codespace.</summary>
        public string Display_name { get; set; }
        /// <summary>UUID identifying this codespace&apos;s environment.</summary>
        public string Environment_id { get; set; }
        /// <summary>Details about the codespace&apos;s git repository.</summary>
        public Codespace_git_status Git_status { get; set; }
        /// <summary>The id property</summary>
        public int? Id { get; set; }
        /// <summary>The number of minutes of inactivity after which this codespace will be automatically stopped.</summary>
        public int? Idle_timeout_minutes { get; set; }
        /// <summary>Text to show user when codespace idle timeout minutes has been overriden by an organization policy</summary>
        public string Idle_timeout_notice { get; set; }
        /// <summary>The text to display to a user when a codespace has been stopped for a potentially actionable reason.</summary>
        public string Last_known_stop_notice { get; set; }
        /// <summary>Last known time this codespace was started.</summary>
        public DateTimeOffset? Last_used_at { get; set; }
        /// <summary>The Azure region where this codespace is located.</summary>
        public Codespace_location? Location { get; set; }
        /// <summary>A description of the machine powering a codespace.</summary>
        public NullableCodespaceMachine Machine { get; set; }
        /// <summary>API URL to access available alternate machine types for this codespace.</summary>
        public string Machines_url { get; set; }
        /// <summary>Automatically generated name of this codespace.</summary>
        public string Name { get; set; }
        /// <summary>Simple User</summary>
        public SimpleUser Owner { get; set; }
        /// <summary>Whether or not a codespace has a pending async operation. This would mean that the codespace is temporarily unavailable. The only thing that you can do with a codespace in this state is delete it.</summary>
        public bool? Pending_operation { get; set; }
        /// <summary>Text to show user when codespace is disabled by a pending operation</summary>
        public string Pending_operation_disabled_reason { get; set; }
        /// <summary>Whether the codespace was created from a prebuild.</summary>
        public bool? Prebuild { get; set; }
        /// <summary>API URL for the Pull Request associated with this codespace, if any.</summary>
        public string Pulls_url { get; set; }
        /// <summary>The recent_folders property</summary>
        public List<string> Recent_folders { get; set; }
        /// <summary>Minimal Repository</summary>
        public MinimalRepository Repository { get; set; }
        /// <summary>When a codespace will be auto-deleted based on the &quot;retention_period_minutes&quot; and &quot;last_used_at&quot;</summary>
        public DateTimeOffset? Retention_expires_at { get; set; }
        /// <summary>Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).</summary>
        public int? Retention_period_minutes { get; set; }
        /// <summary>The runtime_constraints property</summary>
        public Codespace_runtime_constraints Runtime_constraints { get; set; }
        /// <summary>API URL to start this codespace.</summary>
        public string Start_url { get; set; }
        /// <summary>State of this codespace.</summary>
        public Codespace_state? State { get; set; }
        /// <summary>API URL to stop this codespace.</summary>
        public string Stop_url { get; set; }
        /// <summary>The updated_at property</summary>
        public DateTimeOffset? Updated_at { get; set; }
        /// <summary>API URL for this codespace.</summary>
        public string Url { get; set; }
        /// <summary>URL to access this codespace on the web.</summary>
        public string Web_url { get; set; }
        /// <summary>
        /// Instantiates a new Codespace and sets the default values.
        /// </summary>
        public Codespace() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static Codespace CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Codespace();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"billable_owner", n => { Billable_owner = n.GetObjectValue<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue); } },
                {"created_at", n => { Created_at = n.GetDateTimeOffsetValue(); } },
                {"devcontainer_path", n => { Devcontainer_path = n.GetStringValue(); } },
                {"display_name", n => { Display_name = n.GetStringValue(); } },
                {"environment_id", n => { Environment_id = n.GetStringValue(); } },
                {"git_status", n => { Git_status = n.GetObjectValue<Codespace_git_status>(Codespace_git_status.CreateFromDiscriminatorValue); } },
                {"id", n => { Id = n.GetIntValue(); } },
                {"idle_timeout_minutes", n => { Idle_timeout_minutes = n.GetIntValue(); } },
                {"idle_timeout_notice", n => { Idle_timeout_notice = n.GetStringValue(); } },
                {"last_known_stop_notice", n => { Last_known_stop_notice = n.GetStringValue(); } },
                {"last_used_at", n => { Last_used_at = n.GetDateTimeOffsetValue(); } },
                {"location", n => { Location = n.GetEnumValue<Codespace_location>(); } },
                {"machine", n => { Machine = n.GetObjectValue<NullableCodespaceMachine>(NullableCodespaceMachine.CreateFromDiscriminatorValue); } },
                {"machines_url", n => { Machines_url = n.GetStringValue(); } },
                {"name", n => { Name = n.GetStringValue(); } },
                {"owner", n => { Owner = n.GetObjectValue<SimpleUser>(SimpleUser.CreateFromDiscriminatorValue); } },
                {"pending_operation", n => { Pending_operation = n.GetBoolValue(); } },
                {"pending_operation_disabled_reason", n => { Pending_operation_disabled_reason = n.GetStringValue(); } },
                {"prebuild", n => { Prebuild = n.GetBoolValue(); } },
                {"pulls_url", n => { Pulls_url = n.GetStringValue(); } },
                {"recent_folders", n => { Recent_folders = n.GetCollectionOfPrimitiveValues<string>()?.ToList(); } },
                {"repository", n => { Repository = n.GetObjectValue<MinimalRepository>(MinimalRepository.CreateFromDiscriminatorValue); } },
                {"retention_expires_at", n => { Retention_expires_at = n.GetDateTimeOffsetValue(); } },
                {"retention_period_minutes", n => { Retention_period_minutes = n.GetIntValue(); } },
                {"runtime_constraints", n => { Runtime_constraints = n.GetObjectValue<Codespace_runtime_constraints>(Codespace_runtime_constraints.CreateFromDiscriminatorValue); } },
                {"start_url", n => { Start_url = n.GetStringValue(); } },
                {"state", n => { State = n.GetEnumValue<Codespace_state>(); } },
                {"stop_url", n => { Stop_url = n.GetStringValue(); } },
                {"updated_at", n => { Updated_at = n.GetDateTimeOffsetValue(); } },
                {"url", n => { Url = n.GetStringValue(); } },
                {"web_url", n => { Web_url = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteObjectValue<SimpleUser>("billable_owner", Billable_owner);
            writer.WriteDateTimeOffsetValue("created_at", Created_at);
            writer.WriteStringValue("devcontainer_path", Devcontainer_path);
            writer.WriteStringValue("display_name", Display_name);
            writer.WriteStringValue("environment_id", Environment_id);
            writer.WriteObjectValue<Codespace_git_status>("git_status", Git_status);
            writer.WriteIntValue("id", Id);
            writer.WriteIntValue("idle_timeout_minutes", Idle_timeout_minutes);
            writer.WriteStringValue("idle_timeout_notice", Idle_timeout_notice);
            writer.WriteStringValue("last_known_stop_notice", Last_known_stop_notice);
            writer.WriteDateTimeOffsetValue("last_used_at", Last_used_at);
            writer.WriteEnumValue<Codespace_location>("location", Location);
            writer.WriteObjectValue<NullableCodespaceMachine>("machine", Machine);
            writer.WriteStringValue("machines_url", Machines_url);
            writer.WriteStringValue("name", Name);
            writer.WriteObjectValue<SimpleUser>("owner", Owner);
            writer.WriteBoolValue("pending_operation", Pending_operation);
            writer.WriteStringValue("pending_operation_disabled_reason", Pending_operation_disabled_reason);
            writer.WriteBoolValue("prebuild", Prebuild);
            writer.WriteStringValue("pulls_url", Pulls_url);
            writer.WriteCollectionOfPrimitiveValues<string>("recent_folders", Recent_folders);
            writer.WriteObjectValue<MinimalRepository>("repository", Repository);
            writer.WriteDateTimeOffsetValue("retention_expires_at", Retention_expires_at);
            writer.WriteIntValue("retention_period_minutes", Retention_period_minutes);
            writer.WriteObjectValue<Codespace_runtime_constraints>("runtime_constraints", Runtime_constraints);
            writer.WriteStringValue("start_url", Start_url);
            writer.WriteEnumValue<Codespace_state>("state", State);
            writer.WriteStringValue("stop_url", Stop_url);
            writer.WriteDateTimeOffsetValue("updated_at", Updated_at);
            writer.WriteStringValue("url", Url);
            writer.WriteStringValue("web_url", Web_url);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
