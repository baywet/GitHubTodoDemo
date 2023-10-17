<?php

namespace Baywet\Githubtododemo\Github\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PullRequest_head_repo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $allow_forking The allow_forking property
    */
    private ?bool $allow_forking = null;
    
    /**
     * @var bool|null $allow_merge_commit The allow_merge_commit property
    */
    private ?bool $allow_merge_commit = null;
    
    /**
     * @var bool|null $allow_rebase_merge The allow_rebase_merge property
    */
    private ?bool $allow_rebase_merge = null;
    
    /**
     * @var bool|null $allow_squash_merge The allow_squash_merge property
    */
    private ?bool $allow_squash_merge = null;
    
    /**
     * @var string|null $archive_url The archive_url property
    */
    private ?string $archive_url = null;
    
    /**
     * @var bool|null $archived The archived property
    */
    private ?bool $archived = null;
    
    /**
     * @var string|null $assignees_url The assignees_url property
    */
    private ?string $assignees_url = null;
    
    /**
     * @var string|null $blobs_url The blobs_url property
    */
    private ?string $blobs_url = null;
    
    /**
     * @var string|null $branches_url The branches_url property
    */
    private ?string $branches_url = null;
    
    /**
     * @var string|null $clone_url The clone_url property
    */
    private ?string $clone_url = null;
    
    /**
     * @var string|null $collaborators_url The collaborators_url property
    */
    private ?string $collaborators_url = null;
    
    /**
     * @var string|null $comments_url The comments_url property
    */
    private ?string $comments_url = null;
    
    /**
     * @var string|null $commits_url The commits_url property
    */
    private ?string $commits_url = null;
    
    /**
     * @var string|null $compare_url The compare_url property
    */
    private ?string $compare_url = null;
    
    /**
     * @var string|null $contents_url The contents_url property
    */
    private ?string $contents_url = null;
    
    /**
     * @var string|null $contributors_url The contributors_url property
    */
    private ?string $contributors_url = null;
    
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var string|null $default_branch The default_branch property
    */
    private ?string $default_branch = null;
    
    /**
     * @var string|null $deployments_url The deployments_url property
    */
    private ?string $deployments_url = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $disabled The disabled property
    */
    private ?bool $disabled = null;
    
    /**
     * @var string|null $downloads_url The downloads_url property
    */
    private ?string $downloads_url = null;
    
    /**
     * @var bool|null $escapedPrivate The private property
    */
    private ?bool $escapedPrivate = null;
    
    /**
     * @var string|null $events_url The events_url property
    */
    private ?string $events_url = null;
    
    /**
     * @var bool|null $fork The fork property
    */
    private ?bool $fork = null;
    
    /**
     * @var int|null $forks The forks property
    */
    private ?int $forks = null;
    
    /**
     * @var int|null $forks_count The forks_count property
    */
    private ?int $forks_count = null;
    
    /**
     * @var string|null $forks_url The forks_url property
    */
    private ?string $forks_url = null;
    
    /**
     * @var string|null $full_name The full_name property
    */
    private ?string $full_name = null;
    
    /**
     * @var string|null $git_commits_url The git_commits_url property
    */
    private ?string $git_commits_url = null;
    
    /**
     * @var string|null $git_refs_url The git_refs_url property
    */
    private ?string $git_refs_url = null;
    
    /**
     * @var string|null $git_tags_url The git_tags_url property
    */
    private ?string $git_tags_url = null;
    
    /**
     * @var string|null $git_url The git_url property
    */
    private ?string $git_url = null;
    
    /**
     * @var bool|null $has_discussions The has_discussions property
    */
    private ?bool $has_discussions = null;
    
    /**
     * @var bool|null $has_downloads The has_downloads property
    */
    private ?bool $has_downloads = null;
    
    /**
     * @var bool|null $has_issues The has_issues property
    */
    private ?bool $has_issues = null;
    
    /**
     * @var bool|null $has_pages The has_pages property
    */
    private ?bool $has_pages = null;
    
    /**
     * @var bool|null $has_projects The has_projects property
    */
    private ?bool $has_projects = null;
    
    /**
     * @var bool|null $has_wiki The has_wiki property
    */
    private ?bool $has_wiki = null;
    
    /**
     * @var string|null $homepage The homepage property
    */
    private ?string $homepage = null;
    
    /**
     * @var string|null $hooks_url The hooks_url property
    */
    private ?string $hooks_url = null;
    
    /**
     * @var string|null $html_url The html_url property
    */
    private ?string $html_url = null;
    
    /**
     * @var int|null $id The id property
    */
    private ?int $id = null;
    
    /**
     * @var bool|null $is_template The is_template property
    */
    private ?bool $is_template = null;
    
    /**
     * @var string|null $issue_comment_url The issue_comment_url property
    */
    private ?string $issue_comment_url = null;
    
    /**
     * @var string|null $issue_events_url The issue_events_url property
    */
    private ?string $issue_events_url = null;
    
    /**
     * @var string|null $issues_url The issues_url property
    */
    private ?string $issues_url = null;
    
    /**
     * @var string|null $keys_url The keys_url property
    */
    private ?string $keys_url = null;
    
    /**
     * @var string|null $labels_url The labels_url property
    */
    private ?string $labels_url = null;
    
    /**
     * @var string|null $language The language property
    */
    private ?string $language = null;
    
    /**
     * @var string|null $languages_url The languages_url property
    */
    private ?string $languages_url = null;
    
    /**
     * @var PullRequest_head_repo_license|null $license The license property
    */
    private ?PullRequest_head_repo_license $license = null;
    
    /**
     * @var string|null $master_branch The master_branch property
    */
    private ?string $master_branch = null;
    
    /**
     * @var string|null $merges_url The merges_url property
    */
    private ?string $merges_url = null;
    
    /**
     * @var string|null $milestones_url The milestones_url property
    */
    private ?string $milestones_url = null;
    
    /**
     * @var string|null $mirror_url The mirror_url property
    */
    private ?string $mirror_url = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $node_id The node_id property
    */
    private ?string $node_id = null;
    
    /**
     * @var string|null $notifications_url The notifications_url property
    */
    private ?string $notifications_url = null;
    
    /**
     * @var int|null $open_issues The open_issues property
    */
    private ?int $open_issues = null;
    
    /**
     * @var int|null $open_issues_count The open_issues_count property
    */
    private ?int $open_issues_count = null;
    
    /**
     * @var PullRequest_head_repo_owner|null $owner The owner property
    */
    private ?PullRequest_head_repo_owner $owner = null;
    
    /**
     * @var PullRequest_head_repo_permissions|null $permissions The permissions property
    */
    private ?PullRequest_head_repo_permissions $permissions = null;
    
    /**
     * @var string|null $pulls_url The pulls_url property
    */
    private ?string $pulls_url = null;
    
    /**
     * @var DateTime|null $pushed_at The pushed_at property
    */
    private ?DateTime $pushed_at = null;
    
    /**
     * @var string|null $releases_url The releases_url property
    */
    private ?string $releases_url = null;
    
    /**
     * @var int|null $size The size property
    */
    private ?int $size = null;
    
    /**
     * @var string|null $ssh_url The ssh_url property
    */
    private ?string $ssh_url = null;
    
    /**
     * @var int|null $stargazers_count The stargazers_count property
    */
    private ?int $stargazers_count = null;
    
    /**
     * @var string|null $stargazers_url The stargazers_url property
    */
    private ?string $stargazers_url = null;
    
    /**
     * @var string|null $statuses_url The statuses_url property
    */
    private ?string $statuses_url = null;
    
    /**
     * @var string|null $subscribers_url The subscribers_url property
    */
    private ?string $subscribers_url = null;
    
    /**
     * @var string|null $subscription_url The subscription_url property
    */
    private ?string $subscription_url = null;
    
    /**
     * @var string|null $svn_url The svn_url property
    */
    private ?string $svn_url = null;
    
    /**
     * @var string|null $tags_url The tags_url property
    */
    private ?string $tags_url = null;
    
    /**
     * @var string|null $teams_url The teams_url property
    */
    private ?string $teams_url = null;
    
    /**
     * @var string|null $temp_clone_token The temp_clone_token property
    */
    private ?string $temp_clone_token = null;
    
    /**
     * @var array<string>|null $topics The topics property
    */
    private ?array $topics = null;
    
    /**
     * @var string|null $trees_url The trees_url property
    */
    private ?string $trees_url = null;
    
    /**
     * @var DateTime|null $updated_at The updated_at property
    */
    private ?DateTime $updated_at = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * @var string|null $visibility The repository visibility: public, private, or internal.
    */
    private ?string $visibility = null;
    
    /**
     * @var int|null $watchers The watchers property
    */
    private ?int $watchers = null;
    
    /**
     * @var int|null $watchers_count The watchers_count property
    */
    private ?int $watchers_count = null;
    
    /**
     * @var bool|null $web_commit_signoff_required The web_commit_signoff_required property
    */
    private ?bool $web_commit_signoff_required = null;
    
    /**
     * Instantiates a new pullRequest_head_repo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PullRequest_head_repo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PullRequest_head_repo {
        return new PullRequest_head_repo();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the allow_forking property value. The allow_forking property
     * @return bool|null
    */
    public function getAllowForking(): ?bool {
        return $this->allow_forking;
    }

    /**
     * Gets the allow_merge_commit property value. The allow_merge_commit property
     * @return bool|null
    */
    public function getAllowMergeCommit(): ?bool {
        return $this->allow_merge_commit;
    }

    /**
     * Gets the allow_rebase_merge property value. The allow_rebase_merge property
     * @return bool|null
    */
    public function getAllowRebaseMerge(): ?bool {
        return $this->allow_rebase_merge;
    }

    /**
     * Gets the allow_squash_merge property value. The allow_squash_merge property
     * @return bool|null
    */
    public function getAllowSquashMerge(): ?bool {
        return $this->allow_squash_merge;
    }

    /**
     * Gets the archived property value. The archived property
     * @return bool|null
    */
    public function getArchived(): ?bool {
        return $this->archived;
    }

    /**
     * Gets the archive_url property value. The archive_url property
     * @return string|null
    */
    public function getArchiveUrl(): ?string {
        return $this->archive_url;
    }

    /**
     * Gets the assignees_url property value. The assignees_url property
     * @return string|null
    */
    public function getAssigneesUrl(): ?string {
        return $this->assignees_url;
    }

    /**
     * Gets the blobs_url property value. The blobs_url property
     * @return string|null
    */
    public function getBlobsUrl(): ?string {
        return $this->blobs_url;
    }

    /**
     * Gets the branches_url property value. The branches_url property
     * @return string|null
    */
    public function getBranchesUrl(): ?string {
        return $this->branches_url;
    }

    /**
     * Gets the clone_url property value. The clone_url property
     * @return string|null
    */
    public function getCloneUrl(): ?string {
        return $this->clone_url;
    }

    /**
     * Gets the collaborators_url property value. The collaborators_url property
     * @return string|null
    */
    public function getCollaboratorsUrl(): ?string {
        return $this->collaborators_url;
    }

    /**
     * Gets the comments_url property value. The comments_url property
     * @return string|null
    */
    public function getCommentsUrl(): ?string {
        return $this->comments_url;
    }

    /**
     * Gets the commits_url property value. The commits_url property
     * @return string|null
    */
    public function getCommitsUrl(): ?string {
        return $this->commits_url;
    }

    /**
     * Gets the compare_url property value. The compare_url property
     * @return string|null
    */
    public function getCompareUrl(): ?string {
        return $this->compare_url;
    }

    /**
     * Gets the contents_url property value. The contents_url property
     * @return string|null
    */
    public function getContentsUrl(): ?string {
        return $this->contents_url;
    }

    /**
     * Gets the contributors_url property value. The contributors_url property
     * @return string|null
    */
    public function getContributorsUrl(): ?string {
        return $this->contributors_url;
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * Gets the default_branch property value. The default_branch property
     * @return string|null
    */
    public function getDefaultBranch(): ?string {
        return $this->default_branch;
    }

    /**
     * Gets the deployments_url property value. The deployments_url property
     * @return string|null
    */
    public function getDeploymentsUrl(): ?string {
        return $this->deployments_url;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the disabled property value. The disabled property
     * @return bool|null
    */
    public function getDisabled(): ?bool {
        return $this->disabled;
    }

    /**
     * Gets the downloads_url property value. The downloads_url property
     * @return string|null
    */
    public function getDownloadsUrl(): ?string {
        return $this->downloads_url;
    }

    /**
     * Gets the private property value. The private property
     * @return bool|null
    */
    public function getEscapedPrivate(): ?bool {
        return $this->escapedPrivate;
    }

    /**
     * Gets the events_url property value. The events_url property
     * @return string|null
    */
    public function getEventsUrl(): ?string {
        return $this->events_url;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allow_forking' => fn(ParseNode $n) => $o->setAllowForking($n->getBooleanValue()),
            'allow_merge_commit' => fn(ParseNode $n) => $o->setAllowMergeCommit($n->getBooleanValue()),
            'allow_rebase_merge' => fn(ParseNode $n) => $o->setAllowRebaseMerge($n->getBooleanValue()),
            'allow_squash_merge' => fn(ParseNode $n) => $o->setAllowSquashMerge($n->getBooleanValue()),
            'archive_url' => fn(ParseNode $n) => $o->setArchiveUrl($n->getStringValue()),
            'archived' => fn(ParseNode $n) => $o->setArchived($n->getBooleanValue()),
            'assignees_url' => fn(ParseNode $n) => $o->setAssigneesUrl($n->getStringValue()),
            'blobs_url' => fn(ParseNode $n) => $o->setBlobsUrl($n->getStringValue()),
            'branches_url' => fn(ParseNode $n) => $o->setBranchesUrl($n->getStringValue()),
            'clone_url' => fn(ParseNode $n) => $o->setCloneUrl($n->getStringValue()),
            'collaborators_url' => fn(ParseNode $n) => $o->setCollaboratorsUrl($n->getStringValue()),
            'comments_url' => fn(ParseNode $n) => $o->setCommentsUrl($n->getStringValue()),
            'commits_url' => fn(ParseNode $n) => $o->setCommitsUrl($n->getStringValue()),
            'compare_url' => fn(ParseNode $n) => $o->setCompareUrl($n->getStringValue()),
            'contents_url' => fn(ParseNode $n) => $o->setContentsUrl($n->getStringValue()),
            'contributors_url' => fn(ParseNode $n) => $o->setContributorsUrl($n->getStringValue()),
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'default_branch' => fn(ParseNode $n) => $o->setDefaultBranch($n->getStringValue()),
            'deployments_url' => fn(ParseNode $n) => $o->setDeploymentsUrl($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'disabled' => fn(ParseNode $n) => $o->setDisabled($n->getBooleanValue()),
            'downloads_url' => fn(ParseNode $n) => $o->setDownloadsUrl($n->getStringValue()),
            'private' => fn(ParseNode $n) => $o->setEscapedPrivate($n->getBooleanValue()),
            'events_url' => fn(ParseNode $n) => $o->setEventsUrl($n->getStringValue()),
            'fork' => fn(ParseNode $n) => $o->setFork($n->getBooleanValue()),
            'forks' => fn(ParseNode $n) => $o->setForks($n->getIntegerValue()),
            'forks_count' => fn(ParseNode $n) => $o->setForksCount($n->getIntegerValue()),
            'forks_url' => fn(ParseNode $n) => $o->setForksUrl($n->getStringValue()),
            'full_name' => fn(ParseNode $n) => $o->setFullName($n->getStringValue()),
            'git_commits_url' => fn(ParseNode $n) => $o->setGitCommitsUrl($n->getStringValue()),
            'git_refs_url' => fn(ParseNode $n) => $o->setGitRefsUrl($n->getStringValue()),
            'git_tags_url' => fn(ParseNode $n) => $o->setGitTagsUrl($n->getStringValue()),
            'git_url' => fn(ParseNode $n) => $o->setGitUrl($n->getStringValue()),
            'has_discussions' => fn(ParseNode $n) => $o->setHasDiscussions($n->getBooleanValue()),
            'has_downloads' => fn(ParseNode $n) => $o->setHasDownloads($n->getBooleanValue()),
            'has_issues' => fn(ParseNode $n) => $o->setHasIssues($n->getBooleanValue()),
            'has_pages' => fn(ParseNode $n) => $o->setHasPages($n->getBooleanValue()),
            'has_projects' => fn(ParseNode $n) => $o->setHasProjects($n->getBooleanValue()),
            'has_wiki' => fn(ParseNode $n) => $o->setHasWiki($n->getBooleanValue()),
            'homepage' => fn(ParseNode $n) => $o->setHomepage($n->getStringValue()),
            'hooks_url' => fn(ParseNode $n) => $o->setHooksUrl($n->getStringValue()),
            'html_url' => fn(ParseNode $n) => $o->setHtmlUrl($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'is_template' => fn(ParseNode $n) => $o->setIsTemplate($n->getBooleanValue()),
            'issue_comment_url' => fn(ParseNode $n) => $o->setIssueCommentUrl($n->getStringValue()),
            'issue_events_url' => fn(ParseNode $n) => $o->setIssueEventsUrl($n->getStringValue()),
            'issues_url' => fn(ParseNode $n) => $o->setIssuesUrl($n->getStringValue()),
            'keys_url' => fn(ParseNode $n) => $o->setKeysUrl($n->getStringValue()),
            'labels_url' => fn(ParseNode $n) => $o->setLabelsUrl($n->getStringValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            'languages_url' => fn(ParseNode $n) => $o->setLanguagesUrl($n->getStringValue()),
            'license' => fn(ParseNode $n) => $o->setLicense($n->getObjectValue([PullRequest_head_repo_license::class, 'createFromDiscriminatorValue'])),
            'master_branch' => fn(ParseNode $n) => $o->setMasterBranch($n->getStringValue()),
            'merges_url' => fn(ParseNode $n) => $o->setMergesUrl($n->getStringValue()),
            'milestones_url' => fn(ParseNode $n) => $o->setMilestonesUrl($n->getStringValue()),
            'mirror_url' => fn(ParseNode $n) => $o->setMirrorUrl($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'node_id' => fn(ParseNode $n) => $o->setNodeId($n->getStringValue()),
            'notifications_url' => fn(ParseNode $n) => $o->setNotificationsUrl($n->getStringValue()),
            'open_issues' => fn(ParseNode $n) => $o->setOpenIssues($n->getIntegerValue()),
            'open_issues_count' => fn(ParseNode $n) => $o->setOpenIssuesCount($n->getIntegerValue()),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getObjectValue([PullRequest_head_repo_owner::class, 'createFromDiscriminatorValue'])),
            'permissions' => fn(ParseNode $n) => $o->setPermissions($n->getObjectValue([PullRequest_head_repo_permissions::class, 'createFromDiscriminatorValue'])),
            'pulls_url' => fn(ParseNode $n) => $o->setPullsUrl($n->getStringValue()),
            'pushed_at' => fn(ParseNode $n) => $o->setPushedAt($n->getDateTimeValue()),
            'releases_url' => fn(ParseNode $n) => $o->setReleasesUrl($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'ssh_url' => fn(ParseNode $n) => $o->setSshUrl($n->getStringValue()),
            'stargazers_count' => fn(ParseNode $n) => $o->setStargazersCount($n->getIntegerValue()),
            'stargazers_url' => fn(ParseNode $n) => $o->setStargazersUrl($n->getStringValue()),
            'statuses_url' => fn(ParseNode $n) => $o->setStatusesUrl($n->getStringValue()),
            'subscribers_url' => fn(ParseNode $n) => $o->setSubscribersUrl($n->getStringValue()),
            'subscription_url' => fn(ParseNode $n) => $o->setSubscriptionUrl($n->getStringValue()),
            'svn_url' => fn(ParseNode $n) => $o->setSvnUrl($n->getStringValue()),
            'tags_url' => fn(ParseNode $n) => $o->setTagsUrl($n->getStringValue()),
            'teams_url' => fn(ParseNode $n) => $o->setTeamsUrl($n->getStringValue()),
            'temp_clone_token' => fn(ParseNode $n) => $o->setTempCloneToken($n->getStringValue()),
            'topics' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTopics($val);
            },
            'trees_url' => fn(ParseNode $n) => $o->setTreesUrl($n->getStringValue()),
            'updated_at' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getStringValue()),
            'watchers' => fn(ParseNode $n) => $o->setWatchers($n->getIntegerValue()),
            'watchers_count' => fn(ParseNode $n) => $o->setWatchersCount($n->getIntegerValue()),
            'web_commit_signoff_required' => fn(ParseNode $n) => $o->setWebCommitSignoffRequired($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the fork property value. The fork property
     * @return bool|null
    */
    public function getFork(): ?bool {
        return $this->fork;
    }

    /**
     * Gets the forks property value. The forks property
     * @return int|null
    */
    public function getForks(): ?int {
        return $this->forks;
    }

    /**
     * Gets the forks_count property value. The forks_count property
     * @return int|null
    */
    public function getForksCount(): ?int {
        return $this->forks_count;
    }

    /**
     * Gets the forks_url property value. The forks_url property
     * @return string|null
    */
    public function getForksUrl(): ?string {
        return $this->forks_url;
    }

    /**
     * Gets the full_name property value. The full_name property
     * @return string|null
    */
    public function getFullName(): ?string {
        return $this->full_name;
    }

    /**
     * Gets the git_commits_url property value. The git_commits_url property
     * @return string|null
    */
    public function getGitCommitsUrl(): ?string {
        return $this->git_commits_url;
    }

    /**
     * Gets the git_refs_url property value. The git_refs_url property
     * @return string|null
    */
    public function getGitRefsUrl(): ?string {
        return $this->git_refs_url;
    }

    /**
     * Gets the git_tags_url property value. The git_tags_url property
     * @return string|null
    */
    public function getGitTagsUrl(): ?string {
        return $this->git_tags_url;
    }

    /**
     * Gets the git_url property value. The git_url property
     * @return string|null
    */
    public function getGitUrl(): ?string {
        return $this->git_url;
    }

    /**
     * Gets the has_discussions property value. The has_discussions property
     * @return bool|null
    */
    public function getHasDiscussions(): ?bool {
        return $this->has_discussions;
    }

    /**
     * Gets the has_downloads property value. The has_downloads property
     * @return bool|null
    */
    public function getHasDownloads(): ?bool {
        return $this->has_downloads;
    }

    /**
     * Gets the has_issues property value. The has_issues property
     * @return bool|null
    */
    public function getHasIssues(): ?bool {
        return $this->has_issues;
    }

    /**
     * Gets the has_pages property value. The has_pages property
     * @return bool|null
    */
    public function getHasPages(): ?bool {
        return $this->has_pages;
    }

    /**
     * Gets the has_projects property value. The has_projects property
     * @return bool|null
    */
    public function getHasProjects(): ?bool {
        return $this->has_projects;
    }

    /**
     * Gets the has_wiki property value. The has_wiki property
     * @return bool|null
    */
    public function getHasWiki(): ?bool {
        return $this->has_wiki;
    }

    /**
     * Gets the homepage property value. The homepage property
     * @return string|null
    */
    public function getHomepage(): ?string {
        return $this->homepage;
    }

    /**
     * Gets the hooks_url property value. The hooks_url property
     * @return string|null
    */
    public function getHooksUrl(): ?string {
        return $this->hooks_url;
    }

    /**
     * Gets the html_url property value. The html_url property
     * @return string|null
    */
    public function getHtmlUrl(): ?string {
        return $this->html_url;
    }

    /**
     * Gets the id property value. The id property
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the issue_comment_url property value. The issue_comment_url property
     * @return string|null
    */
    public function getIssueCommentUrl(): ?string {
        return $this->issue_comment_url;
    }

    /**
     * Gets the issue_events_url property value. The issue_events_url property
     * @return string|null
    */
    public function getIssueEventsUrl(): ?string {
        return $this->issue_events_url;
    }

    /**
     * Gets the issues_url property value. The issues_url property
     * @return string|null
    */
    public function getIssuesUrl(): ?string {
        return $this->issues_url;
    }

    /**
     * Gets the is_template property value. The is_template property
     * @return bool|null
    */
    public function getIsTemplate(): ?bool {
        return $this->is_template;
    }

    /**
     * Gets the keys_url property value. The keys_url property
     * @return string|null
    */
    public function getKeysUrl(): ?string {
        return $this->keys_url;
    }

    /**
     * Gets the labels_url property value. The labels_url property
     * @return string|null
    */
    public function getLabelsUrl(): ?string {
        return $this->labels_url;
    }

    /**
     * Gets the language property value. The language property
     * @return string|null
    */
    public function getLanguage(): ?string {
        return $this->language;
    }

    /**
     * Gets the languages_url property value. The languages_url property
     * @return string|null
    */
    public function getLanguagesUrl(): ?string {
        return $this->languages_url;
    }

    /**
     * Gets the license property value. The license property
     * @return PullRequest_head_repo_license|null
    */
    public function getLicense(): ?PullRequest_head_repo_license {
        return $this->license;
    }

    /**
     * Gets the master_branch property value. The master_branch property
     * @return string|null
    */
    public function getMasterBranch(): ?string {
        return $this->master_branch;
    }

    /**
     * Gets the merges_url property value. The merges_url property
     * @return string|null
    */
    public function getMergesUrl(): ?string {
        return $this->merges_url;
    }

    /**
     * Gets the milestones_url property value. The milestones_url property
     * @return string|null
    */
    public function getMilestonesUrl(): ?string {
        return $this->milestones_url;
    }

    /**
     * Gets the mirror_url property value. The mirror_url property
     * @return string|null
    */
    public function getMirrorUrl(): ?string {
        return $this->mirror_url;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the node_id property value. The node_id property
     * @return string|null
    */
    public function getNodeId(): ?string {
        return $this->node_id;
    }

    /**
     * Gets the notifications_url property value. The notifications_url property
     * @return string|null
    */
    public function getNotificationsUrl(): ?string {
        return $this->notifications_url;
    }

    /**
     * Gets the open_issues property value. The open_issues property
     * @return int|null
    */
    public function getOpenIssues(): ?int {
        return $this->open_issues;
    }

    /**
     * Gets the open_issues_count property value. The open_issues_count property
     * @return int|null
    */
    public function getOpenIssuesCount(): ?int {
        return $this->open_issues_count;
    }

    /**
     * Gets the owner property value. The owner property
     * @return PullRequest_head_repo_owner|null
    */
    public function getOwner(): ?PullRequest_head_repo_owner {
        return $this->owner;
    }

    /**
     * Gets the permissions property value. The permissions property
     * @return PullRequest_head_repo_permissions|null
    */
    public function getPermissions(): ?PullRequest_head_repo_permissions {
        return $this->permissions;
    }

    /**
     * Gets the pulls_url property value. The pulls_url property
     * @return string|null
    */
    public function getPullsUrl(): ?string {
        return $this->pulls_url;
    }

    /**
     * Gets the pushed_at property value. The pushed_at property
     * @return DateTime|null
    */
    public function getPushedAt(): ?DateTime {
        return $this->pushed_at;
    }

    /**
     * Gets the releases_url property value. The releases_url property
     * @return string|null
    */
    public function getReleasesUrl(): ?string {
        return $this->releases_url;
    }

    /**
     * Gets the size property value. The size property
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Gets the ssh_url property value. The ssh_url property
     * @return string|null
    */
    public function getSshUrl(): ?string {
        return $this->ssh_url;
    }

    /**
     * Gets the stargazers_count property value. The stargazers_count property
     * @return int|null
    */
    public function getStargazersCount(): ?int {
        return $this->stargazers_count;
    }

    /**
     * Gets the stargazers_url property value. The stargazers_url property
     * @return string|null
    */
    public function getStargazersUrl(): ?string {
        return $this->stargazers_url;
    }

    /**
     * Gets the statuses_url property value. The statuses_url property
     * @return string|null
    */
    public function getStatusesUrl(): ?string {
        return $this->statuses_url;
    }

    /**
     * Gets the subscribers_url property value. The subscribers_url property
     * @return string|null
    */
    public function getSubscribersUrl(): ?string {
        return $this->subscribers_url;
    }

    /**
     * Gets the subscription_url property value. The subscription_url property
     * @return string|null
    */
    public function getSubscriptionUrl(): ?string {
        return $this->subscription_url;
    }

    /**
     * Gets the svn_url property value. The svn_url property
     * @return string|null
    */
    public function getSvnUrl(): ?string {
        return $this->svn_url;
    }

    /**
     * Gets the tags_url property value. The tags_url property
     * @return string|null
    */
    public function getTagsUrl(): ?string {
        return $this->tags_url;
    }

    /**
     * Gets the teams_url property value. The teams_url property
     * @return string|null
    */
    public function getTeamsUrl(): ?string {
        return $this->teams_url;
    }

    /**
     * Gets the temp_clone_token property value. The temp_clone_token property
     * @return string|null
    */
    public function getTempCloneToken(): ?string {
        return $this->temp_clone_token;
    }

    /**
     * Gets the topics property value. The topics property
     * @return array<string>|null
    */
    public function getTopics(): ?array {
        return $this->topics;
    }

    /**
     * Gets the trees_url property value. The trees_url property
     * @return string|null
    */
    public function getTreesUrl(): ?string {
        return $this->trees_url;
    }

    /**
     * Gets the updated_at property value. The updated_at property
     * @return DateTime|null
    */
    public function getUpdatedAt(): ?DateTime {
        return $this->updated_at;
    }

    /**
     * Gets the url property value. The url property
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Gets the visibility property value. The repository visibility: public, private, or internal.
     * @return string|null
    */
    public function getVisibility(): ?string {
        return $this->visibility;
    }

    /**
     * Gets the watchers property value. The watchers property
     * @return int|null
    */
    public function getWatchers(): ?int {
        return $this->watchers;
    }

    /**
     * Gets the watchers_count property value. The watchers_count property
     * @return int|null
    */
    public function getWatchersCount(): ?int {
        return $this->watchers_count;
    }

    /**
     * Gets the web_commit_signoff_required property value. The web_commit_signoff_required property
     * @return bool|null
    */
    public function getWebCommitSignoffRequired(): ?bool {
        return $this->web_commit_signoff_required;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allow_forking', $this->getAllowForking());
        $writer->writeBooleanValue('allow_merge_commit', $this->getAllowMergeCommit());
        $writer->writeBooleanValue('allow_rebase_merge', $this->getAllowRebaseMerge());
        $writer->writeBooleanValue('allow_squash_merge', $this->getAllowSquashMerge());
        $writer->writeBooleanValue('archived', $this->getArchived());
        $writer->writeStringValue('archive_url', $this->getArchiveUrl());
        $writer->writeStringValue('assignees_url', $this->getAssigneesUrl());
        $writer->writeStringValue('blobs_url', $this->getBlobsUrl());
        $writer->writeStringValue('branches_url', $this->getBranchesUrl());
        $writer->writeStringValue('clone_url', $this->getCloneUrl());
        $writer->writeStringValue('collaborators_url', $this->getCollaboratorsUrl());
        $writer->writeStringValue('comments_url', $this->getCommentsUrl());
        $writer->writeStringValue('commits_url', $this->getCommitsUrl());
        $writer->writeStringValue('compare_url', $this->getCompareUrl());
        $writer->writeStringValue('contents_url', $this->getContentsUrl());
        $writer->writeStringValue('contributors_url', $this->getContributorsUrl());
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('default_branch', $this->getDefaultBranch());
        $writer->writeStringValue('deployments_url', $this->getDeploymentsUrl());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('disabled', $this->getDisabled());
        $writer->writeStringValue('downloads_url', $this->getDownloadsUrl());
        $writer->writeBooleanValue('private', $this->getEscapedPrivate());
        $writer->writeStringValue('events_url', $this->getEventsUrl());
        $writer->writeBooleanValue('fork', $this->getFork());
        $writer->writeIntegerValue('forks', $this->getForks());
        $writer->writeIntegerValue('forks_count', $this->getForksCount());
        $writer->writeStringValue('forks_url', $this->getForksUrl());
        $writer->writeStringValue('full_name', $this->getFullName());
        $writer->writeStringValue('git_commits_url', $this->getGitCommitsUrl());
        $writer->writeStringValue('git_refs_url', $this->getGitRefsUrl());
        $writer->writeStringValue('git_tags_url', $this->getGitTagsUrl());
        $writer->writeStringValue('git_url', $this->getGitUrl());
        $writer->writeBooleanValue('has_discussions', $this->getHasDiscussions());
        $writer->writeBooleanValue('has_downloads', $this->getHasDownloads());
        $writer->writeBooleanValue('has_issues', $this->getHasIssues());
        $writer->writeBooleanValue('has_pages', $this->getHasPages());
        $writer->writeBooleanValue('has_projects', $this->getHasProjects());
        $writer->writeBooleanValue('has_wiki', $this->getHasWiki());
        $writer->writeStringValue('homepage', $this->getHomepage());
        $writer->writeStringValue('hooks_url', $this->getHooksUrl());
        $writer->writeStringValue('html_url', $this->getHtmlUrl());
        $writer->writeIntegerValue('id', $this->getId());
        $writer->writeStringValue('issues_url', $this->getIssuesUrl());
        $writer->writeStringValue('issue_comment_url', $this->getIssueCommentUrl());
        $writer->writeStringValue('issue_events_url', $this->getIssueEventsUrl());
        $writer->writeBooleanValue('is_template', $this->getIsTemplate());
        $writer->writeStringValue('keys_url', $this->getKeysUrl());
        $writer->writeStringValue('labels_url', $this->getLabelsUrl());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeStringValue('languages_url', $this->getLanguagesUrl());
        $writer->writeObjectValue('license', $this->getLicense());
        $writer->writeStringValue('master_branch', $this->getMasterBranch());
        $writer->writeStringValue('merges_url', $this->getMergesUrl());
        $writer->writeStringValue('milestones_url', $this->getMilestonesUrl());
        $writer->writeStringValue('mirror_url', $this->getMirrorUrl());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('node_id', $this->getNodeId());
        $writer->writeStringValue('notifications_url', $this->getNotificationsUrl());
        $writer->writeIntegerValue('open_issues', $this->getOpenIssues());
        $writer->writeIntegerValue('open_issues_count', $this->getOpenIssuesCount());
        $writer->writeObjectValue('owner', $this->getOwner());
        $writer->writeObjectValue('permissions', $this->getPermissions());
        $writer->writeStringValue('pulls_url', $this->getPullsUrl());
        $writer->writeDateTimeValue('pushed_at', $this->getPushedAt());
        $writer->writeStringValue('releases_url', $this->getReleasesUrl());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeStringValue('ssh_url', $this->getSshUrl());
        $writer->writeIntegerValue('stargazers_count', $this->getStargazersCount());
        $writer->writeStringValue('stargazers_url', $this->getStargazersUrl());
        $writer->writeStringValue('statuses_url', $this->getStatusesUrl());
        $writer->writeStringValue('subscribers_url', $this->getSubscribersUrl());
        $writer->writeStringValue('subscription_url', $this->getSubscriptionUrl());
        $writer->writeStringValue('svn_url', $this->getSvnUrl());
        $writer->writeStringValue('tags_url', $this->getTagsUrl());
        $writer->writeStringValue('teams_url', $this->getTeamsUrl());
        $writer->writeStringValue('temp_clone_token', $this->getTempCloneToken());
        $writer->writeCollectionOfPrimitiveValues('topics', $this->getTopics());
        $writer->writeStringValue('trees_url', $this->getTreesUrl());
        $writer->writeDateTimeValue('updated_at', $this->getUpdatedAt());
        $writer->writeStringValue('url', $this->getUrl());
        $writer->writeStringValue('visibility', $this->getVisibility());
        $writer->writeIntegerValue('watchers', $this->getWatchers());
        $writer->writeIntegerValue('watchers_count', $this->getWatchersCount());
        $writer->writeBooleanValue('web_commit_signoff_required', $this->getWebCommitSignoffRequired());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allow_forking property value. The allow_forking property
     * @param bool|null $value Value to set for the allow_forking property.
    */
    public function setAllowForking(?bool $value): void {
        $this->allow_forking = $value;
    }

    /**
     * Sets the allow_merge_commit property value. The allow_merge_commit property
     * @param bool|null $value Value to set for the allow_merge_commit property.
    */
    public function setAllowMergeCommit(?bool $value): void {
        $this->allow_merge_commit = $value;
    }

    /**
     * Sets the allow_rebase_merge property value. The allow_rebase_merge property
     * @param bool|null $value Value to set for the allow_rebase_merge property.
    */
    public function setAllowRebaseMerge(?bool $value): void {
        $this->allow_rebase_merge = $value;
    }

    /**
     * Sets the allow_squash_merge property value. The allow_squash_merge property
     * @param bool|null $value Value to set for the allow_squash_merge property.
    */
    public function setAllowSquashMerge(?bool $value): void {
        $this->allow_squash_merge = $value;
    }

    /**
     * Sets the archived property value. The archived property
     * @param bool|null $value Value to set for the archived property.
    */
    public function setArchived(?bool $value): void {
        $this->archived = $value;
    }

    /**
     * Sets the archive_url property value. The archive_url property
     * @param string|null $value Value to set for the archive_url property.
    */
    public function setArchiveUrl(?string $value): void {
        $this->archive_url = $value;
    }

    /**
     * Sets the assignees_url property value. The assignees_url property
     * @param string|null $value Value to set for the assignees_url property.
    */
    public function setAssigneesUrl(?string $value): void {
        $this->assignees_url = $value;
    }

    /**
     * Sets the blobs_url property value. The blobs_url property
     * @param string|null $value Value to set for the blobs_url property.
    */
    public function setBlobsUrl(?string $value): void {
        $this->blobs_url = $value;
    }

    /**
     * Sets the branches_url property value. The branches_url property
     * @param string|null $value Value to set for the branches_url property.
    */
    public function setBranchesUrl(?string $value): void {
        $this->branches_url = $value;
    }

    /**
     * Sets the clone_url property value. The clone_url property
     * @param string|null $value Value to set for the clone_url property.
    */
    public function setCloneUrl(?string $value): void {
        $this->clone_url = $value;
    }

    /**
     * Sets the collaborators_url property value. The collaborators_url property
     * @param string|null $value Value to set for the collaborators_url property.
    */
    public function setCollaboratorsUrl(?string $value): void {
        $this->collaborators_url = $value;
    }

    /**
     * Sets the comments_url property value. The comments_url property
     * @param string|null $value Value to set for the comments_url property.
    */
    public function setCommentsUrl(?string $value): void {
        $this->comments_url = $value;
    }

    /**
     * Sets the commits_url property value. The commits_url property
     * @param string|null $value Value to set for the commits_url property.
    */
    public function setCommitsUrl(?string $value): void {
        $this->commits_url = $value;
    }

    /**
     * Sets the compare_url property value. The compare_url property
     * @param string|null $value Value to set for the compare_url property.
    */
    public function setCompareUrl(?string $value): void {
        $this->compare_url = $value;
    }

    /**
     * Sets the contents_url property value. The contents_url property
     * @param string|null $value Value to set for the contents_url property.
    */
    public function setContentsUrl(?string $value): void {
        $this->contents_url = $value;
    }

    /**
     * Sets the contributors_url property value. The contributors_url property
     * @param string|null $value Value to set for the contributors_url property.
    */
    public function setContributorsUrl(?string $value): void {
        $this->contributors_url = $value;
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the default_branch property value. The default_branch property
     * @param string|null $value Value to set for the default_branch property.
    */
    public function setDefaultBranch(?string $value): void {
        $this->default_branch = $value;
    }

    /**
     * Sets the deployments_url property value. The deployments_url property
     * @param string|null $value Value to set for the deployments_url property.
    */
    public function setDeploymentsUrl(?string $value): void {
        $this->deployments_url = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the disabled property value. The disabled property
     * @param bool|null $value Value to set for the disabled property.
    */
    public function setDisabled(?bool $value): void {
        $this->disabled = $value;
    }

    /**
     * Sets the downloads_url property value. The downloads_url property
     * @param string|null $value Value to set for the downloads_url property.
    */
    public function setDownloadsUrl(?string $value): void {
        $this->downloads_url = $value;
    }

    /**
     * Sets the private property value. The private property
     * @param bool|null $value Value to set for the private property.
    */
    public function setEscapedPrivate(?bool $value): void {
        $this->escapedPrivate = $value;
    }

    /**
     * Sets the events_url property value. The events_url property
     * @param string|null $value Value to set for the events_url property.
    */
    public function setEventsUrl(?string $value): void {
        $this->events_url = $value;
    }

    /**
     * Sets the fork property value. The fork property
     * @param bool|null $value Value to set for the fork property.
    */
    public function setFork(?bool $value): void {
        $this->fork = $value;
    }

    /**
     * Sets the forks property value. The forks property
     * @param int|null $value Value to set for the forks property.
    */
    public function setForks(?int $value): void {
        $this->forks = $value;
    }

    /**
     * Sets the forks_count property value. The forks_count property
     * @param int|null $value Value to set for the forks_count property.
    */
    public function setForksCount(?int $value): void {
        $this->forks_count = $value;
    }

    /**
     * Sets the forks_url property value. The forks_url property
     * @param string|null $value Value to set for the forks_url property.
    */
    public function setForksUrl(?string $value): void {
        $this->forks_url = $value;
    }

    /**
     * Sets the full_name property value. The full_name property
     * @param string|null $value Value to set for the full_name property.
    */
    public function setFullName(?string $value): void {
        $this->full_name = $value;
    }

    /**
     * Sets the git_commits_url property value. The git_commits_url property
     * @param string|null $value Value to set for the git_commits_url property.
    */
    public function setGitCommitsUrl(?string $value): void {
        $this->git_commits_url = $value;
    }

    /**
     * Sets the git_refs_url property value. The git_refs_url property
     * @param string|null $value Value to set for the git_refs_url property.
    */
    public function setGitRefsUrl(?string $value): void {
        $this->git_refs_url = $value;
    }

    /**
     * Sets the git_tags_url property value. The git_tags_url property
     * @param string|null $value Value to set for the git_tags_url property.
    */
    public function setGitTagsUrl(?string $value): void {
        $this->git_tags_url = $value;
    }

    /**
     * Sets the git_url property value. The git_url property
     * @param string|null $value Value to set for the git_url property.
    */
    public function setGitUrl(?string $value): void {
        $this->git_url = $value;
    }

    /**
     * Sets the has_discussions property value. The has_discussions property
     * @param bool|null $value Value to set for the has_discussions property.
    */
    public function setHasDiscussions(?bool $value): void {
        $this->has_discussions = $value;
    }

    /**
     * Sets the has_downloads property value. The has_downloads property
     * @param bool|null $value Value to set for the has_downloads property.
    */
    public function setHasDownloads(?bool $value): void {
        $this->has_downloads = $value;
    }

    /**
     * Sets the has_issues property value. The has_issues property
     * @param bool|null $value Value to set for the has_issues property.
    */
    public function setHasIssues(?bool $value): void {
        $this->has_issues = $value;
    }

    /**
     * Sets the has_pages property value. The has_pages property
     * @param bool|null $value Value to set for the has_pages property.
    */
    public function setHasPages(?bool $value): void {
        $this->has_pages = $value;
    }

    /**
     * Sets the has_projects property value. The has_projects property
     * @param bool|null $value Value to set for the has_projects property.
    */
    public function setHasProjects(?bool $value): void {
        $this->has_projects = $value;
    }

    /**
     * Sets the has_wiki property value. The has_wiki property
     * @param bool|null $value Value to set for the has_wiki property.
    */
    public function setHasWiki(?bool $value): void {
        $this->has_wiki = $value;
    }

    /**
     * Sets the homepage property value. The homepage property
     * @param string|null $value Value to set for the homepage property.
    */
    public function setHomepage(?string $value): void {
        $this->homepage = $value;
    }

    /**
     * Sets the hooks_url property value. The hooks_url property
     * @param string|null $value Value to set for the hooks_url property.
    */
    public function setHooksUrl(?string $value): void {
        $this->hooks_url = $value;
    }

    /**
     * Sets the html_url property value. The html_url property
     * @param string|null $value Value to set for the html_url property.
    */
    public function setHtmlUrl(?string $value): void {
        $this->html_url = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param int|null $value Value to set for the id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the issue_comment_url property value. The issue_comment_url property
     * @param string|null $value Value to set for the issue_comment_url property.
    */
    public function setIssueCommentUrl(?string $value): void {
        $this->issue_comment_url = $value;
    }

    /**
     * Sets the issue_events_url property value. The issue_events_url property
     * @param string|null $value Value to set for the issue_events_url property.
    */
    public function setIssueEventsUrl(?string $value): void {
        $this->issue_events_url = $value;
    }

    /**
     * Sets the issues_url property value. The issues_url property
     * @param string|null $value Value to set for the issues_url property.
    */
    public function setIssuesUrl(?string $value): void {
        $this->issues_url = $value;
    }

    /**
     * Sets the is_template property value. The is_template property
     * @param bool|null $value Value to set for the is_template property.
    */
    public function setIsTemplate(?bool $value): void {
        $this->is_template = $value;
    }

    /**
     * Sets the keys_url property value. The keys_url property
     * @param string|null $value Value to set for the keys_url property.
    */
    public function setKeysUrl(?string $value): void {
        $this->keys_url = $value;
    }

    /**
     * Sets the labels_url property value. The labels_url property
     * @param string|null $value Value to set for the labels_url property.
    */
    public function setLabelsUrl(?string $value): void {
        $this->labels_url = $value;
    }

    /**
     * Sets the language property value. The language property
     * @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->language = $value;
    }

    /**
     * Sets the languages_url property value. The languages_url property
     * @param string|null $value Value to set for the languages_url property.
    */
    public function setLanguagesUrl(?string $value): void {
        $this->languages_url = $value;
    }

    /**
     * Sets the license property value. The license property
     * @param PullRequest_head_repo_license|null $value Value to set for the license property.
    */
    public function setLicense(?PullRequest_head_repo_license $value): void {
        $this->license = $value;
    }

    /**
     * Sets the master_branch property value. The master_branch property
     * @param string|null $value Value to set for the master_branch property.
    */
    public function setMasterBranch(?string $value): void {
        $this->master_branch = $value;
    }

    /**
     * Sets the merges_url property value. The merges_url property
     * @param string|null $value Value to set for the merges_url property.
    */
    public function setMergesUrl(?string $value): void {
        $this->merges_url = $value;
    }

    /**
     * Sets the milestones_url property value. The milestones_url property
     * @param string|null $value Value to set for the milestones_url property.
    */
    public function setMilestonesUrl(?string $value): void {
        $this->milestones_url = $value;
    }

    /**
     * Sets the mirror_url property value. The mirror_url property
     * @param string|null $value Value to set for the mirror_url property.
    */
    public function setMirrorUrl(?string $value): void {
        $this->mirror_url = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the node_id property value. The node_id property
     * @param string|null $value Value to set for the node_id property.
    */
    public function setNodeId(?string $value): void {
        $this->node_id = $value;
    }

    /**
     * Sets the notifications_url property value. The notifications_url property
     * @param string|null $value Value to set for the notifications_url property.
    */
    public function setNotificationsUrl(?string $value): void {
        $this->notifications_url = $value;
    }

    /**
     * Sets the open_issues property value. The open_issues property
     * @param int|null $value Value to set for the open_issues property.
    */
    public function setOpenIssues(?int $value): void {
        $this->open_issues = $value;
    }

    /**
     * Sets the open_issues_count property value. The open_issues_count property
     * @param int|null $value Value to set for the open_issues_count property.
    */
    public function setOpenIssuesCount(?int $value): void {
        $this->open_issues_count = $value;
    }

    /**
     * Sets the owner property value. The owner property
     * @param PullRequest_head_repo_owner|null $value Value to set for the owner property.
    */
    public function setOwner(?PullRequest_head_repo_owner $value): void {
        $this->owner = $value;
    }

    /**
     * Sets the permissions property value. The permissions property
     * @param PullRequest_head_repo_permissions|null $value Value to set for the permissions property.
    */
    public function setPermissions(?PullRequest_head_repo_permissions $value): void {
        $this->permissions = $value;
    }

    /**
     * Sets the pulls_url property value. The pulls_url property
     * @param string|null $value Value to set for the pulls_url property.
    */
    public function setPullsUrl(?string $value): void {
        $this->pulls_url = $value;
    }

    /**
     * Sets the pushed_at property value. The pushed_at property
     * @param DateTime|null $value Value to set for the pushed_at property.
    */
    public function setPushedAt(?DateTime $value): void {
        $this->pushed_at = $value;
    }

    /**
     * Sets the releases_url property value. The releases_url property
     * @param string|null $value Value to set for the releases_url property.
    */
    public function setReleasesUrl(?string $value): void {
        $this->releases_url = $value;
    }

    /**
     * Sets the size property value. The size property
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->size = $value;
    }

    /**
     * Sets the ssh_url property value. The ssh_url property
     * @param string|null $value Value to set for the ssh_url property.
    */
    public function setSshUrl(?string $value): void {
        $this->ssh_url = $value;
    }

    /**
     * Sets the stargazers_count property value. The stargazers_count property
     * @param int|null $value Value to set for the stargazers_count property.
    */
    public function setStargazersCount(?int $value): void {
        $this->stargazers_count = $value;
    }

    /**
     * Sets the stargazers_url property value. The stargazers_url property
     * @param string|null $value Value to set for the stargazers_url property.
    */
    public function setStargazersUrl(?string $value): void {
        $this->stargazers_url = $value;
    }

    /**
     * Sets the statuses_url property value. The statuses_url property
     * @param string|null $value Value to set for the statuses_url property.
    */
    public function setStatusesUrl(?string $value): void {
        $this->statuses_url = $value;
    }

    /**
     * Sets the subscribers_url property value. The subscribers_url property
     * @param string|null $value Value to set for the subscribers_url property.
    */
    public function setSubscribersUrl(?string $value): void {
        $this->subscribers_url = $value;
    }

    /**
     * Sets the subscription_url property value. The subscription_url property
     * @param string|null $value Value to set for the subscription_url property.
    */
    public function setSubscriptionUrl(?string $value): void {
        $this->subscription_url = $value;
    }

    /**
     * Sets the svn_url property value. The svn_url property
     * @param string|null $value Value to set for the svn_url property.
    */
    public function setSvnUrl(?string $value): void {
        $this->svn_url = $value;
    }

    /**
     * Sets the tags_url property value. The tags_url property
     * @param string|null $value Value to set for the tags_url property.
    */
    public function setTagsUrl(?string $value): void {
        $this->tags_url = $value;
    }

    /**
     * Sets the teams_url property value. The teams_url property
     * @param string|null $value Value to set for the teams_url property.
    */
    public function setTeamsUrl(?string $value): void {
        $this->teams_url = $value;
    }

    /**
     * Sets the temp_clone_token property value. The temp_clone_token property
     * @param string|null $value Value to set for the temp_clone_token property.
    */
    public function setTempCloneToken(?string $value): void {
        $this->temp_clone_token = $value;
    }

    /**
     * Sets the topics property value. The topics property
     * @param array<string>|null $value Value to set for the topics property.
    */
    public function setTopics(?array $value): void {
        $this->topics = $value;
    }

    /**
     * Sets the trees_url property value. The trees_url property
     * @param string|null $value Value to set for the trees_url property.
    */
    public function setTreesUrl(?string $value): void {
        $this->trees_url = $value;
    }

    /**
     * Sets the updated_at property value. The updated_at property
     * @param DateTime|null $value Value to set for the updated_at property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updated_at = $value;
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

    /**
     * Sets the visibility property value. The repository visibility: public, private, or internal.
     * @param string|null $value Value to set for the visibility property.
    */
    public function setVisibility(?string $value): void {
        $this->visibility = $value;
    }

    /**
     * Sets the watchers property value. The watchers property
     * @param int|null $value Value to set for the watchers property.
    */
    public function setWatchers(?int $value): void {
        $this->watchers = $value;
    }

    /**
     * Sets the watchers_count property value. The watchers_count property
     * @param int|null $value Value to set for the watchers_count property.
    */
    public function setWatchersCount(?int $value): void {
        $this->watchers_count = $value;
    }

    /**
     * Sets the web_commit_signoff_required property value. The web_commit_signoff_required property
     * @param bool|null $value Value to set for the web_commit_signoff_required property.
    */
    public function setWebCommitSignoffRequired(?bool $value): void {
        $this->web_commit_signoff_required = $value;
    }

}
