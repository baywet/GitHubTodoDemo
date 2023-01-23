using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models {
    /// <summary>
    /// Provides operations to manage the lists property of the microsoft.graph.todo entity.
    /// </summary>
    public class DriveItem : BaseItem, IParsable {
        /// <summary>Analytics about the view activities that took place on this item.</summary>
        public ItemAnalytics Analytics { get; set; }
        /// <summary>Audio metadata, if the item is an audio file. Read-only. Read-only. Only on OneDrive Personal.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.Audio Audio { get; set; }
        /// <summary>Bundle metadata, if the item is a bundle. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.Bundle Bundle { get; set; }
        /// <summary>Collection containing Item objects for the immediate children of Item. Only items representing folders have children. Read-only. Nullable.</summary>
        public List<DriveItem> Children { get; set; }
        /// <summary>The content stream, if the item represents a file.</summary>
        public byte[] Content { get; set; }
        /// <summary>An eTag for the content of the item. This eTag is not changed if only the metadata is changed. Note This property is not returned if the item is a folder. Read-only.</summary>
        public string CTag { get; set; }
        /// <summary>Information about the deleted state of the item. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.Deleted Deleted { get; set; }
        /// <summary>File metadata, if the item is a file. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.FileObject FileObject { get; set; }
        /// <summary>File system information on client. Read-write.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.FileSystemInfo FileSystemInfo { get; set; }
        /// <summary>Folder metadata, if the item is a folder. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.Folder Folder { get; set; }
        /// <summary>Image metadata, if the item is an image. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.Image Image { get; set; }
        /// <summary>For drives in SharePoint, the associated document library list item. Read-only. Nullable.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.ListItem ListItem { get; set; }
        /// <summary>Location metadata, if the item has location data. Read-only.</summary>
        public GeoCoordinates Location { get; set; }
        /// <summary>Malware metadata, if the item was detected to contain malware. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.Malware Malware { get; set; }
        /// <summary>If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.Package Package { get; set; }
        /// <summary>If present, indicates that one or more operations that might affect the state of the driveItem are pending completion. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.PendingOperations PendingOperations { get; set; }
        /// <summary>The set of permissions for the item. Read-only. Nullable.</summary>
        public List<Permission> Permissions { get; set; }
        /// <summary>Photo metadata, if the item is a photo. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.Photo Photo { get; set; }
        /// <summary>Provides information about the published or checked-out state of an item, in locations that support such actions. This property is not returned by default. Read-only.</summary>
        public PublicationFacet Publication { get; set; }
        /// <summary>Remote item data, if the item is shared from a drive other than the one being accessed. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.RemoteItem RemoteItem { get; set; }
        /// <summary>If this property is non-null, it indicates that the driveItem is the top-most driveItem in the drive.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.Root Root { get; set; }
        /// <summary>Search metadata, if the item is from a search result. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.SearchResult SearchResult { get; set; }
        /// <summary>Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.Shared Shared { get; set; }
        /// <summary>Returns identifiers useful for SharePoint REST compatibility. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.SharepointIds SharepointIds { get; set; }
        /// <summary>Size of the item in bytes. Read-only.</summary>
        public long? Size { get; set; }
        /// <summary>If the current item is also available as a special folder, this facet is returned. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.SpecialFolder SpecialFolder { get; set; }
        /// <summary>The set of subscriptions on the item. Only supported on the root of a drive.</summary>
        public List<Subscription> Subscriptions { get; set; }
        /// <summary>Collection containing [ThumbnailSet][] objects associated with the item. For more info, see [getting thumbnails][]. Read-only. Nullable.</summary>
        public List<ThumbnailSet> Thumbnails { get; set; }
        /// <summary>The list of previous versions of the item. For more info, see [getting previous versions][]. Read-only. Nullable.</summary>
        public List<DriveItemVersion> Versions { get; set; }
        /// <summary>Video metadata, if the item is a video. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.Video Video { get; set; }
        /// <summary>WebDAV compatible URL for the item.</summary>
        public string WebDavUrl { get; set; }
        /// <summary>For files that are Excel spreadsheets, accesses the workbook API to work with the spreadsheet&apos;s contents. Nullable.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.Workbook Workbook { get; set; }
        /// <summary>
        /// Instantiates a new driveItem and sets the default values.
        /// </summary>
        public DriveItem() : base() {
            OdataType = "#microsoft.graph.driveItem";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static new DriveItem CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new DriveItem();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"analytics", n => { Analytics = n.GetObjectValue<ItemAnalytics>(ItemAnalytics.CreateFromDiscriminatorValue); } },
                {"audio", n => { Audio = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Audio>(GitHubTodoDemo.MicrosoftGraph.Models.Audio.CreateFromDiscriminatorValue); } },
                {"bundle", n => { Bundle = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Bundle>(GitHubTodoDemo.MicrosoftGraph.Models.Bundle.CreateFromDiscriminatorValue); } },
                {"children", n => { Children = n.GetCollectionOfObjectValues<DriveItem>(DriveItem.CreateFromDiscriminatorValue)?.ToList(); } },
                {"content", n => { Content = n.GetByteArrayValue(); } },
                {"cTag", n => { CTag = n.GetStringValue(); } },
                {"deleted", n => { Deleted = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Deleted>(GitHubTodoDemo.MicrosoftGraph.Models.Deleted.CreateFromDiscriminatorValue); } },
                {"file", n => { FileObject = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.FileObject>(GitHubTodoDemo.MicrosoftGraph.Models.FileObject.CreateFromDiscriminatorValue); } },
                {"fileSystemInfo", n => { FileSystemInfo = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.FileSystemInfo>(GitHubTodoDemo.MicrosoftGraph.Models.FileSystemInfo.CreateFromDiscriminatorValue); } },
                {"folder", n => { Folder = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Folder>(GitHubTodoDemo.MicrosoftGraph.Models.Folder.CreateFromDiscriminatorValue); } },
                {"image", n => { Image = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Image>(GitHubTodoDemo.MicrosoftGraph.Models.Image.CreateFromDiscriminatorValue); } },
                {"listItem", n => { ListItem = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.ListItem>(GitHubTodoDemo.MicrosoftGraph.Models.ListItem.CreateFromDiscriminatorValue); } },
                {"location", n => { Location = n.GetObjectValue<GeoCoordinates>(GeoCoordinates.CreateFromDiscriminatorValue); } },
                {"malware", n => { Malware = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Malware>(GitHubTodoDemo.MicrosoftGraph.Models.Malware.CreateFromDiscriminatorValue); } },
                {"package", n => { Package = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Package>(GitHubTodoDemo.MicrosoftGraph.Models.Package.CreateFromDiscriminatorValue); } },
                {"pendingOperations", n => { PendingOperations = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.PendingOperations>(GitHubTodoDemo.MicrosoftGraph.Models.PendingOperations.CreateFromDiscriminatorValue); } },
                {"permissions", n => { Permissions = n.GetCollectionOfObjectValues<Permission>(Permission.CreateFromDiscriminatorValue)?.ToList(); } },
                {"photo", n => { Photo = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Photo>(GitHubTodoDemo.MicrosoftGraph.Models.Photo.CreateFromDiscriminatorValue); } },
                {"publication", n => { Publication = n.GetObjectValue<PublicationFacet>(PublicationFacet.CreateFromDiscriminatorValue); } },
                {"remoteItem", n => { RemoteItem = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.RemoteItem>(GitHubTodoDemo.MicrosoftGraph.Models.RemoteItem.CreateFromDiscriminatorValue); } },
                {"root", n => { Root = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Root>(GitHubTodoDemo.MicrosoftGraph.Models.Root.CreateFromDiscriminatorValue); } },
                {"searchResult", n => { SearchResult = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.SearchResult>(GitHubTodoDemo.MicrosoftGraph.Models.SearchResult.CreateFromDiscriminatorValue); } },
                {"shared", n => { Shared = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Shared>(GitHubTodoDemo.MicrosoftGraph.Models.Shared.CreateFromDiscriminatorValue); } },
                {"sharepointIds", n => { SharepointIds = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.SharepointIds>(GitHubTodoDemo.MicrosoftGraph.Models.SharepointIds.CreateFromDiscriminatorValue); } },
                {"size", n => { Size = n.GetLongValue(); } },
                {"specialFolder", n => { SpecialFolder = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.SpecialFolder>(GitHubTodoDemo.MicrosoftGraph.Models.SpecialFolder.CreateFromDiscriminatorValue); } },
                {"subscriptions", n => { Subscriptions = n.GetCollectionOfObjectValues<Subscription>(Subscription.CreateFromDiscriminatorValue)?.ToList(); } },
                {"thumbnails", n => { Thumbnails = n.GetCollectionOfObjectValues<ThumbnailSet>(ThumbnailSet.CreateFromDiscriminatorValue)?.ToList(); } },
                {"versions", n => { Versions = n.GetCollectionOfObjectValues<DriveItemVersion>(DriveItemVersion.CreateFromDiscriminatorValue)?.ToList(); } },
                {"video", n => { Video = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Video>(GitHubTodoDemo.MicrosoftGraph.Models.Video.CreateFromDiscriminatorValue); } },
                {"webDavUrl", n => { WebDavUrl = n.GetStringValue(); } },
                {"workbook", n => { Workbook = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Workbook>(GitHubTodoDemo.MicrosoftGraph.Models.Workbook.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteObjectValue<ItemAnalytics>("analytics", Analytics);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Audio>("audio", Audio);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Bundle>("bundle", Bundle);
            writer.WriteCollectionOfObjectValues<DriveItem>("children", Children);
            writer.WriteByteArrayValue("content", Content);
            writer.WriteStringValue("cTag", CTag);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Deleted>("deleted", Deleted);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.FileObject>("file", FileObject);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.FileSystemInfo>("fileSystemInfo", FileSystemInfo);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Folder>("folder", Folder);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Image>("image", Image);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.ListItem>("listItem", ListItem);
            writer.WriteObjectValue<GeoCoordinates>("location", Location);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Malware>("malware", Malware);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Package>("package", Package);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.PendingOperations>("pendingOperations", PendingOperations);
            writer.WriteCollectionOfObjectValues<Permission>("permissions", Permissions);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Photo>("photo", Photo);
            writer.WriteObjectValue<PublicationFacet>("publication", Publication);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.RemoteItem>("remoteItem", RemoteItem);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Root>("root", Root);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.SearchResult>("searchResult", SearchResult);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Shared>("shared", Shared);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.SharepointIds>("sharepointIds", SharepointIds);
            writer.WriteLongValue("size", Size);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.SpecialFolder>("specialFolder", SpecialFolder);
            writer.WriteCollectionOfObjectValues<Subscription>("subscriptions", Subscriptions);
            writer.WriteCollectionOfObjectValues<ThumbnailSet>("thumbnails", Thumbnails);
            writer.WriteCollectionOfObjectValues<DriveItemVersion>("versions", Versions);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Video>("video", Video);
            writer.WriteStringValue("webDavUrl", WebDavUrl);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.Workbook>("workbook", Workbook);
        }
    }
}
