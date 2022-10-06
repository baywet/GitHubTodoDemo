using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.GitHub.Models {
    /// <summary>A description of the machine powering a codespace.</summary>
    public class NullableCodespaceMachine : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>How many cores are available to the codespace.</summary>
        public int? Cpus { get; set; }
        /// <summary>The display name of the machine includes cores, memory, and storage.</summary>
        public string Display_name { get; set; }
        /// <summary>How much memory is available to the codespace.</summary>
        public int? Memory_in_bytes { get; set; }
        /// <summary>The name of the machine.</summary>
        public string Name { get; set; }
        /// <summary>The operating system of the machine.</summary>
        public string Operating_system { get; set; }
        /// <summary>Whether a prebuild is currently available when creating a codespace for this machine and repository. If a branch was not specified as a ref, the default branch will be assumed. Value will be &quot;null&quot; if prebuilds are not supported or prebuild availability could not be determined. Value will be &quot;none&quot; if no prebuild is available. Latest values &quot;ready&quot; and &quot;in_progress&quot; indicate the prebuild availability status.</summary>
        public NullableCodespaceMachine_prebuild_availability? Prebuild_availability { get; set; }
        /// <summary>How much storage is available to the codespace.</summary>
        public int? Storage_in_bytes { get; set; }
        /// <summary>
        /// Instantiates a new nullableCodespaceMachine and sets the default values.
        /// </summary>
        public NullableCodespaceMachine() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static NullableCodespaceMachine CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new NullableCodespaceMachine();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"cpus", n => { Cpus = n.GetIntValue(); } },
                {"display_name", n => { Display_name = n.GetStringValue(); } },
                {"memory_in_bytes", n => { Memory_in_bytes = n.GetIntValue(); } },
                {"name", n => { Name = n.GetStringValue(); } },
                {"operating_system", n => { Operating_system = n.GetStringValue(); } },
                {"prebuild_availability", n => { Prebuild_availability = n.GetEnumValue<NullableCodespaceMachine_prebuild_availability>(); } },
                {"storage_in_bytes", n => { Storage_in_bytes = n.GetIntValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteIntValue("cpus", Cpus);
            writer.WriteStringValue("display_name", Display_name);
            writer.WriteIntValue("memory_in_bytes", Memory_in_bytes);
            writer.WriteStringValue("name", Name);
            writer.WriteStringValue("operating_system", Operating_system);
            writer.WriteEnumValue<NullableCodespaceMachine_prebuild_availability>("prebuild_availability", Prebuild_availability);
            writer.WriteIntValue("storage_in_bytes", Storage_in_bytes);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
