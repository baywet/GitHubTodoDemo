package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
public class PullRequestBase implements Parsable {
    /** The label property */
    private String label;
    /** The ref property */
    private String ref;
    /** The repo property */
    private PullRequestBaseRepo repo;
    /** The sha property */
    private String sha;
    /** The user property */
    private PullRequestBaseUser user;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a PullRequestBase
     */
    @javax.annotation.Nonnull
    public static PullRequestBase createFromDiscriminatorValue(@javax.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new PullRequestBase();
    }
    /**
     * The deserialization information for the current model
     * @return a Map<String, java.util.function.Consumer<ParseNode>>
     */
    @javax.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(5);
        deserializerMap.put("label", (n) -> { this.setLabel(n.getStringValue()); });
        deserializerMap.put("ref", (n) -> { this.setRef(n.getStringValue()); });
        deserializerMap.put("repo", (n) -> { this.setRepo(n.getObjectValue(PullRequestBaseRepo::createFromDiscriminatorValue)); });
        deserializerMap.put("sha", (n) -> { this.setSha(n.getStringValue()); });
        deserializerMap.put("user", (n) -> { this.setUser(n.getObjectValue(PullRequestBaseUser::createFromDiscriminatorValue)); });
        return deserializerMap;
    }
    /**
     * Gets the label property value. The label property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getLabel() {
        return this.label;
    }
    /**
     * Gets the ref property value. The ref property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getRef() {
        return this.ref;
    }
    /**
     * Gets the repo property value. The repo property
     * @return a PullRequestBaseRepo
     */
    @javax.annotation.Nullable
    public PullRequestBaseRepo getRepo() {
        return this.repo;
    }
    /**
     * Gets the sha property value. The sha property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getSha() {
        return this.sha;
    }
    /**
     * Gets the user property value. The user property
     * @return a PullRequestBaseUser
     */
    @javax.annotation.Nullable
    public PullRequestBaseUser getUser() {
        return this.user;
    }
    /**
     * Serializes information the current object
     * @param writer Serialization writer to use to serialize this model
     * @return a void
     */
    @javax.annotation.Nonnull
    public void serialize(@javax.annotation.Nonnull final SerializationWriter writer) {
        Objects.requireNonNull(writer);
        writer.writeStringValue("label", this.getLabel());
        writer.writeStringValue("ref", this.getRef());
        writer.writeObjectValue("repo", this.getRepo());
        writer.writeStringValue("sha", this.getSha());
        writer.writeObjectValue("user", this.getUser());
    }
    /**
     * Sets the label property value. The label property
     * @param value Value to set for the label property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setLabel(@javax.annotation.Nullable final String value) {
        this.label = value;
    }
    /**
     * Sets the ref property value. The ref property
     * @param value Value to set for the ref property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setRef(@javax.annotation.Nullable final String value) {
        this.ref = value;
    }
    /**
     * Sets the repo property value. The repo property
     * @param value Value to set for the repo property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setRepo(@javax.annotation.Nullable final PullRequestBaseRepo value) {
        this.repo = value;
    }
    /**
     * Sets the sha property value. The sha property
     * @param value Value to set for the sha property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setSha(@javax.annotation.Nullable final String value) {
        this.sha = value;
    }
    /**
     * Sets the user property value. The user property
     * @param value Value to set for the user property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setUser(@javax.annotation.Nullable final PullRequestBaseUser value) {
        this.user = value;
    }
}
