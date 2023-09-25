package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.time.OffsetDateTime;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
/**
 * Pull Request Simple
 */
@jakarta.annotation.Generated("com.microsoft.kiota")
public class PullRequestSimple implements Parsable {
    /**
     * The active_lock_reason property
     */
    private String activeLockReason;
    /**
     * A GitHub user.
     */
    private NullableSimpleUser assignee;
    /**
     * The assignees property
     */
    private java.util.List<SimpleUser> assignees;
    /**
     * How the author is associated with the repository.
     */
    private AuthorAssociation authorAssociation;
    /**
     * The status of auto merging a pull request.
     */
    private AutoMerge autoMerge;
    /**
     * The base property
     */
    private PullRequestSimpleBase base;
    /**
     * The body property
     */
    private String body;
    /**
     * The closed_at property
     */
    private OffsetDateTime closedAt;
    /**
     * The comments_url property
     */
    private String commentsUrl;
    /**
     * The commits_url property
     */
    private String commitsUrl;
    /**
     * The created_at property
     */
    private OffsetDateTime createdAt;
    /**
     * The diff_url property
     */
    private String diffUrl;
    /**
     * Indicates whether or not the pull request is a draft.
     */
    private Boolean draft;
    /**
     * The head property
     */
    private PullRequestSimpleHead head;
    /**
     * The html_url property
     */
    private String htmlUrl;
    /**
     * The id property
     */
    private Integer id;
    /**
     * The issue_url property
     */
    private String issueUrl;
    /**
     * The labels property
     */
    private java.util.List<PullRequestSimpleLabels> labels;
    /**
     * The _links property
     */
    private PullRequestSimpleLinks links;
    /**
     * The locked property
     */
    private Boolean locked;
    /**
     * The merge_commit_sha property
     */
    private String mergeCommitSha;
    /**
     * The merged_at property
     */
    private OffsetDateTime mergedAt;
    /**
     * A collection of related issues and pull requests.
     */
    private NullableMilestone milestone;
    /**
     * The node_id property
     */
    private String nodeId;
    /**
     * The number property
     */
    private Integer number;
    /**
     * The patch_url property
     */
    private String patchUrl;
    /**
     * The requested_reviewers property
     */
    private java.util.List<SimpleUser> requestedReviewers;
    /**
     * The requested_teams property
     */
    private java.util.List<Team> requestedTeams;
    /**
     * The review_comments_url property
     */
    private String reviewCommentsUrl;
    /**
     * The review_comment_url property
     */
    private String reviewCommentUrl;
    /**
     * The state property
     */
    private String state;
    /**
     * The statuses_url property
     */
    private String statusesUrl;
    /**
     * The title property
     */
    private String title;
    /**
     * The updated_at property
     */
    private OffsetDateTime updatedAt;
    /**
     * The url property
     */
    private String url;
    /**
     * A GitHub user.
     */
    private NullableSimpleUser user;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a pullRequestSimple
     */
    @jakarta.annotation.Nonnull
    public static PullRequestSimple createFromDiscriminatorValue(@jakarta.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new PullRequestSimple();
    }
    /**
     * Gets the active_lock_reason property value. The active_lock_reason property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getActiveLockReason() {
        return this.activeLockReason;
    }
    /**
     * Gets the assignee property value. A GitHub user.
     * @return a nullableSimpleUser
     */
    @jakarta.annotation.Nullable
    public NullableSimpleUser getAssignee() {
        return this.assignee;
    }
    /**
     * Gets the assignees property value. The assignees property
     * @return a simpleUser
     */
    @jakarta.annotation.Nullable
    public java.util.List<SimpleUser> getAssignees() {
        return this.assignees;
    }
    /**
     * Gets the author_association property value. How the author is associated with the repository.
     * @return a authorAssociation
     */
    @jakarta.annotation.Nullable
    public AuthorAssociation getAuthorAssociation() {
        return this.authorAssociation;
    }
    /**
     * Gets the auto_merge property value. The status of auto merging a pull request.
     * @return a autoMerge
     */
    @jakarta.annotation.Nullable
    public AutoMerge getAutoMerge() {
        return this.autoMerge;
    }
    /**
     * Gets the base property value. The base property
     * @return a PullRequestSimpleBase
     */
    @jakarta.annotation.Nullable
    public PullRequestSimpleBase getBase() {
        return this.base;
    }
    /**
     * Gets the body property value. The body property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getBody() {
        return this.body;
    }
    /**
     * Gets the closed_at property value. The closed_at property
     * @return a OffsetDateTime
     */
    @jakarta.annotation.Nullable
    public OffsetDateTime getClosedAt() {
        return this.closedAt;
    }
    /**
     * Gets the comments_url property value. The comments_url property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getCommentsUrl() {
        return this.commentsUrl;
    }
    /**
     * Gets the commits_url property value. The commits_url property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getCommitsUrl() {
        return this.commitsUrl;
    }
    /**
     * Gets the created_at property value. The created_at property
     * @return a OffsetDateTime
     */
    @jakarta.annotation.Nullable
    public OffsetDateTime getCreatedAt() {
        return this.createdAt;
    }
    /**
     * Gets the diff_url property value. The diff_url property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getDiffUrl() {
        return this.diffUrl;
    }
    /**
     * Gets the draft property value. Indicates whether or not the pull request is a draft.
     * @return a boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getDraft() {
        return this.draft;
    }
    /**
     * The deserialization information for the current model
     * @return a Map<String, java.util.function.Consumer<ParseNode>>
     */
    @jakarta.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(36);
        deserializerMap.put("active_lock_reason", (n) -> { this.setActiveLockReason(n.getStringValue()); });
        deserializerMap.put("assignee", (n) -> { this.setAssignee(n.getObjectValue(NullableSimpleUser::createFromDiscriminatorValue)); });
        deserializerMap.put("assignees", (n) -> { this.setAssignees(n.getCollectionOfObjectValues(SimpleUser::createFromDiscriminatorValue)); });
        deserializerMap.put("author_association", (n) -> { this.setAuthorAssociation(n.getEnumValue(AuthorAssociation.class)); });
        deserializerMap.put("auto_merge", (n) -> { this.setAutoMerge(n.getObjectValue(AutoMerge::createFromDiscriminatorValue)); });
        deserializerMap.put("base", (n) -> { this.setBase(n.getObjectValue(PullRequestSimpleBase::createFromDiscriminatorValue)); });
        deserializerMap.put("body", (n) -> { this.setBody(n.getStringValue()); });
        deserializerMap.put("closed_at", (n) -> { this.setClosedAt(n.getOffsetDateTimeValue()); });
        deserializerMap.put("comments_url", (n) -> { this.setCommentsUrl(n.getStringValue()); });
        deserializerMap.put("commits_url", (n) -> { this.setCommitsUrl(n.getStringValue()); });
        deserializerMap.put("created_at", (n) -> { this.setCreatedAt(n.getOffsetDateTimeValue()); });
        deserializerMap.put("diff_url", (n) -> { this.setDiffUrl(n.getStringValue()); });
        deserializerMap.put("draft", (n) -> { this.setDraft(n.getBooleanValue()); });
        deserializerMap.put("head", (n) -> { this.setHead(n.getObjectValue(PullRequestSimpleHead::createFromDiscriminatorValue)); });
        deserializerMap.put("html_url", (n) -> { this.setHtmlUrl(n.getStringValue()); });
        deserializerMap.put("id", (n) -> { this.setId(n.getIntegerValue()); });
        deserializerMap.put("issue_url", (n) -> { this.setIssueUrl(n.getStringValue()); });
        deserializerMap.put("labels", (n) -> { this.setLabels(n.getCollectionOfObjectValues(PullRequestSimpleLabels::createFromDiscriminatorValue)); });
        deserializerMap.put("_links", (n) -> { this.setLinks(n.getObjectValue(PullRequestSimpleLinks::createFromDiscriminatorValue)); });
        deserializerMap.put("locked", (n) -> { this.setLocked(n.getBooleanValue()); });
        deserializerMap.put("merge_commit_sha", (n) -> { this.setMergeCommitSha(n.getStringValue()); });
        deserializerMap.put("merged_at", (n) -> { this.setMergedAt(n.getOffsetDateTimeValue()); });
        deserializerMap.put("milestone", (n) -> { this.setMilestone(n.getObjectValue(NullableMilestone::createFromDiscriminatorValue)); });
        deserializerMap.put("node_id", (n) -> { this.setNodeId(n.getStringValue()); });
        deserializerMap.put("number", (n) -> { this.setNumber(n.getIntegerValue()); });
        deserializerMap.put("patch_url", (n) -> { this.setPatchUrl(n.getStringValue()); });
        deserializerMap.put("requested_reviewers", (n) -> { this.setRequestedReviewers(n.getCollectionOfObjectValues(SimpleUser::createFromDiscriminatorValue)); });
        deserializerMap.put("requested_teams", (n) -> { this.setRequestedTeams(n.getCollectionOfObjectValues(Team::createFromDiscriminatorValue)); });
        deserializerMap.put("review_comments_url", (n) -> { this.setReviewCommentsUrl(n.getStringValue()); });
        deserializerMap.put("review_comment_url", (n) -> { this.setReviewCommentUrl(n.getStringValue()); });
        deserializerMap.put("state", (n) -> { this.setState(n.getStringValue()); });
        deserializerMap.put("statuses_url", (n) -> { this.setStatusesUrl(n.getStringValue()); });
        deserializerMap.put("title", (n) -> { this.setTitle(n.getStringValue()); });
        deserializerMap.put("updated_at", (n) -> { this.setUpdatedAt(n.getOffsetDateTimeValue()); });
        deserializerMap.put("url", (n) -> { this.setUrl(n.getStringValue()); });
        deserializerMap.put("user", (n) -> { this.setUser(n.getObjectValue(NullableSimpleUser::createFromDiscriminatorValue)); });
        return deserializerMap;
    }
    /**
     * Gets the head property value. The head property
     * @return a PullRequestSimpleHead
     */
    @jakarta.annotation.Nullable
    public PullRequestSimpleHead getHead() {
        return this.head;
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
     * Gets the issue_url property value. The issue_url property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getIssueUrl() {
        return this.issueUrl;
    }
    /**
     * Gets the labels property value. The labels property
     * @return a PullRequestSimpleLabels
     */
    @jakarta.annotation.Nullable
    public java.util.List<PullRequestSimpleLabels> getLabels() {
        return this.labels;
    }
    /**
     * Gets the _links property value. The _links property
     * @return a PullRequestSimpleLinks
     */
    @jakarta.annotation.Nullable
    public PullRequestSimpleLinks getLinks() {
        return this.links;
    }
    /**
     * Gets the locked property value. The locked property
     * @return a boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getLocked() {
        return this.locked;
    }
    /**
     * Gets the merge_commit_sha property value. The merge_commit_sha property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getMergeCommitSha() {
        return this.mergeCommitSha;
    }
    /**
     * Gets the merged_at property value. The merged_at property
     * @return a OffsetDateTime
     */
    @jakarta.annotation.Nullable
    public OffsetDateTime getMergedAt() {
        return this.mergedAt;
    }
    /**
     * Gets the milestone property value. A collection of related issues and pull requests.
     * @return a nullableMilestone
     */
    @jakarta.annotation.Nullable
    public NullableMilestone getMilestone() {
        return this.milestone;
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
     * Gets the number property value. The number property
     * @return a integer
     */
    @jakarta.annotation.Nullable
    public Integer getNumber() {
        return this.number;
    }
    /**
     * Gets the patch_url property value. The patch_url property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getPatchUrl() {
        return this.patchUrl;
    }
    /**
     * Gets the requested_reviewers property value. The requested_reviewers property
     * @return a simpleUser
     */
    @jakarta.annotation.Nullable
    public java.util.List<SimpleUser> getRequestedReviewers() {
        return this.requestedReviewers;
    }
    /**
     * Gets the requested_teams property value. The requested_teams property
     * @return a team
     */
    @jakarta.annotation.Nullable
    public java.util.List<Team> getRequestedTeams() {
        return this.requestedTeams;
    }
    /**
     * Gets the review_comments_url property value. The review_comments_url property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getReviewCommentsUrl() {
        return this.reviewCommentsUrl;
    }
    /**
     * Gets the review_comment_url property value. The review_comment_url property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getReviewCommentUrl() {
        return this.reviewCommentUrl;
    }
    /**
     * Gets the state property value. The state property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getState() {
        return this.state;
    }
    /**
     * Gets the statuses_url property value. The statuses_url property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getStatusesUrl() {
        return this.statusesUrl;
    }
    /**
     * Gets the title property value. The title property
     * @return a string
     */
    @jakarta.annotation.Nullable
    public String getTitle() {
        return this.title;
    }
    /**
     * Gets the updated_at property value. The updated_at property
     * @return a OffsetDateTime
     */
    @jakarta.annotation.Nullable
    public OffsetDateTime getUpdatedAt() {
        return this.updatedAt;
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
     * Gets the user property value. A GitHub user.
     * @return a nullableSimpleUser
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
        writer.writeStringValue("active_lock_reason", this.getActiveLockReason());
        writer.writeObjectValue("assignee", this.getAssignee());
        writer.writeCollectionOfObjectValues("assignees", this.getAssignees());
        writer.writeEnumValue("author_association", this.getAuthorAssociation());
        writer.writeObjectValue("auto_merge", this.getAutoMerge());
        writer.writeObjectValue("base", this.getBase());
        writer.writeStringValue("body", this.getBody());
        writer.writeOffsetDateTimeValue("closed_at", this.getClosedAt());
        writer.writeStringValue("comments_url", this.getCommentsUrl());
        writer.writeStringValue("commits_url", this.getCommitsUrl());
        writer.writeOffsetDateTimeValue("created_at", this.getCreatedAt());
        writer.writeStringValue("diff_url", this.getDiffUrl());
        writer.writeBooleanValue("draft", this.getDraft());
        writer.writeObjectValue("head", this.getHead());
        writer.writeStringValue("html_url", this.getHtmlUrl());
        writer.writeIntegerValue("id", this.getId());
        writer.writeStringValue("issue_url", this.getIssueUrl());
        writer.writeCollectionOfObjectValues("labels", this.getLabels());
        writer.writeObjectValue("_links", this.getLinks());
        writer.writeBooleanValue("locked", this.getLocked());
        writer.writeStringValue("merge_commit_sha", this.getMergeCommitSha());
        writer.writeOffsetDateTimeValue("merged_at", this.getMergedAt());
        writer.writeObjectValue("milestone", this.getMilestone());
        writer.writeStringValue("node_id", this.getNodeId());
        writer.writeIntegerValue("number", this.getNumber());
        writer.writeStringValue("patch_url", this.getPatchUrl());
        writer.writeCollectionOfObjectValues("requested_reviewers", this.getRequestedReviewers());
        writer.writeCollectionOfObjectValues("requested_teams", this.getRequestedTeams());
        writer.writeStringValue("review_comments_url", this.getReviewCommentsUrl());
        writer.writeStringValue("review_comment_url", this.getReviewCommentUrl());
        writer.writeStringValue("state", this.getState());
        writer.writeStringValue("statuses_url", this.getStatusesUrl());
        writer.writeStringValue("title", this.getTitle());
        writer.writeOffsetDateTimeValue("updated_at", this.getUpdatedAt());
        writer.writeStringValue("url", this.getUrl());
        writer.writeObjectValue("user", this.getUser());
    }
    /**
     * Sets the active_lock_reason property value. The active_lock_reason property
     * @param value Value to set for the active_lock_reason property.
     */
    public void setActiveLockReason(@jakarta.annotation.Nullable final String value) {
        this.activeLockReason = value;
    }
    /**
     * Sets the assignee property value. A GitHub user.
     * @param value Value to set for the assignee property.
     */
    public void setAssignee(@jakarta.annotation.Nullable final NullableSimpleUser value) {
        this.assignee = value;
    }
    /**
     * Sets the assignees property value. The assignees property
     * @param value Value to set for the assignees property.
     */
    public void setAssignees(@jakarta.annotation.Nullable final java.util.List<SimpleUser> value) {
        this.assignees = value;
    }
    /**
     * Sets the author_association property value. How the author is associated with the repository.
     * @param value Value to set for the author_association property.
     */
    public void setAuthorAssociation(@jakarta.annotation.Nullable final AuthorAssociation value) {
        this.authorAssociation = value;
    }
    /**
     * Sets the auto_merge property value. The status of auto merging a pull request.
     * @param value Value to set for the auto_merge property.
     */
    public void setAutoMerge(@jakarta.annotation.Nullable final AutoMerge value) {
        this.autoMerge = value;
    }
    /**
     * Sets the base property value. The base property
     * @param value Value to set for the base property.
     */
    public void setBase(@jakarta.annotation.Nullable final PullRequestSimpleBase value) {
        this.base = value;
    }
    /**
     * Sets the body property value. The body property
     * @param value Value to set for the body property.
     */
    public void setBody(@jakarta.annotation.Nullable final String value) {
        this.body = value;
    }
    /**
     * Sets the closed_at property value. The closed_at property
     * @param value Value to set for the closed_at property.
     */
    public void setClosedAt(@jakarta.annotation.Nullable final OffsetDateTime value) {
        this.closedAt = value;
    }
    /**
     * Sets the comments_url property value. The comments_url property
     * @param value Value to set for the comments_url property.
     */
    public void setCommentsUrl(@jakarta.annotation.Nullable final String value) {
        this.commentsUrl = value;
    }
    /**
     * Sets the commits_url property value. The commits_url property
     * @param value Value to set for the commits_url property.
     */
    public void setCommitsUrl(@jakarta.annotation.Nullable final String value) {
        this.commitsUrl = value;
    }
    /**
     * Sets the created_at property value. The created_at property
     * @param value Value to set for the created_at property.
     */
    public void setCreatedAt(@jakarta.annotation.Nullable final OffsetDateTime value) {
        this.createdAt = value;
    }
    /**
     * Sets the diff_url property value. The diff_url property
     * @param value Value to set for the diff_url property.
     */
    public void setDiffUrl(@jakarta.annotation.Nullable final String value) {
        this.diffUrl = value;
    }
    /**
     * Sets the draft property value. Indicates whether or not the pull request is a draft.
     * @param value Value to set for the draft property.
     */
    public void setDraft(@jakarta.annotation.Nullable final Boolean value) {
        this.draft = value;
    }
    /**
     * Sets the head property value. The head property
     * @param value Value to set for the head property.
     */
    public void setHead(@jakarta.annotation.Nullable final PullRequestSimpleHead value) {
        this.head = value;
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
     * Sets the issue_url property value. The issue_url property
     * @param value Value to set for the issue_url property.
     */
    public void setIssueUrl(@jakarta.annotation.Nullable final String value) {
        this.issueUrl = value;
    }
    /**
     * Sets the labels property value. The labels property
     * @param value Value to set for the labels property.
     */
    public void setLabels(@jakarta.annotation.Nullable final java.util.List<PullRequestSimpleLabels> value) {
        this.labels = value;
    }
    /**
     * Sets the _links property value. The _links property
     * @param value Value to set for the _links property.
     */
    public void setLinks(@jakarta.annotation.Nullable final PullRequestSimpleLinks value) {
        this.links = value;
    }
    /**
     * Sets the locked property value. The locked property
     * @param value Value to set for the locked property.
     */
    public void setLocked(@jakarta.annotation.Nullable final Boolean value) {
        this.locked = value;
    }
    /**
     * Sets the merge_commit_sha property value. The merge_commit_sha property
     * @param value Value to set for the merge_commit_sha property.
     */
    public void setMergeCommitSha(@jakarta.annotation.Nullable final String value) {
        this.mergeCommitSha = value;
    }
    /**
     * Sets the merged_at property value. The merged_at property
     * @param value Value to set for the merged_at property.
     */
    public void setMergedAt(@jakarta.annotation.Nullable final OffsetDateTime value) {
        this.mergedAt = value;
    }
    /**
     * Sets the milestone property value. A collection of related issues and pull requests.
     * @param value Value to set for the milestone property.
     */
    public void setMilestone(@jakarta.annotation.Nullable final NullableMilestone value) {
        this.milestone = value;
    }
    /**
     * Sets the node_id property value. The node_id property
     * @param value Value to set for the node_id property.
     */
    public void setNodeId(@jakarta.annotation.Nullable final String value) {
        this.nodeId = value;
    }
    /**
     * Sets the number property value. The number property
     * @param value Value to set for the number property.
     */
    public void setNumber(@jakarta.annotation.Nullable final Integer value) {
        this.number = value;
    }
    /**
     * Sets the patch_url property value. The patch_url property
     * @param value Value to set for the patch_url property.
     */
    public void setPatchUrl(@jakarta.annotation.Nullable final String value) {
        this.patchUrl = value;
    }
    /**
     * Sets the requested_reviewers property value. The requested_reviewers property
     * @param value Value to set for the requested_reviewers property.
     */
    public void setRequestedReviewers(@jakarta.annotation.Nullable final java.util.List<SimpleUser> value) {
        this.requestedReviewers = value;
    }
    /**
     * Sets the requested_teams property value. The requested_teams property
     * @param value Value to set for the requested_teams property.
     */
    public void setRequestedTeams(@jakarta.annotation.Nullable final java.util.List<Team> value) {
        this.requestedTeams = value;
    }
    /**
     * Sets the review_comments_url property value. The review_comments_url property
     * @param value Value to set for the review_comments_url property.
     */
    public void setReviewCommentsUrl(@jakarta.annotation.Nullable final String value) {
        this.reviewCommentsUrl = value;
    }
    /**
     * Sets the review_comment_url property value. The review_comment_url property
     * @param value Value to set for the review_comment_url property.
     */
    public void setReviewCommentUrl(@jakarta.annotation.Nullable final String value) {
        this.reviewCommentUrl = value;
    }
    /**
     * Sets the state property value. The state property
     * @param value Value to set for the state property.
     */
    public void setState(@jakarta.annotation.Nullable final String value) {
        this.state = value;
    }
    /**
     * Sets the statuses_url property value. The statuses_url property
     * @param value Value to set for the statuses_url property.
     */
    public void setStatusesUrl(@jakarta.annotation.Nullable final String value) {
        this.statusesUrl = value;
    }
    /**
     * Sets the title property value. The title property
     * @param value Value to set for the title property.
     */
    public void setTitle(@jakarta.annotation.Nullable final String value) {
        this.title = value;
    }
    /**
     * Sets the updated_at property value. The updated_at property
     * @param value Value to set for the updated_at property.
     */
    public void setUpdatedAt(@jakarta.annotation.Nullable final OffsetDateTime value) {
        this.updatedAt = value;
    }
    /**
     * Sets the url property value. The url property
     * @param value Value to set for the url property.
     */
    public void setUrl(@jakarta.annotation.Nullable final String value) {
        this.url = value;
    }
    /**
     * Sets the user property value. A GitHub user.
     * @param value Value to set for the user property.
     */
    public void setUser(@jakarta.annotation.Nullable final NullableSimpleUser value) {
        this.user = value;
    }
}
