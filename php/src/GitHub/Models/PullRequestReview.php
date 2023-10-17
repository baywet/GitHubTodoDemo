<?php

namespace Baywet\Githubtododemo\Github\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Pull Request Reviews are reviews on pull requests.
*/
class PullRequestReview implements AdditionalDataHolder, Parsable 
{
    /**
     * @var PullRequestReview__links|null $_links The _links property
    */
    private ?PullRequestReview__links $_links = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AuthorAssociation|null $author_association How the author is associated with the repository.
    */
    private ?AuthorAssociation $author_association = null;
    
    /**
     * @var string|null $body The text of the review.
    */
    private ?string $body = null;
    
    /**
     * @var string|null $body_html The body_html property
    */
    private ?string $body_html = null;
    
    /**
     * @var string|null $body_text The body_text property
    */
    private ?string $body_text = null;
    
    /**
     * @var string|null $commit_id A commit SHA for the review. If the commit object was garbage collected or forcibly deleted, then it no longer exists in Git and this value will be `null`.
    */
    private ?string $commit_id = null;
    
    /**
     * @var string|null $html_url The html_url property
    */
    private ?string $html_url = null;
    
    /**
     * @var int|null $id Unique identifier of the review
    */
    private ?int $id = null;
    
    /**
     * @var string|null $node_id The node_id property
    */
    private ?string $node_id = null;
    
    /**
     * @var string|null $pull_request_url The pull_request_url property
    */
    private ?string $pull_request_url = null;
    
    /**
     * @var string|null $state The state property
    */
    private ?string $state = null;
    
    /**
     * @var DateTime|null $submitted_at The submitted_at property
    */
    private ?DateTime $submitted_at = null;
    
    /**
     * @var NullableSimpleUser|null $user A GitHub user.
    */
    private ?NullableSimpleUser $user = null;
    
    /**
     * Instantiates a new pullRequestReview and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PullRequestReview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PullRequestReview {
        return new PullRequestReview();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the author_association property value. How the author is associated with the repository.
     * @return AuthorAssociation|null
    */
    public function getAuthorAssociation(): ?AuthorAssociation {
        return $this->author_association;
    }

    /**
     * Gets the body property value. The text of the review.
     * @return string|null
    */
    public function getBody(): ?string {
        return $this->body;
    }

    /**
     * Gets the body_html property value. The body_html property
     * @return string|null
    */
    public function getBodyHtml(): ?string {
        return $this->body_html;
    }

    /**
     * Gets the body_text property value. The body_text property
     * @return string|null
    */
    public function getBodyText(): ?string {
        return $this->body_text;
    }

