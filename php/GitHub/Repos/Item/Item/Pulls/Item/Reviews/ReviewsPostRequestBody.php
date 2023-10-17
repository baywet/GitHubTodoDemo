<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Reviews;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ReviewsPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $body **Required** when using `REQUEST_CHANGES` or `COMMENT` for the `event` parameter. The body text of the pull request review.
    */
    private ?string $body = null;
    
    /**
     * @var array<ReviewsPostRequestBody_comments>|null $comments Use the following table to specify the location, destination, and contents of the draft review comment.
    */
    private ?array $comments = null;
    
    /**
     * @var string|null $commit_id The SHA of the commit that needs a review. Not using the latest commit SHA may render your review comment outdated if a subsequent commit modifies the line you specify as the `position`. Defaults to the most recent commit in the pull request when you do not specify a value.
    */
    private ?string $commit_id = null;
    
    /**
     * @var ReviewsPostRequestBody_event|null $event The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. By leaving this blank, you set the review action state to `PENDING`, which means you will need to [submit the pull request review](https://docs.github.com/rest/pulls/reviews#submit-a-review-for-a-pull-request) when you are ready.
    */
    private ?ReviewsPostRequestBody_event $event = null;
    
    /**
     * Instantiates a new reviewsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReviewsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReviewsPostRequestBody {
        return new ReviewsPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the body property value. **Required** when using `REQUEST_CHANGES` or `COMMENT` for the `event` parameter. The body text of the pull request review.
     * @return string|null
    */
    public function getBody(): ?string {
        return $this->body;
    }

    /**
     * Gets the comments property value. Use the following table to specify the location, destination, and contents of the draft review comment.
     * @return array<ReviewsPostRequestBody_comments>|null
    */
    public function getComments(): ?array {
        return $this->comments;
    }

    /**
     * Gets the commit_id property value. The SHA of the commit that needs a review. Not using the latest commit SHA may render your review comment outdated if a subsequent commit modifies the line you specify as the `position`. Defaults to the most recent commit in the pull request when you do not specify a value.
     * @return string|null
    */
    public function getCommitId(): ?string {
        return $this->commit_id;
    }

    /**
     * Gets the event property value. The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. By leaving this blank, you set the review action state to `PENDING`, which means you will need to [submit the pull request review](https://docs.github.com/rest/pulls/reviews#submit-a-review-for-a-pull-request) when you are ready.
     * @return ReviewsPostRequestBody_event|null
    */
    public function getEvent(): ?ReviewsPostRequestBody_event {
        return $this->event;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'body' => fn(ParseNode $n) => $o->setBody($n->getStringValue()),
            'comments' => fn(ParseNode $n) => $o->setComments($n->getCollectionOfObjectValues([ReviewsPostRequestBody_comments::class, 'createFromDiscriminatorValue'])),
            'commit_id' => fn(ParseNode $n) => $o->setCommitId($n->getStringValue()),
            'event' => fn(ParseNode $n) => $o->setEvent($n->getEnumValue(ReviewsPostRequestBody_event::class)),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('body', $this->getBody());
        $writer->writeCollectionOfObjectValues('comments', $this->getComments());
        $writer->writeStringValue('commit_id', $this->getCommitId());
        $writer->writeEnumValue('event', $this->getEvent());
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
     * Sets the body property value. **Required** when using `REQUEST_CHANGES` or `COMMENT` for the `event` parameter. The body text of the pull request review.
     * @param string|null $value Value to set for the body property.
    */
    public function setBody(?string $value): void {
        $this->body = $value;
    }

    /**
     * Sets the comments property value. Use the following table to specify the location, destination, and contents of the draft review comment.
     * @param array<ReviewsPostRequestBody_comments>|null $value Value to set for the comments property.
    */
    public function setComments(?array $value): void {
        $this->comments = $value;
    }

    /**
     * Sets the commit_id property value. The SHA of the commit that needs a review. Not using the latest commit SHA may render your review comment outdated if a subsequent commit modifies the line you specify as the `position`. Defaults to the most recent commit in the pull request when you do not specify a value.
     * @param string|null $value Value to set for the commit_id property.
    */
    public function setCommitId(?string $value): void {
        $this->commit_id = $value;
    }

    /**
     * Sets the event property value. The review action you want to perform. The review actions include: `APPROVE`, `REQUEST_CHANGES`, or `COMMENT`. By leaving this blank, you set the review action state to `PENDING`, which means you will need to [submit the pull request review](https://docs.github.com/rest/pulls/reviews#submit-a-review-for-a-pull-request) when you are ready.
     * @param ReviewsPostRequestBody_event|null $value Value to set for the event property.
    */
    public function setEvent(?ReviewsPostRequestBody_event $value): void {
        $this->event = $value;
    }

}
