package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.time.OffsetDateTime;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
/**
 * A repository on GitHub.
 */
public class Repository implements Parsable {
    /** Whether to allow Auto-merge to be used on pull requests. */
    private Boolean allowAutoMerge;
    /** Whether to allow forking this repo */
    private Boolean allowForking;
    /** Whether to allow merge commits for pull requests. */
    private Boolean allowMergeCommit;
    /** Whether to allow rebase merges for pull requests. */
    private Boolean allowRebaseMerge;
    /** Whether to allow squash merges for pull requests. */
    private Boolean allowSquashMerge;
    /** Whether or not a pull request head branch that is behind its base branch can always be updated even if it is not required to be up to date before merging. */
    private Boolean allowUpdateBranch;
    /** Whether anonymous git access is enabled for this repository */
    private Boolean anonymousAccessEnabled;
    /** Whether the repository is archived. */
    private Boolean archived;
    /** The archive_url property */
    private String archiveUrl;
    /** The assignees_url property */
    private String assigneesUrl;
    /** The blobs_url property */
    private String blobsUrl;
    /** The branches_url property */
    private String branchesUrl;
    /** The clone_url property */
    private String cloneUrl;
    /** The collaborators_url property */
    private String collaboratorsUrl;
    /** The comments_url property */
    private String commentsUrl;
    /** The commits_url property */
    private String commitsUrl;
    /** The compare_url property */
    private String compareUrl;
    /** The contents_url property */
    private String contentsUrl;
    /** The contributors_url property */
    private String contributorsUrl;
    /** The created_at property */
    private OffsetDateTime createdAt;
    /** The default branch of the repository. */
    private String defaultBranch;
    /** Whether to delete head branches when pull requests are merged */
    private Boolean deleteBranchOnMerge;
    /** The deployments_url property */
    private String deploymentsUrl;
    /** The description property */
    private String description;
    /** Returns whether or not this repository disabled. */
    private Boolean disabled;
    /** The downloads_url property */
    private String downloadsUrl;
    /** The events_url property */
    private String eventsUrl;
    /** The fork property */
    private Boolean fork;
    /** The forks property */
    private Integer forks;
    /** The forks_count property */
    private Integer forksCount;
    /** The forks_url property */
    private String forksUrl;
    /** The full_name property */
    private String fullName;
    /** The git_commits_url property */
    private String gitCommitsUrl;
    /** The git_refs_url property */
    private String gitRefsUrl;
    /** The git_tags_url property */
    private String gitTagsUrl;
    /** The git_url property */
    private String gitUrl;
    /** Whether discussions are enabled. */
    private Boolean hasDiscussions;
    /** Whether downloads are enabled. */
    private Boolean hasDownloads;
    /** Whether issues are enabled. */
    private Boolean hasIssues;
    /** The has_pages property */
    private Boolean hasPages;
    /** Whether projects are enabled. */
    private Boolean hasProjects;
    /** Whether the wiki is enabled. */
    private Boolean hasWiki;
    /** The homepage property */
    private String homepage;
    /** The hooks_url property */
    private String hooksUrl;
    /** The html_url property */
    private String htmlUrl;
    /** Unique identifier of the repository */
    private Integer id;
    /** The issue_comment_url property */
    private String issueCommentUrl;
    /** The issue_events_url property */
    private String issueEventsUrl;
    /** The issues_url property */
    private String issuesUrl;
    /** Whether this repository acts as a template that can be used to generate new repositories. */
    private Boolean isTemplate;
    /** The keys_url property */
    private String keysUrl;
    /** The labels_url property */
    private String labelsUrl;
    /** The language property */
    private String language;
    /** The languages_url property */
    private String languagesUrl;
    /** License Simple */
    private NullableLicenseSimple license;
    /** The master_branch property */
    private String masterBranch;
    /** The default value for a merge commit message.- `PR_TITLE` - default to the pull request's title.- `PR_BODY` - default to the pull request's body.- `BLANK` - default to a blank commit message. */
    private RepositoryMergeCommitMessage mergeCommitMessage;
    /** The default value for a merge commit title.- `PR_TITLE` - default to the pull request's title.- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name). */
    private RepositoryMergeCommitTitle mergeCommitTitle;
    /** The merges_url property */
    private String mergesUrl;
    /** The milestones_url property */
    private String milestonesUrl;
    /** The mirror_url property */
    private String mirrorUrl;
    /** The name of the repository. */
    private String name;
    /** The network_count property */
    private Integer networkCount;
    /** The node_id property */
    private String nodeId;
    /** The notifications_url property */
    private String notificationsUrl;
    /** The open_issues property */
    private Integer openIssues;
    /** The open_issues_count property */
    private Integer openIssuesCount;
    /** A GitHub user. */
    private NullableSimpleUser organization;
    /** A GitHub user. */
    private SimpleUser owner;
    /** The permissions property */
    private RepositoryPermissions permissions;
    /** Whether the repository is private or public. */
    private Boolean privateEscaped;
    /** The pulls_url property */
    private String pullsUrl;
    /** The pushed_at property */
    private OffsetDateTime pushedAt;
    /** The releases_url property */
    private String releasesUrl;
    /** The size of the repository. Size is calculated hourly. When a repository is initially created, the size is 0. */
    private Integer size;
    /** The default value for a squash merge commit message:- `PR_BODY` - default to the pull request's body.- `COMMIT_MESSAGES` - default to the branch's commit messages.- `BLANK` - default to a blank commit message. */
    private RepositorySquashMergeCommitMessage squashMergeCommitMessage;
    /** The default value for a squash merge commit title:- `PR_TITLE` - default to the pull request's title.- `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit). */
    private RepositorySquashMergeCommitTitle squashMergeCommitTitle;
    /** The ssh_url property */
    private String sshUrl;
    /** The stargazers_count property */
    private Integer stargazersCount;
    /** The stargazers_url property */
    private String stargazersUrl;
    /** The starred_at property */
    private String starredAt;
    /** The statuses_url property */
    private String statusesUrl;
    /** The subscribers_count property */
    private Integer subscribersCount;
    /** The subscribers_url property */
    private String subscribersUrl;
    /** The subscription_url property */
    private String subscriptionUrl;
    /** The svn_url property */
    private String svnUrl;
    /** The tags_url property */
    private String tagsUrl;
    /** The teams_url property */
    private String teamsUrl;
    /** The temp_clone_token property */
    private String tempCloneToken;
    /** The template_repository property */
    private RepositoryTemplateRepository templateRepository;
    /** The topics property */
    private java.util.List<String> topics;
    /** The trees_url property */
    private String treesUrl;
    /** The updated_at property */
    private OffsetDateTime updatedAt;
    /** The url property */
    private String url;
    /** Whether a squash merge commit can use the pull request title as default. **This property has been deprecated. Please use `squash_merge_commit_title` instead. */
    private Boolean useSquashPrTitleAsDefault;
    /** The repository visibility: public, private, or internal. */
    private String visibility;
    /** The watchers property */
    private Integer watchers;
    /** The watchers_count property */
    private Integer watchersCount;
    /** Whether to require contributors to sign off on web-based commits */
    private Boolean webCommitSignoffRequired;
    /**
     * Instantiates a new repository and sets the default values.
     * @return a void
     */
    @javax.annotation.Nullable
    public Repository() {
        this.setVisibility("public");
    }
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a repository
     */
    @javax.annotation.Nonnull
    public static Repository createFromDiscriminatorValue(@javax.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new Repository();
    }
    /**
     * Gets the allow_auto_merge property value. Whether to allow Auto-merge to be used on pull requests.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getAllowAutoMerge() {
        return this.allowAutoMerge;
    }
    /**
     * Gets the allow_forking property value. Whether to allow forking this repo
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getAllowForking() {
        return this.allowForking;
    }
    /**
     * Gets the allow_merge_commit property value. Whether to allow merge commits for pull requests.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getAllowMergeCommit() {
        return this.allowMergeCommit;
    }
    /**
     * Gets the allow_rebase_merge property value. Whether to allow rebase merges for pull requests.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getAllowRebaseMerge() {
        return this.allowRebaseMerge;
    }
    /**
     * Gets the allow_squash_merge property value. Whether to allow squash merges for pull requests.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getAllowSquashMerge() {
        return this.allowSquashMerge;
    }
    /**
     * Gets the allow_update_branch property value. Whether or not a pull request head branch that is behind its base branch can always be updated even if it is not required to be up to date before merging.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getAllowUpdateBranch() {
        return this.allowUpdateBranch;
    }
    /**
     * Gets the anonymous_access_enabled property value. Whether anonymous git access is enabled for this repository
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getAnonymousAccessEnabled() {
        return this.anonymousAccessEnabled;
    }
    /**
     * Gets the archived property value. Whether the repository is archived.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getArchived() {
        return this.archived;
    }
    /**
     * Gets the archive_url property value. The archive_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getArchiveUrl() {
        return this.archiveUrl;
    }
    /**
     * Gets the assignees_url property value. The assignees_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getAssigneesUrl() {
        return this.assigneesUrl;
    }
    /**
     * Gets the blobs_url property value. The blobs_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getBlobsUrl() {
        return this.blobsUrl;
    }
    /**
     * Gets the branches_url property value. The branches_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getBranchesUrl() {
        return this.branchesUrl;
    }
    /**
     * Gets the clone_url property value. The clone_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getCloneUrl() {
        return this.cloneUrl;
    }
    /**
     * Gets the collaborators_url property value. The collaborators_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getCollaboratorsUrl() {
        return this.collaboratorsUrl;
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
     * Gets the commits_url property value. The commits_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getCommitsUrl() {
        return this.commitsUrl;
    }
    /**
     * Gets the compare_url property value. The compare_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getCompareUrl() {
        return this.compareUrl;
    }
    /**
     * Gets the contents_url property value. The contents_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getContentsUrl() {
        return this.contentsUrl;
    }
    /**
     * Gets the contributors_url property value. The contributors_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getContributorsUrl() {
        return this.contributorsUrl;
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
     * Gets the default_branch property value. The default branch of the repository.
     * @return a string
     */
    @javax.annotation.Nullable
    public String getDefaultBranch() {
        return this.defaultBranch;
    }
    /**
     * Gets the delete_branch_on_merge property value. Whether to delete head branches when pull requests are merged
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getDeleteBranchOnMerge() {
        return this.deleteBranchOnMerge;
    }
    /**
     * Gets the deployments_url property value. The deployments_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getDeploymentsUrl() {
        return this.deploymentsUrl;
    }
    /**
     * Gets the description property value. The description property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getDescription() {
        return this.description;
    }
    /**
     * Gets the disabled property value. Returns whether or not this repository disabled.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getDisabled() {
        return this.disabled;
    }
    /**
     * Gets the downloads_url property value. The downloads_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getDownloadsUrl() {
        return this.downloadsUrl;
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
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(99);
        deserializerMap.put("allow_auto_merge", (n) -> { this.setAllowAutoMerge(n.getBooleanValue()); });
        deserializerMap.put("allow_forking", (n) -> { this.setAllowForking(n.getBooleanValue()); });
        deserializerMap.put("allow_merge_commit", (n) -> { this.setAllowMergeCommit(n.getBooleanValue()); });
        deserializerMap.put("allow_rebase_merge", (n) -> { this.setAllowRebaseMerge(n.getBooleanValue()); });
        deserializerMap.put("allow_squash_merge", (n) -> { this.setAllowSquashMerge(n.getBooleanValue()); });
        deserializerMap.put("allow_update_branch", (n) -> { this.setAllowUpdateBranch(n.getBooleanValue()); });
        deserializerMap.put("anonymous_access_enabled", (n) -> { this.setAnonymousAccessEnabled(n.getBooleanValue()); });
        deserializerMap.put("archived", (n) -> { this.setArchived(n.getBooleanValue()); });
        deserializerMap.put("archive_url", (n) -> { this.setArchiveUrl(n.getStringValue()); });
        deserializerMap.put("assignees_url", (n) -> { this.setAssigneesUrl(n.getStringValue()); });
        deserializerMap.put("blobs_url", (n) -> { this.setBlobsUrl(n.getStringValue()); });
        deserializerMap.put("branches_url", (n) -> { this.setBranchesUrl(n.getStringValue()); });
        deserializerMap.put("clone_url", (n) -> { this.setCloneUrl(n.getStringValue()); });
        deserializerMap.put("collaborators_url", (n) -> { this.setCollaboratorsUrl(n.getStringValue()); });
        deserializerMap.put("comments_url", (n) -> { this.setCommentsUrl(n.getStringValue()); });
        deserializerMap.put("commits_url", (n) -> { this.setCommitsUrl(n.getStringValue()); });
        deserializerMap.put("compare_url", (n) -> { this.setCompareUrl(n.getStringValue()); });
        deserializerMap.put("contents_url", (n) -> { this.setContentsUrl(n.getStringValue()); });
        deserializerMap.put("contributors_url", (n) -> { this.setContributorsUrl(n.getStringValue()); });
        deserializerMap.put("created_at", (n) -> { this.setCreatedAt(n.getOffsetDateTimeValue()); });
        deserializerMap.put("default_branch", (n) -> { this.setDefaultBranch(n.getStringValue()); });
        deserializerMap.put("delete_branch_on_merge", (n) -> { this.setDeleteBranchOnMerge(n.getBooleanValue()); });
        deserializerMap.put("deployments_url", (n) -> { this.setDeploymentsUrl(n.getStringValue()); });
        deserializerMap.put("description", (n) -> { this.setDescription(n.getStringValue()); });
        deserializerMap.put("disabled", (n) -> { this.setDisabled(n.getBooleanValue()); });
        deserializerMap.put("downloads_url", (n) -> { this.setDownloadsUrl(n.getStringValue()); });
        deserializerMap.put("events_url", (n) -> { this.setEventsUrl(n.getStringValue()); });
        deserializerMap.put("fork", (n) -> { this.setFork(n.getBooleanValue()); });
        deserializerMap.put("forks", (n) -> { this.setForks(n.getIntegerValue()); });
        deserializerMap.put("forks_count", (n) -> { this.setForksCount(n.getIntegerValue()); });
        deserializerMap.put("forks_url", (n) -> { this.setForksUrl(n.getStringValue()); });
        deserializerMap.put("full_name", (n) -> { this.setFullName(n.getStringValue()); });
        deserializerMap.put("git_commits_url", (n) -> { this.setGitCommitsUrl(n.getStringValue()); });
        deserializerMap.put("git_refs_url", (n) -> { this.setGitRefsUrl(n.getStringValue()); });
        deserializerMap.put("git_tags_url", (n) -> { this.setGitTagsUrl(n.getStringValue()); });
        deserializerMap.put("git_url", (n) -> { this.setGitUrl(n.getStringValue()); });
        deserializerMap.put("has_discussions", (n) -> { this.setHasDiscussions(n.getBooleanValue()); });
        deserializerMap.put("has_downloads", (n) -> { this.setHasDownloads(n.getBooleanValue()); });
        deserializerMap.put("has_issues", (n) -> { this.setHasIssues(n.getBooleanValue()); });
        deserializerMap.put("has_pages", (n) -> { this.setHasPages(n.getBooleanValue()); });
        deserializerMap.put("has_projects", (n) -> { this.setHasProjects(n.getBooleanValue()); });
        deserializerMap.put("has_wiki", (n) -> { this.setHasWiki(n.getBooleanValue()); });
        deserializerMap.put("homepage", (n) -> { this.setHomepage(n.getStringValue()); });
        deserializerMap.put("hooks_url", (n) -> { this.setHooksUrl(n.getStringValue()); });
        deserializerMap.put("html_url", (n) -> { this.setHtmlUrl(n.getStringValue()); });
        deserializerMap.put("id", (n) -> { this.setId(n.getIntegerValue()); });
        deserializerMap.put("issue_comment_url", (n) -> { this.setIssueCommentUrl(n.getStringValue()); });
        deserializerMap.put("issue_events_url", (n) -> { this.setIssueEventsUrl(n.getStringValue()); });
        deserializerMap.put("issues_url", (n) -> { this.setIssuesUrl(n.getStringValue()); });
        deserializerMap.put("is_template", (n) -> { this.setIsTemplate(n.getBooleanValue()); });
        deserializerMap.put("keys_url", (n) -> { this.setKeysUrl(n.getStringValue()); });
        deserializerMap.put("labels_url", (n) -> { this.setLabelsUrl(n.getStringValue()); });
        deserializerMap.put("language", (n) -> { this.setLanguage(n.getStringValue()); });
        deserializerMap.put("languages_url", (n) -> { this.setLanguagesUrl(n.getStringValue()); });
        deserializerMap.put("license", (n) -> { this.setLicense(n.getObjectValue(NullableLicenseSimple::createFromDiscriminatorValue)); });
        deserializerMap.put("master_branch", (n) -> { this.setMasterBranch(n.getStringValue()); });
        deserializerMap.put("merge_commit_message", (n) -> { this.setMergeCommitMessage(n.getEnumValue(RepositoryMergeCommitMessage.class)); });
        deserializerMap.put("merge_commit_title", (n) -> { this.setMergeCommitTitle(n.getEnumValue(RepositoryMergeCommitTitle.class)); });
        deserializerMap.put("merges_url", (n) -> { this.setMergesUrl(n.getStringValue()); });
        deserializerMap.put("milestones_url", (n) -> { this.setMilestonesUrl(n.getStringValue()); });
        deserializerMap.put("mirror_url", (n) -> { this.setMirrorUrl(n.getStringValue()); });
        deserializerMap.put("name", (n) -> { this.setName(n.getStringValue()); });
        deserializerMap.put("network_count", (n) -> { this.setNetworkCount(n.getIntegerValue()); });
        deserializerMap.put("node_id", (n) -> { this.setNodeId(n.getStringValue()); });
        deserializerMap.put("notifications_url", (n) -> { this.setNotificationsUrl(n.getStringValue()); });
        deserializerMap.put("open_issues", (n) -> { this.setOpenIssues(n.getIntegerValue()); });
        deserializerMap.put("open_issues_count", (n) -> { this.setOpenIssuesCount(n.getIntegerValue()); });
        deserializerMap.put("organization", (n) -> { this.setOrganization(n.getObjectValue(NullableSimpleUser::createFromDiscriminatorValue)); });
        deserializerMap.put("owner", (n) -> { this.setOwner(n.getObjectValue(SimpleUser::createFromDiscriminatorValue)); });
        deserializerMap.put("permissions", (n) -> { this.setPermissions(n.getObjectValue(RepositoryPermissions::createFromDiscriminatorValue)); });
        deserializerMap.put("private", (n) -> { this.setPrivate(n.getBooleanValue()); });
        deserializerMap.put("pulls_url", (n) -> { this.setPullsUrl(n.getStringValue()); });
        deserializerMap.put("pushed_at", (n) -> { this.setPushedAt(n.getOffsetDateTimeValue()); });
        deserializerMap.put("releases_url", (n) -> { this.setReleasesUrl(n.getStringValue()); });
        deserializerMap.put("size", (n) -> { this.setSize(n.getIntegerValue()); });
        deserializerMap.put("squash_merge_commit_message", (n) -> { this.setSquashMergeCommitMessage(n.getEnumValue(RepositorySquashMergeCommitMessage.class)); });
        deserializerMap.put("squash_merge_commit_title", (n) -> { this.setSquashMergeCommitTitle(n.getEnumValue(RepositorySquashMergeCommitTitle.class)); });
        deserializerMap.put("ssh_url", (n) -> { this.setSshUrl(n.getStringValue()); });
        deserializerMap.put("stargazers_count", (n) -> { this.setStargazersCount(n.getIntegerValue()); });
        deserializerMap.put("stargazers_url", (n) -> { this.setStargazersUrl(n.getStringValue()); });
        deserializerMap.put("starred_at", (n) -> { this.setStarredAt(n.getStringValue()); });
        deserializerMap.put("statuses_url", (n) -> { this.setStatusesUrl(n.getStringValue()); });
        deserializerMap.put("subscribers_count", (n) -> { this.setSubscribersCount(n.getIntegerValue()); });
        deserializerMap.put("subscribers_url", (n) -> { this.setSubscribersUrl(n.getStringValue()); });
        deserializerMap.put("subscription_url", (n) -> { this.setSubscriptionUrl(n.getStringValue()); });
        deserializerMap.put("svn_url", (n) -> { this.setSvnUrl(n.getStringValue()); });
        deserializerMap.put("tags_url", (n) -> { this.setTagsUrl(n.getStringValue()); });
        deserializerMap.put("teams_url", (n) -> { this.setTeamsUrl(n.getStringValue()); });
        deserializerMap.put("temp_clone_token", (n) -> { this.setTempCloneToken(n.getStringValue()); });
        deserializerMap.put("template_repository", (n) -> { this.setTemplateRepository(n.getObjectValue(RepositoryTemplateRepository::createFromDiscriminatorValue)); });
        deserializerMap.put("topics", (n) -> { this.setTopics(n.getCollectionOfPrimitiveValues(String.class)); });
        deserializerMap.put("trees_url", (n) -> { this.setTreesUrl(n.getStringValue()); });
        deserializerMap.put("updated_at", (n) -> { this.setUpdatedAt(n.getOffsetDateTimeValue()); });
        deserializerMap.put("url", (n) -> { this.setUrl(n.getStringValue()); });
        deserializerMap.put("use_squash_pr_title_as_default", (n) -> { this.setUseSquashPrTitleAsDefault(n.getBooleanValue()); });
        deserializerMap.put("visibility", (n) -> { this.setVisibility(n.getStringValue()); });
        deserializerMap.put("watchers", (n) -> { this.setWatchers(n.getIntegerValue()); });
        deserializerMap.put("watchers_count", (n) -> { this.setWatchersCount(n.getIntegerValue()); });
        deserializerMap.put("web_commit_signoff_required", (n) -> { this.setWebCommitSignoffRequired(n.getBooleanValue()); });
        return deserializerMap;
    }
    /**
     * Gets the fork property value. The fork property
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getFork() {
        return this.fork;
    }
    /**
     * Gets the forks property value. The forks property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getForks() {
        return this.forks;
    }
    /**
     * Gets the forks_count property value. The forks_count property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getForksCount() {
        return this.forksCount;
    }
    /**
     * Gets the forks_url property value. The forks_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getForksUrl() {
        return this.forksUrl;
    }
    /**
     * Gets the full_name property value. The full_name property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getFullName() {
        return this.fullName;
    }
    /**
     * Gets the git_commits_url property value. The git_commits_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getGitCommitsUrl() {
        return this.gitCommitsUrl;
    }
    /**
     * Gets the git_refs_url property value. The git_refs_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getGitRefsUrl() {
        return this.gitRefsUrl;
    }
    /**
     * Gets the git_tags_url property value. The git_tags_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getGitTagsUrl() {
        return this.gitTagsUrl;
    }
    /**
     * Gets the git_url property value. The git_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getGitUrl() {
        return this.gitUrl;
    }
    /**
     * Gets the has_discussions property value. Whether discussions are enabled.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getHasDiscussions() {
        return this.hasDiscussions;
    }
    /**
     * Gets the has_downloads property value. Whether downloads are enabled.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getHasDownloads() {
        return this.hasDownloads;
    }
    /**
     * Gets the has_issues property value. Whether issues are enabled.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getHasIssues() {
        return this.hasIssues;
    }
    /**
     * Gets the has_pages property value. The has_pages property
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getHasPages() {
        return this.hasPages;
    }
    /**
     * Gets the has_projects property value. Whether projects are enabled.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getHasProjects() {
        return this.hasProjects;
    }
    /**
     * Gets the has_wiki property value. Whether the wiki is enabled.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getHasWiki() {
        return this.hasWiki;
    }
    /**
     * Gets the homepage property value. The homepage property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getHomepage() {
        return this.homepage;
    }
    /**
     * Gets the hooks_url property value. The hooks_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getHooksUrl() {
        return this.hooksUrl;
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
     * Gets the id property value. Unique identifier of the repository
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getId() {
        return this.id;
    }
    /**
     * Gets the issue_comment_url property value. The issue_comment_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getIssueCommentUrl() {
        return this.issueCommentUrl;
    }
    /**
     * Gets the issue_events_url property value. The issue_events_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getIssueEventsUrl() {
        return this.issueEventsUrl;
    }
    /**
     * Gets the issues_url property value. The issues_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getIssuesUrl() {
        return this.issuesUrl;
    }
    /**
     * Gets the is_template property value. Whether this repository acts as a template that can be used to generate new repositories.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getIsTemplate() {
        return this.isTemplate;
    }
    /**
     * Gets the keys_url property value. The keys_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getKeysUrl() {
        return this.keysUrl;
    }
    /**
     * Gets the labels_url property value. The labels_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getLabelsUrl() {
        return this.labelsUrl;
    }
    /**
     * Gets the language property value. The language property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getLanguage() {
        return this.language;
    }
    /**
     * Gets the languages_url property value. The languages_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getLanguagesUrl() {
        return this.languagesUrl;
    }
    /**
     * Gets the license property value. License Simple
     * @return a nullableLicenseSimple
     */
    @javax.annotation.Nullable
    public NullableLicenseSimple getLicense() {
        return this.license;
    }
    /**
     * Gets the master_branch property value. The master_branch property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getMasterBranch() {
        return this.masterBranch;
    }
    /**
     * Gets the merge_commit_message property value. The default value for a merge commit message.- `PR_TITLE` - default to the pull request's title.- `PR_BODY` - default to the pull request's body.- `BLANK` - default to a blank commit message.
     * @return a RepositoryMergeCommitMessage
     */
    @javax.annotation.Nullable
    public RepositoryMergeCommitMessage getMergeCommitMessage() {
        return this.mergeCommitMessage;
    }
    /**
     * Gets the merge_commit_title property value. The default value for a merge commit title.- `PR_TITLE` - default to the pull request's title.- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
     * @return a RepositoryMergeCommitTitle
     */
    @javax.annotation.Nullable
    public RepositoryMergeCommitTitle getMergeCommitTitle() {
        return this.mergeCommitTitle;
    }
    /**
     * Gets the merges_url property value. The merges_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getMergesUrl() {
        return this.mergesUrl;
    }
    /**
     * Gets the milestones_url property value. The milestones_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getMilestonesUrl() {
        return this.milestonesUrl;
    }
    /**
     * Gets the mirror_url property value. The mirror_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getMirrorUrl() {
        return this.mirrorUrl;
    }
    /**
     * Gets the name property value. The name of the repository.
     * @return a string
     */
    @javax.annotation.Nullable
    public String getName() {
        return this.name;
    }
    /**
     * Gets the network_count property value. The network_count property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getNetworkCount() {
        return this.networkCount;
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
     * Gets the notifications_url property value. The notifications_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getNotificationsUrl() {
        return this.notificationsUrl;
    }
    /**
     * Gets the open_issues property value. The open_issues property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getOpenIssues() {
        return this.openIssues;
    }
    /**
     * Gets the open_issues_count property value. The open_issues_count property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getOpenIssuesCount() {
        return this.openIssuesCount;
    }
    /**
     * Gets the organization property value. A GitHub user.
     * @return a nullableSimpleUser
     */
    @javax.annotation.Nullable
    public NullableSimpleUser getOrganization() {
        return this.organization;
    }
    /**
     * Gets the owner property value. A GitHub user.
     * @return a simpleUser
     */
    @javax.annotation.Nullable
    public SimpleUser getOwner() {
        return this.owner;
    }
    /**
     * Gets the permissions property value. The permissions property
     * @return a RepositoryPermissions
     */
    @javax.annotation.Nullable
    public RepositoryPermissions getPermissions() {
        return this.permissions;
    }
    /**
     * Gets the private property value. Whether the repository is private or public.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getPrivate() {
        return this.privateEscaped;
    }
    /**
     * Gets the pulls_url property value. The pulls_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getPullsUrl() {
        return this.pullsUrl;
    }
    /**
     * Gets the pushed_at property value. The pushed_at property
     * @return a OffsetDateTime
     */
    @javax.annotation.Nullable
    public OffsetDateTime getPushedAt() {
        return this.pushedAt;
    }
    /**
     * Gets the releases_url property value. The releases_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getReleasesUrl() {
        return this.releasesUrl;
    }
    /**
     * Gets the size property value. The size of the repository. Size is calculated hourly. When a repository is initially created, the size is 0.
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getSize() {
        return this.size;
    }
    /**
     * Gets the squash_merge_commit_message property value. The default value for a squash merge commit message:- `PR_BODY` - default to the pull request's body.- `COMMIT_MESSAGES` - default to the branch's commit messages.- `BLANK` - default to a blank commit message.
     * @return a RepositorySquashMergeCommitMessage
     */
    @javax.annotation.Nullable
    public RepositorySquashMergeCommitMessage getSquashMergeCommitMessage() {
        return this.squashMergeCommitMessage;
    }
    /**
     * Gets the squash_merge_commit_title property value. The default value for a squash merge commit title:- `PR_TITLE` - default to the pull request's title.- `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
     * @return a RepositorySquashMergeCommitTitle
     */
    @javax.annotation.Nullable
    public RepositorySquashMergeCommitTitle getSquashMergeCommitTitle() {
        return this.squashMergeCommitTitle;
    }
    /**
     * Gets the ssh_url property value. The ssh_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getSshUrl() {
        return this.sshUrl;
    }
    /**
     * Gets the stargazers_count property value. The stargazers_count property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getStargazersCount() {
        return this.stargazersCount;
    }
    /**
     * Gets the stargazers_url property value. The stargazers_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getStargazersUrl() {
        return this.stargazersUrl;
    }
    /**
     * Gets the starred_at property value. The starred_at property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getStarredAt() {
        return this.starredAt;
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
     * Gets the subscribers_count property value. The subscribers_count property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getSubscribersCount() {
        return this.subscribersCount;
    }
    /**
     * Gets the subscribers_url property value. The subscribers_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getSubscribersUrl() {
        return this.subscribersUrl;
    }
    /**
     * Gets the subscription_url property value. The subscription_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getSubscriptionUrl() {
        return this.subscriptionUrl;
    }
    /**
     * Gets the svn_url property value. The svn_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getSvnUrl() {
        return this.svnUrl;
    }
    /**
     * Gets the tags_url property value. The tags_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getTagsUrl() {
        return this.tagsUrl;
    }
    /**
     * Gets the teams_url property value. The teams_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getTeamsUrl() {
        return this.teamsUrl;
    }
    /**
     * Gets the temp_clone_token property value. The temp_clone_token property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getTempCloneToken() {
        return this.tempCloneToken;
    }
    /**
     * Gets the template_repository property value. The template_repository property
     * @return a RepositoryTemplateRepository
     */
    @javax.annotation.Nullable
    public RepositoryTemplateRepository getTemplateRepository() {
        return this.templateRepository;
    }
    /**
     * Gets the topics property value. The topics property
     * @return a string
     */
    @javax.annotation.Nullable
    public java.util.List<String> getTopics() {
        return this.topics;
    }
    /**
     * Gets the trees_url property value. The trees_url property
     * @return a string
     */
    @javax.annotation.Nullable
    public String getTreesUrl() {
        return this.treesUrl;
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
     * Gets the use_squash_pr_title_as_default property value. Whether a squash merge commit can use the pull request title as default. **This property has been deprecated. Please use `squash_merge_commit_title` instead.
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getUseSquashPrTitleAsDefault() {
        return this.useSquashPrTitleAsDefault;
    }
    /**
     * Gets the visibility property value. The repository visibility: public, private, or internal.
     * @return a string
     */
    @javax.annotation.Nullable
    public String getVisibility() {
        return this.visibility;
    }
    /**
     * Gets the watchers property value. The watchers property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getWatchers() {
        return this.watchers;
    }
    /**
     * Gets the watchers_count property value. The watchers_count property
     * @return a integer
     */
    @javax.annotation.Nullable
    public Integer getWatchersCount() {
        return this.watchersCount;
    }
    /**
     * Gets the web_commit_signoff_required property value. Whether to require contributors to sign off on web-based commits
     * @return a boolean
     */
    @javax.annotation.Nullable
    public Boolean getWebCommitSignoffRequired() {
        return this.webCommitSignoffRequired;
    }
    /**
     * Serializes information the current object
     * @param writer Serialization writer to use to serialize this model
     * @return a void
     */
    @javax.annotation.Nonnull
    public void serialize(@javax.annotation.Nonnull final SerializationWriter writer) {
        Objects.requireNonNull(writer);
        writer.writeBooleanValue("allow_auto_merge", this.getAllowAutoMerge());
        writer.writeBooleanValue("allow_forking", this.getAllowForking());
        writer.writeBooleanValue("allow_merge_commit", this.getAllowMergeCommit());
        writer.writeBooleanValue("allow_rebase_merge", this.getAllowRebaseMerge());
        writer.writeBooleanValue("allow_squash_merge", this.getAllowSquashMerge());
        writer.writeBooleanValue("allow_update_branch", this.getAllowUpdateBranch());
        writer.writeBooleanValue("anonymous_access_enabled", this.getAnonymousAccessEnabled());
        writer.writeBooleanValue("archived", this.getArchived());
        writer.writeStringValue("archive_url", this.getArchiveUrl());
        writer.writeStringValue("assignees_url", this.getAssigneesUrl());
        writer.writeStringValue("blobs_url", this.getBlobsUrl());
        writer.writeStringValue("branches_url", this.getBranchesUrl());
        writer.writeStringValue("clone_url", this.getCloneUrl());
        writer.writeStringValue("collaborators_url", this.getCollaboratorsUrl());
        writer.writeStringValue("comments_url", this.getCommentsUrl());
        writer.writeStringValue("commits_url", this.getCommitsUrl());
        writer.writeStringValue("compare_url", this.getCompareUrl());
        writer.writeStringValue("contents_url", this.getContentsUrl());
        writer.writeStringValue("contributors_url", this.getContributorsUrl());
        writer.writeOffsetDateTimeValue("created_at", this.getCreatedAt());
        writer.writeStringValue("default_branch", this.getDefaultBranch());
        writer.writeBooleanValue("delete_branch_on_merge", this.getDeleteBranchOnMerge());
        writer.writeStringValue("deployments_url", this.getDeploymentsUrl());
        writer.writeStringValue("description", this.getDescription());
        writer.writeBooleanValue("disabled", this.getDisabled());
        writer.writeStringValue("downloads_url", this.getDownloadsUrl());
        writer.writeStringValue("events_url", this.getEventsUrl());
        writer.writeBooleanValue("fork", this.getFork());
        writer.writeIntegerValue("forks", this.getForks());
        writer.writeIntegerValue("forks_count", this.getForksCount());
        writer.writeStringValue("forks_url", this.getForksUrl());
        writer.writeStringValue("full_name", this.getFullName());
        writer.writeStringValue("git_commits_url", this.getGitCommitsUrl());
        writer.writeStringValue("git_refs_url", this.getGitRefsUrl());
        writer.writeStringValue("git_tags_url", this.getGitTagsUrl());
        writer.writeStringValue("git_url", this.getGitUrl());
        writer.writeBooleanValue("has_discussions", this.getHasDiscussions());
        writer.writeBooleanValue("has_downloads", this.getHasDownloads());
        writer.writeBooleanValue("has_issues", this.getHasIssues());
        writer.writeBooleanValue("has_pages", this.getHasPages());
        writer.writeBooleanValue("has_projects", this.getHasProjects());
        writer.writeBooleanValue("has_wiki", this.getHasWiki());
        writer.writeStringValue("homepage", this.getHomepage());
        writer.writeStringValue("hooks_url", this.getHooksUrl());
        writer.writeStringValue("html_url", this.getHtmlUrl());
        writer.writeIntegerValue("id", this.getId());
        writer.writeStringValue("issue_comment_url", this.getIssueCommentUrl());
        writer.writeStringValue("issue_events_url", this.getIssueEventsUrl());
        writer.writeStringValue("issues_url", this.getIssuesUrl());
        writer.writeBooleanValue("is_template", this.getIsTemplate());
        writer.writeStringValue("keys_url", this.getKeysUrl());
        writer.writeStringValue("labels_url", this.getLabelsUrl());
        writer.writeStringValue("language", this.getLanguage());
        writer.writeStringValue("languages_url", this.getLanguagesUrl());
        writer.writeObjectValue("license", this.getLicense());
        writer.writeStringValue("master_branch", this.getMasterBranch());
        writer.writeEnumValue("merge_commit_message", this.getMergeCommitMessage());
        writer.writeEnumValue("merge_commit_title", this.getMergeCommitTitle());
        writer.writeStringValue("merges_url", this.getMergesUrl());
        writer.writeStringValue("milestones_url", this.getMilestonesUrl());
        writer.writeStringValue("mirror_url", this.getMirrorUrl());
        writer.writeStringValue("name", this.getName());
        writer.writeIntegerValue("network_count", this.getNetworkCount());
        writer.writeStringValue("node_id", this.getNodeId());
        writer.writeStringValue("notifications_url", this.getNotificationsUrl());
        writer.writeIntegerValue("open_issues", this.getOpenIssues());
        writer.writeIntegerValue("open_issues_count", this.getOpenIssuesCount());
        writer.writeObjectValue("organization", this.getOrganization());
        writer.writeObjectValue("owner", this.getOwner());
        writer.writeObjectValue("permissions", this.getPermissions());
        writer.writeBooleanValue("private", this.getPrivate());
        writer.writeStringValue("pulls_url", this.getPullsUrl());
        writer.writeOffsetDateTimeValue("pushed_at", this.getPushedAt());
        writer.writeStringValue("releases_url", this.getReleasesUrl());
        writer.writeIntegerValue("size", this.getSize());
        writer.writeEnumValue("squash_merge_commit_message", this.getSquashMergeCommitMessage());
        writer.writeEnumValue("squash_merge_commit_title", this.getSquashMergeCommitTitle());
        writer.writeStringValue("ssh_url", this.getSshUrl());
        writer.writeIntegerValue("stargazers_count", this.getStargazersCount());
        writer.writeStringValue("stargazers_url", this.getStargazersUrl());
        writer.writeStringValue("starred_at", this.getStarredAt());
        writer.writeStringValue("statuses_url", this.getStatusesUrl());
        writer.writeIntegerValue("subscribers_count", this.getSubscribersCount());
        writer.writeStringValue("subscribers_url", this.getSubscribersUrl());
        writer.writeStringValue("subscription_url", this.getSubscriptionUrl());
        writer.writeStringValue("svn_url", this.getSvnUrl());
        writer.writeStringValue("tags_url", this.getTagsUrl());
        writer.writeStringValue("teams_url", this.getTeamsUrl());
        writer.writeStringValue("temp_clone_token", this.getTempCloneToken());
        writer.writeObjectValue("template_repository", this.getTemplateRepository());
        writer.writeCollectionOfPrimitiveValues("topics", this.getTopics());
        writer.writeStringValue("trees_url", this.getTreesUrl());
        writer.writeOffsetDateTimeValue("updated_at", this.getUpdatedAt());
        writer.writeStringValue("url", this.getUrl());
        writer.writeBooleanValue("use_squash_pr_title_as_default", this.getUseSquashPrTitleAsDefault());
        writer.writeStringValue("visibility", this.getVisibility());
        writer.writeIntegerValue("watchers", this.getWatchers());
        writer.writeIntegerValue("watchers_count", this.getWatchersCount());
        writer.writeBooleanValue("web_commit_signoff_required", this.getWebCommitSignoffRequired());
    }
    /**
     * Sets the allow_auto_merge property value. Whether to allow Auto-merge to be used on pull requests.
     * @param value Value to set for the allowAutoMerge property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setAllowAutoMerge(@javax.annotation.Nullable final Boolean value) {
        this.allowAutoMerge = value;
    }
    /**
     * Sets the allow_forking property value. Whether to allow forking this repo
     * @param value Value to set for the allowForking property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setAllowForking(@javax.annotation.Nullable final Boolean value) {
        this.allowForking = value;
    }
    /**
     * Sets the allow_merge_commit property value. Whether to allow merge commits for pull requests.
     * @param value Value to set for the allowMergeCommit property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setAllowMergeCommit(@javax.annotation.Nullable final Boolean value) {
        this.allowMergeCommit = value;
    }
    /**
     * Sets the allow_rebase_merge property value. Whether to allow rebase merges for pull requests.
     * @param value Value to set for the allowRebaseMerge property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setAllowRebaseMerge(@javax.annotation.Nullable final Boolean value) {
        this.allowRebaseMerge = value;
    }
    /**
     * Sets the allow_squash_merge property value. Whether to allow squash merges for pull requests.
     * @param value Value to set for the allowSquashMerge property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setAllowSquashMerge(@javax.annotation.Nullable final Boolean value) {
        this.allowSquashMerge = value;
    }
    /**
     * Sets the allow_update_branch property value. Whether or not a pull request head branch that is behind its base branch can always be updated even if it is not required to be up to date before merging.
     * @param value Value to set for the allowUpdateBranch property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setAllowUpdateBranch(@javax.annotation.Nullable final Boolean value) {
        this.allowUpdateBranch = value;
    }
    /**
     * Sets the anonymous_access_enabled property value. Whether anonymous git access is enabled for this repository
     * @param value Value to set for the anonymousAccessEnabled property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setAnonymousAccessEnabled(@javax.annotation.Nullable final Boolean value) {
        this.anonymousAccessEnabled = value;
    }
    /**
     * Sets the archived property value. Whether the repository is archived.
     * @param value Value to set for the archived property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setArchived(@javax.annotation.Nullable final Boolean value) {
        this.archived = value;
    }
    /**
     * Sets the archive_url property value. The archive_url property
     * @param value Value to set for the archiveUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setArchiveUrl(@javax.annotation.Nullable final String value) {
        this.archiveUrl = value;
    }
    /**
     * Sets the assignees_url property value. The assignees_url property
     * @param value Value to set for the assigneesUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setAssigneesUrl(@javax.annotation.Nullable final String value) {
        this.assigneesUrl = value;
    }
    /**
     * Sets the blobs_url property value. The blobs_url property
     * @param value Value to set for the blobsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setBlobsUrl(@javax.annotation.Nullable final String value) {
        this.blobsUrl = value;
    }
    /**
     * Sets the branches_url property value. The branches_url property
     * @param value Value to set for the branchesUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setBranchesUrl(@javax.annotation.Nullable final String value) {
        this.branchesUrl = value;
    }
    /**
     * Sets the clone_url property value. The clone_url property
     * @param value Value to set for the cloneUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setCloneUrl(@javax.annotation.Nullable final String value) {
        this.cloneUrl = value;
    }
    /**
     * Sets the collaborators_url property value. The collaborators_url property
     * @param value Value to set for the collaboratorsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setCollaboratorsUrl(@javax.annotation.Nullable final String value) {
        this.collaboratorsUrl = value;
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
     * Sets the commits_url property value. The commits_url property
     * @param value Value to set for the commitsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setCommitsUrl(@javax.annotation.Nullable final String value) {
        this.commitsUrl = value;
    }
    /**
     * Sets the compare_url property value. The compare_url property
     * @param value Value to set for the compareUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setCompareUrl(@javax.annotation.Nullable final String value) {
        this.compareUrl = value;
    }
    /**
     * Sets the contents_url property value. The contents_url property
     * @param value Value to set for the contentsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setContentsUrl(@javax.annotation.Nullable final String value) {
        this.contentsUrl = value;
    }
    /**
     * Sets the contributors_url property value. The contributors_url property
     * @param value Value to set for the contributorsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setContributorsUrl(@javax.annotation.Nullable final String value) {
        this.contributorsUrl = value;
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
     * Sets the default_branch property value. The default branch of the repository.
     * @param value Value to set for the defaultBranch property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setDefaultBranch(@javax.annotation.Nullable final String value) {
        this.defaultBranch = value;
    }
    /**
     * Sets the delete_branch_on_merge property value. Whether to delete head branches when pull requests are merged
     * @param value Value to set for the deleteBranchOnMerge property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setDeleteBranchOnMerge(@javax.annotation.Nullable final Boolean value) {
        this.deleteBranchOnMerge = value;
    }
    /**
     * Sets the deployments_url property value. The deployments_url property
     * @param value Value to set for the deploymentsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setDeploymentsUrl(@javax.annotation.Nullable final String value) {
        this.deploymentsUrl = value;
    }
    /**
     * Sets the description property value. The description property
     * @param value Value to set for the description property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setDescription(@javax.annotation.Nullable final String value) {
        this.description = value;
    }
    /**
     * Sets the disabled property value. Returns whether or not this repository disabled.
     * @param value Value to set for the disabled property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setDisabled(@javax.annotation.Nullable final Boolean value) {
        this.disabled = value;
    }
    /**
     * Sets the downloads_url property value. The downloads_url property
     * @param value Value to set for the downloadsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setDownloadsUrl(@javax.annotation.Nullable final String value) {
        this.downloadsUrl = value;
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
     * Sets the fork property value. The fork property
     * @param value Value to set for the fork property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setFork(@javax.annotation.Nullable final Boolean value) {
        this.fork = value;
    }
    /**
     * Sets the forks property value. The forks property
     * @param value Value to set for the forks property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setForks(@javax.annotation.Nullable final Integer value) {
        this.forks = value;
    }
    /**
     * Sets the forks_count property value. The forks_count property
     * @param value Value to set for the forksCount property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setForksCount(@javax.annotation.Nullable final Integer value) {
        this.forksCount = value;
    }
    /**
     * Sets the forks_url property value. The forks_url property
     * @param value Value to set for the forksUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setForksUrl(@javax.annotation.Nullable final String value) {
        this.forksUrl = value;
    }
    /**
     * Sets the full_name property value. The full_name property
     * @param value Value to set for the fullName property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setFullName(@javax.annotation.Nullable final String value) {
        this.fullName = value;
    }
    /**
     * Sets the git_commits_url property value. The git_commits_url property
     * @param value Value to set for the gitCommitsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setGitCommitsUrl(@javax.annotation.Nullable final String value) {
        this.gitCommitsUrl = value;
    }
    /**
     * Sets the git_refs_url property value. The git_refs_url property
     * @param value Value to set for the gitRefsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setGitRefsUrl(@javax.annotation.Nullable final String value) {
        this.gitRefsUrl = value;
    }
    /**
     * Sets the git_tags_url property value. The git_tags_url property
     * @param value Value to set for the gitTagsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setGitTagsUrl(@javax.annotation.Nullable final String value) {
        this.gitTagsUrl = value;
    }
    /**
     * Sets the git_url property value. The git_url property
     * @param value Value to set for the gitUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setGitUrl(@javax.annotation.Nullable final String value) {
        this.gitUrl = value;
    }
    /**
     * Sets the has_discussions property value. Whether discussions are enabled.
     * @param value Value to set for the hasDiscussions property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setHasDiscussions(@javax.annotation.Nullable final Boolean value) {
        this.hasDiscussions = value;
    }
    /**
     * Sets the has_downloads property value. Whether downloads are enabled.
     * @param value Value to set for the hasDownloads property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setHasDownloads(@javax.annotation.Nullable final Boolean value) {
        this.hasDownloads = value;
    }
    /**
     * Sets the has_issues property value. Whether issues are enabled.
     * @param value Value to set for the hasIssues property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setHasIssues(@javax.annotation.Nullable final Boolean value) {
        this.hasIssues = value;
    }
    /**
     * Sets the has_pages property value. The has_pages property
     * @param value Value to set for the hasPages property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setHasPages(@javax.annotation.Nullable final Boolean value) {
        this.hasPages = value;
    }
    /**
     * Sets the has_projects property value. Whether projects are enabled.
     * @param value Value to set for the hasProjects property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setHasProjects(@javax.annotation.Nullable final Boolean value) {
        this.hasProjects = value;
    }
    /**
     * Sets the has_wiki property value. Whether the wiki is enabled.
     * @param value Value to set for the hasWiki property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setHasWiki(@javax.annotation.Nullable final Boolean value) {
        this.hasWiki = value;
    }
    /**
     * Sets the homepage property value. The homepage property
     * @param value Value to set for the homepage property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setHomepage(@javax.annotation.Nullable final String value) {
        this.homepage = value;
    }
    /**
     * Sets the hooks_url property value. The hooks_url property
     * @param value Value to set for the hooksUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setHooksUrl(@javax.annotation.Nullable final String value) {
        this.hooksUrl = value;
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
     * Sets the id property value. Unique identifier of the repository
     * @param value Value to set for the id property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setId(@javax.annotation.Nullable final Integer value) {
        this.id = value;
    }
    /**
     * Sets the issue_comment_url property value. The issue_comment_url property
     * @param value Value to set for the issueCommentUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setIssueCommentUrl(@javax.annotation.Nullable final String value) {
        this.issueCommentUrl = value;
    }
    /**
     * Sets the issue_events_url property value. The issue_events_url property
     * @param value Value to set for the issueEventsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setIssueEventsUrl(@javax.annotation.Nullable final String value) {
        this.issueEventsUrl = value;
    }
    /**
     * Sets the issues_url property value. The issues_url property
     * @param value Value to set for the issuesUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setIssuesUrl(@javax.annotation.Nullable final String value) {
        this.issuesUrl = value;
    }
    /**
     * Sets the is_template property value. Whether this repository acts as a template that can be used to generate new repositories.
     * @param value Value to set for the isTemplate property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setIsTemplate(@javax.annotation.Nullable final Boolean value) {
        this.isTemplate = value;
    }
    /**
     * Sets the keys_url property value. The keys_url property
     * @param value Value to set for the keysUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setKeysUrl(@javax.annotation.Nullable final String value) {
        this.keysUrl = value;
    }
    /**
     * Sets the labels_url property value. The labels_url property
     * @param value Value to set for the labelsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setLabelsUrl(@javax.annotation.Nullable final String value) {
        this.labelsUrl = value;
    }
    /**
     * Sets the language property value. The language property
     * @param value Value to set for the language property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setLanguage(@javax.annotation.Nullable final String value) {
        this.language = value;
    }
    /**
     * Sets the languages_url property value. The languages_url property
     * @param value Value to set for the languagesUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setLanguagesUrl(@javax.annotation.Nullable final String value) {
        this.languagesUrl = value;
    }
    /**
     * Sets the license property value. License Simple
     * @param value Value to set for the license property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setLicense(@javax.annotation.Nullable final NullableLicenseSimple value) {
        this.license = value;
    }
    /**
     * Sets the master_branch property value. The master_branch property
     * @param value Value to set for the masterBranch property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMasterBranch(@javax.annotation.Nullable final String value) {
        this.masterBranch = value;
    }
    /**
     * Sets the merge_commit_message property value. The default value for a merge commit message.- `PR_TITLE` - default to the pull request's title.- `PR_BODY` - default to the pull request's body.- `BLANK` - default to a blank commit message.
     * @param value Value to set for the mergeCommitMessage property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMergeCommitMessage(@javax.annotation.Nullable final RepositoryMergeCommitMessage value) {
        this.mergeCommitMessage = value;
    }
    /**
     * Sets the merge_commit_title property value. The default value for a merge commit title.- `PR_TITLE` - default to the pull request's title.- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
     * @param value Value to set for the mergeCommitTitle property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMergeCommitTitle(@javax.annotation.Nullable final RepositoryMergeCommitTitle value) {
        this.mergeCommitTitle = value;
    }
    /**
     * Sets the merges_url property value. The merges_url property
     * @param value Value to set for the mergesUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMergesUrl(@javax.annotation.Nullable final String value) {
        this.mergesUrl = value;
    }
    /**
     * Sets the milestones_url property value. The milestones_url property
     * @param value Value to set for the milestonesUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMilestonesUrl(@javax.annotation.Nullable final String value) {
        this.milestonesUrl = value;
    }
    /**
     * Sets the mirror_url property value. The mirror_url property
     * @param value Value to set for the mirrorUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMirrorUrl(@javax.annotation.Nullable final String value) {
        this.mirrorUrl = value;
    }
    /**
     * Sets the name property value. The name of the repository.
     * @param value Value to set for the name property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setName(@javax.annotation.Nullable final String value) {
        this.name = value;
    }
    /**
     * Sets the network_count property value. The network_count property
     * @param value Value to set for the networkCount property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setNetworkCount(@javax.annotation.Nullable final Integer value) {
        this.networkCount = value;
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
     * Sets the notifications_url property value. The notifications_url property
     * @param value Value to set for the notificationsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setNotificationsUrl(@javax.annotation.Nullable final String value) {
        this.notificationsUrl = value;
    }
    /**
     * Sets the open_issues property value. The open_issues property
     * @param value Value to set for the openIssues property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setOpenIssues(@javax.annotation.Nullable final Integer value) {
        this.openIssues = value;
    }
    /**
     * Sets the open_issues_count property value. The open_issues_count property
     * @param value Value to set for the openIssuesCount property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setOpenIssuesCount(@javax.annotation.Nullable final Integer value) {
        this.openIssuesCount = value;
    }
    /**
     * Sets the organization property value. A GitHub user.
     * @param value Value to set for the organization property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setOrganization(@javax.annotation.Nullable final NullableSimpleUser value) {
        this.organization = value;
    }
    /**
     * Sets the owner property value. A GitHub user.
     * @param value Value to set for the owner property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setOwner(@javax.annotation.Nullable final SimpleUser value) {
        this.owner = value;
    }
    /**
     * Sets the permissions property value. The permissions property
     * @param value Value to set for the permissions property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setPermissions(@javax.annotation.Nullable final RepositoryPermissions value) {
        this.permissions = value;
    }
    /**
     * Sets the private property value. Whether the repository is private or public.
     * @param value Value to set for the private property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setPrivate(@javax.annotation.Nullable final Boolean value) {
        this.privateEscaped = value;
    }
    /**
     * Sets the pulls_url property value. The pulls_url property
     * @param value Value to set for the pullsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setPullsUrl(@javax.annotation.Nullable final String value) {
        this.pullsUrl = value;
    }
    /**
     * Sets the pushed_at property value. The pushed_at property
     * @param value Value to set for the pushedAt property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setPushedAt(@javax.annotation.Nullable final OffsetDateTime value) {
        this.pushedAt = value;
    }
    /**
     * Sets the releases_url property value. The releases_url property
     * @param value Value to set for the releasesUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setReleasesUrl(@javax.annotation.Nullable final String value) {
        this.releasesUrl = value;
    }
    /**
     * Sets the size property value. The size of the repository. Size is calculated hourly. When a repository is initially created, the size is 0.
     * @param value Value to set for the size property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setSize(@javax.annotation.Nullable final Integer value) {
        this.size = value;
    }
    /**
     * Sets the squash_merge_commit_message property value. The default value for a squash merge commit message:- `PR_BODY` - default to the pull request's body.- `COMMIT_MESSAGES` - default to the branch's commit messages.- `BLANK` - default to a blank commit message.
     * @param value Value to set for the squashMergeCommitMessage property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setSquashMergeCommitMessage(@javax.annotation.Nullable final RepositorySquashMergeCommitMessage value) {
        this.squashMergeCommitMessage = value;
    }
    /**
     * Sets the squash_merge_commit_title property value. The default value for a squash merge commit title:- `PR_TITLE` - default to the pull request's title.- `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
     * @param value Value to set for the squashMergeCommitTitle property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setSquashMergeCommitTitle(@javax.annotation.Nullable final RepositorySquashMergeCommitTitle value) {
        this.squashMergeCommitTitle = value;
    }
    /**
     * Sets the ssh_url property value. The ssh_url property
     * @param value Value to set for the sshUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setSshUrl(@javax.annotation.Nullable final String value) {
        this.sshUrl = value;
    }
    /**
     * Sets the stargazers_count property value. The stargazers_count property
     * @param value Value to set for the stargazersCount property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setStargazersCount(@javax.annotation.Nullable final Integer value) {
        this.stargazersCount = value;
    }
    /**
     * Sets the stargazers_url property value. The stargazers_url property
     * @param value Value to set for the stargazersUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setStargazersUrl(@javax.annotation.Nullable final String value) {
        this.stargazersUrl = value;
    }
    /**
     * Sets the starred_at property value. The starred_at property
     * @param value Value to set for the starredAt property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setStarredAt(@javax.annotation.Nullable final String value) {
        this.starredAt = value;
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
     * Sets the subscribers_count property value. The subscribers_count property
     * @param value Value to set for the subscribersCount property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setSubscribersCount(@javax.annotation.Nullable final Integer value) {
        this.subscribersCount = value;
    }
    /**
     * Sets the subscribers_url property value. The subscribers_url property
     * @param value Value to set for the subscribersUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setSubscribersUrl(@javax.annotation.Nullable final String value) {
        this.subscribersUrl = value;
    }
    /**
     * Sets the subscription_url property value. The subscription_url property
     * @param value Value to set for the subscriptionUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setSubscriptionUrl(@javax.annotation.Nullable final String value) {
        this.subscriptionUrl = value;
    }
    /**
     * Sets the svn_url property value. The svn_url property
     * @param value Value to set for the svnUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setSvnUrl(@javax.annotation.Nullable final String value) {
        this.svnUrl = value;
    }
    /**
     * Sets the tags_url property value. The tags_url property
     * @param value Value to set for the tagsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setTagsUrl(@javax.annotation.Nullable final String value) {
        this.tagsUrl = value;
    }
    /**
     * Sets the teams_url property value. The teams_url property
     * @param value Value to set for the teamsUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setTeamsUrl(@javax.annotation.Nullable final String value) {
        this.teamsUrl = value;
    }
    /**
     * Sets the temp_clone_token property value. The temp_clone_token property
     * @param value Value to set for the tempCloneToken property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setTempCloneToken(@javax.annotation.Nullable final String value) {
        this.tempCloneToken = value;
    }
    /**
     * Sets the template_repository property value. The template_repository property
     * @param value Value to set for the templateRepository property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setTemplateRepository(@javax.annotation.Nullable final RepositoryTemplateRepository value) {
        this.templateRepository = value;
    }
    /**
     * Sets the topics property value. The topics property
     * @param value Value to set for the topics property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setTopics(@javax.annotation.Nullable final java.util.List<String> value) {
        this.topics = value;
    }
    /**
     * Sets the trees_url property value. The trees_url property
     * @param value Value to set for the treesUrl property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setTreesUrl(@javax.annotation.Nullable final String value) {
        this.treesUrl = value;
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
     * Sets the use_squash_pr_title_as_default property value. Whether a squash merge commit can use the pull request title as default. **This property has been deprecated. Please use `squash_merge_commit_title` instead.
     * @param value Value to set for the useSquashPrTitleAsDefault property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setUseSquashPrTitleAsDefault(@javax.annotation.Nullable final Boolean value) {
        this.useSquashPrTitleAsDefault = value;
    }
    /**
     * Sets the visibility property value. The repository visibility: public, private, or internal.
     * @param value Value to set for the visibility property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setVisibility(@javax.annotation.Nullable final String value) {
        this.visibility = value;
    }
    /**
     * Sets the watchers property value. The watchers property
     * @param value Value to set for the watchers property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setWatchers(@javax.annotation.Nullable final Integer value) {
        this.watchers = value;
    }
    /**
     * Sets the watchers_count property value. The watchers_count property
     * @param value Value to set for the watchersCount property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setWatchersCount(@javax.annotation.Nullable final Integer value) {
        this.watchersCount = value;
    }
    /**
     * Sets the web_commit_signoff_required property value. Whether to require contributors to sign off on web-based commits
     * @param value Value to set for the webCommitSignoffRequired property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setWebCommitSignoffRequired(@javax.annotation.Nullable final Boolean value) {
        this.webCommitSignoffRequired = value;
    }
}