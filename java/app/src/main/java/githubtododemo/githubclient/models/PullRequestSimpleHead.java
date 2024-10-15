package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
@jakarta.annotation.Generated("com.microsoft.kiota")
public class PullRequestSimpleHead implements Parsable {
    /**
     * The label property
     */
    private String label;
    /**
     * The ref property
     */
    private String ref;
    /**
     * A repository on GitHub.
     */
    private Repository repo;
    /**
     * The sha property
     */
    private String sha;
    /**
     * A GitHub user.
     */
    private NullableSimpleUser user;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a {@link PullRequestSimpleHead}
     */
    @jakarta.annotation.Nonnull
    public static PullRequestSimpleHead createFromDiscriminatorValue(@jakarta.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new PullRequestSimpleHead();
    }
    /**
     * The deserialization information for the current model
     * @return a {@link Map<String, java.util.function.Consumer<ParseNode>>}
     */
    @jakarta.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(5);
        deserializerMap.put("label", (n) -> { this.setLabel(n.getStringValue()); });
        deserializerMap.put("ref", (n) -> { this.setRef(n.getStringValue()); });
        deserializerMap.put("repo", (n) -> { this.setRepo(n.getObjectValue(Repository::createFromDiscriminatorValue)); });
        deserializerMap.put("sha", (n) -> { this.setSha(n.getStringValue()); });
        deserializerMap.put("user", (n) -> { this.setUser(n.getObjectValue(NullableSimpleUser::createFromDiscriminatorValue)); });
        return deserializerMap;
    }
    /**
     * Gets the label property value. The label property
     * @return a {@link String}
     */
    @jakarta.annotation.Nullable
    public String getLabel() {
        return this.label;
    }
    /**
     * Gets the ref property value. The ref property
     * @return a {@link String}
     */
    @jakarta.annotation.Nullable
    public String getRef() {
        return this.ref;
    }
    /**
     * Gets the repo property value. A repository on GitHub.
     * @return a {@link Repository}
     */
    @jakarta.annotation.Nullable
    public Repository getRepo() {
        return this.repo;
    }
    /**
     * Gets the sha property value. The sha property
     * @return a {@link String}
     */
    @jakarta.annotation.Nullable
    public String getSha() {
        return this.sha;
    }
    /**
     * Gets the user property value. A GitHub user.
     * @return a {@link NullableSimpleUser}
     */
    @jakarta.annotation.Nullable
    public NullableSimpleUser getUser() {
        return this.user;
    }
    /**
     * Serializes information the current object
     * @param writer Serialization writer to use to serialize this model
     */
    public void serialize(@jakarta.annotation.Nonnull final SerializationWriter writer) {
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
     */
    public void setLabel(@jakarta.annotation.Nullable final String value) {
        this.label = value;
    }
    /**
     * Sets the ref property value. The ref property
     * @param value Value to set for the ref property.
     */
    public void setRef(@jakarta.annotation.Nullable final String value) {
        this.ref = value;
    }
    /**
     * Sets the repo property value. A repository on GitHub.
     * @param value Value to set for the repo property.
     */
    public void setRepo(@jakarta.annotation.Nullable final Repository value) {
        this.repo = value;
    }
    /**
     * Sets the sha property value. The sha property
     * @param value Value to set for the sha property.
     */
    public void setSha(@jakarta.annotation.Nullable final String value) {
        this.sha = value;
    }
    /**
     * Sets the user property value. A GitHub user.
     * @param value Value to set for the user property.
     */
    public void setUser(@jakarta.annotation.Nullable final NullableSimpleUser value) {
        this.user = value;
    }
}
