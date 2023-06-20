package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.time.OffsetDateTime;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
/**
 * Pull requests let you tell others about changes you've pushed to a repository on GitHub. Once a pull request is sent, interested parties can review the set of changes, discuss potential modifications, and even push follow-up commits if necessary.
 */
public class PullRequest implements Parsable {
    /** The active_lock_reason property */
    private String activeLockReason;
    /** The additions property */
    private Integer additions;
    /** A GitHub user. */
    private NullableSimpleUser assignee;
    /** The assignees property */
    private java.util.List<SimpleUser> assignees;
    /** How the author is associated with the repository. */
    private AuthorAssociation authorAssociation;
    /** The status of auto merging a pull request. */
    private AutoMerge autoMerge;
    /** The base property */
    private PullRequestBase base;
    /** The body property */
    private String body;
    /** The changed_files property */
    private Integer changedFiles;
    /** The closed_at property */
    private OffsetDateTime closedAt;
    /** The comments property */
    private Integer comments;
    /** The comments_url property */
    private String commentsUrl;
    /** The commits property */
    private Integer commits;
    /** The commits_url property */
    private String commitsUrl;
    /** The created_at property */
    private OffsetDateTime createdAt;
    /** The deletions property */
    private Integer deletions;
    /** The diff_url property */
    private String diffUrl;
    /** Indicates whether or not the pull request is a draft. */
    private Boolean draft;
    /** The head property */
    private PullRequestHead head;
    /** The html_url property */
    private String htmlUrl;
    /** The id property */
    private Integer id;
    /** The issue_url property */
    private String issueUrl;
    /** The labels property */
    private java.util.List<PullRequestLabels> labels;
    /** The _links property */
    private PullRequestLinks links;
    /** The locked property */
    private Boolean locked;
    /** Indicates whether maintainers can modify the pull request. */
    private Boolean maintainerCanModify;
    /** The mergeable property */
    private Boolean mergeable;
    /** The mergeable_state property */
    private String mergeableState;
    /** The merge_commit_sha property */
    private String mergeCommitSha;
    /** The merged property */
    private Boolean merged;
    /** The merged_at property */
    private OffsetDateTime mergedAt;
    /** A GitHub user. */
    private NullableSimpleUser mergedBy;
    /** A collection of related issues and pull requests. */
    private NullableMilestone milestone;
    /** The node_id property */
    private String nodeId;
    /** Number uniquely identifying the pull request within its repository. */
    private Integer number;
    /** The patch_url property */
    private String patchUrl;
    /** The rebaseable property */
    private Boolean rebaseable;
    /** The requested_reviewers property */
    private java.util.List<SimpleUser> requestedReviewers;
    /** The requested_teams property */
    private java.util.List<TeamSimple> requestedTeams;
    /** The review_comments property */
    private Integer reviewComments;
    /** The review_comments_url property */
    private String reviewCommentsUrl;
    /** The review_comment_url property */
    private String reviewCommentUrl;
    /** State of this Pull Request. Either `open` or `closed`. */
    private PullRequestState state;
    /** The statuses_url property */
    private String statusesUrl;
    /** The title of the pull request. */
    private String title;
    /** The updated_at property */
    private OffsetDateTime updatedAt;
    /** The url property */
    private String url;
    /** A GitHub user. */
    private NullableSimpleUser user;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a PullRequest
     */
    @javax.annotation.Nonnull
    public static PullRequest createFromDiscriminatorValue(@javax.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new PullRequest();
    }
    /**
     * Gets the active_lock_reason property value. The active_lock_reason property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getActiveLockReason() {
        return this.activeLockReason;
    }
    /**
     * Gets the additions property value. The additions property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getAdditions() {
        return this.additions;
    }
    /**
     * Gets the assignee property value. A GitHub user.
     * @return a nullableSimpleUser
     */
    @javax.annotation.Nullable
    public NullableSimpleUser getAssignee() {
        return this.assignee;
    }
    /**
     * Gets the assignees property value. The assignees property
     * @return a simpleUser
     */
    @javax.annotation.Nullable
    public java.util.List<SimpleUser> getAssignees() {
        return this.assignees;
    }
    /**
     * Gets the author_association property value. How the author is associated with the repository.
     * @return a authorAssociation
     */
    @javax.annotation.Nullable
    public AuthorAssociation getAuthorAssociation() {
        return this.authorAssociation;
    }
    /**
     * Gets the auto_merge property value. The status of auto merging a pull request.
     * @return a autoMerge
     */
    @javax.annotation.Nullable
    public AutoMerge getAutoMerge() {
        return this.autoMerge;
    }
    /**
     * Gets the base property value. The base property
     * @return a PullRequestBase
     */
    @javax.annotation.Nullable
    public PullRequestBase getBase() {
        return this.base;
    }
    /**
     * Gets the body property value. The body property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getBody() {
        return this.body;
    }
    /**
     * Gets the changed_files property value. The changed_files property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getChangedFiles() {
        return this.changedFiles;
    }
    /**
     * Gets the closed_at property value. The closed_at property
     * @return a OffsetDateTime
     */
    @javax.annotation.Nullable
    public OffsetDateTime getClosedAt() {
        return this.closedAt;
    }
    /**
     * Gets the comments property value. The comments property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getComments() {
        return this.comments;
    }
    /**
     * Gets the comments_url property value. The comments_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getCommentsUrl() {
        return this.commentsUrl;
    }
    /**
     * Gets the commits property value. The commits property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getCommits() {
        return this.commits;
    }
    /**
     * Gets the commits_url property value. The commits_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getCommitsUrl() {
        return this.commitsUrl;
    }
    /**
     * Gets the created_at property value. The created_at property
     * @return a OffsetDateTime
     */
    @javax.annotation.Nullable
    public OffsetDateTime getCreatedAt() {
        return this.createdAt;
    }
    /**
     * Gets the deletions property value. The deletions property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getDeletions() {
        return this.deletions;
    }
    /**
     * Gets the diff_url property value. The diff_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getDiffUrl() {
        return this.diffUrl;
    }
    /**
     * Gets the draft property value. Indicates whether or not the pull request is a draft.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getDraft() {
        return this.draft;
    }
    /**
     * The deserialization information for the current model
     * @return a Map<String, java.util.function.Consumer<ParseNode>>
     */
    @javax.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(48);
        deserializerMap.put("active_lock_reason", (n) -> { this.setActiveLockReason(n.getStringValue()); });
        deserializerMap.put("additions", (n) -> { this.setAdditions(n.getIntegerValue()); });
        deserializerMap.put("assignee", (n) -> { this.setAssignee(n.getObjectValue(NullableSimpleUser::createFromDiscriminatorValue)); });
        deserializerMap.put("assignees", (n) -> { this.setAssignees(n.getCollectionOfObjectValues(SimpleUser::createFromDiscriminatorValue)); });
        deserializerMap.put("author_association", (n) -> { this.setAuthorAssociation(n.getEnumValue(AuthorAssociation.class)); });
        deserializerMap.put("auto_merge", (n) -> { this.setAutoMerge(n.getObjectValue(AutoMerge::createFromDiscriminatorValue)); });
        deserializerMap.put("base", (n) -> { this.setBase(n.getObjectValue(PullRequestBase::createFromDiscriminatorValue)); });
        deserializerMap.put("body", (n) -> { this.setBody(n.getStringValue()); });
        deserializerMap.put("changed_files", (n) -> { this.setChangedFiles(n.getIntegerValue()); });
        deserializerMap.put("closed_at", (n) -> { this.setClosedAt(n.getOffsetDateTimeValue()); });
        deserializerMap.put("comments", (n) -> { this.setComments(n.getIntegerValue()); });
        deserializerMap.put("comments_url", (n) -> { this.setCommentsUrl(n.getStringValue()); });
        deserializerMap.put("commits", (n) -> { this.setCommits(n.getIntegerValue()); });
        deserializerMap.put("commits_url", (n) -> { this.setCommitsUrl(n.getStringValue()); });
        deserializerMap.put("created_at", (n) -> { this.setCreatedAt(n.getOffsetDateTimeValue()); });
        deserializerMap.put("deletions", (n) -> { this.setDeletions(n.getIntegerValue()); });
        deserializerMap.put("diff_url", (n) -> { this.setDiffUrl(n.getStringValue()); });
        deserializerMap.put("draft", (n) -> { this.setDraft(n.getBooleanValue()); });
        deserializerMap.put("head", (n) -> { this.setHead(n.getObjectValue(PullRequestHead::createFromDiscriminatorValue)); });
        deserializerMap.put("html_url", (n) -> { this.setHtmlUrl(n.getStringValue()); });
        deserializerMap.put("id", (n) -> { this.setId(n.getIntegerValue()); });
        deserializerMap.put("issue_url", (n) -> { this.setIssueUrl(n.getStringValue()); });
        deserializerMap.put("labels", (n) -> { this.setLabels(n.getCollectionOfObjectValues(PullRequestLabels::createFromDiscriminatorValue)); });
        deserializerMap.put("_links", (n) -> { this.setlinks(n.getObjectValue(PullRequestLinks::createFromDiscriminatorValue)); });
        deserializerMap.put("locked", (n) -> { this.setLocked(n.getBooleanValue()); });
        deserializerMap.put("maintainer_can_modify", (n) -> { this.setMaintainerCanModify(n.getBooleanValue()); });
        deserializerMap.put("mergeable", (n) -> { this.setMergeable(n.getBooleanValue()); });
        deserializerMap.put("mergeable_state", (n) -> { this.setMergeableState(n.getStringValue()); });
        deserializerMap.put("merge_commit_sha", (n) -> { this.setMergeCommitSha(n.getStringValue()); });
        deserializerMap.put("merged", (n) -> { this.setMerged(n.getBooleanValue()); });
        deserializerMap.put("merged_at", (n) -> { this.setMergedAt(n.getOffsetDateTimeValue()); });
        deserializerMap.put("merged_by", (n) -> { this.setMergedBy(n.getObjectValue(NullableSimpleUser::createFromDiscriminatorValue)); });
        deserializerMap.put("milestone", (n) -> { this.setMilestone(n.getObjectValue(NullableMilestone::createFromDiscriminatorValue)); });
        deserializerMap.put("node_id", (n) -> { this.setNodeId(n.getStringValue()); });
        deserializerMap.put("number", (n) -> { this.setNumber(n.getIntegerValue()); });
        deserializerMap.put("patch_url", (n) -> { this.setPatchUrl(n.getStringValue()); });
        deserializerMap.put("rebaseable", (n) -> { this.setRebaseable(n.getBooleanValue()); });
        deserializerMap.put("requested_reviewers", (n) -> { this.setRequestedReviewers(n.getCollectionOfObjectValues(SimpleUser::createFromDiscriminatorValue)); });
        deserializerMap.put("requested_teams", (n) -> { this.setRequestedTeams(n.getCollectionOfObjectValues(TeamSimple::createFromDiscriminatorValue)); });
        deserializerMap.put("review_comments", (n) -> { this.setReviewComments(n.getIntegerValue()); });
        deserializerMap.put("review_comments_url", (n) -> { this.setReviewCommentsUrl(n.getStringValue()); });
        deserializerMap.put("review_comment_url", (n) -> { this.setReviewCommentUrl(n.getStringValue()); });
        deserializerMap.put("state", (n) -> { this.setState(n.getEnumValue(PullRequestState.class)); });
        deserializerMap.put("statuses_url", (n) -> { this.setStatusesUrl(n.getStringValue()); });
        deserializerMap.put("title", (n) -> { this.setTitle(n.getStringValue()); });
        deserializerMap.put("updated_at", (n) -> { this.setUpdatedAt(n.getOffsetDateTimeValue()); });
        deserializerMap.put("url", (n) -> { this.setUrl(n.getStringValue()); });
        deserializerMap.put("user", (n) -> { this.setUser(n.getObjectValue(NullableSimpleUser::createFromDiscriminatorValue)); });
        return deserializerMap;
    }
    /**
     * Gets the head property value. The head property
     * @return a PullRequestHead
     */
    @javax.annotation.Nullable
    public PullRequestHead getHead() {
        return this.head;
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
     * Gets the issue_url property value. The issue_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getIssueUrl() {
        return this.issueUrl;
    }
    /**
     * Gets the labels property value. The labels property
     * @return a PullRequestLabels
     */
    @javax.annotation.Nullable
    public java.util.List<PullRequestLabels> getLabels() {
        return this.labels;
    }
    /**
     * Gets the _links property value. The _links property
     * @return a PullRequestLinks
     */
    @javax.annotation.Nullable
    public PullRequestLinks getlinks() {
        return this.links;
    }
    /**
     * Gets the locked property value. The locked property
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getLocked() {
        return this.locked;
    }
    /**
     * Gets the maintainer_can_modify property value. Indicates whether maintainers can modify the pull request.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getMaintainerCanModify() {
        return this.maintainerCanModify;
    }
    /**
     * Gets the mergeable property value. The mergeable property
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getMergeable() {
        return this.mergeable;
    }
    /**
     * Gets the mergeable_state property value. The mergeable_state property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getMergeableState() {
        return this.mergeableState;
    }
    /**
     * Gets the merge_commit_sha property value. The merge_commit_sha property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getMergeCommitSha() {
        return this.mergeCommitSha;
    }
    /**
     * Gets the merged property value. The merged property
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getMerged() {
        return this.merged;
    }
    /**
     * Gets the merged_at property value. The merged_at property
     * @return a OffsetDateTime
     */
    @javax.annotation.Nullable
    public OffsetDateTime getMergedAt() {
        return this.mergedAt;
    }
    /**
     * Gets the merged_by property value. A GitHub user.
     * @return a nullableSimpleUser
     */
    @javax.annotation.Nullable
    public NullableSimpleUser getMergedBy() {
        return this.mergedBy;
    }
    /**
     * Gets the milestone property value. A collection of related issues and pull requests.
     * @return a nullableMilestone
     */
    @javax.annotation.Nullable
    public NullableMilestone getMilestone() {
        return this.milestone;
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
     * Gets the number property value. Number uniquely identifying the pull request within its repository.
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getNumber() {
        return this.number;
    }
    /**
     * Gets the patch_url property value. The patch_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getPatchUrl() {
        return this.patchUrl;
    }
    /**
     * Gets the rebaseable property value. The rebaseable property
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getRebaseable() {
        return this.rebaseable;
    }
    /**
     * Gets the requested_reviewers property value. The requested_reviewers property
     * @return a simpleUser
     */
    @javax.annotation.Nullable
    public java.util.List<SimpleUser> getRequestedReviewers() {
        return this.requestedReviewers;
    }
    /**
     * Gets the requested_teams property value. The requested_teams property
     * @return a teamSimple
     */
    @javax.annotation.Nullable
    public java.util.List<TeamSimple> getRequestedTeams() {
        return this.requestedTeams;
    }
    /**
     * Gets the review_comments property value. The review_comments property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getReviewComments() {
        return this.reviewComments;
    }
    /**
     * Gets the review_comments_url property value. The review_comments_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getReviewCommentsUrl() {
        return this.reviewCommentsUrl;
    }
    /**
     * Gets the review_comment_url property value. The review_comment_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getReviewCommentUrl() {
        return this.reviewCommentUrl;
    }
    /**
     * Gets the state property value. State of this Pull Request. Either `open` or `closed`.
     * @return a PullRequestState
     */
    @javax.annotation.Nullable
    public PullRequestState getState() {
        return this.state;
    }
    /**
     * Gets the statuses_url property value. The statuses_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getStatusesUrl() {
        return this.statusesUrl;
    }
    /**
     * Gets the title property value. The title of the pull request.
     * @return a string
     */
    @javax.annotation.Nullable
    public String getTitle() {
        return this.title;
    }
    /**
     * Gets the updated_at property value. The updated_at property
     * @return a OffsetDateTime
     */
    @javax.annotation.Nullable
    public OffsetDateTime getUpdatedAt() {
        return this.updatedAt;
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
     * Gets the user property value. A GitHub user.
     * @return a nullableSimpleUser
     */
    @javax.annotation.Nullable
    public NullableSimpleUser getUser() {
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
        writer.writeStringValue("active_lock_reason", this.getActiveLockReason());
        writer.writeIntegerValue("additions", this.getAdditions());
        writer.writeObjectValue("assignee", this.getAssignee());
        writer.writeCollectionOfObjectValues("assignees", this.getAssignees());
        writer.writeEnumValue("author_association", this.getAuthorAssociation());
        writer.writeObjectValue("auto_merge", this.getAutoMerge());
        writer.writeObjectValue("base", this.getBase());
        writer.writeStringValue("body", this.getBody());
        writer.writeIntegerValue("changed_files", this.getChangedFiles());
        writer.writeOffsetDateTimeValue("closed_at", this.getClosedAt());
        writer.writeIntegerValue("comments", this.getComments());
        writer.writeStringValue("comments_url", this.getCommentsUrl());
        writer.writeIntegerValue("commits", this.getCommits());
        writer.writeStringValue("commits_url", this.getCommitsUrl());
        writer.writeOffsetDateTimeValue("created_at", this.getCreatedAt());
        writer.writeIntegerValue("deletions", this.getDeletions());
        writer.writeStringValue("diff_url", this.getDiffUrl());
        writer.writeBooleanValue("draft", this.getDraft());
        writer.writeObjectValue("head", this.getHead());
        writer.writeStringValue("html_url", this.getHtmlUrl());
        writer.writeIntegerValue("id", this.getId());
        writer.writeStringValue("issue_url", this.getIssueUrl());
        writer.writeCollectionOfObjectValues("labels", this.getLabels());
        writer.writeObjectValue("_links", this.getlinks());
        writer.writeBooleanValue("locked", this.getLocked());
        writer.writeBooleanValue("maintainer_can_modify", this.getMaintainerCanModify());
        writer.writeBooleanValue("mergeable", this.getMergeable());
        writer.writeStringValue("mergeable_state", this.getMergeableState());
        writer.writeStringValue("merge_commit_sha", this.getMergeCommitSha());
        writer.writeBooleanValue("merged", this.getMerged());
        writer.writeOffsetDateTimeValue("merged_at", this.getMergedAt());
        writer.writeObjectValue("merged_by", this.getMergedBy());
        writer.writeObjectValue("milestone", this.getMilestone());
        writer.writeStringValue("node_id", this.getNodeId());
        writer.writeIntegerValue("number", this.getNumber());
        writer.writeStringValue("patch_url", this.getPatchUrl());
        writer.writeBooleanValue("rebaseable", this.getRebaseable());
        writer.writeCollectionOfObjectValues("requested_reviewers", this.getRequestedReviewers());
        writer.writeCollectionOfObjectValues("requested_teams", this.getRequestedTeams());
        writer.writeIntegerValue("review_comments", this.getReviewComments());
        writer.writeStringValue("review_comments_url", this.getReviewCommentsUrl());
        writer.writeStringValue("review_comment_url", this.getReviewCommentUrl());
        writer.writeEnumValue("state", this.getState());
        writer.writeStringValue("statuses_url", this.getStatusesUrl());
        writer.writeStringValue("title", this.getTitle());
        writer.writeOffsetDateTimeValue("updated_at", this.getUpdatedAt());
        writer.writeStringValue("url", this.getUrl());
        writer.writeObjectValue("user", this.getUser());
    }
    /**
     * Sets the active_lock_reason property value. The active_lock_reason property
     * @param value Value to set for the activeLockReason property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setActiveLockReason(@javax.annotation.Nullable final String value) {
        this.activeLockReason = value;
    }
    /**
     * Sets the additions property value. The additions property
     * @param value Value to set for the additions property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setAdditions(@javax.annotation.Nullable final Integer value) {
        this.additions = value;
    }
    /**
     * Sets the assignee property value. A GitHub user.
     * @param value Value to set for the assignee property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setAssignee(@javax.annotation.Nullable final NullableSimpleUser value) {
        this.assignee = value;
    }
    /**
     * Sets the assignees property value. The assignees property
     * @param value Value to set for the assignees property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setAssignees(@javax.annotation.Nullable final java.util.List<SimpleUser> value) {
        this.assignees = value;
    }
    /**
     * Sets the author_association property value. How the author is associated with the repository.
     * @param value Value to set for the authorAssociation property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setAuthorAssociation(@javax.annotation.Nullable final AuthorAssociation value) {
        this.authorAssociation = value;
    }
    /**
     * Sets the auto_merge property value. The status of auto merging a pull request.
     * @param value Value to set for the autoMerge property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setAutoMerge(@javax.annotation.Nullable final AutoMerge value) {
        this.autoMerge = value;
    }
    /**
     * Sets the base property value. The base property
     * @param value Value to set for the base property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setBase(@javax.annotation.Nullable final PullRequestBase value) {
        this.base = value;
    }
    /**
     * Sets the body property value. The body property
     * @param value Value to set for the body property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setBody(@javax.annotation.Nullable final String value) {
        this.body = value;
    }
    /**
     * Sets the changed_files property value. The changed_files property
     * @param value Value to set for the changedFiles property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setChangedFiles(@javax.annotation.Nullable final Integer value) {
        this.changedFiles = value;
    }
    /**
     * Sets the closed_at property value. The closed_at property
     * @param value Value to set for the closedAt property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setClosedAt(@javax.annotation.Nullable final OffsetDateTime value) {
        this.closedAt = value;
    }
    /**
     * Sets the comments property value. The comments property
     * @param value Value to set for the comments property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setComments(@javax.annotation.Nullable final Integer value) {
        this.comments = value;
    }
    /**
     * Sets the comments_url property value. The comments_url property
     * @param value Value to set for the commentsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setCommentsUrl(@javax.annotation.Nullable final String value) {
        this.commentsUrl = value;
    }
    /**
     * Sets the commits property value. The commits property
     * @param value Value to set for the commits property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setCommits(@javax.annotation.Nullable final Integer value) {
        this.commits = value;
    }
    /**
     * Sets the commits_url property value. The commits_url property
     * @param value Value to set for the commitsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setCommitsUrl(@javax.annotation.Nullable final String value) {
        this.commitsUrl = value;
    }
    /**
     * Sets the created_at property value. The created_at property
     * @param value Value to set for the createdAt property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setCreatedAt(@javax.annotation.Nullable final OffsetDateTime value) {
        this.createdAt = value;
    }
    /**
     * Sets the deletions property value. The deletions property
     * @param value Value to set for the deletions property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setDeletions(@javax.annotation.Nullable final Integer value) {
        this.deletions = value;
    }
    /**
     * Sets the diff_url property value. The diff_url property
     * @param value Value to set for the diffUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setDiffUrl(@javax.annotation.Nullable final String value) {
        this.diffUrl = value;
    }
    /**
     * Sets the draft property value. Indicates whether or not the pull request is a draft.
     * @param value Value to set for the draft property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setDraft(@javax.annotation.Nullable final Boolean value) {
        this.draft = value;
    }
    /**
     * Sets the head property value. The head property
     * @param value Value to set for the head property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setHead(@javax.annotation.Nullable final PullRequestHead value) {
        this.head = value;
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
     * Sets the issue_url property value. The issue_url property
     * @param value Value to set for the issueUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setIssueUrl(@javax.annotation.Nullable final String value) {
        this.issueUrl = value;
    }
    /**
     * Sets the labels property value. The labels property
     * @param value Value to set for the labels property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setLabels(@javax.annotation.Nullable final java.util.List<PullRequestLabels> value) {
        this.labels = value;
    }
    /**
     * Sets the _links property value. The _links property
     * @param value Value to set for the links property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setlinks(@javax.annotation.Nullable final PullRequestLinks value) {
        this.links = value;
    }
    /**
     * Sets the locked property value. The locked property
     * @param value Value to set for the locked property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setLocked(@javax.annotation.Nullable final Boolean value) {
        this.locked = value;
    }
    /**
     * Sets the maintainer_can_modify property value. Indicates whether maintainers can modify the pull request.
     * @param value Value to set for the maintainerCanModify property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMaintainerCanModify(@javax.annotation.Nullable final Boolean value) {
        this.maintainerCanModify = value;
    }
    /**
     * Sets the mergeable property value. The mergeable property
     * @param value Value to set for the mergeable property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMergeable(@javax.annotation.Nullable final Boolean value) {
        this.mergeable = value;
    }
    /**
     * Sets the mergeable_state property value. The mergeable_state property
     * @param value Value to set for the mergeableState property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMergeableState(@javax.annotation.Nullable final String value) {
        this.mergeableState = value;
    }
    /**
     * Sets the merge_commit_sha property value. The merge_commit_sha property
     * @param value Value to set for the mergeCommitSha property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMergeCommitSha(@javax.annotation.Nullable final String value) {
        this.mergeCommitSha = value;
    }
    /**
     * Sets the merged property value. The merged property
     * @param value Value to set for the merged property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMerged(@javax.annotation.Nullable final Boolean value) {
        this.merged = value;
    }
    /**
     * Sets the merged_at property value. The merged_at property
     * @param value Value to set for the mergedAt property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMergedAt(@javax.annotation.Nullable final OffsetDateTime value) {
        this.mergedAt = value;
    }
    /**
     * Sets the merged_by property value. A GitHub user.
     * @param value Value to set for the mergedBy property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMergedBy(@javax.annotation.Nullable final NullableSimpleUser value) {
        this.mergedBy = value;
    }
    /**
     * Sets the milestone property value. A collection of related issues and pull requests.
     * @param value Value to set for the milestone property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMilestone(@javax.annotation.Nullable final NullableMilestone value) {
        this.milestone = value;
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
     * Sets the number property value. Number uniquely identifying the pull request within its repository.
     * @param value Value to set for the number property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setNumber(@javax.annotation.Nullable final Integer value) {
        this.number = value;
    }
    /**
     * Sets the patch_url property value. The patch_url property
     * @param value Value to set for the patchUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setPatchUrl(@javax.annotation.Nullable final String value) {
        this.patchUrl = value;
    }
    /**
     * Sets the rebaseable property value. The rebaseable property
     * @param value Value to set for the rebaseable property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setRebaseable(@javax.annotation.Nullable final Boolean value) {
        this.rebaseable = value;
    }
    /**
     * Sets the requested_reviewers property value. The requested_reviewers property
     * @param value Value to set for the requestedReviewers property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setRequestedReviewers(@javax.annotation.Nullable final java.util.List<SimpleUser> value) {
        this.requestedReviewers = value;
    }
    /**
     * Sets the requested_teams property value. The requested_teams property
     * @param value Value to set for the requestedTeams property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setRequestedTeams(@javax.annotation.Nullable final java.util.List<TeamSimple> value) {
        this.requestedTeams = value;
    }
    /**
     * Sets the review_comments property value. The review_comments property
     * @param value Value to set for the reviewComments property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setReviewComments(@javax.annotation.Nullable final Integer value) {
        this.reviewComments = value;
    }
    /**
     * Sets the review_comments_url property value. The review_comments_url property
     * @param value Value to set for the reviewCommentsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setReviewCommentsUrl(@javax.annotation.Nullable final String value) {
        this.reviewCommentsUrl = value;
    }
    /**
     * Sets the review_comment_url property value. The review_comment_url property
     * @param value Value to set for the reviewCommentUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setReviewCommentUrl(@javax.annotation.Nullable final String value) {
        this.reviewCommentUrl = value;
    }
    /**
     * Sets the state property value. State of this Pull Request. Either `open` or `closed`.
     * @param value Value to set for the state property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setState(@javax.annotation.Nullable final PullRequestState value) {
        this.state = value;
    }
    /**
     * Sets the statuses_url property value. The statuses_url property
     * @param value Value to set for the statusesUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setStatusesUrl(@javax.annotation.Nullable final String value) {
        this.statusesUrl = value;
    }
    /**
     * Sets the title property value. The title of the pull request.
     * @param value Value to set for the title property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setTitle(@javax.annotation.Nullable final String value) {
        this.title = value;
    }
    /**
     * Sets the updated_at property value. The updated_at property
     * @param value Value to set for the updatedAt property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setUpdatedAt(@javax.annotation.Nullable final OffsetDateTime value) {
        this.updatedAt = value;
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
    /**
     * Sets the user property value. A GitHub user.
     * @param value Value to set for the user property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setUser(@javax.annotation.Nullable final NullableSimpleUser value) {
        this.user = value;
    }
}