    /**
     * Gets the commit_id property value. A commit SHA for the review. If the commit object was garbage collected or forcibly deleted, then it no longer exists in Git and this value will be `null`.
     * @return string|null
    */
    public function getCommitId(): ?string {
        return $this->commit_id;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '_links' => fn(ParseNode $n) => $o->setlinks($n->getObjectValue([PullRequestReview__links::class, 'createFromDiscriminatorValue'])),
            'author_association' => fn(ParseNode $n) => $o->setAuthorAssociation($n->getEnumValue(AuthorAssociation::class)),
            'body' => fn(ParseNode $n) => $o->setBody($n->getStringValue()),
            'body_html' => fn(ParseNode $n) => $o->setBodyHtml($n->getStringValue()),
            'body_text' => fn(ParseNode $n) => $o->setBodyText($n->getStringValue()),
            'commit_id' => fn(ParseNode $n) => $o->setCommitId($n->getStringValue()),
            'html_url' => fn(ParseNode $n) => $o->setHtmlUrl($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'node_id' => fn(ParseNode $n) => $o->setNodeId($n->getStringValue()),
            'pull_request_url' => fn(ParseNode $n) => $o->setPullRequestUrl($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'submitted_at' => fn(ParseNode $n) => $o->setSubmittedAt($n->getDateTimeValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([NullableSimpleUser::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the html_url property value. The html_url property
     * @return string|null
    */
    public function getHtmlUrl(): ?string {
        return $this->html_url;
    }

    /**
     * Gets the id property value. Unique identifier of the review
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the _links property value. The _links property
     * @return PullRequestReview__links|null
    */
    public function getlinks(): ?PullRequestReview__links {
        return $this->_links;
    }

    /**
     * Gets the node_id property value. The node_id property
     * @return string|null
    */
    public function getNodeId(): ?string {
        return $this->node_id;
    }

    /**
     * Gets the pull_request_url property value. The pull_request_url property
     * @return string|null
    */
    public function getPullRequestUrl(): ?string {
        return $this->pull_request_url;
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the submitted_at property value. The submitted_at property
     * @return DateTime|null
    */
    public function getSubmittedAt(): ?DateTime {
        return $this->submitted_at;
    }

    /**
     * Gets the user property value. A GitHub user.
     * @return NullableSimpleUser|null
    */
    public function getUser(): ?NullableSimpleUser {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('author_association', $this->getAuthorAssociation());
        $writer->writeStringValue('body', $this->getBody());
        $writer->writeStringValue('body_html', $this->getBodyHtml());
        $writer->writeStringValue('body_text', $this->getBodyText());
        $writer->writeStringValue('commit_id', $this->getCommitId());
        $writer->writeStringValue('html_url', $this->getHtmlUrl());
        $writer->writeIntegerValue('id', $this->getId());
        $writer->writeStringValue('node_id', $this->getNodeId());
        $writer->writeStringValue('pull_request_url', $this->getPullRequestUrl());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeDateTimeValue('submitted_at', $this->getSubmittedAt());
        $writer->writeObjectValue('user', $this->getUser());
        $writer->writeObjectValue('_links', $this->getlinks());
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
     * Sets the author_association property value. How the author is associated with the repository.
     * @param AuthorAssociation|null $value Value to set for the author_association property.
    */
    public function setAuthorAssociation(?AuthorAssociation $value): void {
        $this->author_association = $value;
    }

    /**
     * Sets the body property value. The text of the review.
     * @param string|null $value Value to set for the body property.
    */
    public function setBody(?string $value): void {
        $this->body = $value;
    }

    /**
     * Sets the body_html property value. The body_html property
     * @param string|null $value Value to set for the body_html property.
    */
    public function setBodyHtml(?string $value): void {
        $this->body_html = $value;
    }

    /**
     * Sets the body_text property value. The body_text property
     * @param string|null $value Value to set for the body_text property.
    */
    public function setBodyText(?string $value): void {
        $this->body_text = $value;
    }

    /**
     * Sets the commit_id property value. A commit SHA for the review. If the commit object was garbage collected or forcibly deleted, then it no longer exists in Git and this value will be `null`.
     * @param string|null $value Value to set for the commit_id property.
    */
    public function setCommitId(?string $value): void {
        $this->commit_id = $value;
    }

    /**
     * Sets the html_url property value. The html_url property
     * @param string|null $value Value to set for the html_url property.
    */
    public function setHtmlUrl(?string $value): void {
        $this->html_url = $value;
    }

    /**
     * Sets the id property value. Unique identifier of the review
     * @param int|null $value Value to set for the id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the _links property value. The _links property
     * @param PullRequestReview__links|null $value Value to set for the _links property.
    */
    public function setlinks(?PullRequestReview__links $value): void {
        $this->_links = $value;
    }

    /**
     * Sets the node_id property value. The node_id property
     * @param string|null $value Value to set for the node_id property.
    */
    public function setNodeId(?string $value): void {
        $this->node_id = $value;
    }

    /**
     * Sets the pull_request_url property value. The pull_request_url property
     * @param string|null $value Value to set for the pull_request_url property.
    */
    public function setPullRequestUrl(?string $value): void {
        $this->pull_request_url = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->state = $value;
    }

    /**
     * Sets the submitted_at property value. The submitted_at property
     * @param DateTime|null $value Value to set for the submitted_at property.
    */
    public function setSubmittedAt(?DateTime $value): void {
        $this->submitted_at = $value;
    }

    /**
     * Sets the user property value. A GitHub user.
     * @param NullableSimpleUser|null $value Value to set for the user property.
    */
    public function setUser(?NullableSimpleUser $value): void {
        $this->user = $value;
    }

}
