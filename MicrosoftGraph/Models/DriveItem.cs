using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public class DriveItem : BaseItem, IParsable {
        /// <summary>Analytics about the view activities that took place on this item.</summary>
        public ItemAnalytics Analytics { get; set; }
        /// <summary>Audio metadata, if the item is an audio file. Read-only. Read-only. Only on OneDrive Personal.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.Audio Audio { get; set; }
        /// <summary>Bundle metadata, if the item is a bundle. Read-only.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.Bundle Bundle { get; set; }
        /// <summary>Collection containing Item objects for the immediate children of Item. Only items representing folders have children. Read-only. Nullable.</summary>
        public List<DriveItem> Children { get; set; }
        /// <summary>The content stream, if the item represents a file.</summary>
        public byte[] Content { get; set; }
        /// <summary>An eTag for the content of the item. This eTag is not changed if only the metadata is changed. Note This property is not returned if the item is a folder. Read-only.</summary>
        public string CTag { get; set; }
        /// <summary>Information about the deleted state of the item. Read-only.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.Deleted Deleted { get; set; }
        /// <summary>File metadata, if the item is a file. Read-only.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.FileObject FileObject { get; set; }
        /// <summary>File system information on client. Read-write.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.FileSystemInfo FileSystemInfo { get; set; }
        /// <summary>Folder metadata, if the item is a folder. Read-only.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.Folder Folder { get; set; }
        /// <summary>Image metadata, if the item is an image. Read-only.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.Image Image { get; set; }
        /// <summary>For drives in SharePoint, the associated document library list item. Read-only. Nullable.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.ListItem ListItem { get; set; }
        /// <summary>Location metadata, if the item has location data. Read-only.</summary>
        public GeoCoordinates Location { get; set; }
        /// <summary>Malware metadata, if the item was detected to contain malware. Read-only.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.Malware Malware { get; set; }
        /// <summary>If present, indicates that this item is a package instead of a folder or file. Packages are treated like files in some contexts and folders in others. Read-only.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.Package Package { get; set; }
        /// <summary>If present, indicates that one or more operations that might affect the state of the driveItem are pending completion. Read-only.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.PendingOperations PendingOperations { get; set; }
        /// <summary>The set of permissions for the item. Read-only. Nullable.</summary>
        public List<Permission> Permissions { get; set; }
        /// <summary>Photo metadata, if the item is a photo. Read-only.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.Photo Photo { get; set; }
        /// <summary>Provides information about the published or checked-out state of an item, in locations that support such actions. This property is not returned by default. Read-only.</summary>
        public PublicationFacet Publication { get; set; }
        /// <summary>Remote item data, if the item is shared from a drive other than the one being accessed. Read-only.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.RemoteItem RemoteItem { get; set; }
        /// <summary>If this property is non-null, it indicates that the driveItem is the top-most driveItem in the drive.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.Root Root { get; set; }
        /// <summary>Search metadata, if the item is from a search result. Read-only.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.SearchResult SearchResult { get; set; }
        /// <summary>Indicates that the item has been shared with others and provides information about the shared state of the item. Read-only.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.Shared Shared { get; set; }
        /// <summary>Returns identifiers useful for SharePoint REST compatibility. Read-only.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.SharepointIds SharepointIds { get; set; }
        /// <summary>Size of the item in bytes. Read-only.</summary>
        public long? Size { get; set; }
        /// <summary>If the current item is also available as a special folder, this facet is returned. Read-only.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.SpecialFolder SpecialFolder { get; set; }
        /// <summary>The set of subscriptions on the item. Only supported on the root of a drive.</summary>
        public List<Subscription> Subscriptions { get; set; }
        /// <summary>Collection containing [ThumbnailSet][] objects associated with the item. For more info, see [getting thumbnails][]. Read-only. Nullable.</summary>
        public List<ThumbnailSet> Thumbnails { get; set; }
        /// <summary>The list of previous versions of the item. For more info, see [getting previous versions][]. Read-only. Nullable.</summary>
        public List<DriveItemVersion> Versions { get; set; }
        /// <summary>Video metadata, if the item is a video. Read-only.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.Video Video { get; set; }
        /// <summary>WebDAV compatible URL for the item.</summary>
        public string WebDavUrl { get; set; }
        /// <summary>For files that are Excel spreadsheets, accesses the workbook API to work with the spreadsheet&apos;s contents. Nullable.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.Workbook Workbook { get; set; }
        /// <summary>
        /// Instantiates a new driveItem and sets the default values.
        /// </summary>
        public DriveItem() : base() {
            OdataType = "#microsoft.graph.driveItem";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
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
                {"audio", n => { Audio = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Audio>(GithubTodoDemo.MicrosoftGraph.Models.Audio.CreateFromDiscriminatorValue); } },
                {"bundle", n => { Bundle = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Bundle>(GithubTodoDemo.MicrosoftGraph.Models.Bundle.CreateFromDiscriminatorValue); } },
                {"children", n => { Children = n.GetCollectionOfObjectValues<DriveItem>(DriveItem.CreateFromDiscriminatorValue)?.ToList(); } },
                {"content", n => { Content = n.GetByteArrayValue(); } },
                {"cTag", n => { CTag = n.GetStringValue(); } },
                {"deleted", n => { Deleted = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Deleted>(GithubTodoDemo.MicrosoftGraph.Models.Deleted.CreateFromDiscriminatorValue); } },
                {"file", n => { FileObject = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.FileObject>(GithubTodoDemo.MicrosoftGraph.Models.FileObject.CreateFromDiscriminatorValue); } },
                {"fileSystemInfo", n => { FileSystemInfo = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.FileSystemInfo>(GithubTodoDemo.MicrosoftGraph.Models.FileSystemInfo.CreateFromDiscriminatorValue); } },
                {"folder", n => { Folder = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Folder>(GithubTodoDemo.MicrosoftGraph.Models.Folder.CreateFromDiscriminatorValue); } },
                {"image", n => { Image = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Image>(GithubTodoDemo.MicrosoftGraph.Models.Image.CreateFromDiscriminatorValue); } },
                {"listItem", n => { ListItem = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.ListItem>(GithubTodoDemo.MicrosoftGraph.Models.ListItem.CreateFromDiscriminatorValue); } },
                {"location", n => { Location = n.GetObjectValue<GeoCoordinates>(GeoCoordinates.CreateFromDiscriminatorValue); } },
                {"malware", n => { Malware = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Malware>(GithubTodoDemo.MicrosoftGraph.Models.Malware.CreateFromDiscriminatorValue); } },
                {"package", n => { Package = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Package>(GithubTodoDemo.MicrosoftGraph.Models.Package.CreateFromDiscriminatorValue); } },
                {"pendingOperations", n => { PendingOperations = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.PendingOperations>(GithubTodoDemo.MicrosoftGraph.Models.PendingOperations.CreateFromDiscriminatorValue); } },
                {"permissions", n => { Permissions = n.GetCollectionOfObjectValues<Permission>(Permission.CreateFromDiscriminatorValue)?.ToList(); } },
                {"photo", n => { Photo = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Photo>(GithubTodoDemo.MicrosoftGraph.Models.Photo.CreateFromDiscriminatorValue); } },
                {"publication", n => { Publication = n.GetObjectValue<PublicationFacet>(PublicationFacet.CreateFromDiscriminatorValue); } },
                {"remoteItem", n => { RemoteItem = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.RemoteItem>(GithubTodoDemo.MicrosoftGraph.Models.RemoteItem.CreateFromDiscriminatorValue); } },
                {"root", n => { Root = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Root>(GithubTodoDemo.MicrosoftGraph.Models.Root.CreateFromDiscriminatorValue); } },
                {"searchResult", n => { SearchResult = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.SearchResult>(GithubTodoDemo.MicrosoftGraph.Models.SearchResult.CreateFromDiscriminatorValue); } },
                {"shared", n => { Shared = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Shared>(GithubTodoDemo.MicrosoftGraph.Models.Shared.CreateFromDiscriminatorValue); } },
                {"sharepointIds", n => { SharepointIds = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.SharepointIds>(GithubTodoDemo.MicrosoftGraph.Models.SharepointIds.CreateFromDiscriminatorValue); } },
                {"size", n => { Size = n.GetLongValue(); } },
                {"specialFolder", n => { SpecialFolder = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.SpecialFolder>(GithubTodoDemo.MicrosoftGraph.Models.SpecialFolder.CreateFromDiscriminatorValue); } },
                {"subscriptions", n => { Subscriptions = n.GetCollectionOfObjectValues<Subscription>(Subscription.CreateFromDiscriminatorValue)?.ToList(); } },
                {"thumbnails", n => { Thumbnails = n.GetCollectionOfObjectValues<ThumbnailSet>(ThumbnailSet.CreateFromDiscriminatorValue)?.ToList(); } },
                {"versions", n => { Versions = n.GetCollectionOfObjectValues<DriveItemVersion>(DriveItemVersion.CreateFromDiscriminatorValue)?.ToList(); } },
                {"video", n => { Video = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Video>(GithubTodoDemo.MicrosoftGraph.Models.Video.CreateFromDiscriminatorValue); } },
                {"webDavUrl", n => { WebDavUrl = n.GetStringValue(); } },
                {"workbook", n => { Workbook = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Workbook>(GithubTodoDemo.MicrosoftGraph.Models.Workbook.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteObjectValue<ItemAnalytics>("analytics", Analytics);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Audio>("audio", Audio);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Bundle>("bundle", Bundle);
            writer.WriteCollectionOfObjectValues<DriveItem>("children", Children);
            writer.WriteByteArrayValue("content", Content);
            writer.WriteStringValue("cTag", CTag);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Deleted>("deleted", Deleted);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.FileObject>("file", FileObject);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.FileSystemInfo>("fileSystemInfo", FileSystemInfo);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Folder>("folder", Folder);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Image>("image", Image);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.ListItem>("listItem", ListItem);
            writer.WriteObjectValue<GeoCoordinates>("location", Location);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Malware>("malware", Malware);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Package>("package", Package);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.PendingOperations>("pendingOperations", PendingOperations);
            writer.WriteCollectionOfObjectValues<Permission>("permissions", Permissions);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Photo>("photo", Photo);
            writer.WriteObjectValue<PublicationFacet>("publication", Publication);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.RemoteItem>("remoteItem", RemoteItem);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Root>("root", Root);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.SearchResult>("searchResult", SearchResult);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Shared>("shared", Shared);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.SharepointIds>("sharepointIds", SharepointIds);
            writer.WriteLongValue("size", Size);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.SpecialFolder>("specialFolder", SpecialFolder);
            writer.WriteCollectionOfObjectValues<Subscription>("subscriptions", Subscriptions);
            writer.WriteCollectionOfObjectValues<ThumbnailSet>("thumbnails", Thumbnails);
            writer.WriteCollectionOfObjectValues<DriveItemVersion>("versions", Versions);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Video>("video", Video);
            writer.WriteStringValue("webDavUrl", WebDavUrl);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.Workbook>("workbook", Workbook);
        }
    }
}
