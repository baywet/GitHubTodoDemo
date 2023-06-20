package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.AdditionalDataHolder;
import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
public class ValidationErrorErrors implements Parsable {
    /** The code property */
    private String code;
    /** The field property */
    private String field;
    /** The index property */
    private Integer index;
    /** The message property */
    private String message;
    /** The resource property */
    private String resource;
    /** The value property */
    private Pulls value;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a ValidationErrorErrors
     */
    @javax.annotation.Nonnull
    public static ValidationErrorErrors createFromDiscriminatorValue(@javax.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new ValidationErrorErrors();
    }
    /**
     * Gets the code property value. The code property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getCode() {
        return this.code;
    }
    /**
     * Gets the field property value. The field property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getField() {
        return this.field;
    }
    /**
     * The deserialization information for the current model
     * @return a Map<String, java.util.function.Consumer<ParseNode>>
     */
    @javax.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(6);
        deserializerMap.put("code", (n) -> { this.setCode(n.getStringValue()); });
        deserializerMap.put("field", (n) -> { this.setField(n.getStringValue()); });
        deserializerMap.put("index", (n) -> { this.setIndex(n.getIntegerValue()); });
        deserializerMap.put("message", (n) -> { this.setMessage(n.getStringValue()); });
        deserializerMap.put("resource", (n) -> { this.setResource(n.getStringValue()); });
        deserializerMap.put("value", (n) -> { this.setValue(n.getObjectValue(Pulls::createFromDiscriminatorValue)); });
        return deserializerMap;
    }
    /**
     * Gets the index property value. The index property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getIndex() {
        return this.index;
    }
    /**
     * Gets the message property value. The message property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getMessage() {
        return this.message;
    }
    /**
     * Gets the resource property value. The resource property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getResource() {
        return this.resource;
    }
    /**
     * Gets the value property value. The value property
     * @return a pulls
     */
    @javax.annotation.Nullable
    public Pulls getValue() {
        return this.value;
    }
    /**
     * Serializes information the current object
     * @param writer Serialization writer to use to serialize this model
     * @return a void
     */
    @javax.annotation.Nonnull
    public void serialize(@javax.annotation.Nonnull final SerializationWriter writer) {
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
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setCode(@javax.annotation.Nullable final String value) {
        this.code = value;
    }
    /**
     * Sets the field property value. The field property
     * @param value Value to set for the field property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setField(@javax.annotation.Nullable final String value) {
        this.field = value;
    }
    /**
     * Sets the index property value. The index property
     * @param value Value to set for the index property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setIndex(@javax.annotation.Nullable final Integer value) {
        this.index = value;
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
     * Sets the resource property value. The resource property
     * @param value Value to set for the resource property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setResource(@javax.annotation.Nullable final String value) {
        this.resource = value;
    }
    /**
     * Sets the value property value. The value property
     * @param value Value to set for the value property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setValue(@javax.annotation.Nullable final Pulls value) {
        this.value = value;
    }
    /**
     * Composed type wrapper for classes string, integer, string
     */
    public static class Pulls implements AdditionalDataHolder, Parsable {
        /** Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
        private Map<String, Object> additionalData;
        /** Composed type representation for type integer */
        private Integer integer;
        /** Serialization hint for the current wrapper. */
        @javax.annotation.Nullable
        public String serializationHint;
        /** Composed type representation for type string */
        private String string;
        /**
         * Instantiates a new pulls and sets the default values.
         * @return a void
         */
        @javax.annotation.Nullable
        public Pulls() {
            this.setAdditionalData(new HashMap<>());
        }
        /**
         * Creates a new instance of the appropriate class based on discriminator value
         * @param parseNode The parse node to use to read the discriminator value and create the object
         * @return a pulls
         */
        @javax.annotation.Nonnull
        public static Pulls createFromDiscriminatorValue(@javax.annotation.Nonnull final ParseNode parseNode) {
            Objects.requireNonNull(parseNode);
            final Pulls result = new Pulls();
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
         * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
         * @return a Map<String, Object>
         */
        @javax.annotation.Nonnull
        public Map<String, Object> getAdditionalData() {
            return this.additionalData;
        }
        /**
         * The deserialization information for the current model
         * @return a Map<String, java.util.function.Consumer<ParseNode>>
         */
        @javax.annotation.Nonnull
        public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
            return new HashMap<String, java.util.function.Consumer<ParseNode>>();
        }
        /**
         * Gets the integer property value. Composed type representation for type integer
         * @return a integer
         */
        @javax.annotation.Nullable
        public Integer getInteger() {
            return this.integer;
        }
        /**
         * Gets the string property value. Composed type representation for type string
         * @return a string
         */
        @javax.annotation.Nullable
        public String getString() {
            return this.string;
        }
        /**
         * Serializes information the current object
         * @param writer Serialization writer to use to serialize this model
         * @return a void
         */
        @javax.annotation.Nonnull
        public void serialize(@javax.annotation.Nonnull final SerializationWriter writer) {
            Objects.requireNonNull(writer);
            if (this.getInteger() != null) {
                writer.writeIntegerValue(null, this.getInteger());
            } else if (this.getString() != null) {
                writer.writeStringValue(null, this.getString());
            }
            writer.writeAdditionalData(this.getAdditionalData());
        }
        /**
         * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
         * @param value Value to set for the AdditionalData property.
         * @return a void
         */
        @javax.annotation.Nonnull
        public void setAdditionalData(@javax.annotation.Nullable final Map<String, Object> value) {
            this.additionalData = value;
        }
        /**
         * Sets the integer property value. Composed type representation for type integer
         * @param value Value to set for the integer property.
         * @return a void
         */
        @javax.annotation.Nonnull
        public void setInteger(@javax.annotation.Nullable final Integer value) {
            this.integer = value;
        }
        /**
         * Sets the string property value. Composed type representation for type string
         * @param value Value to set for the string property.
         * @return a void
         */
        @javax.annotation.Nonnull
        public void setString(@javax.annotation.Nullable final String value) {
            this.string = value;
        }
    }
}
