package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
@jakarta.annotation.Generated("com.microsoft.kiota")
public class PullRequestSimpleLabels implements Parsable {
    /**
     * The color property
     */
    private String color;
    /**
     * The default property
     */
    private Boolean defaultEscaped;
    /**
     * The description property
     */
    private String description;
    /**
     * The id property
     */
    private Long id;
    /**
     * The name property
     */
    private String name;
    /**
     * The node_id property
     */
    private String nodeId;
    /**
     * The url property
     */
    private String url;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a PullRequestSimpleLabels
     */
    @jakarta.annotation.Nonnull
    public static PullRequestSimpleLabels createFromDiscriminatorValue(@jakarta.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new PullRequestSimpleLabels();
    }
    /**
     * Gets the color property value. The color property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getColor() {
        return this.color;
    }
    /**
     * Gets the default property value. The default property
     * @return a boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getDefault() {
        return this.defaultEscaped;
    }
    /**
     * Gets the description property value. The description property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getDescription() {
        return this.description;
    }
    /**
     * The deserialization information for the current model
     * @return a Map<String, java.util.function.Consumer<ParseNode>>
     */
    @jakarta.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(7);
        deserializerMap.put("color", (n) -> { this.setColor(n.getStringValue()); });
        deserializerMap.put("default", (n) -> { this.setDefault(n.getBooleanValue()); });
        deserializerMap.put("description", (n) -> { this.setDescription(n.getStringValue()); });
        deserializerMap.put("id", (n) -> { this.setId(n.getLongValue()); });
        deserializerMap.put("name", (n) -> { this.setName(n.getStringValue()); });
        deserializerMap.put("node_id", (n) -> { this.setNodeId(n.getStringValue()); });
        deserializerMap.put("url", (n) -> { this.setUrl(n.getStringValue()); });
        return deserializerMap;
    }
    /**
     * Gets the id property value. The id property
     * @return a int64
     */
    @jakarta.annotation.Nullable
    public Long getId() {
        return this.id;
    }
    /**
     * Gets the name property value. The name property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getName() {
        return this.name;
    }
    /**
     * Gets the node_id property value. The node_id property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getNodeId() {
        return this.nodeId;
    }
    /**
     * Gets the url property value. The url property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getUrl() {
        return this.url;
    }
    /**
     * Serializes information the current object
     * @param writer Serialization writer to use to serialize this model
     */
    public void serialize(@jakarta.annotation.Nonnull final SerializationWriter writer) {
        Objects.requireNonNull(writer);
        writer.writeStringValue("color", this.getColor());
        writer.writeBooleanValue("default", this.getDefault());
        writer.writeStringValue("description", this.getDescription());
        writer.writeLongValue("id", this.getId());
        writer.writeStringValue("name", this.getName());
        writer.writeStringValue("node_id", this.getNodeId());
        writer.writeStringValue("url", this.getUrl());
    }
    /**
     * Sets the color property value. The color property
     * @param value Value to set for the color property.
     */
    public void setColor(@jakarta.annotation.Nullable final String value) {
        this.color = value;
    }
    /**
     * Sets the default property value. The default property
     * @param value Value to set for the default property.
     */
    public void setDefault(@jakarta.annotation.Nullable final Boolean value) {
        this.defaultEscaped = value;
    }
    /**
     * Sets the description property value. The description property
     * @param value Value to set for the description property.
     */
    public void setDescription(@jakarta.annotation.Nullable final String value) {
        this.description = value;
    }
    /**
     * Sets the id property value. The id property
     * @param value Value to set for the id property.
     */
    public void setId(@jakarta.annotation.Nullable final Long value) {
        this.id = value;
    }
    /**
     * Sets the name property value. The name property
     * @param value Value to set for the name property.
     */
    public void setName(@jakarta.annotation.Nullable final String value) {
        this.name = value;
    }
    /**
     * Sets the node_id property value. The node_id property
     * @param value Value to set for the node_id property.
     */
    public void setNodeId(@jakarta.annotation.Nullable final String value) {
        this.nodeId = value;
    }
    /**
     * Sets the url property value. The url property
     * @param value Value to set for the url property.
     */
    public void setUrl(@jakarta.annotation.Nullable final String value) {
        this.url = value;
    }
}
