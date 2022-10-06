using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.GitHub.Models {
    /// <summary>Details about the codespace&apos;s git repository.</summary>
    public class Codespace_git_status : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The number of commits the local repository is ahead of the remote.</summary>
        public int? Ahead { get; set; }
        /// <summary>The number of commits the local repository is behind the remote.</summary>
        public int? Behind { get; set; }
        /// <summary>Whether the local repository has uncommitted changes.</summary>
        public bool? Has_uncommitted_changes { get; set; }
        /// <summary>Whether the local repository has unpushed changes.</summary>
        public bool? Has_unpushed_changes { get; set; }
        /// <summary>The current branch (or SHA if in detached HEAD state) of the local repository.</summary>
        public string Ref { get; set; }
        /// <summary>
        /// Instantiates a new Codespace_git_status and sets the default values.
        /// </summary>
        public Codespace_git_status() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static Codespace_git_status CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Codespace_git_status();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"ahead", n => { Ahead = n.GetIntValue(); } },
                {"behind", n => { Behind = n.GetIntValue(); } },
                {"has_uncommitted_changes", n => { Has_uncommitted_changes = n.GetBoolValue(); } },
                {"has_unpushed_changes", n => { Has_unpushed_changes = n.GetBoolValue(); } },
                {"ref", n => { Ref = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteIntValue("ahead", Ahead);
            writer.WriteIntValue("behind", Behind);
            writer.WriteBoolValue("has_uncommitted_changes", Has_uncommitted_changes);
            writer.WriteBoolValue("has_unpushed_changes", Has_unpushed_changes);
            writer.WriteStringValue("ref", Ref);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
