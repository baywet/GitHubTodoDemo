package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.time.OffsetDateTime;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
/**
 * A collection of related issues and pull requests.
 */
public class NullableMilestone implements Parsable {
    /**
     * The closed_at property
     */
    private OffsetDateTime closedAt;
    /**
     * The closed_issues property
     */
    private Integer closedIssues;
    /**
     * The created_at property
     */
    private OffsetDateTime createdAt;
    /**
     * A GitHub user.
     */
    private NullableSimpleUser creator;
    /**
     * The description property
     */
    private String description;
    /**
     * The due_on property
     */
    private OffsetDateTime dueOn;
    /**
     * The html_url property
     */
    private String htmlUrl;
    /**
     * The id property
     */
    private Integer id;
    /**
     * The labels_url property
     */
    private String labelsUrl;
    /**
     * The node_id property
     */
    private String nodeId;
    /**
     * The number of the milestone.
     */
    private Integer number;
    /**
     * The open_issues property
     */
    private Integer openIssues;
    /**
     * The state of the milestone.
     */
    private NullableMilestoneState state;
    /**
     * The title of the milestone.
     */
    private String title;
    /**
     * The updated_at property
     */
    private OffsetDateTime updatedAt;
    /**
     * The url property
     */
    private String url;
    /**
     * Instantiates a new NullableMilestone and sets the default values.
     * @return a void
     */
    @javax.annotation.Nullable
    public NullableMilestone() {
        this.setState(NullableMilestoneState.forValue("open"));
    }
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a NullableMilestone
     */
    @javax.annotation.Nonnull
    public static NullableMilestone createFromDiscriminatorValue(@javax.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new NullableMilestone();
    }
    /**
     * Gets the closed_at property value. The closed_at property
     * @return a OffsetDateTime
     */
    @javax.annotation.Nullable
    public OffsetDateTime getClosedAt() {
        return this.closedAt;
    }
    /**
     * Gets the closed_issues property value. The closed_issues property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getClosedIssues() {
        return this.closedIssues;
    }
    /**
     * Gets the created_at property value. The created_at property
     * @return a OffsetDateTime
     */
    @javax.annotation.Nullable
    public OffsetDateTime getCreatedAt() {
        return this.createdAt;
    }
    /**
     * Gets the creator property value. A GitHub user.
     * @return a NullableSimpleUser
     */
    @javax.annotation.Nullable
    public NullableSimpleUser getCreator() {
        return this.creator;
    }
    /**
     * Gets the description property value. The description property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getDescription() {
        return this.description;
    }
    /**
     * Gets the due_on property value. The due_on property
     * @return a OffsetDateTime
     */
    @javax.annotation.Nullable
    public OffsetDateTime getDueOn() {
        return this.dueOn;
    }
    /**
     * The deserialization information for the current model
     * @return a Map<String, java.util.function.Consumer<ParseNode>>
     */
    @javax.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(16);
        deserializerMap.put("closed_at", (n) -> { this.setClosedAt(n.getOffsetDateTimeValue()); });
        deserializerMap.put("closed_issues", (n) -> { this.setClosedIssues(n.getIntegerValue()); });
        deserializerMap.put("created_at", (n) -> { this.setCreatedAt(n.getOffsetDateTimeValue()); });
        deserializerMap.put("creator", (n) -> { this.setCreator(n.getObjectValue(NullableSimpleUser::createFromDiscriminatorValue)); });
        deserializerMap.put("description", (n) -> { this.setDescription(n.getStringValue()); });
        deserializerMap.put("due_on", (n) -> { this.setDueOn(n.getOffsetDateTimeValue()); });
        deserializerMap.put("html_url", (n) -> { this.setHtmlUrl(n.getStringValue()); });
        deserializerMap.put("id", (n) -> { this.setId(n.getIntegerValue()); });
        deserializerMap.put("labels_url", (n) -> { this.setLabelsUrl(n.getStringValue()); });
        deserializerMap.put("node_id", (n) -> { this.setNodeId(n.getStringValue()); });
        deserializerMap.put("number", (n) -> { this.setNumber(n.getIntegerValue()); });
        deserializerMap.put("open_issues", (n) -> { this.setOpenIssues(n.getIntegerValue()); });
        deserializerMap.put("state", (n) -> { this.setState(n.getEnumValue(NullableMilestoneState.class)); });
        deserializerMap.put("title", (n) -> { this.setTitle(n.getStringValue()); });
        deserializerMap.put("updated_at", (n) -> { this.setUpdatedAt(n.getOffsetDateTimeValue()); });
        deserializerMap.put("url", (n) -> { this.setUrl(n.getStringValue()); });
        return deserializerMap;
    }
    /**
     * Gets the html_url property value. The html_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getHtmlUrl() {
        return this.htmlUrl;
    }
    /**
     * Gets the id property value. The id property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getId() {
        return this.id;
    }
    /**
     * Gets the labels_url property value. The labels_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getLabelsUrl() {
        return this.labelsUrl;
    }
    /**
     * Gets the node_id property value. The node_id property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getNodeId() {
        return this.nodeId;
    }
    /**
     * Gets the number property value. The number of the milestone.
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getNumber() {
        return this.number;
    }
    /**
     * Gets the open_issues property value. The open_issues property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getOpenIssues() {
        return this.openIssues;
    }
    /**
     * Gets the state property value. The state of the milestone.
     * @return a NullableMilestoneState
     */
    @javax.annotation.Nullable
    public NullableMilestoneState getState() {
        return this.state;
    }
    /**
     * Gets the title property value. The title of the milestone.
     * @return a string
     */
    @javax.annotation.Nullable
    public String getTitle() {
        return this.title;
    }
    /**
     * Gets the updated_at property value. The updated_at property
     * @return a OffsetDateTime
     */
    @javax.annotation.Nullable
    public OffsetDateTime getUpdatedAt() {
        return this.updatedAt;
    }
    /**
     * Gets the url property value. The url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getUrl() {
        return this.url;
    }
    /**
     * Serializes information the current object
     * @param writer Serialization writer to use to serialize this model
     * @return a void
     */
    @javax.annotation.Nonnull
    public void serialize(@javax.annotation.Nonnull final SerializationWriter writer) {
        Objects.requireNonNull(writer);
        writer.writeOffsetDateTimeValue("closed_at", this.getClosedAt());
        writer.writeIntegerValue("closed_issues", this.getClosedIssues());
        writer.writeOffsetDateTimeValue("created_at", this.getCreatedAt());
        writer.writeObjectValue("creator", this.getCreator());
        writer.writeStringValue("description", this.getDescription());
        writer.writeOffsetDateTimeValue("due_on", this.getDueOn());
        writer.writeStringValue("html_url", this.getHtmlUrl());
        writer.writeIntegerValue("id", this.getId());
        writer.writeStringValue("labels_url", this.getLabelsUrl());
        writer.writeStringValue("node_id", this.getNodeId());
        writer.writeIntegerValue("number", this.getNumber());
        writer.writeIntegerValue("open_issues", this.getOpenIssues());
        writer.writeEnumValue("state", this.getState());
        writer.writeStringValue("title", this.getTitle());
        writer.writeOffsetDateTimeValue("updated_at", this.getUpdatedAt());
        writer.writeStringValue("url", this.getUrl());
    }
    /**
     * Sets the closed_at property value. The closed_at property
     * @param value Value to set for the closedAt property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setClosedAt(@javax.annotation.Nullable final OffsetDateTime value) {
        this.closedAt = value;
    }
    /**
     * Sets the closed_issues property value. The closed_issues property
     * @param value Value to set for the closedIssues property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setClosedIssues(@javax.annotation.Nullable final Integer value) {
        this.closedIssues = value;
    }
    /**
     * Sets the created_at property value. The created_at property
     * @param value Value to set for the createdAt property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setCreatedAt(@javax.annotation.Nullable final OffsetDateTime value) {
        this.createdAt = value;
    }
    /**
     * Sets the creator property value. A GitHub user.
     * @param value Value to set for the creator property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setCreator(@javax.annotation.Nullable final NullableSimpleUser value) {
        this.creator = value;
    }
    /**
     * Sets the description property value. The description property
     * @param value Value to set for the description property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setDescription(@javax.annotation.Nullable final String value) {
        this.description = value;
    }
    /**
     * Sets the due_on property value. The due_on property
     * @param value Value to set for the dueOn property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setDueOn(@javax.annotation.Nullable final OffsetDateTime value) {
        this.dueOn = value;
    }
    /**
     * Sets the html_url property value. The html_url property
     * @param value Value to set for the htmlUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setHtmlUrl(@javax.annotation.Nullable final String value) {
        this.htmlUrl = value;
    }
    /**
     * Sets the id property value. The id property
     * @param value Value to set for the id property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setId(@javax.annotation.Nullable final Integer value) {
        this.id = value;
    }
    /**
     * Sets the labels_url property value. The labels_url property
     * @param value Value to set for the labelsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setLabelsUrl(@javax.annotation.Nullable final String value) {
        this.labelsUrl = value;
    }
    /**
     * Sets the node_id property value. The node_id property
     * @param value Value to set for the nodeId property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setNodeId(@javax.annotation.Nullable final String value) {
        this.nodeId = value;
    }
    /**
     * Sets the number property value. The number of the milestone.
     * @param value Value to set for the number property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setNumber(@javax.annotation.Nullable final Integer value) {
        this.number = value;
    }
    /**
     * Sets the open_issues property value. The open_issues property
     * @param value Value to set for the openIssues property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setOpenIssues(@javax.annotation.Nullable final Integer value) {
        this.openIssues = value;
    }
    /**
     * Sets the state property value. The state of the milestone.
     * @param value Value to set for the state property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setState(@javax.annotation.Nullable final NullableMilestoneState value) {
        this.state = value;
    }
    /**
     * Sets the title property value. The title of the milestone.
     * @param value Value to set for the title property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setTitle(@javax.annotation.Nullable final String value) {
        this.title = value;
    }
    /**
     * Sets the updated_at property value. The updated_at property
     * @param value Value to set for the updatedAt property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setUpdatedAt(@javax.annotation.Nullable final OffsetDateTime value) {
        this.updatedAt = value;
    }
    /**
     * Sets the url property value. The url property
     * @param value Value to set for the url property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setUrl(@javax.annotation.Nullable final String value) {
        this.url = value;
    }
}
