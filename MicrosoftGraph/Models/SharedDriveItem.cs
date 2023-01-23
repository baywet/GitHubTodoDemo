using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models {
    public class SharedDriveItem : BaseItem, IParsable {
        /// <summary>Used to access the underlying driveItem</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.DriveItem? DriveItem { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.DriveItem DriveItem { get; set; }
#endif
        /// <summary>All driveItems contained in the sharing root. This collection cannot be enumerated.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public List<GitHubTodoDemo.MicrosoftGraph.Models.DriveItem>? Items { get; set; }
#nullable restore
#else
        public List<GitHubTodoDemo.MicrosoftGraph.Models.DriveItem> Items { get; set; }
#endif
        /// <summary>Used to access the underlying list</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.List? List { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.List List { get; set; }
#endif
        /// <summary>Used to access the underlying listItem</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.ListItem? ListItem { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.ListItem ListItem { get; set; }
#endif
        /// <summary>Information about the owner of the shared item being referenced.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public IdentitySet? Owner { get; set; }
#nullable restore
#else
        public IdentitySet Owner { get; set; }
#endif
        /// <summary>Used to access the permission representing the underlying sharing link</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.Permission? Permission { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.Permission Permission { get; set; }
#endif
        /// <summary>Used to access the underlying driveItem. Deprecated -- use driveItem instead.</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.DriveItem? Root { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.DriveItem Root { get; set; }
#endif
        /// <summary>Used to access the underlying site</summary>
#if NETSTANDARD2_1_OR_GREATER || NETCOREAPP3_1_OR_GREATER
#nullable enable
        public GitHubTodoDemo.MicrosoftGraph.Models.Site? Site { get; set; }
#nullable restore
#else
        public GitHubTodoDemo.MicrosoftGraph.Models.Site Site { get; set; }
#endif
        /// <summary>
        /// Instantiates a new SharedDriveItem and sets the default values.
        /// </summary>
        public SharedDriveItem() : base() {
            OdataType = "#microsoft.graph.sharedDriveItem";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static new SharedDriveItem CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new SharedDriveItem();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"driveItem", n => { DriveItem = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.DriveItem>(GitHubTodoDemo.MicrosoftGraph.Models.DriveItem.CreateFromDiscriminatorValue); } },
                {"items", n => { Items = n.GetCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.DriveItem>(GitHubTodoDemo.MicrosoftGraph.Models.DriveItem.CreateFromDiscriminatorValue)?.ToList(); } },
                {"list", n => { List = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.List>(GitHubTodoDemo.MicrosoftGraph.Models.List.CreateFromDiscriminatorValue); } },
                {"listItem", n => { ListItem = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.ListItem>(GitHubTodoDemo.MicrosoftGraph.Models.ListItem.CreateFromDiscriminatorValue); } },
                {"owner", n => { Owner = n.GetObjectValue<IdentitySet>(IdentitySet.CreateFromDiscriminatorValue); } },
                {"permission", n => { Permission = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Permission>(GitHubTodoDemo.MicrosoftGraph.Models.Permission.CreateFromDiscriminatorValue); } },
                {"root", n => { Root = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.DriveItem>(GitHubTodoDemo.MicrosoftGraph.Models.DriveItem.CreateFromDiscriminatorValue); } },
                {"site", n => { Site = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Site>(GitHubTodoDemo.MicrosoftGraph.Models.Site.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.DriveItem>("driveItem", DriveItem);
            writer.WriteCollectionOfObjectValues<GitHubTodoDemo.MicrosoftGraph.Models.DriveItem>("items", Items);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.List>("list", List);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.ListItem>("listItem", ListItem);
            writer.WriteObjectValue<IdentitySet>("owner", Owner);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Permission>("permission", Permission);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.DriveItem>("root", Root);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Site>("site", Site);
        }
    }
}
