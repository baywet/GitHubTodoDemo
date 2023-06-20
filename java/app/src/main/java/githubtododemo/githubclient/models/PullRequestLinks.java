package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
public class PullRequestLinks implements Parsable {
    /** Hypermedia Link */
    private Link comments;
    /** Hypermedia Link */
    private Link commits;
    /** Hypermedia Link */
    private Link html;
    /** Hypermedia Link */
    private Link issue;
    /** Hypermedia Link */
    private Link reviewComment;
    /** Hypermedia Link */
    private Link reviewComments;
    /** Hypermedia Link */
    private Link self;
    /** Hypermedia Link */
    private Link statuses;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a PullRequestLinks
     */
    @javax.annotation.Nonnull
    public static PullRequestLinks createFromDiscriminatorValue(@javax.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new PullRequestLinks();
    }
    /**
     * Gets the comments property value. Hypermedia Link
     * @return a link
     */
    @javax.annotation.Nullable
    public Link getComments() {
        return this.comments;
    }
    /**
     * Gets the commits property value. Hypermedia Link
     * @return a link
     */
    @javax.annotation.Nullable
    public Link getCommits() {
        return this.commits;
    }
    /**
     * The deserialization information for the current model
     * @return a Map<String, java.util.function.Consumer<ParseNode>>
     */
    @javax.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(8);
        deserializerMap.put("comments", (n) -> { this.setComments(n.getObjectValue(Link::createFromDiscriminatorValue)); });
        deserializerMap.put("commits", (n) -> { this.setCommits(n.getObjectValue(Link::createFromDiscriminatorValue)); });
        deserializerMap.put("html", (n) -> { this.setHtml(n.getObjectValue(Link::createFromDiscriminatorValue)); });
        deserializerMap.put("issue", (n) -> { this.setIssue(n.getObjectValue(Link::createFromDiscriminatorValue)); });
        deserializerMap.put("review_comment", (n) -> { this.setReviewComment(n.getObjectValue(Link::createFromDiscriminatorValue)); });
        deserializerMap.put("review_comments", (n) -> { this.setReviewComments(n.getObjectValue(Link::createFromDiscriminatorValue)); });
        deserializerMap.put("self", (n) -> { this.setSelf(n.getObjectValue(Link::createFromDiscriminatorValue)); });
        deserializerMap.put("statuses", (n) -> { this.setStatuses(n.getObjectValue(Link::createFromDiscriminatorValue)); });
        return deserializerMap;
    }
    /**
     * Gets the html property value. Hypermedia Link
     * @return a link
     */
    @javax.annotation.Nullable
    public Link getHtml() {
        return this.html;
    }
    /**
     * Gets the issue property value. Hypermedia Link
     * @return a link
     */
    @javax.annotation.Nullable
    public Link getIssue() {
        return this.issue;
    }
    /**
     * Gets the review_comment property value. Hypermedia Link
     * @return a link
     */
    @javax.annotation.Nullable
    public Link getReviewComment() {
        return this.reviewComment;
    }
    /**
     * Gets the review_comments property value. Hypermedia Link
     * @return a link
     */
    @javax.annotation.Nullable
    public Link getReviewComments() {
        return this.reviewComments;
    }
    /**
     * Gets the self property value. Hypermedia Link
     * @return a link
     */
    @javax.annotation.Nullable
    public Link getSelf() {
        return this.self;
    }
    /**
     * Gets the statuses property value. Hypermedia Link
     * @return a link
     */
    @javax.annotation.Nullable
    public Link getStatuses() {
        return this.statuses;
    }
    /**
     * Serializes information the current object
     * @param writer Serialization writer to use to serialize this model
     * @return a void
     */
    @javax.annotation.Nonnull
    public void serialize(@javax.annotation.Nonnull final SerializationWriter writer) {
        Objects.requireNonNull(writer);
        writer.writeObjectValue("comments", this.getComments());
        writer.writeObjectValue("commits", this.getCommits());
        writer.writeObjectValue("html", this.getHtml());
        writer.writeObjectValue("issue", this.getIssue());
        writer.writeObjectValue("review_comment", this.getReviewComment());
        writer.writeObjectValue("review_comments", this.getReviewComments());
        writer.writeObjectValue("self", this.getSelf());
        writer.writeObjectValue("statuses", this.getStatuses());
    }
    /**
     * Sets the comments property value. Hypermedia Link
     * @param value Value to set for the comments property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setComments(@javax.annotation.Nullable final Link value) {
        this.comments = value;
    }
    /**
     * Sets the commits property value. Hypermedia Link
     * @param value Value to set for the commits property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setCommits(@javax.annotation.Nullable final Link value) {
        this.commits = value;
    }
    /**
     * Sets the html property value. Hypermedia Link
     * @param value Value to set for the html property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setHtml(@javax.annotation.Nullable final Link value) {
        this.html = value;
    }
    /**
     * Sets the issue property value. Hypermedia Link
     * @param value Value to set for the issue property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setIssue(@javax.annotation.Nullable final Link value) {
        this.issue = value;
    }
    /**
     * Sets the review_comment property value. Hypermedia Link
     * @param value Value to set for the reviewComment property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setReviewComment(@javax.annotation.Nullable final Link value) {
        this.reviewComment = value;
    }
    /**
     * Sets the review_comments property value. Hypermedia Link
     * @param value Value to set for the reviewComments property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setReviewComments(@javax.annotation.Nullable final Link value) {
        this.reviewComments = value;
    }
    /**
     * Sets the self property value. Hypermedia Link
     * @param value Value to set for the self property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setSelf(@javax.annotation.Nullable final Link value) {
        this.self = value;
    }
    /**
     * Sets the statuses property value. Hypermedia Link
     * @param value Value to set for the statuses property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setStatuses(@javax.annotation.Nullable final Link value) {
        this.statuses = value;
    }
}
