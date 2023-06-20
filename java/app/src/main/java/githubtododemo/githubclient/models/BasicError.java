package githubtododemo.githubclient.models;

import com.microsoft.kiota.ApiException;
import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
/**
 * Basic Error
 */
public class BasicError extends ApiException implements Parsable {
    /** The documentation_url property */
    private String documentationUrl;
    /** The message property */
    private String message;
    /** The status property */
    private String status;
    /** The url property */
    private String url;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a BasicError
     */
    @javax.annotation.Nonnull
    public static BasicError createFromDiscriminatorValue(@javax.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new BasicError();
    }
    /**
     * Gets the documentation_url property value. The documentation_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getDocumentationUrl() {
        return this.documentationUrl;
    }
    /**
     * The deserialization information for the current model
     * @return a Map<String, java.util.function.Consumer<ParseNode>>
     */
    @javax.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(4);
        deserializerMap.put("documentation_url", (n) -> { this.setDocumentationUrl(n.getStringValue()); });
        deserializerMap.put("message", (n) -> { this.setMessage(n.getStringValue()); });
        deserializerMap.put("status", (n) -> { this.setStatus(n.getStringValue()); });
        deserializerMap.put("url", (n) -> { this.setUrl(n.getStringValue()); });
        return deserializerMap;
    }
    /**
     * Gets the message property value. The message property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getMessageEscaped() {
        return this.message;
    }
    /**
     * Gets the status property value. The status property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getStatus() {
        return this.status;
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
        writer.writeStringValue("documentation_url", this.getDocumentationUrl());
        writer.writeStringValue("message", this.getMessageEscaped());
        writer.writeStringValue("status", this.getStatus());
        writer.writeStringValue("url", this.getUrl());
    }
    /**
     * Sets the documentation_url property value. The documentation_url property
     * @param value Value to set for the documentationUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setDocumentationUrl(@javax.annotation.Nullable final String value) {
        this.documentationUrl = value;
    }
    /**
     * Sets the message property value. The message property
     * @param value Value to set for the message property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMessage(@javax.annotation.Nullable final String value) {
        this.message = value;
    }
    /**
     * Sets the status property value. The status property
     * @param value Value to set for the status property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setStatus(@javax.annotation.Nullable final String value) {
        this.status = value;
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
