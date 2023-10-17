<?php

namespace Baywet\Githubtododemo\Github\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Pull requests let you tell others about changes you've pushed to a repository on GitHub. Once a pull request is sent, interested parties can review the set of changes, discuss potential modifications, and even push follow-up commits if necessary.
*/
class PullRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var PullRequest__links|null $_links The _links property
    */
    private ?PullRequest__links $_links = null;
    
    /**
     * @var string|null $active_lock_reason The active_lock_reason property
    */
    private ?string $active_lock_reason = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $additions The additions property
    */
    private ?int $additions = null;
    
    /**
     * @var NullableSimpleUser|null $assignee A GitHub user.
    */
    private ?NullableSimpleUser $assignee = null;
    
    /**
     * @var array<SimpleUser>|null $assignees The assignees property
    */
    private ?array $assignees = null;
    
    /**
     * @var AuthorAssociation|null $author_association How the author is associated with the repository.
    */
    private ?AuthorAssociation $author_association = null;
    
    /**
     * @var AutoMerge|null $auto_merge The status of auto merging a pull request.
    */
    private ?AutoMerge $auto_merge = null;
    
    /**
     * @var PullRequest_base|null $base The base property
    */
    private ?PullRequest_base $base = null;
    
    /**
     * @var string|null $body The body property
    */
    private ?string $body = null;
    
    /**
     * @var int|null $changed_files The changed_files property
    */
    private ?int $changed_files = null;
    
    /**
     * @var DateTime|null $closed_at The closed_at property
    */
    private ?DateTime $closed_at = null;
    
    /**
     * @var int|null $comments The comments property
    */
    private ?int $comments = null;
    
    /**
     * @var string|null $comments_url The comments_url property
    */
    private ?string $comments_url = null;
    
    /**
     * @var int|null $commits The commits property
    */
    private ?int $commits = null;
    
    /**
     * @var string|null $commits_url The commits_url property
    */
    private ?string $commits_url = null;
    
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var int|null $deletions The deletions property
    */
    private ?int $deletions = null;
    
    /**
     * @var string|null $diff_url The diff_url property
    */
    private ?string $diff_url = null;
    
    /**
     * @var bool|null $draft Indicates whether or not the pull request is a draft.
    */
    private ?bool $draft = null;
    
    /**
     * @var PullRequest_head|null $head The head property
    */
    private ?PullRequest_head $head = null;
    
    /**
     * @var string|null $html_url The html_url property
    */
    private ?string $html_url = null;
    
    /**
     * @var int|null $id The id property
    */
    private ?int $id = null;
    
    /**
     * @var string|null $issue_url The issue_url property
    */
    private ?string $issue_url = null;
    
    /**
     * @var array<PullRequest_labels>|null $labels The labels property
    */
    private ?array $labels = null;
    
    /**
     * @var bool|null $locked The locked property
    */
    private ?bool $locked = null;
    
    /**
     * @var bool|null $maintainer_can_modify Indicates whether maintainers can modify the pull request.
    */
    private ?bool $maintainer_can_modify = null;
    
    /**
     * @var string|null $merge_commit_sha The merge_commit_sha property
    */
    private ?string $merge_commit_sha = null;
    
    /**
     * @var bool|null $mergeable The mergeable property
    */
    private ?bool $mergeable = null;
    
    /**
     * @var string|null $mergeable_state The mergeable_state property
    */
    private ?string $mergeable_state = null;
    
    /**
     * @var bool|null $merged The merged property
    */
    private ?bool $merged = null;
    
    /**
     * @var DateTime|null $merged_at The merged_at property
    */
    private ?DateTime $merged_at = null;
    
    /**
     * @var NullableSimpleUser|null $merged_by A GitHub user.
    */
    private ?NullableSimpleUser $merged_by = null;
    
    /**
     * @var NullableMilestone|null $milestone A collection of related issues and pull requests.
    */
    private ?NullableMilestone $milestone = null;
    
    /**
     * @var string|null $node_id The node_id property
    */
    private ?string $node_id = null;
    
    /**
     * @var int|null $number Number uniquely identifying the pull request within its repository.
    */
    private ?int $number = null;
    
    /**
     * @var string|null $patch_url The patch_url property
    */
    private ?string $patch_url = null;
    
    /**
     * @var bool|null $rebaseable The rebaseable property
    */
    private ?bool $rebaseable = null;
    
    /**
     * @var array<SimpleUser>|null $requested_reviewers The requested_reviewers property
    */
    private ?array $requested_reviewers = null;
    
    /**
     * @var array<TeamSimple>|null $requested_teams The requested_teams property
    */
    private ?array $requested_teams = null;
    
    /**
     * @var string|null $review_comment_url The review_comment_url property
    */
    private ?string $review_comment_url = null;
    
    /**
     * @var int|null $review_comments The review_comments property
    */
    private ?int $review_comments = null;
    
    /**
     * @var string|null $review_comments_url The review_comments_url property
    */
    private ?string $review_comments_url = null;
    
    /**
     * @var PullRequest_state|null $state State of this Pull Request. Either `open` or `closed`.
    */
    private ?PullRequest_state $state = null;
    
    /**
     * @var string|null $statuses_url The statuses_url property
    */
    private ?string $statuses_url = null;
    
    /**
     * @var string|null $title The title of the pull request.
    */
    private ?string $title = null;
    
    /**
     * @var DateTime|null $updated_at The updated_at property
    */
    private ?DateTime $updated_at = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * @var SimpleUser|null $user A GitHub user.
    */
    private ?SimpleUser $user = null;
    
    /**
     * Instantiates a new pullRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PullRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PullRequest {
        return new PullRequest();
    }

    /**
     * Gets the active_lock_reason property value. The active_lock_reason property
     * @return string|null
    */
    public function getActiveLockReason(): ?string {
        return $this->active_lock_reason;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the additions property value. The additions property
     * @return int|null
    */
    public function getAdditions(): ?int {
        return $this->additions;
    }

    /**
     * Gets the assignee property value. A GitHub user.
     * @return NullableSimpleUser|null
    */
    public function getAssignee(): ?NullableSimpleUser {
        return $this->assignee;
    }

    /**
     * Gets the assignees property value. The assignees property
     * @return array<SimpleUser>|null
    */
    public function getAssignees(): ?array {
        return $this->assignees;
    }

    /**
     * Gets the author_association property value. How the author is associated with the repository.
     * @return AuthorAssociation|null
    */
    public function getAuthorAssociation(): ?AuthorAssociation {
        return $this->author_association;
    }

    /**
     * Gets the auto_merge property value. The status of auto merging a pull request.
     * @return AutoMerge|null
    */
    public function getAutoMerge(): ?AutoMerge {
        return $this->auto_merge;
    }

    /**
     * Gets the base property value. The base property
     * @return PullRequest_base|null
    */
    public function getBase(): ?PullRequest_base {
        return $this->base;
    }

    /**
     * Gets the body property value. The body property
     * @return string|null
    */
    public function getBody(): ?string {
        return $this->body;
    }

    /**
     * Gets the changed_files property value. The changed_files property
     * @return int|null
    */
    public function getChangedFiles(): ?int {
        return $this->changed_files;
    }

    /**
     * Gets the closed_at property value. The closed_at property
     * @return DateTime|null
    */
    public function getClosedAt(): ?DateTime {
        return $this->closed_at;
    }

    /**
     * Gets the comments property value. The comments property
     * @return int|null
    */
    public function getComments(): ?int {
        return $this->comments;
    }

    /**
     * Gets the comments_url property value. The comments_url property
     * @return string|null
    */
    public function getCommentsUrl(): ?string {
        return $this->comments_url;
    }

    /**
     * Gets the commits property value. The commits property
     * @return int|null
    */
    public function getCommits(): ?int {
        return $this->commits;
    }

    /**
     * Gets the commits_url property value. The commits_url property
     * @return string|null
    */
    public function getCommitsUrl(): ?string {
        return $this->commits_url;
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * Gets the deletions property value. The deletions property
     * @return int|null
    */
    public function getDeletions(): ?int {
        return $this->deletions;
    }

    /**
     * Gets the diff_url property value. The diff_url property
     * @return string|null
    */
    public function getDiffUrl(): ?string {
        return $this->diff_url;
    }

    /**
     * Gets the draft property value. Indicates whether or not the pull request is a draft.
     * @return bool|null
    */
    public function getDraft(): ?bool {
        return $this->draft;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '_links' => fn(ParseNode $n) => $o->setlinks($n->getObjectValue([PullRequest__links::class, 'createFromDiscriminatorValue'])),
            'active_lock_reason' => fn(ParseNode $n) => $o->setActiveLockReason($n->getStringValue()),
            'additions' => fn(ParseNode $n) => $o->setAdditions($n->getIntegerValue()),
            'assignee' => fn(ParseNode $n) => $o->setAssignee($n->getObjectValue([NullableSimpleUser::class, 'createFromDiscriminatorValue'])),
            'assignees' => fn(ParseNode $n) => $o->setAssignees($n->getCollectionOfObjectValues([SimpleUser::class, 'createFromDiscriminatorValue'])),
            'author_association' => fn(ParseNode $n) => $o->setAuthorAssociation($n->getEnumValue(AuthorAssociation::class)),
            'auto_merge' => fn(ParseNode $n) => $o->setAutoMerge($n->getObjectValue([AutoMerge::class, 'createFromDiscriminatorValue'])),
            'base' => fn(ParseNode $n) => $o->setBase($n->getObjectValue([PullRequest_base::class, 'createFromDiscriminatorValue'])),
            'body' => fn(ParseNode $n) => $o->setBody($n->getStringValue()),
            'changed_files' => fn(ParseNode $n) => $o->setChangedFiles($n->getIntegerValue()),
            'closed_at' => fn(ParseNode $n) => $o->setClosedAt($n->getDateTimeValue()),
            'comments' => fn(ParseNode $n) => $o->setComments($n->getIntegerValue()),
            'comments_url' => fn(ParseNode $n) => $o->setCommentsUrl($n->getStringValue()),
            'commits' => fn(ParseNode $n) => $o->setCommits($n->getIntegerValue()),
            'commits_url' => fn(ParseNode $n) => $o->setCommitsUrl($n->getStringValue()),
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'deletions' => fn(ParseNode $n) => $o->setDeletions($n->getIntegerValue()),
            'diff_url' => fn(ParseNode $n) => $o->setDiffUrl($n->getStringValue()),
            'draft' => fn(ParseNode $n) => $o->setDraft($n->getBooleanValue()),
            'head' => fn(ParseNode $n) => $o->setHead($n->getObjectValue([PullRequest_head::class, 'createFromDiscriminatorValue'])),
            'html_url' => fn(ParseNode $n) => $o->setHtmlUrl($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'issue_url' => fn(ParseNode $n) => $o->setIssueUrl($n->getStringValue()),
            'labels' => fn(ParseNode $n) => $o->setLabels($n->getCollectionOfObjectValues([PullRequest_labels::class, 'createFromDiscriminatorValue'])),
            'locked' => fn(ParseNode $n) => $o->setLocked($n->getBooleanValue()),
            'maintainer_can_modify' => fn(ParseNode $n) => $o->setMaintainerCanModify($n->getBooleanValue()),
            'merge_commit_sha' => fn(ParseNode $n) => $o->setMergeCommitSha($n->getStringValue()),
            'mergeable' => fn(ParseNode $n) => $o->setMergeable($n->getBooleanValue()),
            'mergeable_state' => fn(ParseNode $n) => $o->setMergeableState($n->getStringValue()),
            'merged' => fn(ParseNode $n) => $o->setMerged($n->getBooleanValue()),
            'merged_at' => fn(ParseNode $n) => $o->setMergedAt($n->getDateTimeValue()),
            'merged_by' => fn(ParseNode $n) => $o->setMergedBy($n->getObjectValue([NullableSimpleUser::class, 'createFromDiscriminatorValue'])),
            'milestone' => fn(ParseNode $n) => $o->setMilestone($n->getObjectValue([NullableMilestone::class, 'createFromDiscriminatorValue'])),
            'node_id' => fn(ParseNode $n) => $o->setNodeId($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getIntegerValue()),
            'patch_url' => fn(ParseNode $n) => $o->setPatchUrl($n->getStringValue()),
            'rebaseable' => fn(ParseNode $n) => $o->setRebaseable($n->getBooleanValue()),
            'requested_reviewers' => fn(ParseNode $n) => $o->setRequestedReviewers($n->getCollectionOfObjectValues([SimpleUser::class, 'createFromDiscriminatorValue'])),
            'requested_teams' => fn(ParseNode $n) => $o->setRequestedTeams($n->getCollectionOfObjectValues([TeamSimple::class, 'createFromDiscriminatorValue'])),
            'review_comment_url' => fn(ParseNode $n) => $o->setReviewCommentUrl($n->getStringValue()),
            'review_comments' => fn(ParseNode $n) => $o->setReviewComments($n->getIntegerValue()),
            'review_comments_url' => fn(ParseNode $n) => $o->setReviewCommentsUrl($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(PullRequest_state::class)),
            'statuses_url' => fn(ParseNode $n) => $o->setStatusesUrl($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'updated_at' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([SimpleUser::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the head property value. The head property
     * @return PullRequest_head|null
    */
    public function getHead(): ?PullRequest_head {
        return $this->head;
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
     * Gets the issue_url property value. The issue_url property
     * @return string|null
    */
    public function getIssueUrl(): ?string {
        return $this->issue_url;
    }

    /**
     * Gets the labels property value. The labels property
     * @return array<PullRequest_labels>|null
    */
    public function getLabels(): ?array {
        return $this->labels;
    }

    /**
     * Gets the _links property value. The _links property
     * @return PullRequest__links|null
    */
    public function getlinks(): ?PullRequest__links {
        return $this->_links;
    }

    /**
     * Gets the locked property value. The locked property
     * @return bool|null
    */
    public function getLocked(): ?bool {
        return $this->locked;
    }

    /**
     * Gets the maintainer_can_modify property value. Indicates whether maintainers can modify the pull request.
     * @return bool|null
    */
    public function getMaintainerCanModify(): ?bool {
        return $this->maintainer_can_modify;
    }

    /**
     * Gets the mergeable property value. The mergeable property
     * @return bool|null
    */
    public function getMergeable(): ?bool {
        return $this->mergeable;
    }

    /**
     * Gets the mergeable_state property value. The mergeable_state property
     * @return string|null
    */
    public function getMergeableState(): ?string {
        return $this->mergeable_state;
    }

    /**
     * Gets the merge_commit_sha property value. The merge_commit_sha property
     * @return string|null
    */
    public function getMergeCommitSha(): ?string {
        return $this->merge_commit_sha;
    }

    /**
     * Gets the merged property value. The merged property
     * @return bool|null
    */
    public function getMerged(): ?bool {
        return $this->merged;
    }

    /**
     * Gets the merged_at property value. The merged_at property
     * @return DateTime|null
    */
    public function getMergedAt(): ?DateTime {
        return $this->merged_at;
    }

    /**
     * Gets the merged_by property value. A GitHub user.
     * @return NullableSimpleUser|null
    */
    public function getMergedBy(): ?NullableSimpleUser {
        return $this->merged_by;
    }

    /**
     * Gets the milestone property value. A collection of related issues and pull requests.
     * @return NullableMilestone|null
    */
    public function getMilestone(): ?NullableMilestone {
        return $this->milestone;
    }

    /**
     * Gets the node_id property value. The node_id property
     * @return string|null
    */
    public function getNodeId(): ?string {
        return $this->node_id;
    }

    /**
     * Gets the number property value. Number uniquely identifying the pull request within its repository.
     * @return int|null
    */
    public function getNumber(): ?int {
        return $this->number;
    }

    /**
     * Gets the patch_url property value. The patch_url property
     * @return string|null
    */
    public function getPatchUrl(): ?string {
        return $this->patch_url;
    }

    /**
     * Gets the rebaseable property value. The rebaseable property
     * @return bool|null
    */
    public function getRebaseable(): ?bool {
        return $this->rebaseable;
    }

    /**
     * Gets the requested_reviewers property value. The requested_reviewers property
     * @return array<SimpleUser>|null
    */
    public function getRequestedReviewers(): ?array {
        return $this->requested_reviewers;
    }

    /**
     * Gets the requested_teams property value. The requested_teams property
     * @return array<TeamSimple>|null
    */
    public function getRequestedTeams(): ?array {
        return $this->requested_teams;
    }

    /**
     * Gets the review_comments property value. The review_comments property
     * @return int|null
    */
    public function getReviewComments(): ?int {
        return $this->review_comments;
    }

    /**
     * Gets the review_comments_url property value. The review_comments_url property
     * @return string|null
    */
    public function getReviewCommentsUrl(): ?string {
        return $this->review_comments_url;
    }

    /**
     * Gets the review_comment_url property value. The review_comment_url property
     * @return string|null
    */
    public function getReviewCommentUrl(): ?string {
        return $this->review_comment_url;
    }

    /**
     * Gets the state property value. State of this Pull Request. Either `open` or `closed`.
     * @return PullRequest_state|null
    */
    public function getState(): ?PullRequest_state {
        return $this->state;
    }

    /**
     * Gets the statuses_url property value. The statuses_url property
     * @return string|null
    */
    public function getStatusesUrl(): ?string {
        return $this->statuses_url;
    }

    /**
     * Gets the title property value. The title of the pull request.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
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
     * Gets the user property value. A GitHub user.
     * @return SimpleUser|null
    */
    public function getUser(): ?SimpleUser {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('active_lock_reason', $this->getActiveLockReason());
        $writer->writeIntegerValue('additions', $this->getAdditions());
        $writer->writeObjectValue('assignee', $this->getAssignee());
        $writer->writeCollectionOfObjectValues('assignees', $this->getAssignees());
        $writer->writeEnumValue('author_association', $this->getAuthorAssociation());
        $writer->writeObjectValue('auto_merge', $this->getAutoMerge());
        $writer->writeObjectValue('base', $this->getBase());
        $writer->writeStringValue('body', $this->getBody());
        $writer->writeIntegerValue('changed_files', $this->getChangedFiles());
        $writer->writeDateTimeValue('closed_at', $this->getClosedAt());
        $writer->writeIntegerValue('comments', $this->getComments());
        $writer->writeStringValue('comments_url', $this->getCommentsUrl());
        $writer->writeIntegerValue('commits', $this->getCommits());
        $writer->writeStringValue('commits_url', $this->getCommitsUrl());
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeIntegerValue('deletions', $this->getDeletions());
        $writer->writeStringValue('diff_url', $this->getDiffUrl());
        $writer->writeBooleanValue('draft', $this->getDraft());
        $writer->writeObjectValue('head', $this->getHead());
        $writer->writeStringValue('html_url', $this->getHtmlUrl());
        $writer->writeIntegerValue('id', $this->getId());
        $writer->writeStringValue('issue_url', $this->getIssueUrl());
        $writer->writeCollectionOfObjectValues('labels', $this->getLabels());
        $writer->writeBooleanValue('locked', $this->getLocked());
        $writer->writeBooleanValue('maintainer_can_modify', $this->getMaintainerCanModify());
        $writer->writeBooleanValue('mergeable', $this->getMergeable());
        $writer->writeStringValue('mergeable_state', $this->getMergeableState());
        $writer->writeBooleanValue('merged', $this->getMerged());
        $writer->writeDateTimeValue('merged_at', $this->getMergedAt());
        $writer->writeObjectValue('merged_by', $this->getMergedBy());
        $writer->writeStringValue('merge_commit_sha', $this->getMergeCommitSha());
        $writer->writeObjectValue('milestone', $this->getMilestone());
        $writer->writeStringValue('node_id', $this->getNodeId());
        $writer->writeIntegerValue('number', $this->getNumber());
        $writer->writeStringValue('patch_url', $this->getPatchUrl());
        $writer->writeBooleanValue('rebaseable', $this->getRebaseable());
        $writer->writeCollectionOfObjectValues('requested_reviewers', $this->getRequestedReviewers());
        $writer->writeCollectionOfObjectValues('requested_teams', $this->getRequestedTeams());
        $writer->writeIntegerValue('review_comments', $this->getReviewComments());
        $writer->writeStringValue('review_comments_url', $this->getReviewCommentsUrl());
        $writer->writeStringValue('review_comment_url', $this->getReviewCommentUrl());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('statuses_url', $this->getStatusesUrl());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeDateTimeValue('updated_at', $this->getUpdatedAt());
        $writer->writeStringValue('url', $this->getUrl());
        $writer->writeObjectValue('user', $this->getUser());
        $writer->writeObjectValue('_links', $this->getlinks());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the active_lock_reason property value. The active_lock_reason property
     * @param string|null $value Value to set for the active_lock_reason property.
    */
    public function setActiveLockReason(?string $value): void {
        $this->active_lock_reason = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the additions property value. The additions property
     * @param int|null $value Value to set for the additions property.
    */
    public function setAdditions(?int $value): void {
        $this->additions = $value;
    }

    /**
     * Sets the assignee property value. A GitHub user.
     * @param NullableSimpleUser|null $value Value to set for the assignee property.
    */
    public function setAssignee(?NullableSimpleUser $value): void {
        $this->assignee = $value;
    }

    /**
     * Sets the assignees property value. The assignees property
     * @param array<SimpleUser>|null $value Value to set for the assignees property.
    */
    public function setAssignees(?array $value): void {
        $this->assignees = $value;
    }

    /**
     * Sets the author_association property value. How the author is associated with the repository.
     * @param AuthorAssociation|null $value Value to set for the author_association property.
    */
    public function setAuthorAssociation(?AuthorAssociation $value): void {
        $this->author_association = $value;
    }

    /**
     * Sets the auto_merge property value. The status of auto merging a pull request.
     * @param AutoMerge|null $value Value to set for the auto_merge property.
    */
    public function setAutoMerge(?AutoMerge $value): void {
        $this->auto_merge = $value;
    }

    /**
     * Sets the base property value. The base property
     * @param PullRequest_base|null $value Value to set for the base property.
    */
    public function setBase(?PullRequest_base $value): void {
        $this->base = $value;
    }

    /**
     * Sets the body property value. The body property
     * @param string|null $value Value to set for the body property.
    */
    public function setBody(?string $value): void {
        $this->body = $value;
    }

    /**
     * Sets the changed_files property value. The changed_files property
     * @param int|null $value Value to set for the changed_files property.
    */
    public function setChangedFiles(?int $value): void {
        $this->changed_files = $value;
    }

    /**
     * Sets the closed_at property value. The closed_at property
     * @param DateTime|null $value Value to set for the closed_at property.
    */
    public function setClosedAt(?DateTime $value): void {
        $this->closed_at = $value;
    }

    /**
     * Sets the comments property value. The comments property
     * @param int|null $value Value to set for the comments property.
    */
    public function setComments(?int $value): void {
        $this->comments = $value;
    }

    /**
     * Sets the comments_url property value. The comments_url property
     * @param string|null $value Value to set for the comments_url property.
    */
    public function setCommentsUrl(?string $value): void {
        $this->comments_url = $value;
    }

    /**
     * Sets the commits property value. The commits property
     * @param int|null $value Value to set for the commits property.
    */
    public function setCommits(?int $value): void {
        $this->commits = $value;
    }

    /**
     * Sets the commits_url property value. The commits_url property
     * @param string|null $value Value to set for the commits_url property.
    */
    public function setCommitsUrl(?string $value): void {
        $this->commits_url = $value;
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the deletions property value. The deletions property
     * @param int|null $value Value to set for the deletions property.
    */
    public function setDeletions(?int $value): void {
        $this->deletions = $value;
    }

    /**
     * Sets the diff_url property value. The diff_url property
     * @param string|null $value Value to set for the diff_url property.
    */
    public function setDiffUrl(?string $value): void {
        $this->diff_url = $value;
    }

    /**
     * Sets the draft property value. Indicates whether or not the pull request is a draft.
     * @param bool|null $value Value to set for the draft property.
    */
    public function setDraft(?bool $value): void {
        $this->draft = $value;
    }

    /**
     * Sets the head property value. The head property
     * @param PullRequest_head|null $value Value to set for the head property.
    */
    public function setHead(?PullRequest_head $value): void {
        $this->head = $value;
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
     * Sets the issue_url property value. The issue_url property
     * @param string|null $value Value to set for the issue_url property.
    */
    public function setIssueUrl(?string $value): void {
        $this->issue_url = $value;
    }

    /**
     * Sets the labels property value. The labels property
     * @param array<PullRequest_labels>|null $value Value to set for the labels property.
    */
    public function setLabels(?array $value): void {
        $this->labels = $value;
    }

    /**
     * Sets the _links property value. The _links property
     * @param PullRequest__links|null $value Value to set for the _links property.
    */
    public function setlinks(?PullRequest__links $value): void {
        $this->_links = $value;
    }

    /**
     * Sets the locked property value. The locked property
     * @param bool|null $value Value to set for the locked property.
    */
    public function setLocked(?bool $value): void {
        $this->locked = $value;
    }

    /**
     * Sets the maintainer_can_modify property value. Indicates whether maintainers can modify the pull request.
     * @param bool|null $value Value to set for the maintainer_can_modify property.
    */
    public function setMaintainerCanModify(?bool $value): void {
        $this->maintainer_can_modify = $value;
    }

    /**
     * Sets the mergeable property value. The mergeable property
     * @param bool|null $value Value to set for the mergeable property.
    */
    public function setMergeable(?bool $value): void {
        $this->mergeable = $value;
    }

    /**
     * Sets the mergeable_state property value. The mergeable_state property
     * @param string|null $value Value to set for the mergeable_state property.
    */
    public function setMergeableState(?string $value): void {
        $this->mergeable_state = $value;
    }

    /**
     * Sets the merge_commit_sha property value. The merge_commit_sha property
     * @param string|null $value Value to set for the merge_commit_sha property.
    */
    public function setMergeCommitSha(?string $value): void {
        $this->merge_commit_sha = $value;
    }

    /**
     * Sets the merged property value. The merged property
     * @param bool|null $value Value to set for the merged property.
    */
    public function setMerged(?bool $value): void {
        $this->merged = $value;
    }

    /**
     * Sets the merged_at property value. The merged_at property
     * @param DateTime|null $value Value to set for the merged_at property.
    */
    public function setMergedAt(?DateTime $value): void {
        $this->merged_at = $value;
    }

    /**
     * Sets the merged_by property value. A GitHub user.
     * @param NullableSimpleUser|null $value Value to set for the merged_by property.
    */
    public function setMergedBy(?NullableSimpleUser $value): void {
        $this->merged_by = $value;
    }

    /**
     * Sets the milestone property value. A collection of related issues and pull requests.
     * @param NullableMilestone|null $value Value to set for the milestone property.
    */
    public function setMilestone(?NullableMilestone $value): void {
        $this->milestone = $value;
    }

    /**
     * Sets the node_id property value. The node_id property
     * @param string|null $value Value to set for the node_id property.
    */
    public function setNodeId(?string $value): void {
        $this->node_id = $value;
    }

    /**
     * Sets the number property value. Number uniquely identifying the pull request within its repository.
     * @param int|null $value Value to set for the number property.
    */
    public function setNumber(?int $value): void {
        $this->number = $value;
    }

    /**
     * Sets the patch_url property value. The patch_url property
     * @param string|null $value Value to set for the patch_url property.
    */
    public function setPatchUrl(?string $value): void {
        $this->patch_url = $value;
    }

    /**
     * Sets the rebaseable property value. The rebaseable property
     * @param bool|null $value Value to set for the rebaseable property.
    */
    public function setRebaseable(?bool $value): void {
        $this->rebaseable = $value;
    }

    /**
     * Sets the requested_reviewers property value. The requested_reviewers property
     * @param array<SimpleUser>|null $value Value to set for the requested_reviewers property.
    */
    public function setRequestedReviewers(?array $value): void {
        $this->requested_reviewers = $value;
    }

    /**
     * Sets the requested_teams property value. The requested_teams property
     * @param array<TeamSimple>|null $value Value to set for the requested_teams property.
    */
    public function setRequestedTeams(?array $value): void {
        $this->requested_teams = $value;
    }

    /**
     * Sets the review_comments property value. The review_comments property
     * @param int|null $value Value to set for the review_comments property.
    */
    public function setReviewComments(?int $value): void {
        $this->review_comments = $value;
    }

    /**
     * Sets the review_comments_url property value. The review_comments_url property
     * @param string|null $value Value to set for the review_comments_url property.
    */
    public function setReviewCommentsUrl(?string $value): void {
        $this->review_comments_url = $value;
    }

    /**
     * Sets the review_comment_url property value. The review_comment_url property
     * @param string|null $value Value to set for the review_comment_url property.
    */
    public function setReviewCommentUrl(?string $value): void {
        $this->review_comment_url = $value;
    }

    /**
     * Sets the state property value. State of this Pull Request. Either `open` or `closed`.
     * @param PullRequest_state|null $value Value to set for the state property.
    */
    public function setState(?PullRequest_state $value): void {
        $this->state = $value;
    }

    /**
     * Sets the statuses_url property value. The statuses_url property
     * @param string|null $value Value to set for the statuses_url property.
    */
    public function setStatusesUrl(?string $value): void {
        $this->statuses_url = $value;
    }

    /**
     * Sets the title property value. The title of the pull request.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
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
     * Sets the user property value. A GitHub user.
     * @param SimpleUser|null $value Value to set for the user property.
    */
    public function setUser(?SimpleUser $value): void {
        $this->user = $value;
    }

}
