package githubtododemo.microsoftgraphclient.models;

import com.microsoft.kiota.serialization.AdditionalDataHolder;
import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
public class BaseCollectionPaginationCountResponse implements AdditionalDataHolder, Parsable {
    /** Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private Map<String, Object> additionalData;
    /** The OdataCount property */
    private Long odataCount;
    /** The OdataNextLink property */
    private String odataNextLink;
    /**
     * Instantiates a new BaseCollectionPaginationCountResponse and sets the default values.
     * @return a void
     */
    @javax.annotation.Nullable
    public BaseCollectionPaginationCountResponse() {
        this.setAdditionalData(new HashMap<>());
    }
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a BaseCollectionPaginationCountResponse
     */
    @javax.annotation.Nonnull
    public static BaseCollectionPaginationCountResponse createFromDiscriminatorValue(@javax.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new BaseCollectionPaginationCountResponse();
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
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(2);
        deserializerMap.put("@odata.count", (n) -> { this.setOdataCount(n.getLongValue()); });
        deserializerMap.put("@odata.nextLink", (n) -> { this.setOdataNextLink(n.getStringValue()); });
        return deserializerMap;
    }
    /**
     * Gets the @odata.count property value. The OdataCount property
     * @return a int64
     */
    @javax.annotation.Nullable
    public Long getOdataCount() {
        return this.odataCount;
    }
    /**
     * Gets the @odata.nextLink property value. The OdataNextLink property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getOdataNextLink() {
        return this.odataNextLink;
    }
    /**
     * Serializes information the current object
     * @param writer Serialization writer to use to serialize this model
     * @return a void
     */
    @javax.annotation.Nonnull
    public void serialize(@javax.annotation.Nonnull final SerializationWriter writer) {
        Objects.requireNonNull(writer);
        writer.writeLongValue("@odata.count", this.getOdataCount());
        writer.writeStringValue("@odata.nextLink", this.getOdataNextLink());
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
     * Sets the @odata.count property value. The OdataCount property
     * @param value Value to set for the OdataCount property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setOdataCount(@javax.annotation.Nullable final Long value) {
        this.odataCount = value;
    }
    /**
     * Sets the @odata.nextLink property value. The OdataNextLink property
     * @param value Value to set for the OdataNextLink property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setOdataNextLink(@javax.annotation.Nullable final String value) {
        this.odataNextLink = value;
    }
}