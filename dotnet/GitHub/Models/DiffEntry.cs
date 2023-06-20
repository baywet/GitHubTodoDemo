using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.GitHub.Models {
    /// <summary>
    /// Diff Entry
    /// </summary>
    public class DiffEntry : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The additions property</summary>
        public int? Additions { get; set; }
        /// <summary>The blob_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Blob_url { get; set; }
#nullable restore
#else
        public string Blob_url { get; set; }
#endif
        /// <summary>The changes property</summary>
        public int? Changes { get; set; }
        /// <summary>The contents_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Contents_url { get; set; }
#nullable restore
#else
        public string Contents_url { get; set; }
#endif
        /// <summary>The deletions property</summary>
        public int? Deletions { get; set; }
        /// <summary>The filename property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Filename { get; set; }
#nullable restore
#else
        public string Filename { get; set; }
#endif
        /// <summary>The patch property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Patch { get; set; }
#nullable restore
#else
        public string Patch { get; set; }
#endif
        /// <summary>The previous_filename property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Previous_filename { get; set; }
#nullable restore
#else
        public string Previous_filename { get; set; }
#endif
        /// <summary>The raw_url property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Raw_url { get; set; }
#nullable restore
#else
        public string Raw_url { get; set; }
#endif
        /// <summary>The sha property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Sha { get; set; }
#nullable restore
#else
        public string Sha { get; set; }
#endif
        /// <summary>The status property</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public string? Status { get; set; }
#nullable restore
#else
        public string Status { get; set; }
#endif
        /// <summary>
        /// Instantiates a new DiffEntry and sets the default values.
        /// </summary>
        public DiffEntry() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static DiffEntry CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new DiffEntry();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"additions", n => { Additions = n.GetIntValue(); } },
                {"blob_url", n => { Blob_url = n.GetStringValue(); } },
                {"changes", n => { Changes = n.GetIntValue(); } },
                {"contents_url", n => { Contents_url = n.GetStringValue(); } },
                {"deletions", n => { Deletions = n.GetIntValue(); } },
                {"filename", n => { Filename = n.GetStringValue(); } },
                {"patch", n => { Patch = n.GetStringValue(); } },
                {"previous_filename", n => { Previous_filename = n.GetStringValue(); } },
                {"raw_url", n => { Raw_url = n.GetStringValue(); } },
                {"sha", n => { Sha = n.GetStringValue(); } },
                {"status", n => { Status = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteIntValue("additions", Additions);
            writer.WriteStringValue("blob_url", Blob_url);
            writer.WriteIntValue("changes", Changes);
            writer.WriteStringValue("contents_url", Contents_url);
            writer.WriteIntValue("deletions", Deletions);
            writer.WriteStringValue("filename", Filename);
            writer.WriteStringValue("patch", Patch);
            writer.WriteStringValue("previous_filename", Previous_filename);
            writer.WriteStringValue("raw_url", Raw_url);
            writer.WriteStringValue("sha", Sha);
            writer.WriteStringValue("status", Status);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}
