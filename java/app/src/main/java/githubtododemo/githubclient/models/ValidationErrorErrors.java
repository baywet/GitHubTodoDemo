package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.ComposedTypeWrapper;
import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
@jakarta.annotation.Generated("com.microsoft.kiota")
public class ValidationErrorErrors implements Parsable {
    /**
     * The code property
     */
    private String code;
    /**
     * The field property
     */
    private String field;
    /**
     * The index property
     */
    private Integer index;
    /**
     * The message property
     */
    private String message;
    /**
     * The resource property
     */
    private String resource;
    /**
     * The value property
     */
    private ValidationError_errors_value value;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a ValidationErrorErrors
     */
    @jakarta.annotation.Nonnull
    public static ValidationErrorErrors createFromDiscriminatorValue(@jakarta.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new ValidationErrorErrors();
    }
    /**
     * Gets the code property value. The code property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getCode() {
        return this.code;
    }
    /**
     * Gets the field property value. The field property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getField() {
        return this.field;
    }
    /**
     * The deserialization information for the current model
     * @return a Map<String, java.util.function.Consumer<ParseNode>>
     */
    @jakarta.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(6);
        deserializerMap.put("code", (n) -> { this.setCode(n.getStringValue()); });
        deserializerMap.put("field", (n) -> { this.setField(n.getStringValue()); });
        deserializerMap.put("index", (n) -> { this.setIndex(n.getIntegerValue()); });
        deserializerMap.put("message", (n) -> { this.setMessage(n.getStringValue()); });
        deserializerMap.put("resource", (n) -> { this.setResource(n.getStringValue()); });
        deserializerMap.put("value", (n) -> { this.setValue(n.getObjectValue(ValidationError_errors_value::createFromDiscriminatorValue)); });
        return deserializerMap;
    }
    /**
     * Gets the index property value. The index property
     * @return a Integer
     */
    @jakarta.annotation.Nullable
    public Integer getIndex() {
        return this.index;
    }
    /**
     * Gets the message property value. The message property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getMessage() {
        return this.message;
    }
    /**
     * Gets the resource property value. The resource property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getResource() {
        return this.resource;
    }
    /**
     * Gets the value property value. The value property
     * @return a ValidationError_errors_value
     */
    @jakarta.annotation.Nullable
    public ValidationError_errors_value getValue() {
        return this.value;
    }
    /**
     * Serializes information the current object
     * @param writer Serialization writer to use to serialize this model
     */
    public void serialize(@jakarta.annotation.Nonnull final SerializationWriter writer) {
        Objects.requireNonNull(writer);
        writer.writeStringValue("code", this.getCode());
        writer.writeStringValue("field", this.getField());
        writer.writeIntegerValue("index", this.getIndex());
        writer.writeStringValue("message", this.getMessage());
        writer.writeStringValue("resource", this.getResource());
        writer.writeObjectValue("value", this.getValue());
    }
    /**
     * Sets the code property value. The code property
     * @param value Value to set for the code property.
     */
    public void setCode(@jakarta.annotation.Nullable final String value) {
        this.code = value;
    }
    /**
     * Sets the field property value. The field property
     * @param value Value to set for the field property.
     */
    public void setField(@jakarta.annotation.Nullable final String value) {
        this.field = value;
    }
    /**
     * Sets the index property value. The index property
     * @param value Value to set for the index property.
     */
    public void setIndex(@jakarta.annotation.Nullable final Integer value) {
        this.index = value;
    }
    /**
     * Sets the message property value. The message property
     * @param value Value to set for the message property.
     */
    public void setMessage(@jakarta.annotation.Nullable final String value) {
        this.message = value;
    }
    /**
     * Sets the resource property value. The resource property
     * @param value Value to set for the resource property.
     */
    public void setResource(@jakarta.annotation.Nullable final String value) {
        this.resource = value;
    }
    /**
     * Sets the value property value. The value property
     * @param value Value to set for the value property.
     */
    public void setValue(@jakarta.annotation.Nullable final ValidationError_errors_value value) {
        this.value = value;
    }
    /**
     * Composed type wrapper for classes integer, string
     */
    @jakarta.annotation.Generated("com.microsoft.kiota")
    public static class ValidationError_errors_value implements ComposedTypeWrapper, Parsable {
        /**
         * Composed type representation for type integer
         */
        private Integer integer;
        /**
         * Composed type representation for type string
         */
        private String string;
        /**
         * Creates a new instance of the appropriate class based on discriminator value
         * @param parseNode The parse node to use to read the discriminator value and create the object
         * @return a ValidationError_errors_value
         */
        @jakarta.annotation.Nonnull
        public static ValidationError_errors_value createFromDiscriminatorValue(@jakarta.annotation.Nonnull final ParseNode parseNode) {
            Objects.requireNonNull(parseNode);
            final ValidationError_errors_value result = new ValidationError_errors_value();
            final ParseNode mappingValueNode = parseNode.getChildNode("");
            if (mappingValueNode != null) {
                final String mappingValue = mappingValueNode.getStringValue();
            }
            if (parseNode.getIntegerValue() != null) {
                result.setInteger(parseNode.getIntegerValue());
            } else if (parseNode.getStringValue() != null) {
                result.setString(parseNode.getStringValue());
            }
            return result;
        }
        /**
         * The deserialization information for the current model
         * @return a Map<String, java.util.function.Consumer<ParseNode>>
         */
        @jakarta.annotation.Nonnull
        public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
            return new HashMap<String, java.util.function.Consumer<ParseNode>>();
        }
        /**
         * Gets the integer property value. Composed type representation for type integer
         * @return a Integer
         */
        @jakarta.annotation.Nullable
        public Integer getInteger() {
            return this.integer;
        }
        /**
         * Gets the string property value. Composed type representation for type string
         * @return a String
         */
        @jakarta.annotation.Nullable
        public String getString() {
            return this.string;
        }
        /**
         * Serializes information the current object
         * @param writer Serialization writer to use to serialize this model
         */
        public void serialize(@jakarta.annotation.Nonnull final SerializationWriter writer) {
            Objects.requireNonNull(writer);
            if (this.getInteger() != null) {
                writer.writeIntegerValue(null, this.getInteger());
            } else if (this.getString() != null) {
                writer.writeStringValue(null, this.getString());
            }
        }
        /**
         * Sets the integer property value. Composed type representation for type integer
         * @param value Value to set for the integer property.
         */
        public void setInteger(@jakarta.annotation.Nullable final Integer value) {
            this.integer = value;
        }
        /**
         * Sets the string property value. Composed type representation for type string
         * @param value Value to set for the string property.
         */
        public void setString(@jakarta.annotation.Nullable final String value) {
            this.string = value;
        }
    }
}
