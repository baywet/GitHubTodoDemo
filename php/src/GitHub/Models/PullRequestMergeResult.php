<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Pull Request Merge Result
*/
class PullRequestMergeResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $merged The merged property
    */
    private ?bool $merged = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var string|null $sha The sha property
    */
    private ?string $sha = null;
    
    /**
     * Instantiates a new pullRequestMergeResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PullRequestMergeResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PullRequestMergeResult {
        return new PullRequestMergeResult();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'merged' => fn(ParseNode $n) => $o->setMerged($n->getBooleanValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'sha' => fn(ParseNode $n) => $o->setSha($n->getStringValue()),
        ];
    }

    /**
     * Gets the merged property value. The merged property
     * @return bool|null
    */
    public function getMerged(): ?bool {
        return $this->merged;
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the sha property value. The sha property
     * @return string|null
    */
    public function getSha(): ?string {
        return $this->sha;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('merged', $this->getMerged());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('sha', $this->getSha());
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
     * Sets the merged property value. The merged property
     * @param bool|null $value Value to set for the merged property.
    */
    public function setMerged(?bool $value): void {
        $this->merged = $value;
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the sha property value. The sha property
     * @param string|null $value Value to set for the sha property.
    */
    public function setSha(?string $value): void {
        $this->sha = $value;
    }

}
