package githubtododemo.githubclient.models;

import com.microsoft.kiota.ApiException;
import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
/**
 * Validation Error
 */
@jakarta.annotation.Generated("com.microsoft.kiota")
public class ValidationError extends ApiException implements Parsable {
    /**
     * The documentation_url property
     */
    private String documentationUrl;
    /**
     * The errors property
     */
    private java.util.List<ValidationErrorErrors> errors;
    /**
     * The message property
     */
    private String message;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a ValidationError
     */
    @jakarta.annotation.Nonnull
    public static ValidationError createFromDiscriminatorValue(@jakarta.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new ValidationError();
    }
    /**
     * Gets the documentation_url property value. The documentation_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getDocumentationUrl() {
        return this.documentationUrl;
    }
    /**
     * Gets the errors property value. The errors property
     * @return a java.util.List<ValidationErrorErrors>
     */
    @jakarta.annotation.Nullable
    public java.util.List<ValidationErrorErrors> getErrors() {
        return this.errors;
    }
    /**
     * The deserialization information for the current model
     * @return a Map<String, java.util.function.Consumer<ParseNode>>
     */
    @jakarta.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(3);
        deserializerMap.put("documentation_url", (n) -> { this.setDocumentationUrl(n.getStringValue()); });
        deserializerMap.put("errors", (n) -> { this.setErrors(n.getCollectionOfObjectValues(ValidationErrorErrors::createFromDiscriminatorValue)); });
        deserializerMap.put("message", (n) -> { this.setMessage(n.getStringValue()); });
        return deserializerMap;
    }
    /**
     * The primary error message.
     * @return a String
     */
    @jakarta.annotation.Nonnull
    @Override
    public String getMessage() {
        return super.getMessage();
    }
    /**
     * Gets the message property value. The message property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getMessageEscaped() {
        return this.message;
    }
    /**
     * Serializes information the current object
     * @param writer Serialization writer to use to serialize this model
     */
    public void serialize(@jakarta.annotation.Nonnull final SerializationWriter writer) {
        Objects.requireNonNull(writer);
        writer.writeStringValue("documentation_url", this.getDocumentationUrl());
        writer.writeCollectionOfObjectValues("errors", this.getErrors());
        writer.writeStringValue("message", this.getMessageEscaped());
    }
    /**
     * Sets the documentation_url property value. The documentation_url property
     * @param value Value to set for the documentation_url property.
     */
    public void setDocumentationUrl(@jakarta.annotation.Nullable final String value) {
        this.documentationUrl = value;
    }
    /**
     * Sets the errors property value. The errors property
     * @param value Value to set for the errors property.
     */
    public void setErrors(@jakarta.annotation.Nullable final java.util.List<ValidationErrorErrors> value) {
        this.errors = value;
    }
    /**
     * Sets the message property value. The message property
     * @param value Value to set for the message property.
     */
    public void setMessage(@jakarta.annotation.Nullable final String value) {
        this.message = value;
    }
}
