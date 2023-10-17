<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PullRequestSimple__links implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Link|null $comments Hypermedia Link
    */
    private ?Link $comments = null;
    
    /**
     * @var Link|null $commits Hypermedia Link
    */
    private ?Link $commits = null;
    
    /**
     * @var Link|null $escapedSelf Hypermedia Link
    */
    private ?Link $escapedSelf = null;
    
    /**
     * @var Link|null $html Hypermedia Link
    */
    private ?Link $html = null;
    
    /**
     * @var Link|null $issue Hypermedia Link
    */
    private ?Link $issue = null;
    
    /**
     * @var Link|null $review_comment Hypermedia Link
    */
    private ?Link $review_comment = null;
    
    /**
     * @var Link|null $review_comments Hypermedia Link
    */
    private ?Link $review_comments = null;
    
    /**
     * @var Link|null $statuses Hypermedia Link
    */
    private ?Link $statuses = null;
    
    /**
     * Instantiates a new pullRequestSimple__links and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PullRequestSimple__links
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PullRequestSimple__links {
        return new PullRequestSimple__links();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the comments property value. Hypermedia Link
     * @return Link|null
    */
    public function getComments(): ?Link {
        return $this->comments;
    }

    /**
     * Gets the commits property value. Hypermedia Link
     * @return Link|null
    */
    public function getCommits(): ?Link {
        return $this->commits;
    }

    /**
     * Gets the self property value. Hypermedia Link
     * @return Link|null
    */
    public function getEscapedSelf(): ?Link {
        return $this->escapedSelf;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'comments' => fn(ParseNode $n) => $o->setComments($n->getObjectValue([Link::class, 'createFromDiscriminatorValue'])),
            'commits' => fn(ParseNode $n) => $o->setCommits($n->getObjectValue([Link::class, 'createFromDiscriminatorValue'])),
            'self' => fn(ParseNode $n) => $o->setEscapedSelf($n->getObjectValue([Link::class, 'createFromDiscriminatorValue'])),
            'html' => fn(ParseNode $n) => $o->setHtml($n->getObjectValue([Link::class, 'createFromDiscriminatorValue'])),
            'issue' => fn(ParseNode $n) => $o->setIssue($n->getObjectValue([Link::class, 'createFromDiscriminatorValue'])),
            'review_comment' => fn(ParseNode $n) => $o->setReviewComment($n->getObjectValue([Link::class, 'createFromDiscriminatorValue'])),
            'review_comments' => fn(ParseNode $n) => $o->setReviewComments($n->getObjectValue([Link::class, 'createFromDiscriminatorValue'])),
            'statuses' => fn(ParseNode $n) => $o->setStatuses($n->getObjectValue([Link::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the html property value. Hypermedia Link
     * @return Link|null
    */
    public function getHtml(): ?Link {
        return $this->html;
    }

    /**
     * Gets the issue property value. Hypermedia Link
     * @return Link|null
    */
    public function getIssue(): ?Link {
        return $this->issue;
    }

    /**
     * Gets the review_comment property value. Hypermedia Link
     * @return Link|null
    */
    public function getReviewComment(): ?Link {
        return $this->review_comment;
    }

    /**
     * Gets the review_comments property value. Hypermedia Link
     * @return Link|null
    */
    public function getReviewComments(): ?Link {
        return $this->review_comments;
    }

    /**
     * Gets the statuses property value. Hypermedia Link
     * @return Link|null
    */
    public function getStatuses(): ?Link {
        return $this->statuses;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('comments', $this->getComments());
        $writer->writeObjectValue('commits', $this->getCommits());
        $writer->writeObjectValue('self', $this->getEscapedSelf());
        $writer->writeObjectValue('html', $this->getHtml());
        $writer->writeObjectValue('issue', $this->getIssue());
        $writer->writeObjectValue('review_comment', $this->getReviewComment());
        $writer->writeObjectValue('review_comments', $this->getReviewComments());
        $writer->writeObjectValue('statuses', $this->getStatuses());
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
     * Sets the comments property value. Hypermedia Link
     * @param Link|null $value Value to set for the comments property.
    */
    public function setComments(?Link $value): void {
        $this->comments = $value;
    }

    /**
     * Sets the commits property value. Hypermedia Link
     * @param Link|null $value Value to set for the commits property.
    */
    public function setCommits(?Link $value): void {
        $this->commits = $value;
    }

    /**
     * Sets the self property value. Hypermedia Link
     * @param Link|null $value Value to set for the self property.
    */
    public function setEscapedSelf(?Link $value): void {
        $this->escapedSelf = $value;
    }

    /**
     * Sets the html property value. Hypermedia Link
     * @param Link|null $value Value to set for the html property.
    */
    public function setHtml(?Link $value): void {
        $this->html = $value;
    }

    /**
     * Sets the issue property value. Hypermedia Link
     * @param Link|null $value Value to set for the issue property.
    */
    public function setIssue(?Link $value): void {
        $this->issue = $value;
    }

    /**
     * Sets the review_comment property value. Hypermedia Link
     * @param Link|null $value Value to set for the review_comment property.
    */
    public function setReviewComment(?Link $value): void {
        $this->review_comment = $value;
    }

    /**
     * Sets the review_comments property value. Hypermedia Link
     * @param Link|null $value Value to set for the review_comments property.
    */
    public function setReviewComments(?Link $value): void {
        $this->review_comments = $value;
    }

    /**
     * Sets the statuses property value. Hypermedia Link
     * @param Link|null $value Value to set for the statuses property.
    */
    public function setStatuses(?Link $value): void {
        $this->statuses = $value;
    }

}
