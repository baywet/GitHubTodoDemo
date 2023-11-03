package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
@jakarta.annotation.Generated("com.microsoft.kiota")
public class RepositoryTemplateRepository implements Parsable {
    /**
     * The allow_auto_merge property
     */
    private Boolean allowAutoMerge;
    /**
     * The allow_merge_commit property
     */
    private Boolean allowMergeCommit;
    /**
     * The allow_rebase_merge property
     */
    private Boolean allowRebaseMerge;
    /**
     * The allow_squash_merge property
     */
    private Boolean allowSquashMerge;
    /**
     * The allow_update_branch property
     */
    private Boolean allowUpdateBranch;
    /**
     * The archived property
     */
    private Boolean archived;
    /**
     * The archive_url property
     */
    private String archiveUrl;
    /**
     * The assignees_url property
     */
    private String assigneesUrl;
    /**
     * The blobs_url property
     */
    private String blobsUrl;
    /**
     * The branches_url property
     */
    private String branchesUrl;
    /**
     * The clone_url property
     */
    private String cloneUrl;
    /**
     * The collaborators_url property
     */
    private String collaboratorsUrl;
    /**
     * The comments_url property
     */
    private String commentsUrl;
    /**
     * The commits_url property
     */
    private String commitsUrl;
    /**
     * The compare_url property
     */
    private String compareUrl;
    /**
     * The contents_url property
     */
    private String contentsUrl;
    /**
     * The contributors_url property
     */
    private String contributorsUrl;
    /**
     * The created_at property
     */
    private String createdAt;
    /**
     * The default_branch property
     */
    private String defaultBranch;
    /**
     * The delete_branch_on_merge property
     */
    private Boolean deleteBranchOnMerge;
    /**
     * The deployments_url property
     */
    private String deploymentsUrl;
    /**
     * The description property
     */
    private String description;
    /**
     * The disabled property
     */
    private Boolean disabled;
    /**
     * The downloads_url property
     */
    private String downloadsUrl;
    /**
     * The events_url property
     */
    private String eventsUrl;
    /**
     * The fork property
     */
    private Boolean fork;
    /**
     * The forks_count property
     */
    private Integer forksCount;
    /**
     * The forks_url property
     */
    private String forksUrl;
    /**
     * The full_name property
     */
    private String fullName;
    /**
     * The git_commits_url property
     */
    private String gitCommitsUrl;
    /**
     * The git_refs_url property
     */
    private String gitRefsUrl;
    /**
     * The git_tags_url property
     */
    private String gitTagsUrl;
    /**
     * The git_url property
     */
    private String gitUrl;
    /**
     * The has_downloads property
     */
    private Boolean hasDownloads;
    /**
     * The has_issues property
     */
    private Boolean hasIssues;
    /**
     * The has_pages property
     */
    private Boolean hasPages;
    /**
     * The has_projects property
     */
    private Boolean hasProjects;
    /**
     * The has_wiki property
     */
    private Boolean hasWiki;
    /**
     * The homepage property
     */
    private String homepage;
    /**
     * The hooks_url property
     */
    private String hooksUrl;
    /**
     * The html_url property
     */
    private String htmlUrl;
    /**
     * The id property
     */
    private Integer id;
    /**
     * The issue_comment_url property
     */
    private String issueCommentUrl;
    /**
     * The issue_events_url property
     */
    private String issueEventsUrl;
    /**
     * The issues_url property
     */
    private String issuesUrl;
    /**
     * The is_template property
     */
    private Boolean isTemplate;
    /**
     * The keys_url property
     */
    private String keysUrl;
    /**
     * The labels_url property
     */
    private String labelsUrl;
    /**
     * The language property
     */
    private String language;
    /**
     * The languages_url property
     */
    private String languagesUrl;
    /**
     * The default value for a merge commit message.- `PR_TITLE` - default to the pull request's title.- `PR_BODY` - default to the pull request's body.- `BLANK` - default to a blank commit message.
     */
    private RepositoryTemplateRepositoryMergeCommitMessage mergeCommitMessage;
    /**
     * The default value for a merge commit title.- `PR_TITLE` - default to the pull request's title.- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
     */
    private RepositoryTemplateRepositoryMergeCommitTitle mergeCommitTitle;
    /**
     * The merges_url property
     */
    private String mergesUrl;
    /**
     * The milestones_url property
     */
    private String milestonesUrl;
    /**
     * The mirror_url property
     */
    private String mirrorUrl;
    /**
     * The name property
     */
    private String name;
    /**
     * The network_count property
     */
    private Integer networkCount;
    /**
     * The node_id property
     */
    private String nodeId;
    /**
     * The notifications_url property
     */
    private String notificationsUrl;
    /**
     * The open_issues_count property
     */
    private Integer openIssuesCount;
    /**
     * The owner property
     */
    private RepositoryTemplateRepositoryOwner owner;
    /**
     * The permissions property
     */
    private RepositoryTemplateRepositoryPermissions permissions;
    /**
     * The private property
     */
    private Boolean privateEscaped;
    /**
     * The pulls_url property
     */
    private String pullsUrl;
    /**
     * The pushed_at property
     */
    private String pushedAt;
    /**
     * The releases_url property
     */
    private String releasesUrl;
    /**
     * The size property
     */
    private Integer size;
    /**
     * The default value for a squash merge commit message:- `PR_BODY` - default to the pull request's body.- `COMMIT_MESSAGES` - default to the branch's commit messages.- `BLANK` - default to a blank commit message.
     */
    private RepositoryTemplateRepositorySquashMergeCommitMessage squashMergeCommitMessage;
    /**
     * The default value for a squash merge commit title:- `PR_TITLE` - default to the pull request's title.- `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
     */
    private RepositoryTemplateRepositorySquashMergeCommitTitle squashMergeCommitTitle;
    /**
     * The ssh_url property
     */
    private String sshUrl;
    /**
     * The stargazers_count property
     */
    private Integer stargazersCount;
    /**
     * The stargazers_url property
     */
    private String stargazersUrl;
    /**
     * The statuses_url property
     */
    private String statusesUrl;
    /**
     * The subscribers_count property
     */
    private Integer subscribersCount;
    /**
     * The subscribers_url property
     */
    private String subscribersUrl;
    /**
     * The subscription_url property
     */
    private String subscriptionUrl;
    /**
     * The svn_url property
     */
    private String svnUrl;
    /**
     * The tags_url property
     */
    private String tagsUrl;
    /**
     * The teams_url property
     */
    private String teamsUrl;
    /**
     * The temp_clone_token property
     */
    private String tempCloneToken;
    /**
     * The topics property
     */
    private java.util.List<String> topics;
    /**
     * The trees_url property
     */
    private String treesUrl;
    /**
     * The updated_at property
     */
    private String updatedAt;
    /**
     * The url property
     */
    private String url;
    /**
     * The use_squash_pr_title_as_default property
     */
    private Boolean useSquashPrTitleAsDefault;
    /**
     * The visibility property
     */
    private String visibility;
    /**
     * The watchers_count property
     */
    private Integer watchersCount;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a RepositoryTemplateRepository
     */
    @jakarta.annotation.Nonnull
    public static RepositoryTemplateRepository createFromDiscriminatorValue(@jakarta.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new RepositoryTemplateRepository();
    }
    /**
     * Gets the allow_auto_merge property value. The allow_auto_merge property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getAllowAutoMerge() {
        return this.allowAutoMerge;
    }
    /**
     * Gets the allow_merge_commit property value. The allow_merge_commit property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getAllowMergeCommit() {
        return this.allowMergeCommit;
    }
    /**
     * Gets the allow_rebase_merge property value. The allow_rebase_merge property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getAllowRebaseMerge() {
        return this.allowRebaseMerge;
    }
    /**
     * Gets the allow_squash_merge property value. The allow_squash_merge property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getAllowSquashMerge() {
        return this.allowSquashMerge;
    }
    /**
     * Gets the allow_update_branch property value. The allow_update_branch property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getAllowUpdateBranch() {
        return this.allowUpdateBranch;
    }
    /**
     * Gets the archived property value. The archived property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getArchived() {
        return this.archived;
    }
    /**
     * Gets the archive_url property value. The archive_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getArchiveUrl() {
        return this.archiveUrl;
    }
    /**
     * Gets the assignees_url property value. The assignees_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getAssigneesUrl() {
        return this.assigneesUrl;
    }
    /**
     * Gets the blobs_url property value. The blobs_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getBlobsUrl() {
        return this.blobsUrl;
    }
    /**
     * Gets the branches_url property value. The branches_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getBranchesUrl() {
        return this.branchesUrl;
    }
    /**
     * Gets the clone_url property value. The clone_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getCloneUrl() {
        return this.cloneUrl;
    }
    /**
     * Gets the collaborators_url property value. The collaborators_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getCollaboratorsUrl() {
        return this.collaboratorsUrl;
    }
    /**
     * Gets the comments_url property value. The comments_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getCommentsUrl() {
        return this.commentsUrl;
    }
    /**
     * Gets the commits_url property value. The commits_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getCommitsUrl() {
        return this.commitsUrl;
    }
    /**
     * Gets the compare_url property value. The compare_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getCompareUrl() {
        return this.compareUrl;
    }
    /**
     * Gets the contents_url property value. The contents_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getContentsUrl() {
        return this.contentsUrl;
    }
    /**
     * Gets the contributors_url property value. The contributors_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getContributorsUrl() {
        return this.contributorsUrl;
    }
    /**
     * Gets the created_at property value. The created_at property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getCreatedAt() {
        return this.createdAt;
    }
    /**
     * Gets the default_branch property value. The default_branch property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getDefaultBranch() {
        return this.defaultBranch;
    }
    /**
     * Gets the delete_branch_on_merge property value. The delete_branch_on_merge property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getDeleteBranchOnMerge() {
        return this.deleteBranchOnMerge;
    }
    /**
     * Gets the deployments_url property value. The deployments_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getDeploymentsUrl() {
        return this.deploymentsUrl;
    }
    /**
     * Gets the description property value. The description property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getDescription() {
        return this.description;
    }
    /**
     * Gets the disabled property value. The disabled property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getDisabled() {
        return this.disabled;
    }
    /**
     * Gets the downloads_url property value. The downloads_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getDownloadsUrl() {
        return this.downloadsUrl;
    }
    /**
     * Gets the events_url property value. The events_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getEventsUrl() {
        return this.eventsUrl;
    }
    /**
     * The deserialization information for the current model
     * @return a Map<String, java.util.function.Consumer<ParseNode>>
     */
    @jakarta.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(87);
        deserializerMap.put("allow_auto_merge", (n) -> { this.setAllowAutoMerge(n.getBooleanValue()); });
        deserializerMap.put("allow_merge_commit", (n) -> { this.setAllowMergeCommit(n.getBooleanValue()); });
        deserializerMap.put("allow_rebase_merge", (n) -> { this.setAllowRebaseMerge(n.getBooleanValue()); });
        deserializerMap.put("allow_squash_merge", (n) -> { this.setAllowSquashMerge(n.getBooleanValue()); });
        deserializerMap.put("allow_update_branch", (n) -> { this.setAllowUpdateBranch(n.getBooleanValue()); });
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
        deserializerMap.put("created_at", (n) -> { this.setCreatedAt(n.getStringValue()); });
        deserializerMap.put("default_branch", (n) -> { this.setDefaultBranch(n.getStringValue()); });
        deserializerMap.put("delete_branch_on_merge", (n) -> { this.setDeleteBranchOnMerge(n.getBooleanValue()); });
        deserializerMap.put("deployments_url", (n) -> { this.setDeploymentsUrl(n.getStringValue()); });
        deserializerMap.put("description", (n) -> { this.setDescription(n.getStringValue()); });
        deserializerMap.put("disabled", (n) -> { this.setDisabled(n.getBooleanValue()); });
        deserializerMap.put("downloads_url", (n) -> { this.setDownloadsUrl(n.getStringValue()); });
        deserializerMap.put("events_url", (n) -> { this.setEventsUrl(n.getStringValue()); });
        deserializerMap.put("fork", (n) -> { this.setFork(n.getBooleanValue()); });
        deserializerMap.put("forks_count", (n) -> { this.setForksCount(n.getIntegerValue()); });
        deserializerMap.put("forks_url", (n) -> { this.setForksUrl(n.getStringValue()); });
        deserializerMap.put("full_name", (n) -> { this.setFullName(n.getStringValue()); });
        deserializerMap.put("git_commits_url", (n) -> { this.setGitCommitsUrl(n.getStringValue()); });
        deserializerMap.put("git_refs_url", (n) -> { this.setGitRefsUrl(n.getStringValue()); });
        deserializerMap.put("git_tags_url", (n) -> { this.setGitTagsUrl(n.getStringValue()); });
        deserializerMap.put("git_url", (n) -> { this.setGitUrl(n.getStringValue()); });
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
        deserializerMap.put("merge_commit_message", (n) -> { this.setMergeCommitMessage(n.getEnumValue(RepositoryTemplateRepositoryMergeCommitMessage.class)); });
        deserializerMap.put("merge_commit_title", (n) -> { this.setMergeCommitTitle(n.getEnumValue(RepositoryTemplateRepositoryMergeCommitTitle.class)); });
        deserializerMap.put("merges_url", (n) -> { this.setMergesUrl(n.getStringValue()); });
        deserializerMap.put("milestones_url", (n) -> { this.setMilestonesUrl(n.getStringValue()); });
        deserializerMap.put("mirror_url", (n) -> { this.setMirrorUrl(n.getStringValue()); });
        deserializerMap.put("name", (n) -> { this.setName(n.getStringValue()); });
        deserializerMap.put("network_count", (n) -> { this.setNetworkCount(n.getIntegerValue()); });
        deserializerMap.put("node_id", (n) -> { this.setNodeId(n.getStringValue()); });
        deserializerMap.put("notifications_url", (n) -> { this.setNotificationsUrl(n.getStringValue()); });
        deserializerMap.put("open_issues_count", (n) -> { this.setOpenIssuesCount(n.getIntegerValue()); });
        deserializerMap.put("owner", (n) -> { this.setOwner(n.getObjectValue(RepositoryTemplateRepositoryOwner::createFromDiscriminatorValue)); });
        deserializerMap.put("permissions", (n) -> { this.setPermissions(n.getObjectValue(RepositoryTemplateRepositoryPermissions::createFromDiscriminatorValue)); });
        deserializerMap.put("private", (n) -> { this.setPrivate(n.getBooleanValue()); });
        deserializerMap.put("pulls_url", (n) -> { this.setPullsUrl(n.getStringValue()); });
        deserializerMap.put("pushed_at", (n) -> { this.setPushedAt(n.getStringValue()); });
        deserializerMap.put("releases_url", (n) -> { this.setReleasesUrl(n.getStringValue()); });
        deserializerMap.put("size", (n) -> { this.setSize(n.getIntegerValue()); });
        deserializerMap.put("squash_merge_commit_message", (n) -> { this.setSquashMergeCommitMessage(n.getEnumValue(RepositoryTemplateRepositorySquashMergeCommitMessage.class)); });
        deserializerMap.put("squash_merge_commit_title", (n) -> { this.setSquashMergeCommitTitle(n.getEnumValue(RepositoryTemplateRepositorySquashMergeCommitTitle.class)); });
        deserializerMap.put("ssh_url", (n) -> { this.setSshUrl(n.getStringValue()); });
        deserializerMap.put("stargazers_count", (n) -> { this.setStargazersCount(n.getIntegerValue()); });
        deserializerMap.put("stargazers_url", (n) -> { this.setStargazersUrl(n.getStringValue()); });
        deserializerMap.put("statuses_url", (n) -> { this.setStatusesUrl(n.getStringValue()); });
        deserializerMap.put("subscribers_count", (n) -> { this.setSubscribersCount(n.getIntegerValue()); });
        deserializerMap.put("subscribers_url", (n) -> { this.setSubscribersUrl(n.getStringValue()); });
        deserializerMap.put("subscription_url", (n) -> { this.setSubscriptionUrl(n.getStringValue()); });
        deserializerMap.put("svn_url", (n) -> { this.setSvnUrl(n.getStringValue()); });
        deserializerMap.put("tags_url", (n) -> { this.setTagsUrl(n.getStringValue()); });
        deserializerMap.put("teams_url", (n) -> { this.setTeamsUrl(n.getStringValue()); });
        deserializerMap.put("temp_clone_token", (n) -> { this.setTempCloneToken(n.getStringValue()); });
        deserializerMap.put("topics", (n) -> { this.setTopics(n.getCollectionOfPrimitiveValues(String.class)); });
        deserializerMap.put("trees_url", (n) -> { this.setTreesUrl(n.getStringValue()); });
        deserializerMap.put("updated_at", (n) -> { this.setUpdatedAt(n.getStringValue()); });
        deserializerMap.put("url", (n) -> { this.setUrl(n.getStringValue()); });
        deserializerMap.put("use_squash_pr_title_as_default", (n) -> { this.setUseSquashPrTitleAsDefault(n.getBooleanValue()); });
        deserializerMap.put("visibility", (n) -> { this.setVisibility(n.getStringValue()); });
        deserializerMap.put("watchers_count", (n) -> { this.setWatchersCount(n.getIntegerValue()); });
        return deserializerMap;
    }
    /**
     * Gets the fork property value. The fork property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getFork() {
        return this.fork;
    }
    /**
     * Gets the forks_count property value. The forks_count property
     * @return a Integer
     */
    @jakarta.annotation.Nullable
    public Integer getForksCount() {
        return this.forksCount;
    }
    /**
     * Gets the forks_url property value. The forks_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getForksUrl() {
        return this.forksUrl;
    }
    /**
     * Gets the full_name property value. The full_name property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getFullName() {
        return this.fullName;
    }
    /**
     * Gets the git_commits_url property value. The git_commits_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getGitCommitsUrl() {
        return this.gitCommitsUrl;
    }
    /**
     * Gets the git_refs_url property value. The git_refs_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getGitRefsUrl() {
        return this.gitRefsUrl;
    }
    /**
     * Gets the git_tags_url property value. The git_tags_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getGitTagsUrl() {
        return this.gitTagsUrl;
    }
    /**
     * Gets the git_url property value. The git_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getGitUrl() {
        return this.gitUrl;
    }
    /**
     * Gets the has_downloads property value. The has_downloads property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getHasDownloads() {
        return this.hasDownloads;
    }
    /**
     * Gets the has_issues property value. The has_issues property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getHasIssues() {
        return this.hasIssues;
    }
    /**
     * Gets the has_pages property value. The has_pages property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getHasPages() {
        return this.hasPages;
    }
    /**
     * Gets the has_projects property value. The has_projects property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getHasProjects() {
        return this.hasProjects;
    }
    /**
     * Gets the has_wiki property value. The has_wiki property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getHasWiki() {
        return this.hasWiki;
    }
    /**
     * Gets the homepage property value. The homepage property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getHomepage() {
        return this.homepage;
    }
    /**
     * Gets the hooks_url property value. The hooks_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getHooksUrl() {
        return this.hooksUrl;
    }
    /**
     * Gets the html_url property value. The html_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getHtmlUrl() {
        return this.htmlUrl;
    }
    /**
     * Gets the id property value. The id property
     * @return a Integer
     */
    @jakarta.annotation.Nullable
    public Integer getId() {
        return this.id;
    }
    /**
     * Gets the issue_comment_url property value. The issue_comment_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getIssueCommentUrl() {
        return this.issueCommentUrl;
    }
    /**
     * Gets the issue_events_url property value. The issue_events_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getIssueEventsUrl() {
        return this.issueEventsUrl;
    }
    /**
     * Gets the issues_url property value. The issues_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getIssuesUrl() {
        return this.issuesUrl;
    }
    /**
     * Gets the is_template property value. The is_template property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getIsTemplate() {
        return this.isTemplate;
    }
    /**
     * Gets the keys_url property value. The keys_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getKeysUrl() {
        return this.keysUrl;
    }
    /**
     * Gets the labels_url property value. The labels_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getLabelsUrl() {
        return this.labelsUrl;
    }
    /**
     * Gets the language property value. The language property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getLanguage() {
        return this.language;
    }
    /**
     * Gets the languages_url property value. The languages_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getLanguagesUrl() {
        return this.languagesUrl;
    }
    /**
     * Gets the merge_commit_message property value. The default value for a merge commit message.- `PR_TITLE` - default to the pull request's title.- `PR_BODY` - default to the pull request's body.- `BLANK` - default to a blank commit message.
     * @return a RepositoryTemplateRepositoryMergeCommitMessage
     */
    @jakarta.annotation.Nullable
    public RepositoryTemplateRepositoryMergeCommitMessage getMergeCommitMessage() {
        return this.mergeCommitMessage;
    }
    /**
     * Gets the merge_commit_title property value. The default value for a merge commit title.- `PR_TITLE` - default to the pull request's title.- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
     * @return a RepositoryTemplateRepositoryMergeCommitTitle
     */
    @jakarta.annotation.Nullable
    public RepositoryTemplateRepositoryMergeCommitTitle getMergeCommitTitle() {
        return this.mergeCommitTitle;
    }
    /**
     * Gets the merges_url property value. The merges_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getMergesUrl() {
        return this.mergesUrl;
    }
    /**
     * Gets the milestones_url property value. The milestones_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getMilestonesUrl() {
        return this.milestonesUrl;
    }
    /**
     * Gets the mirror_url property value. The mirror_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getMirrorUrl() {
        return this.mirrorUrl;
    }
    /**
     * Gets the name property value. The name property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getName() {
        return this.name;
    }
    /**
     * Gets the network_count property value. The network_count property
     * @return a Integer
     */
    @jakarta.annotation.Nullable
    public Integer getNetworkCount() {
        return this.networkCount;
    }
    /**
     * Gets the node_id property value. The node_id property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getNodeId() {
        return this.nodeId;
    }
    /**
     * Gets the notifications_url property value. The notifications_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getNotificationsUrl() {
        return this.notificationsUrl;
    }
    /**
     * Gets the open_issues_count property value. The open_issues_count property
     * @return a Integer
     */
    @jakarta.annotation.Nullable
    public Integer getOpenIssuesCount() {
        return this.openIssuesCount;
    }
    /**
     * Gets the owner property value. The owner property
     * @return a RepositoryTemplateRepositoryOwner
     */
    @jakarta.annotation.Nullable
    public RepositoryTemplateRepositoryOwner getOwner() {
        return this.owner;
    }
    /**
     * Gets the permissions property value. The permissions property
     * @return a RepositoryTemplateRepositoryPermissions
     */
    @jakarta.annotation.Nullable
    public RepositoryTemplateRepositoryPermissions getPermissions() {
        return this.permissions;
    }
    /**
     * Gets the private property value. The private property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getPrivate() {
        return this.privateEscaped;
    }
    /**
     * Gets the pulls_url property value. The pulls_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getPullsUrl() {
        return this.pullsUrl;
    }
    /**
     * Gets the pushed_at property value. The pushed_at property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getPushedAt() {
        return this.pushedAt;
    }
    /**
     * Gets the releases_url property value. The releases_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getReleasesUrl() {
        return this.releasesUrl;
    }
    /**
     * Gets the size property value. The size property
     * @return a Integer
     */
    @jakarta.annotation.Nullable
    public Integer getSize() {
        return this.size;
    }
    /**
     * Gets the squash_merge_commit_message property value. The default value for a squash merge commit message:- `PR_BODY` - default to the pull request's body.- `COMMIT_MESSAGES` - default to the branch's commit messages.- `BLANK` - default to a blank commit message.
     * @return a RepositoryTemplateRepositorySquashMergeCommitMessage
     */
    @jakarta.annotation.Nullable
    public RepositoryTemplateRepositorySquashMergeCommitMessage getSquashMergeCommitMessage() {
        return this.squashMergeCommitMessage;
    }
    /**
     * Gets the squash_merge_commit_title property value. The default value for a squash merge commit title:- `PR_TITLE` - default to the pull request's title.- `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
     * @return a RepositoryTemplateRepositorySquashMergeCommitTitle
     */
    @jakarta.annotation.Nullable
    public RepositoryTemplateRepositorySquashMergeCommitTitle getSquashMergeCommitTitle() {
        return this.squashMergeCommitTitle;
    }
    /**
     * Gets the ssh_url property value. The ssh_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getSshUrl() {
        return this.sshUrl;
    }
    /**
     * Gets the stargazers_count property value. The stargazers_count property
     * @return a Integer
     */
    @jakarta.annotation.Nullable
    public Integer getStargazersCount() {
        return this.stargazersCount;
    }
    /**
     * Gets the stargazers_url property value. The stargazers_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getStargazersUrl() {
        return this.stargazersUrl;
    }
    /**
     * Gets the statuses_url property value. The statuses_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getStatusesUrl() {
        return this.statusesUrl;
    }
    /**
     * Gets the subscribers_count property value. The subscribers_count property
     * @return a Integer
     */
    @jakarta.annotation.Nullable
    public Integer getSubscribersCount() {
        return this.subscribersCount;
    }
    /**
     * Gets the subscribers_url property value. The subscribers_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getSubscribersUrl() {
        return this.subscribersUrl;
    }
    /**
     * Gets the subscription_url property value. The subscription_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getSubscriptionUrl() {
        return this.subscriptionUrl;
    }
    /**
     * Gets the svn_url property value. The svn_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getSvnUrl() {
        return this.svnUrl;
    }
    /**
     * Gets the tags_url property value. The tags_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getTagsUrl() {
        return this.tagsUrl;
    }
    /**
     * Gets the teams_url property value. The teams_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getTeamsUrl() {
        return this.teamsUrl;
    }
    /**
     * Gets the temp_clone_token property value. The temp_clone_token property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getTempCloneToken() {
        return this.tempCloneToken;
    }
    /**
     * Gets the topics property value. The topics property
     * @return a java.util.List<String>
     */
    @jakarta.annotation.Nullable
    public java.util.List<String> getTopics() {
        return this.topics;
    }
    /**
     * Gets the trees_url property value. The trees_url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getTreesUrl() {
        return this.treesUrl;
    }
    /**
     * Gets the updated_at property value. The updated_at property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getUpdatedAt() {
        return this.updatedAt;
    }
    /**
     * Gets the url property value. The url property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getUrl() {
        return this.url;
    }
    /**
     * Gets the use_squash_pr_title_as_default property value. The use_squash_pr_title_as_default property
     * @return a Boolean
     */
    @jakarta.annotation.Nullable
    public Boolean getUseSquashPrTitleAsDefault() {
        return this.useSquashPrTitleAsDefault;
    }
    /**
     * Gets the visibility property value. The visibility property
     * @return a String
     */
    @jakarta.annotation.Nullable
    public String getVisibility() {
        return this.visibility;
    }
    /**
     * Gets the watchers_count property value. The watchers_count property
     * @return a Integer
     */
    @jakarta.annotation.Nullable
    public Integer getWatchersCount() {
        return this.watchersCount;
    }
    /**
     * Serializes information the current object
     * @param writer Serialization writer to use to serialize this model
     */
    public void serialize(@jakarta.annotation.Nonnull final SerializationWriter writer) {
        Objects.requireNonNull(writer);
        writer.writeBooleanValue("allow_auto_merge", this.getAllowAutoMerge());
        writer.writeBooleanValue("allow_merge_commit", this.getAllowMergeCommit());
        writer.writeBooleanValue("allow_rebase_merge", this.getAllowRebaseMerge());
        writer.writeBooleanValue("allow_squash_merge", this.getAllowSquashMerge());
        writer.writeBooleanValue("allow_update_branch", this.getAllowUpdateBranch());
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
        writer.writeStringValue("created_at", this.getCreatedAt());
        writer.writeStringValue("default_branch", this.getDefaultBranch());
        writer.writeBooleanValue("delete_branch_on_merge", this.getDeleteBranchOnMerge());
        writer.writeStringValue("deployments_url", this.getDeploymentsUrl());
        writer.writeStringValue("description", this.getDescription());
        writer.writeBooleanValue("disabled", this.getDisabled());
        writer.writeStringValue("downloads_url", this.getDownloadsUrl());
        writer.writeStringValue("events_url", this.getEventsUrl());
        writer.writeBooleanValue("fork", this.getFork());
        writer.writeIntegerValue("forks_count", this.getForksCount());
        writer.writeStringValue("forks_url", this.getForksUrl());
        writer.writeStringValue("full_name", this.getFullName());
        writer.writeStringValue("git_commits_url", this.getGitCommitsUrl());
        writer.writeStringValue("git_refs_url", this.getGitRefsUrl());
        writer.writeStringValue("git_tags_url", this.getGitTagsUrl());
        writer.writeStringValue("git_url", this.getGitUrl());
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
        writer.writeEnumValue("merge_commit_message", this.getMergeCommitMessage());
        writer.writeEnumValue("merge_commit_title", this.getMergeCommitTitle());
        writer.writeStringValue("merges_url", this.getMergesUrl());
        writer.writeStringValue("milestones_url", this.getMilestonesUrl());
        writer.writeStringValue("mirror_url", this.getMirrorUrl());
        writer.writeStringValue("name", this.getName());
        writer.writeIntegerValue("network_count", this.getNetworkCount());
        writer.writeStringValue("node_id", this.getNodeId());
        writer.writeStringValue("notifications_url", this.getNotificationsUrl());
        writer.writeIntegerValue("open_issues_count", this.getOpenIssuesCount());
        writer.writeObjectValue("owner", this.getOwner());
        writer.writeObjectValue("permissions", this.getPermissions());
        writer.writeBooleanValue("private", this.getPrivate());
        writer.writeStringValue("pulls_url", this.getPullsUrl());
        writer.writeStringValue("pushed_at", this.getPushedAt());
        writer.writeStringValue("releases_url", this.getReleasesUrl());
        writer.writeIntegerValue("size", this.getSize());
        writer.writeEnumValue("squash_merge_commit_message", this.getSquashMergeCommitMessage());
        writer.writeEnumValue("squash_merge_commit_title", this.getSquashMergeCommitTitle());
        writer.writeStringValue("ssh_url", this.getSshUrl());
        writer.writeIntegerValue("stargazers_count", this.getStargazersCount());
        writer.writeStringValue("stargazers_url", this.getStargazersUrl());
        writer.writeStringValue("statuses_url", this.getStatusesUrl());
        writer.writeIntegerValue("subscribers_count", this.getSubscribersCount());
        writer.writeStringValue("subscribers_url", this.getSubscribersUrl());
        writer.writeStringValue("subscription_url", this.getSubscriptionUrl());
        writer.writeStringValue("svn_url", this.getSvnUrl());
        writer.writeStringValue("tags_url", this.getTagsUrl());
        writer.writeStringValue("teams_url", this.getTeamsUrl());
        writer.writeStringValue("temp_clone_token", this.getTempCloneToken());
        writer.writeCollectionOfPrimitiveValues("topics", this.getTopics());
        writer.writeStringValue("trees_url", this.getTreesUrl());
        writer.writeStringValue("updated_at", this.getUpdatedAt());
        writer.writeStringValue("url", this.getUrl());
        writer.writeBooleanValue("use_squash_pr_title_as_default", this.getUseSquashPrTitleAsDefault());
        writer.writeStringValue("visibility", this.getVisibility());
        writer.writeIntegerValue("watchers_count", this.getWatchersCount());
    }
    /**
     * Sets the allow_auto_merge property value. The allow_auto_merge property
     * @param value Value to set for the allow_auto_merge property.
     */
    public void setAllowAutoMerge(@jakarta.annotation.Nullable final Boolean value) {
        this.allowAutoMerge = value;
    }
    /**
     * Sets the allow_merge_commit property value. The allow_merge_commit property
     * @param value Value to set for the allow_merge_commit property.
     */
    public void setAllowMergeCommit(@jakarta.annotation.Nullable final Boolean value) {
        this.allowMergeCommit = value;
    }
    /**
     * Sets the allow_rebase_merge property value. The allow_rebase_merge property
     * @param value Value to set for the allow_rebase_merge property.
     */
    public void setAllowRebaseMerge(@jakarta.annotation.Nullable final Boolean value) {
        this.allowRebaseMerge = value;
    }
    /**
     * Sets the allow_squash_merge property value. The allow_squash_merge property
     * @param value Value to set for the allow_squash_merge property.
     */
    public void setAllowSquashMerge(@jakarta.annotation.Nullable final Boolean value) {
        this.allowSquashMerge = value;
    }
    /**
     * Sets the allow_update_branch property value. The allow_update_branch property
     * @param value Value to set for the allow_update_branch property.
     */
    public void setAllowUpdateBranch(@jakarta.annotation.Nullable final Boolean value) {
        this.allowUpdateBranch = value;
    }
    /**
     * Sets the archived property value. The archived property
     * @param value Value to set for the archived property.
     */
    public void setArchived(@jakarta.annotation.Nullable final Boolean value) {
        this.archived = value;
    }
    /**
     * Sets the archive_url property value. The archive_url property
     * @param value Value to set for the archive_url property.
     */
    public void setArchiveUrl(@jakarta.annotation.Nullable final String value) {
        this.archiveUrl = value;
    }
    /**
     * Sets the assignees_url property value. The assignees_url property
     * @param value Value to set for the assignees_url property.
     */
    public void setAssigneesUrl(@jakarta.annotation.Nullable final String value) {
        this.assigneesUrl = value;
    }
    /**
     * Sets the blobs_url property value. The blobs_url property
     * @param value Value to set for the blobs_url property.
     */
    public void setBlobsUrl(@jakarta.annotation.Nullable final String value) {
        this.blobsUrl = value;
    }
    /**
     * Sets the branches_url property value. The branches_url property
     * @param value Value to set for the branches_url property.
     */
    public void setBranchesUrl(@jakarta.annotation.Nullable final String value) {
        this.branchesUrl = value;
    }
    /**
     * Sets the clone_url property value. The clone_url property
     * @param value Value to set for the clone_url property.
     */
    public void setCloneUrl(@jakarta.annotation.Nullable final String value) {
        this.cloneUrl = value;
    }
    /**
     * Sets the collaborators_url property value. The collaborators_url property
     * @param value Value to set for the collaborators_url property.
     */
    public void setCollaboratorsUrl(@jakarta.annotation.Nullable final String value) {
        this.collaboratorsUrl = value;
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
     * Sets the compare_url property value. The compare_url property
     * @param value Value to set for the compare_url property.
     */
    public void setCompareUrl(@jakarta.annotation.Nullable final String value) {
        this.compareUrl = value;
    }
    /**
     * Sets the contents_url property value. The contents_url property
     * @param value Value to set for the contents_url property.
     */
    public void setContentsUrl(@jakarta.annotation.Nullable final String value) {
        this.contentsUrl = value;
    }
    /**
     * Sets the contributors_url property value. The contributors_url property
     * @param value Value to set for the contributors_url property.
     */
    public void setContributorsUrl(@jakarta.annotation.Nullable final String value) {
        this.contributorsUrl = value;
    }
    /**
     * Sets the created_at property value. The created_at property
     * @param value Value to set for the created_at property.
     */
    public void setCreatedAt(@jakarta.annotation.Nullable final String value) {
        this.createdAt = value;
    }
    /**
     * Sets the default_branch property value. The default_branch property
     * @param value Value to set for the default_branch property.
     */
    public void setDefaultBranch(@jakarta.annotation.Nullable final String value) {
        this.defaultBranch = value;
    }
    /**
     * Sets the delete_branch_on_merge property value. The delete_branch_on_merge property
     * @param value Value to set for the delete_branch_on_merge property.
     */
    public void setDeleteBranchOnMerge(@jakarta.annotation.Nullable final Boolean value) {
        this.deleteBranchOnMerge = value;
    }
    /**
     * Sets the deployments_url property value. The deployments_url property
     * @param value Value to set for the deployments_url property.
     */
    public void setDeploymentsUrl(@jakarta.annotation.Nullable final String value) {
        this.deploymentsUrl = value;
    }
    /**
     * Sets the description property value. The description property
     * @param value Value to set for the description property.
     */
    public void setDescription(@jakarta.annotation.Nullable final String value) {
        this.description = value;
    }
    /**
     * Sets the disabled property value. The disabled property
     * @param value Value to set for the disabled property.
     */
    public void setDisabled(@jakarta.annotation.Nullable final Boolean value) {
        this.disabled = value;
    }
    /**
     * Sets the downloads_url property value. The downloads_url property
     * @param value Value to set for the downloads_url property.
     */
    public void setDownloadsUrl(@jakarta.annotation.Nullable final String value) {
        this.downloadsUrl = value;
    }
    /**
     * Sets the events_url property value. The events_url property
     * @param value Value to set for the events_url property.
     */
    public void setEventsUrl(@jakarta.annotation.Nullable final String value) {
        this.eventsUrl = value;
    }
    /**
     * Sets the fork property value. The fork property
     * @param value Value to set for the fork property.
     */
    public void setFork(@jakarta.annotation.Nullable final Boolean value) {
        this.fork = value;
    }
    /**
     * Sets the forks_count property value. The forks_count property
     * @param value Value to set for the forks_count property.
     */
    public void setForksCount(@jakarta.annotation.Nullable final Integer value) {
        this.forksCount = value;
    }
    /**
     * Sets the forks_url property value. The forks_url property
     * @param value Value to set for the forks_url property.
     */
    public void setForksUrl(@jakarta.annotation.Nullable final String value) {
        this.forksUrl = value;
    }
    /**
     * Sets the full_name property value. The full_name property
     * @param value Value to set for the full_name property.
     */
    public void setFullName(@jakarta.annotation.Nullable final String value) {
        this.fullName = value;
    }
    /**
     * Sets the git_commits_url property value. The git_commits_url property
     * @param value Value to set for the git_commits_url property.
     */
    public void setGitCommitsUrl(@jakarta.annotation.Nullable final String value) {
        this.gitCommitsUrl = value;
    }
    /**
     * Sets the git_refs_url property value. The git_refs_url property
     * @param value Value to set for the git_refs_url property.
     */
    public void setGitRefsUrl(@jakarta.annotation.Nullable final String value) {
        this.gitRefsUrl = value;
    }
    /**
     * Sets the git_tags_url property value. The git_tags_url property
     * @param value Value to set for the git_tags_url property.
     */
    public void setGitTagsUrl(@jakarta.annotation.Nullable final String value) {
        this.gitTagsUrl = value;
    }
    /**
     * Sets the git_url property value. The git_url property
     * @param value Value to set for the git_url property.
     */
    public void setGitUrl(@jakarta.annotation.Nullable final String value) {
        this.gitUrl = value;
    }
    /**
     * Sets the has_downloads property value. The has_downloads property
     * @param value Value to set for the has_downloads property.
     */
    public void setHasDownloads(@jakarta.annotation.Nullable final Boolean value) {
        this.hasDownloads = value;
    }
    /**
     * Sets the has_issues property value. The has_issues property
     * @param value Value to set for the has_issues property.
     */
    public void setHasIssues(@jakarta.annotation.Nullable final Boolean value) {
        this.hasIssues = value;
    }
    /**
     * Sets the has_pages property value. The has_pages property
     * @param value Value to set for the has_pages property.
     */
    public void setHasPages(@jakarta.annotation.Nullable final Boolean value) {
        this.hasPages = value;
    }
    /**
     * Sets the has_projects property value. The has_projects property
     * @param value Value to set for the has_projects property.
     */
    public void setHasProjects(@jakarta.annotation.Nullable final Boolean value) {
        this.hasProjects = value;
    }
    /**
     * Sets the has_wiki property value. The has_wiki property
     * @param value Value to set for the has_wiki property.
     */
    public void setHasWiki(@jakarta.annotation.Nullable final Boolean value) {
        this.hasWiki = value;
    }
    /**
     * Sets the homepage property value. The homepage property
     * @param value Value to set for the homepage property.
     */
    public void setHomepage(@jakarta.annotation.Nullable final String value) {
        this.homepage = value;
    }
    /**
     * Sets the hooks_url property value. The hooks_url property
     * @param value Value to set for the hooks_url property.
     */
    public void setHooksUrl(@jakarta.annotation.Nullable final String value) {
        this.hooksUrl = value;
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
     * Sets the issue_comment_url property value. The issue_comment_url property
     * @param value Value to set for the issue_comment_url property.
     */
    public void setIssueCommentUrl(@jakarta.annotation.Nullable final String value) {
        this.issueCommentUrl = value;
    }
    /**
     * Sets the issue_events_url property value. The issue_events_url property
     * @param value Value to set for the issue_events_url property.
     */
    public void setIssueEventsUrl(@jakarta.annotation.Nullable final String value) {
        this.issueEventsUrl = value;
    }
    /**
     * Sets the issues_url property value. The issues_url property
     * @param value Value to set for the issues_url property.
     */
    public void setIssuesUrl(@jakarta.annotation.Nullable final String value) {
        this.issuesUrl = value;
    }
    /**
     * Sets the is_template property value. The is_template property
     * @param value Value to set for the is_template property.
     */
    public void setIsTemplate(@jakarta.annotation.Nullable final Boolean value) {
        this.isTemplate = value;
    }
    /**
     * Sets the keys_url property value. The keys_url property
     * @param value Value to set for the keys_url property.
     */
    public void setKeysUrl(@jakarta.annotation.Nullable final String value) {
        this.keysUrl = value;
    }
    /**
     * Sets the labels_url property value. The labels_url property
     * @param value Value to set for the labels_url property.
     */
    public void setLabelsUrl(@jakarta.annotation.Nullable final String value) {
        this.labelsUrl = value;
    }
    /**
     * Sets the language property value. The language property
     * @param value Value to set for the language property.
     */
    public void setLanguage(@jakarta.annotation.Nullable final String value) {
        this.language = value;
    }
    /**
     * Sets the languages_url property value. The languages_url property
     * @param value Value to set for the languages_url property.
     */
    public void setLanguagesUrl(@jakarta.annotation.Nullable final String value) {
        this.languagesUrl = value;
    }
    /**
     * Sets the merge_commit_message property value. The default value for a merge commit message.- `PR_TITLE` - default to the pull request's title.- `PR_BODY` - default to the pull request's body.- `BLANK` - default to a blank commit message.
     * @param value Value to set for the merge_commit_message property.
     */
    public void setMergeCommitMessage(@jakarta.annotation.Nullable final RepositoryTemplateRepositoryMergeCommitMessage value) {
        this.mergeCommitMessage = value;
    }
    /**
     * Sets the merge_commit_title property value. The default value for a merge commit title.- `PR_TITLE` - default to the pull request's title.- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
     * @param value Value to set for the merge_commit_title property.
     */
    public void setMergeCommitTitle(@jakarta.annotation.Nullable final RepositoryTemplateRepositoryMergeCommitTitle value) {
        this.mergeCommitTitle = value;
    }
    /**
     * Sets the merges_url property value. The merges_url property
     * @param value Value to set for the merges_url property.
     */
    public void setMergesUrl(@jakarta.annotation.Nullable final String value) {
        this.mergesUrl = value;
    }
    /**
     * Sets the milestones_url property value. The milestones_url property
     * @param value Value to set for the milestones_url property.
     */
    public void setMilestonesUrl(@jakarta.annotation.Nullable final String value) {
        this.milestonesUrl = value;
    }
    /**
     * Sets the mirror_url property value. The mirror_url property
     * @param value Value to set for the mirror_url property.
     */
    public void setMirrorUrl(@jakarta.annotation.Nullable final String value) {
        this.mirrorUrl = value;
    }
    /**
     * Sets the name property value. The name property
     * @param value Value to set for the name property.
     */
    public void setName(@jakarta.annotation.Nullable final String value) {
        this.name = value;
    }
    /**
     * Sets the network_count property value. The network_count property
     * @param value Value to set for the network_count property.
     */
    public void setNetworkCount(@jakarta.annotation.Nullable final Integer value) {
        this.networkCount = value;
    }
    /**
     * Sets the node_id property value. The node_id property
     * @param value Value to set for the node_id property.
     */
    public void setNodeId(@jakarta.annotation.Nullable final String value) {
        this.nodeId = value;
    }
    /**
     * Sets the notifications_url property value. The notifications_url property
     * @param value Value to set for the notifications_url property.
     */
    public void setNotificationsUrl(@jakarta.annotation.Nullable final String value) {
        this.notificationsUrl = value;
    }
    /**
     * Sets the open_issues_count property value. The open_issues_count property
     * @param value Value to set for the open_issues_count property.
     */
    public void setOpenIssuesCount(@jakarta.annotation.Nullable final Integer value) {
        this.openIssuesCount = value;
    }
    /**
     * Sets the owner property value. The owner property
     * @param value Value to set for the owner property.
     */
    public void setOwner(@jakarta.annotation.Nullable final RepositoryTemplateRepositoryOwner value) {
        this.owner = value;
    }
    /**
     * Sets the permissions property value. The permissions property
     * @param value Value to set for the permissions property.
     */
    public void setPermissions(@jakarta.annotation.Nullable final RepositoryTemplateRepositoryPermissions value) {
        this.permissions = value;
    }
    /**
     * Sets the private property value. The private property
     * @param value Value to set for the private property.
     */
    public void setPrivate(@jakarta.annotation.Nullable final Boolean value) {
        this.privateEscaped = value;
    }
    /**
     * Sets the pulls_url property value. The pulls_url property
     * @param value Value to set for the pulls_url property.
     */
    public void setPullsUrl(@jakarta.annotation.Nullable final String value) {
        this.pullsUrl = value;
    }
    /**
     * Sets the pushed_at property value. The pushed_at property
     * @param value Value to set for the pushed_at property.
     */
    public void setPushedAt(@jakarta.annotation.Nullable final String value) {
        this.pushedAt = value;
    }
    /**
     * Sets the releases_url property value. The releases_url property
     * @param value Value to set for the releases_url property.
     */
    public void setReleasesUrl(@jakarta.annotation.Nullable final String value) {
        this.releasesUrl = value;
    }
    /**
     * Sets the size property value. The size property
     * @param value Value to set for the size property.
     */
    public void setSize(@jakarta.annotation.Nullable final Integer value) {
        this.size = value;
    }
    /**
     * Sets the squash_merge_commit_message property value. The default value for a squash merge commit message:- `PR_BODY` - default to the pull request's body.- `COMMIT_MESSAGES` - default to the branch's commit messages.- `BLANK` - default to a blank commit message.
     * @param value Value to set for the squash_merge_commit_message property.
     */
    public void setSquashMergeCommitMessage(@jakarta.annotation.Nullable final RepositoryTemplateRepositorySquashMergeCommitMessage value) {
        this.squashMergeCommitMessage = value;
    }
    /**
     * Sets the squash_merge_commit_title property value. The default value for a squash merge commit title:- `PR_TITLE` - default to the pull request's title.- `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
     * @param value Value to set for the squash_merge_commit_title property.
     */
    public void setSquashMergeCommitTitle(@jakarta.annotation.Nullable final RepositoryTemplateRepositorySquashMergeCommitTitle value) {
        this.squashMergeCommitTitle = value;
    }
    /**
     * Sets the ssh_url property value. The ssh_url property
     * @param value Value to set for the ssh_url property.
     */
    public void setSshUrl(@jakarta.annotation.Nullable final String value) {
        this.sshUrl = value;
    }
    /**
     * Sets the stargazers_count property value. The stargazers_count property
     * @param value Value to set for the stargazers_count property.
     */
    public void setStargazersCount(@jakarta.annotation.Nullable final Integer value) {
        this.stargazersCount = value;
    }
    /**
     * Sets the stargazers_url property value. The stargazers_url property
     * @param value Value to set for the stargazers_url property.
     */
    public void setStargazersUrl(@jakarta.annotation.Nullable final String value) {
        this.stargazersUrl = value;
    }
    /**
     * Sets the statuses_url property value. The statuses_url property
     * @param value Value to set for the statuses_url property.
     */
    public void setStatusesUrl(@jakarta.annotation.Nullable final String value) {
        this.statusesUrl = value;
    }
    /**
     * Sets the subscribers_count property value. The subscribers_count property
     * @param value Value to set for the subscribers_count property.
     */
    public void setSubscribersCount(@jakarta.annotation.Nullable final Integer value) {
        this.subscribersCount = value;
    }
    /**
     * Sets the subscribers_url property value. The subscribers_url property
     * @param value Value to set for the subscribers_url property.
     */
    public void setSubscribersUrl(@jakarta.annotation.Nullable final String value) {
        this.subscribersUrl = value;
    }
    /**
     * Sets the subscription_url property value. The subscription_url property
     * @param value Value to set for the subscription_url property.
     */
    public void setSubscriptionUrl(@jakarta.annotation.Nullable final String value) {
        this.subscriptionUrl = value;
    }
    /**
     * Sets the svn_url property value. The svn_url property
     * @param value Value to set for the svn_url property.
     */
    public void setSvnUrl(@jakarta.annotation.Nullable final String value) {
        this.svnUrl = value;
    }
    /**
     * Sets the tags_url property value. The tags_url property
     * @param value Value to set for the tags_url property.
     */
    public void setTagsUrl(@jakarta.annotation.Nullable final String value) {
        this.tagsUrl = value;
    }
    /**
     * Sets the teams_url property value. The teams_url property
     * @param value Value to set for the teams_url property.
     */
    public void setTeamsUrl(@jakarta.annotation.Nullable final String value) {
        this.teamsUrl = value;
    }
    /**
     * Sets the temp_clone_token property value. The temp_clone_token property
     * @param value Value to set for the temp_clone_token property.
     */
    public void setTempCloneToken(@jakarta.annotation.Nullable final String value) {
        this.tempCloneToken = value;
    }
    /**
     * Sets the topics property value. The topics property
     * @param value Value to set for the topics property.
     */
    public void setTopics(@jakarta.annotation.Nullable final java.util.List<String> value) {
        this.topics = value;
    }
    /**
     * Sets the trees_url property value. The trees_url property
     * @param value Value to set for the trees_url property.
     */
    public void setTreesUrl(@jakarta.annotation.Nullable final String value) {
        this.treesUrl = value;
    }
    /**
     * Sets the updated_at property value. The updated_at property
     * @param value Value to set for the updated_at property.
     */
    public void setUpdatedAt(@jakarta.annotation.Nullable final String value) {
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
     * Sets the use_squash_pr_title_as_default property value. The use_squash_pr_title_as_default property
     * @param value Value to set for the use_squash_pr_title_as_default property.
     */
    public void setUseSquashPrTitleAsDefault(@jakarta.annotation.Nullable final Boolean value) {
        this.useSquashPrTitleAsDefault = value;
    }
    /**
     * Sets the visibility property value. The visibility property
     * @param value Value to set for the visibility property.
     */
    public void setVisibility(@jakarta.annotation.Nullable final String value) {
        this.visibility = value;
    }
    /**
     * Sets the watchers_count property value. The watchers_count property
     * @param value Value to set for the watchers_count property.
     */
    public void setWatchersCount(@jakarta.annotation.Nullable final Integer value) {
        this.watchersCount = value;
    }
}
