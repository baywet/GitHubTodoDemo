package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
@jakarta.annotation.Generated("com.microsoft.kiota")
public class TeamPermissions implements Parsable {
    /**
     * The admin property
     */
    private Boolean admin;
    /**
     * The maintain property
     */
    private Boolean maintain;
    /**
     * The pull property
     */
    private Boolean pull;
    /**
     * The push property
     */
    private Boolean push;
    /**
     * The triage property
     */
    private Boolean triage;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a {@link TeamPermissions}
     */
    @jakarta.annotation.Nonnull
    public static TeamPermissions createFromDiscriminatorValue(@jakarta.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new TeamPermissions();
    }
    /**
     * Gets the admin property value. The admin property
     * @return a {@link Boolean}
     */
    @jakarta.annotation.Nullable
    public Boolean getAdmin() {
        return this.admin;
    }
    /**
     * The deserialization information for the current model
     * @return a {@link Map<String, java.util.function.Consumer<ParseNode>>}
     */
    @jakarta.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(5);
        deserializerMap.put("admin", (n) -> { this.setAdmin(n.getBooleanValue()); });
        deserializerMap.put("maintain", (n) -> { this.setMaintain(n.getBooleanValue()); });
        deserializerMap.put("pull", (n) -> { this.setPull(n.getBooleanValue()); });
        deserializerMap.put("push", (n) -> { this.setPush(n.getBooleanValue()); });
        deserializerMap.put("triage", (n) -> { this.setTriage(n.getBooleanValue()); });
        return deserializerMap;
    }
    /**
     * Gets the maintain property value. The maintain property
     * @return a {@link Boolean}
     */
    @jakarta.annotation.Nullable
    public Boolean getMaintain() {
        return this.maintain;
    }
    /**
     * Gets the pull property value. The pull property
     * @return a {@link Boolean}
     */
    @jakarta.annotation.Nullable
    public Boolean getPull() {
        return this.pull;
    }
    /**
     * Gets the push property value. The push property
     * @return a {@link Boolean}
     */
    @jakarta.annotation.Nullable
    public Boolean getPush() {
        return this.push;
    }
    /**
     * Gets the triage property value. The triage property
     * @return a {@link Boolean}
     */
    @jakarta.annotation.Nullable
    public Boolean getTriage() {
        return this.triage;
    }
    /**
     * Serializes information the current object
     * @param writer Serialization writer to use to serialize this model
     */
    public void serialize(@jakarta.annotation.Nonnull final SerializationWriter writer) {
        Objects.requireNonNull(writer);
        writer.writeBooleanValue("admin", this.getAdmin());
        writer.writeBooleanValue("maintain", this.getMaintain());
        writer.writeBooleanValue("pull", this.getPull());
        writer.writeBooleanValue("push", this.getPush());
        writer.writeBooleanValue("triage", this.getTriage());
    }
    /**
     * Sets the admin property value. The admin property
     * @param value Value to set for the admin property.
     */
    public void setAdmin(@jakarta.annotation.Nullable final Boolean value) {
        this.admin = value;
    }
    /**
     * Sets the maintain property value. The maintain property
     * @param value Value to set for the maintain property.
     */
    public void setMaintain(@jakarta.annotation.Nullable final Boolean value) {
        this.maintain = value;
    }
    /**
     * Sets the pull property value. The pull property
     * @param value Value to set for the pull property.
     */
    public void setPull(@jakarta.annotation.Nullable final Boolean value) {
        this.pull = value;
    }
    /**
     * Sets the push property value. The push property
     * @param value Value to set for the push property.
     */
    public void setPush(@jakarta.annotation.Nullable final Boolean value) {
        this.push = value;
    }
    /**
     * Sets the triage property value. The triage property
     * @param value Value to set for the triage property.
     */
    public void setTriage(@jakarta.annotation.Nullable final Boolean value) {
        this.triage = value;
    }
}
