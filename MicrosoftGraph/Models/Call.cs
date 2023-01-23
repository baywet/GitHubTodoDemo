using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GitHubTodoDemo.MicrosoftGraph.Models {
    /// <summary>
    /// Provides operations to manage the lists property of the microsoft.graph.todo entity.
    /// </summary>
    public class Call : Entity, IParsable {
        /// <summary>The audioRoutingGroups property</summary>
        public List<AudioRoutingGroup> AudioRoutingGroups { get; set; }
        /// <summary>The callback URL on which callbacks will be delivered. Must be https.</summary>
        public string CallbackUri { get; set; }
        /// <summary>A unique identifier for all the participant calls in a conference or a unique identifier for two participant calls in a P2P call.  This needs to be copied over from Microsoft.Graph.Call.CallChainId.</summary>
        public string CallChainId { get; set; }
        /// <summary>Contains the optional features for the call.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.CallOptions CallOptions { get; set; }
        /// <summary>The routing information on how the call was retargeted. Read-only.</summary>
        public List<CallRoute> CallRoutes { get; set; }
        /// <summary>The chat information. Required information for joining a meeting.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.ChatInfo ChatInfo { get; set; }
        /// <summary>The contentSharingSessions property</summary>
        public List<ContentSharingSession> ContentSharingSessions { get; set; }
        /// <summary>The direction of the call. The possible value are incoming or outgoing. Read-only.</summary>
        public CallDirection? Direction { get; set; }
        /// <summary>Call context associated with an incoming call.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.IncomingContext IncomingContext { get; set; }
        /// <summary>The media configuration. Required.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.MediaConfig MediaConfig { get; set; }
        /// <summary>Read-only. The call media state.</summary>
        public CallMediaState MediaState { get; set; }
        /// <summary>The meeting information. Required information for meeting scenarios.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.MeetingInfo MeetingInfo { get; set; }
        /// <summary>The myParticipantId property</summary>
        public string MyParticipantId { get; set; }
        /// <summary>The operations property</summary>
        public List<CommsOperation> Operations { get; set; }
        /// <summary>The participants property</summary>
        public List<Participant> Participants { get; set; }
        /// <summary>The list of requested modalities. Possible values are: unknown, audio, video, videoBasedScreenSharing, data.</summary>
        public List<Modality?> RequestedModalities { get; set; }
        /// <summary>The result information. For example can hold termination reason. Read-only.</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.ResultInfo ResultInfo { get; set; }
        /// <summary>The originator of the call.</summary>
        public ParticipantInfo Source { get; set; }
        /// <summary>The call state. Possible values are: incoming, establishing, ringing, established, hold, transferring, transferAccepted, redirecting, terminating, terminated. Read-only.</summary>
        public CallState? State { get; set; }
        /// <summary>The subject of the conversation.</summary>
        public string Subject { get; set; }
        /// <summary>The targets of the call. Required information for creating peer to peer call.</summary>
        public List<InvitationParticipantInfo> Targets { get; set; }
        /// <summary>The tenantId property</summary>
        public string TenantId { get; set; }
        /// <summary>The toneInfo property</summary>
        public GitHubTodoDemo.MicrosoftGraph.Models.ToneInfo ToneInfo { get; set; }
        /// <summary>The transcription information for the call. Read-only.</summary>
        public CallTranscriptionInfo Transcription { get; set; }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// </summary>
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        public static new Call CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new Call();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"audioRoutingGroups", n => { AudioRoutingGroups = n.GetCollectionOfObjectValues<AudioRoutingGroup>(AudioRoutingGroup.CreateFromDiscriminatorValue)?.ToList(); } },
                {"callbackUri", n => { CallbackUri = n.GetStringValue(); } },
                {"callChainId", n => { CallChainId = n.GetStringValue(); } },
                {"callOptions", n => { CallOptions = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.CallOptions>(GitHubTodoDemo.MicrosoftGraph.Models.CallOptions.CreateFromDiscriminatorValue); } },
                {"callRoutes", n => { CallRoutes = n.GetCollectionOfObjectValues<CallRoute>(CallRoute.CreateFromDiscriminatorValue)?.ToList(); } },
                {"chatInfo", n => { ChatInfo = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.ChatInfo>(GitHubTodoDemo.MicrosoftGraph.Models.ChatInfo.CreateFromDiscriminatorValue); } },
                {"contentSharingSessions", n => { ContentSharingSessions = n.GetCollectionOfObjectValues<ContentSharingSession>(ContentSharingSession.CreateFromDiscriminatorValue)?.ToList(); } },
                {"direction", n => { Direction = n.GetEnumValue<CallDirection>(); } },
                {"incomingContext", n => { IncomingContext = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.IncomingContext>(GitHubTodoDemo.MicrosoftGraph.Models.IncomingContext.CreateFromDiscriminatorValue); } },
                {"mediaConfig", n => { MediaConfig = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.MediaConfig>(GitHubTodoDemo.MicrosoftGraph.Models.MediaConfig.CreateFromDiscriminatorValue); } },
                {"mediaState", n => { MediaState = n.GetObjectValue<CallMediaState>(CallMediaState.CreateFromDiscriminatorValue); } },
                {"meetingInfo", n => { MeetingInfo = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.MeetingInfo>(GitHubTodoDemo.MicrosoftGraph.Models.MeetingInfo.CreateFromDiscriminatorValue); } },
                {"myParticipantId", n => { MyParticipantId = n.GetStringValue(); } },
                {"operations", n => { Operations = n.GetCollectionOfObjectValues<CommsOperation>(CommsOperation.CreateFromDiscriminatorValue)?.ToList(); } },
                {"participants", n => { Participants = n.GetCollectionOfObjectValues<Participant>(Participant.CreateFromDiscriminatorValue)?.ToList(); } },
                {"requestedModalities", n => { RequestedModalities = n.GetCollectionOfEnumValues<Modality>()?.ToList(); } },
                {"resultInfo", n => { ResultInfo = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.ResultInfo>(GitHubTodoDemo.MicrosoftGraph.Models.ResultInfo.CreateFromDiscriminatorValue); } },
                {"source", n => { Source = n.GetObjectValue<ParticipantInfo>(ParticipantInfo.CreateFromDiscriminatorValue); } },
                {"state", n => { State = n.GetEnumValue<CallState>(); } },
                {"subject", n => { Subject = n.GetStringValue(); } },
                {"targets", n => { Targets = n.GetCollectionOfObjectValues<InvitationParticipantInfo>(InvitationParticipantInfo.CreateFromDiscriminatorValue)?.ToList(); } },
                {"tenantId", n => { TenantId = n.GetStringValue(); } },
                {"toneInfo", n => { ToneInfo = n.GetObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.ToneInfo>(GitHubTodoDemo.MicrosoftGraph.Models.ToneInfo.CreateFromDiscriminatorValue); } },
                {"transcription", n => { Transcription = n.GetObjectValue<CallTranscriptionInfo>(CallTranscriptionInfo.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// </summary>
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteCollectionOfObjectValues<AudioRoutingGroup>("audioRoutingGroups", AudioRoutingGroups);
            writer.WriteStringValue("callbackUri", CallbackUri);
            writer.WriteStringValue("callChainId", CallChainId);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.CallOptions>("callOptions", CallOptions);
            writer.WriteCollectionOfObjectValues<CallRoute>("callRoutes", CallRoutes);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.ChatInfo>("chatInfo", ChatInfo);
            writer.WriteCollectionOfObjectValues<ContentSharingSession>("contentSharingSessions", ContentSharingSessions);
            writer.WriteEnumValue<CallDirection>("direction", Direction);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.IncomingContext>("incomingContext", IncomingContext);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.MediaConfig>("mediaConfig", MediaConfig);
            writer.WriteObjectValue<CallMediaState>("mediaState", MediaState);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.MeetingInfo>("meetingInfo", MeetingInfo);
            writer.WriteStringValue("myParticipantId", MyParticipantId);
            writer.WriteCollectionOfObjectValues<CommsOperation>("operations", Operations);
            writer.WriteCollectionOfObjectValues<Participant>("participants", Participants);
            writer.WriteCollectionOfEnumValues<Modality>("requestedModalities", RequestedModalities);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.ResultInfo>("resultInfo", ResultInfo);
            writer.WriteObjectValue<ParticipantInfo>("source", Source);
            writer.WriteEnumValue<CallState>("state", State);
            writer.WriteStringValue("subject", Subject);
            writer.WriteCollectionOfObjectValues<InvitationParticipantInfo>("targets", Targets);
            writer.WriteStringValue("tenantId", TenantId);
            writer.WriteObjectValue<GitHubTodoDemo.MicrosoftGraph.Models.ToneInfo>("toneInfo", ToneInfo);
            writer.WriteObjectValue<CallTranscriptionInfo>("transcription", Transcription);
        }
    }
}
