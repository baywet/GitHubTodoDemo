package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
/**
 * Groups of organization members that gives permissions on specified repositories.
 */
@jakarta.annotation.Generated("com.microsoft.kiota")
public class Team implements Parsable {
    /**
     * The description property
     */
    private String description;
    /**
     * The html_url property
     */
    private String htmlUrl;
    /**
     * The id property
     */
    private Integer id;
    /**
     * The members_url property
     */
    private String membersUrl;
    /**
     * The name property
     */
    private String name;
    /**
     * The node_id property
     */
    private String nodeId;
    /**
     * Groups of organization members that gives permissions on specified repositories.
     */
    private NullableTeamSimple parent;
    /**
     * The permission property
     */
    private String permission;
    /**
     * The permissions property
     */
    private TeamPermissions permissions;
    /**
     * The privacy property
     */
    private String privacy;
    /**
     * The repositories_url property
     */
    private String repositoriesUrl;
    /**
     * The slug property
     */
    private String slug;
    /**
     * The url property
     */
    private String url;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a team
     */
    @jakarta.annotation.Nonnull
    public static Team createFromDiscriminatorValue(@jakarta.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new Team();
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
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(13);
        deserializerMap.put("description", (n) -> { this.setDescription(n.getStringValue()); });
        deserializerMap.put("html_url", (n) -> { this.setHtmlUrl(n.getStringValue()); });
        deserializerMap.put("id", (n) -> { this.setId(n.getIntegerValue()); });
        deserializerMap.put("members_url", (n) -> { this.setMembersUrl(n.getStringValue()); });
        deserializerMap.put("name", (n) -> { this.setName(n.getStringValue()); });
        deserializerMap.put("node_id", (n) -> { this.setNodeId(n.getStringValue()); });
        deserializerMap.put("parent", (n) -> { this.setParent(n.getObjectValue(NullableTeamSimple::createFromDiscriminatorValue)); });
        deserializerMap.put("permission", (n) -> { this.setPermission(n.getStringValue()); });
        deserializerMap.put("permissions", (n) -> { this.setPermissions(n.getObjectValue(TeamPermissions::createFromDiscriminatorValue)); });
        deserializerMap.put("privacy", (n) -> { this.setPrivacy(n.getStringValue()); });
        deserializerMap.put("repositories_url", (n) -> { this.setRepositoriesUrl(n.getStringValue()); });
        deserializerMap.put("slug", (n) -> { this.setSlug(n.getStringValue()); });
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
     * Gets the id property value. The id property
     * @return a integer
     */
    @jakarta.annotation.Nullable
    public Integer getId() {
        return this.id;
    }
    /**
     * Gets the members_url property value. The members_url property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getMembersUrl() {
        return this.membersUrl;
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
     * Gets the parent property value. Groups of organization members that gives permissions on specified repositories.
     * @return a nullableTeamSimple
     */
    @jakarta.annotation.Nullable
    public NullableTeamSimple getParent() {
        return this.parent;
    }
    /**
     * Gets the permission property value. The permission property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getPermission() {
        return this.permission;
    }
    /**
     * Gets the permissions property value. The permissions property
     * @return a TeamPermissions
     */
    @jakarta.annotation.Nullable
    public TeamPermissions getPermissions() {
        return this.permissions;
    }
    /**
     * Gets the privacy property value. The privacy property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getPrivacy() {
        return this.privacy;
    }
    /**
     * Gets the repositories_url property value. The repositories_url property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getRepositoriesUrl() {
        return this.repositoriesUrl;
    }
    /**
     * Gets the slug property value. The slug property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getSlug() {
        return this.slug;
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
        writer.writeStringValue("description", this.getDescription());
        writer.writeStringValue("html_url", this.getHtmlUrl());
        writer.writeIntegerValue("id", this.getId());
        writer.writeStringValue("members_url", this.getMembersUrl());
        writer.writeStringValue("name", this.getName());
        writer.writeStringValue("node_id", this.getNodeId());
        writer.writeObjectValue("parent", this.getParent());
        writer.writeStringValue("permission", this.getPermission());
        writer.writeObjectValue("permissions", this.getPermissions());
        writer.writeStringValue("privacy", this.getPrivacy());
        writer.writeStringValue("repositories_url", this.getRepositoriesUrl());
        writer.writeStringValue("slug", this.getSlug());
        writer.writeStringValue("url", this.getUrl());
    }
    /**
     * Sets the description property value. The description property
     * @param value Value to set for the description property.
     */
    public void setDescription(@jakarta.annotation.Nullable final String value) {
        this.description = value;
    }
    /**
     * Sets the html_url property value. The html_url property
     * @param value Value to set for the html_url property.
     */
    public void setHtmlUrl(@jakarta.annotation.Nullable final String value) {
        this.htmlUrl = value;
    }
    /**
     * Sets the id property value. The id property
     * @param value Value to set for the id property.
     */
    public void setId(@jakarta.annotation.Nullable final Integer value) {
        this.id = value;
    }
    /**
     * Sets the members_url property value. The members_url property
     * @param value Value to set for the members_url property.
     */
    public void setMembersUrl(@jakarta.annotation.Nullable final String value) {
        this.membersUrl = value;
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
     * Sets the parent property value. Groups of organization members that gives permissions on specified repositories.
     * @param value Value to set for the parent property.
     */
    public void setParent(@jakarta.annotation.Nullable final NullableTeamSimple value) {
        this.parent = value;
    }
    /**
     * Sets the permission property value. The permission property
     * @param value Value to set for the permission property.
     */
    public void setPermission(@jakarta.annotation.Nullable final String value) {
        this.permission = value;
    }
    /**
     * Sets the permissions property value. The permissions property
     * @param value Value to set for the permissions property.
     */
    public void setPermissions(@jakarta.annotation.Nullable final TeamPermissions value) {
        this.permissions = value;
    }
    /**
     * Sets the privacy property value. The privacy property
     * @param value Value to set for the privacy property.
     */
    public void setPrivacy(@jakarta.annotation.Nullable final String value) {
        this.privacy = value;
    }
    /**
     * Sets the repositories_url property value. The repositories_url property
     * @param value Value to set for the repositories_url property.
     */
    public void setRepositoriesUrl(@jakarta.annotation.Nullable final String value) {
        this.repositoriesUrl = value;
    }
    /**
     * Sets the slug property value. The slug property
     * @param value Value to set for the slug property.
     */
    public void setSlug(@jakarta.annotation.Nullable final String value) {
        this.slug = value;
    }
    /**
     * Sets the url property value. The url property
     * @param value Value to set for the url property.
     */
    public void setUrl(@jakarta.annotation.Nullable final String value) {
        this.url = value;
    }
}
