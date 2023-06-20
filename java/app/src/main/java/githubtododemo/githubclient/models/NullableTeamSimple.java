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
public class NullableTeamSimple implements Parsable {
    /** Description of the team */
    private String description;
    /** The html_url property */
    private String htmlUrl;
    /** Unique identifier of the team */
    private Integer id;
    /** Distinguished Name (DN) that team maps to within LDAP environment */
    private String ldapDn;
    /** The members_url property */
    private String membersUrl;
    /** Name of the team */
    private String name;
    /** The node_id property */
    private String nodeId;
    /** Permission that the team will have for its repositories */
    private String permission;
    /** The level of privacy this team should have */
    private String privacy;
    /** The repositories_url property */
    private String repositoriesUrl;
    /** The slug property */
    private String slug;
    /** URL for the team */
    private String url;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a nullableTeamSimple
     */
    @javax.annotation.Nonnull
    public static NullableTeamSimple createFromDiscriminatorValue(@javax.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new NullableTeamSimple();
    }
    /**
     * Gets the description property value. Description of the team
     * @return a string
     */
    @javax.annotation.Nullable
    public String getDescription() {
        return this.description;
    }
    /**
     * The deserialization information for the current model
     * @return a Map<String, java.util.function.Consumer<ParseNode>>
     */
    @javax.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(12);
        deserializerMap.put("description", (n) -> { this.setDescription(n.getStringValue()); });
        deserializerMap.put("html_url", (n) -> { this.setHtmlUrl(n.getStringValue()); });
        deserializerMap.put("id", (n) -> { this.setId(n.getIntegerValue()); });
        deserializerMap.put("ldap_dn", (n) -> { this.setLdapDn(n.getStringValue()); });
        deserializerMap.put("members_url", (n) -> { this.setMembersUrl(n.getStringValue()); });
        deserializerMap.put("name", (n) -> { this.setName(n.getStringValue()); });
        deserializerMap.put("node_id", (n) -> { this.setNodeId(n.getStringValue()); });
        deserializerMap.put("permission", (n) -> { this.setPermission(n.getStringValue()); });
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
    @javax.annotation.Nullable
    public String getHtmlUrl() {
        return this.htmlUrl;
    }
    /**
     * Gets the id property value. Unique identifier of the team
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getId() {
        return this.id;
    }
    /**
     * Gets the ldap_dn property value. Distinguished Name (DN) that team maps to within LDAP environment
     * @return a string
     */
    @javax.annotation.Nullable
    public String getLdapDn() {
        return this.ldapDn;
    }
    /**
     * Gets the members_url property value. The members_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getMembersUrl() {
        return this.membersUrl;
    }
    /**
     * Gets the name property value. Name of the team
     * @return a string
     */
    @javax.annotation.Nullable
    public String getName() {
        return this.name;
    }
    /**
     * Gets the node_id property value. The node_id property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getNodeId() {
        return this.nodeId;
    }
    /**
     * Gets the permission property value. Permission that the team will have for its repositories
     * @return a string
     */
    @javax.annotation.Nullable
    public String getPermission() {
        return this.permission;
    }
    /**
     * Gets the privacy property value. The level of privacy this team should have
     * @return a string
     */
    @javax.annotation.Nullable
    public String getPrivacy() {
        return this.privacy;
    }
    /**
     * Gets the repositories_url property value. The repositories_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getRepositoriesUrl() {
        return this.repositoriesUrl;
    }
    /**
     * Gets the slug property value. The slug property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getSlug() {
        return this.slug;
    }
    /**
     * Gets the url property value. URL for the team
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
        writer.writeStringValue("description", this.getDescription());
        writer.writeStringValue("html_url", this.getHtmlUrl());
        writer.writeIntegerValue("id", this.getId());
        writer.writeStringValue("ldap_dn", this.getLdapDn());
        writer.writeStringValue("members_url", this.getMembersUrl());
        writer.writeStringValue("name", this.getName());
        writer.writeStringValue("node_id", this.getNodeId());
        writer.writeStringValue("permission", this.getPermission());
        writer.writeStringValue("privacy", this.getPrivacy());
        writer.writeStringValue("repositories_url", this.getRepositoriesUrl());
        writer.writeStringValue("slug", this.getSlug());
        writer.writeStringValue("url", this.getUrl());
    }
    /**
     * Sets the description property value. Description of the team
     * @param value Value to set for the description property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setDescription(@javax.annotation.Nullable final String value) {
        this.description = value;
    }
    /**
     * Sets the html_url property value. The html_url property
     * @param value Value to set for the htmlUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setHtmlUrl(@javax.annotation.Nullable final String value) {
        this.htmlUrl = value;
    }
    /**
     * Sets the id property value. Unique identifier of the team
     * @param value Value to set for the id property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setId(@javax.annotation.Nullable final Integer value) {
        this.id = value;
    }
    /**
     * Sets the ldap_dn property value. Distinguished Name (DN) that team maps to within LDAP environment
     * @param value Value to set for the ldapDn property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setLdapDn(@javax.annotation.Nullable final String value) {
        this.ldapDn = value;
    }
    /**
     * Sets the members_url property value. The members_url property
     * @param value Value to set for the membersUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMembersUrl(@javax.annotation.Nullable final String value) {
        this.membersUrl = value;
    }
    /**
     * Sets the name property value. Name of the team
     * @param value Value to set for the name property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setName(@javax.annotation.Nullable final String value) {
        this.name = value;
    }
    /**
     * Sets the node_id property value. The node_id property
     * @param value Value to set for the nodeId property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setNodeId(@javax.annotation.Nullable final String value) {
        this.nodeId = value;
    }
    /**
     * Sets the permission property value. Permission that the team will have for its repositories
     * @param value Value to set for the permission property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setPermission(@javax.annotation.Nullable final String value) {
        this.permission = value;
    }
    /**
     * Sets the privacy property value. The level of privacy this team should have
     * @param value Value to set for the privacy property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setPrivacy(@javax.annotation.Nullable final String value) {
        this.privacy = value;
    }
    /**
     * Sets the repositories_url property value. The repositories_url property
     * @param value Value to set for the repositoriesUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setRepositoriesUrl(@javax.annotation.Nullable final String value) {
        this.repositoriesUrl = value;
    }
    /**
     * Sets the slug property value. The slug property
     * @param value Value to set for the slug property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setSlug(@javax.annotation.Nullable final String value) {
        this.slug = value;
    }
    /**
     * Sets the url property value. URL for the team
     * @param value Value to set for the url property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setUrl(@javax.annotation.Nullable final String value) {
        this.url = value;
    }
}
