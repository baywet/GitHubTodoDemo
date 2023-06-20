package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
public class RepositoryTemplateRepositoryOwner implements Parsable {
    /** The avatar_url property */
    private String avatarUrl;
    /** The events_url property */
    private String eventsUrl;
    /** The followers_url property */
    private String followersUrl;
    /** The following_url property */
    private String followingUrl;
    /** The gists_url property */
    private String gistsUrl;
    /** The gravatar_id property */
    private String gravatarId;
    /** The html_url property */
    private String htmlUrl;
    /** The id property */
    private Integer id;
    /** The login property */
    private String login;
    /** The node_id property */
    private String nodeId;
    /** The organizations_url property */
    private String organizationsUrl;
    /** The received_events_url property */
    private String receivedEventsUrl;
    /** The repos_url property */
    private String reposUrl;
    /** The site_admin property */
    private Boolean siteAdmin;
    /** The starred_url property */
    private String starredUrl;
    /** The subscriptions_url property */
    private String subscriptionsUrl;
    /** The type property */
    private String type;
    /** The url property */
    private String url;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a RepositoryTemplateRepositoryOwner
     */
    @javax.annotation.Nonnull
    public static RepositoryTemplateRepositoryOwner createFromDiscriminatorValue(@javax.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new RepositoryTemplateRepositoryOwner();
    }
    /**
     * Gets the avatar_url property value. The avatar_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getAvatarUrl() {
        return this.avatarUrl;
    }
    /**
     * Gets the events_url property value. The events_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getEventsUrl() {
        return this.eventsUrl;
    }
    /**
     * The deserialization information for the current model
     * @return a Map<String, java.util.function.Consumer<ParseNode>>
     */
    @javax.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(18);
        deserializerMap.put("avatar_url", (n) -> { this.setAvatarUrl(n.getStringValue()); });
        deserializerMap.put("events_url", (n) -> { this.setEventsUrl(n.getStringValue()); });
        deserializerMap.put("followers_url", (n) -> { this.setFollowersUrl(n.getStringValue()); });
        deserializerMap.put("following_url", (n) -> { this.setFollowingUrl(n.getStringValue()); });
        deserializerMap.put("gists_url", (n) -> { this.setGistsUrl(n.getStringValue()); });
        deserializerMap.put("gravatar_id", (n) -> { this.setGravatarId(n.getStringValue()); });
        deserializerMap.put("html_url", (n) -> { this.setHtmlUrl(n.getStringValue()); });
        deserializerMap.put("id", (n) -> { this.setId(n.getIntegerValue()); });
        deserializerMap.put("login", (n) -> { this.setLogin(n.getStringValue()); });
        deserializerMap.put("node_id", (n) -> { this.setNodeId(n.getStringValue()); });
        deserializerMap.put("organizations_url", (n) -> { this.setOrganizationsUrl(n.getStringValue()); });
        deserializerMap.put("received_events_url", (n) -> { this.setReceivedEventsUrl(n.getStringValue()); });
        deserializerMap.put("repos_url", (n) -> { this.setReposUrl(n.getStringValue()); });
        deserializerMap.put("site_admin", (n) -> { this.setSiteAdmin(n.getBooleanValue()); });
        deserializerMap.put("starred_url", (n) -> { this.setStarredUrl(n.getStringValue()); });
        deserializerMap.put("subscriptions_url", (n) -> { this.setSubscriptionsUrl(n.getStringValue()); });
        deserializerMap.put("type", (n) -> { this.setType(n.getStringValue()); });
        deserializerMap.put("url", (n) -> { this.setUrl(n.getStringValue()); });
        return deserializerMap;
    }
    /**
     * Gets the followers_url property value. The followers_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getFollowersUrl() {
        return this.followersUrl;
    }
    /**
     * Gets the following_url property value. The following_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getFollowingUrl() {
        return this.followingUrl;
    }
    /**
     * Gets the gists_url property value. The gists_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getGistsUrl() {
        return this.gistsUrl;
    }
    /**
     * Gets the gravatar_id property value. The gravatar_id property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getGravatarId() {
        return this.gravatarId;
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
     * Gets the id property value. The id property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getId() {
        return this.id;
    }
    /**
     * Gets the login property value. The login property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getLogin() {
        return this.login;
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
     * Gets the organizations_url property value. The organizations_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getOrganizationsUrl() {
        return this.organizationsUrl;
    }
    /**
     * Gets the received_events_url property value. The received_events_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getReceivedEventsUrl() {
        return this.receivedEventsUrl;
    }
    /**
     * Gets the repos_url property value. The repos_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getReposUrl() {
        return this.reposUrl;
    }
    /**
     * Gets the site_admin property value. The site_admin property
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getSiteAdmin() {
        return this.siteAdmin;
    }
    /**
     * Gets the starred_url property value. The starred_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getStarredUrl() {
        return this.starredUrl;
    }
    /**
     * Gets the subscriptions_url property value. The subscriptions_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getSubscriptionsUrl() {
        return this.subscriptionsUrl;
    }
    /**
     * Gets the type property value. The type property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getType() {
        return this.type;
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
        writer.writeStringValue("avatar_url", this.getAvatarUrl());
        writer.writeStringValue("events_url", this.getEventsUrl());
        writer.writeStringValue("followers_url", this.getFollowersUrl());
        writer.writeStringValue("following_url", this.getFollowingUrl());
        writer.writeStringValue("gists_url", this.getGistsUrl());
        writer.writeStringValue("gravatar_id", this.getGravatarId());
        writer.writeStringValue("html_url", this.getHtmlUrl());
        writer.writeIntegerValue("id", this.getId());
        writer.writeStringValue("login", this.getLogin());
        writer.writeStringValue("node_id", this.getNodeId());
        writer.writeStringValue("organizations_url", this.getOrganizationsUrl());
        writer.writeStringValue("received_events_url", this.getReceivedEventsUrl());
        writer.writeStringValue("repos_url", this.getReposUrl());
        writer.writeBooleanValue("site_admin", this.getSiteAdmin());
        writer.writeStringValue("starred_url", this.getStarredUrl());
        writer.writeStringValue("subscriptions_url", this.getSubscriptionsUrl());
        writer.writeStringValue("type", this.getType());
        writer.writeStringValue("url", this.getUrl());
    }
    /**
     * Sets the avatar_url property value. The avatar_url property
     * @param value Value to set for the avatarUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setAvatarUrl(@javax.annotation.Nullable final String value) {
        this.avatarUrl = value;
    }
    /**
     * Sets the events_url property value. The events_url property
     * @param value Value to set for the eventsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setEventsUrl(@javax.annotation.Nullable final String value) {
        this.eventsUrl = value;
    }
    /**
     * Sets the followers_url property value. The followers_url property
     * @param value Value to set for the followersUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setFollowersUrl(@javax.annotation.Nullable final String value) {
        this.followersUrl = value;
    }
    /**
     * Sets the following_url property value. The following_url property
     * @param value Value to set for the followingUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setFollowingUrl(@javax.annotation.Nullable final String value) {
        this.followingUrl = value;
    }
    /**
     * Sets the gists_url property value. The gists_url property
     * @param value Value to set for the gistsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setGistsUrl(@javax.annotation.Nullable final String value) {
        this.gistsUrl = value;
    }
    /**
     * Sets the gravatar_id property value. The gravatar_id property
     * @param value Value to set for the gravatarId property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setGravatarId(@javax.annotation.Nullable final String value) {
        this.gravatarId = value;
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
     * Sets the id property value. The id property
     * @param value Value to set for the id property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setId(@javax.annotation.Nullable final Integer value) {
        this.id = value;
    }
    /**
     * Sets the login property value. The login property
     * @param value Value to set for the login property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setLogin(@javax.annotation.Nullable final String value) {
        this.login = value;
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
     * Sets the organizations_url property value. The organizations_url property
     * @param value Value to set for the organizationsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setOrganizationsUrl(@javax.annotation.Nullable final String value) {
        this.organizationsUrl = value;
    }
    /**
     * Sets the received_events_url property value. The received_events_url property
     * @param value Value to set for the receivedEventsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setReceivedEventsUrl(@javax.annotation.Nullable final String value) {
        this.receivedEventsUrl = value;
    }
    /**
     * Sets the repos_url property value. The repos_url property
     * @param value Value to set for the reposUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setReposUrl(@javax.annotation.Nullable final String value) {
        this.reposUrl = value;
    }
    /**
     * Sets the site_admin property value. The site_admin property
     * @param value Value to set for the siteAdmin property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setSiteAdmin(@javax.annotation.Nullable final Boolean value) {
        this.siteAdmin = value;
    }
    /**
     * Sets the starred_url property value. The starred_url property
     * @param value Value to set for the starredUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setStarredUrl(@javax.annotation.Nullable final String value) {
        this.starredUrl = value;
    }
    /**
     * Sets the subscriptions_url property value. The subscriptions_url property
     * @param value Value to set for the subscriptionsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setSubscriptionsUrl(@javax.annotation.Nullable final String value) {
        this.subscriptionsUrl = value;
    }
    /**
     * Sets the type property value. The type property
     * @param value Value to set for the type property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setType(@javax.annotation.Nullable final String value) {
        this.type = value;
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
