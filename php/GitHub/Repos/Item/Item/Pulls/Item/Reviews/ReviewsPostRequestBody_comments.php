<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Reviews;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ReviewsPostRequestBody_comments implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $body Text of the review comment.
    */
    private ?string $body = null;
    
    /**
     * @var int|null $line The line property
    */
    private ?int $line = null;
    
    /**
     * @var string|null $path The relative path to the file that necessitates a review comment.
    */
    private ?string $path = null;
    
    /**
     * @var int|null $position The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below.
    */
    private ?int $position = null;
    
    /**
     * @var string|null $side The side property
    */
    private ?string $side = null;
    
    /**
     * @var int|null $start_line The start_line property
    */
    private ?int $start_line = null;
    
    /**
     * @var string|null $start_side The start_side property
    */
    private ?string $start_side = null;
    
    /**
     * Instantiates a new reviewsPostRequestBody_comments and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReviewsPostRequestBody_comments
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReviewsPostRequestBody_comments {
        return new ReviewsPostRequestBody_comments();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the body property value. Text of the review comment.
     * @return string|null
    */
    public function getBody(): ?string {
        return $this->body;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'body' => fn(ParseNode $n) => $o->setBody($n->getStringValue()),
            'line' => fn(ParseNode $n) => $o->setLine($n->getIntegerValue()),
            'path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
            'position' => fn(ParseNode $n) => $o->setPosition($n->getIntegerValue()),
            'side' => fn(ParseNode $n) => $o->setSide($n->getStringValue()),
            'start_line' => fn(ParseNode $n) => $o->setStartLine($n->getIntegerValue()),
            'start_side' => fn(ParseNode $n) => $o->setStartSide($n->getStringValue()),
        ];
    }

    /**
     * Gets the line property value. The line property
     * @return int|null
    */
    public function getLine(): ?int {
        return $this->line;
    }

    /**
     * Gets the path property value. The relative path to the file that necessitates a review comment.
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->path;
    }

    /**
     * Gets the position property value. The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below.
     * @return int|null
    */
    public function getPosition(): ?int {
        return $this->position;
    }

    /**
     * Gets the side property value. The side property
     * @return string|null
    */
    public function getSide(): ?string {
        return $this->side;
    }

    /**
     * Gets the start_line property value. The start_line property
     * @return int|null
    */
    public function getStartLine(): ?int {
        return $this->start_line;
    }

    /**
     * Gets the start_side property value. The start_side property
     * @return string|null
    */
    public function getStartSide(): ?string {
        return $this->start_side;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('body', $this->getBody());
        $writer->writeIntegerValue('line', $this->getLine());
        $writer->writeStringValue('path', $this->getPath());
        $writer->writeIntegerValue('position', $this->getPosition());
        $writer->writeStringValue('side', $this->getSide());
        $writer->writeIntegerValue('start_line', $this->getStartLine());
        $writer->writeStringValue('start_side', $this->getStartSide());
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
     * Sets the body property value. Text of the review comment.
     * @param string|null $value Value to set for the body property.
    */
    public function setBody(?string $value): void {
        $this->body = $value;
    }

    /**
     * Sets the line property value. The line property
     * @param int|null $value Value to set for the line property.
    */
    public function setLine(?int $value): void {
        $this->line = $value;
    }

    /**
     * Sets the path property value. The relative path to the file that necessitates a review comment.
     * @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value): void {
        $this->path = $value;
    }

    /**
     * Sets the position property value. The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below.
     * @param int|null $value Value to set for the position property.
    */
    public function setPosition(?int $value): void {
        $this->position = $value;
    }

    /**
     * Sets the side property value. The side property
     * @param string|null $value Value to set for the side property.
    */
    public function setSide(?string $value): void {
        $this->side = $value;
    }

    /**
     * Sets the start_line property value. The start_line property
     * @param int|null $value Value to set for the start_line property.
    */
    public function setStartLine(?int $value): void {
        $this->start_line = $value;
    }

    /**
     * Sets the start_side property value. The start_side property
     * @param string|null $value Value to set for the start_side property.
    */
    public function setStartSide(?string $value): void {
        $this->start_side = $value;
    }

}
