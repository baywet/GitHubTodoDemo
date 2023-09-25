package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
/**
 * License Simple
 */
@jakarta.annotation.Generated("com.microsoft.kiota")
public class NullableLicenseSimple implements Parsable {
    /**
     * The html_url property
     */
    private String htmlUrl;
    /**
     * The key property
     */
    private String key;
    /**
     * The name property
     */
    private String name;
    /**
     * The node_id property
     */
    private String nodeId;
    /**
     * The spdx_id property
     */
    private String spdxId;
    /**
     * The url property
     */
    private String url;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a nullableLicenseSimple
     */
    @jakarta.annotation.Nonnull
    public static NullableLicenseSimple createFromDiscriminatorValue(@jakarta.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new NullableLicenseSimple();
    }
    /**
     * The deserialization information for the current model
     * @return a Map<String, java.util.function.Consumer<ParseNode>>
     */
    @jakarta.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(6);
        deserializerMap.put("html_url", (n) -> { this.setHtmlUrl(n.getStringValue()); });
        deserializerMap.put("key", (n) -> { this.setKey(n.getStringValue()); });
        deserializerMap.put("name", (n) -> { this.setName(n.getStringValue()); });
        deserializerMap.put("node_id", (n) -> { this.setNodeId(n.getStringValue()); });
        deserializerMap.put("spdx_id", (n) -> { this.setSpdxId(n.getStringValue()); });
        deserializerMap.put("url", (n) -> { this.setUrl(n.getStringValue()); });
        return deserializerMap;
    }
    /**
     * Gets the html_url property value. The html_url property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getHtmlUrl() {
        return this.htmlUrl;
    }
    /**
     * Gets the key property value. The key property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getKey() {
        return this.key;
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
     * Gets the spdx_id property value. The spdx_id property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getSpdxId() {
        return this.spdxId;
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
        writer.writeStringValue("html_url", this.getHtmlUrl());
        writer.writeStringValue("key", this.getKey());
        writer.writeStringValue("name", this.getName());
        writer.writeStringValue("node_id", this.getNodeId());
        writer.writeStringValue("spdx_id", this.getSpdxId());
        writer.writeStringValue("url", this.getUrl());
    }
    /**
     * Sets the html_url property value. The html_url property
     * @param value Value to set for the html_url property.
     */
    public void setHtmlUrl(@jakarta.annotation.Nullable final String value) {
        this.htmlUrl = value;
    }
    /**
     * Sets the key property value. The key property
     * @param value Value to set for the key property.
     */
    public void setKey(@jakarta.annotation.Nullable final String value) {
        this.key = value;
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
     * Sets the spdx_id property value. The spdx_id property
     * @param value Value to set for the spdx_id property.
     */
    public void setSpdxId(@jakarta.annotation.Nullable final String value) {
        this.spdxId = value;
    }
    /**
     * Sets the url property value. The url property
     * @param value Value to set for the url property.
     */
    public void setUrl(@jakarta.annotation.Nullable final String value) {
        this.url = value;
    }
}
