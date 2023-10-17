<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Merge;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MergePutRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $commit_message Extra detail to append to automatic commit message.
    */
    private ?string $commit_message = null;
    
    /**
     * @var string|null $commit_title Title for the automatic commit message.
    */
    private ?string $commit_title = null;
    
    /**
     * @var MergePutRequestBody_merge_method|null $merge_method The merge method to use.
    */
    private ?MergePutRequestBody_merge_method $merge_method = null;
    
    /**
     * @var string|null $sha SHA that pull request head must match to allow merge.
    */
    private ?string $sha = null;
    
    /**
     * Instantiates a new mergePutRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MergePutRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MergePutRequestBody {
        return new MergePutRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the commit_message property value. Extra detail to append to automatic commit message.
     * @return string|null
    */
    public function getCommitMessage(): ?string {
        return $this->commit_message;
    }

    /**
     * Gets the commit_title property value. Title for the automatic commit message.
     * @return string|null
    */
    public function getCommitTitle(): ?string {
        return $this->commit_title;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'commit_message' => fn(ParseNode $n) => $o->setCommitMessage($n->getStringValue()),
            'commit_title' => fn(ParseNode $n) => $o->setCommitTitle($n->getStringValue()),
            'merge_method' => fn(ParseNode $n) => $o->setMergeMethod($n->getEnumValue(MergePutRequestBody_merge_method::class)),
            'sha' => fn(ParseNode $n) => $o->setSha($n->getStringValue()),
        ];
    }

    /**
     * Gets the merge_method property value. The merge method to use.
     * @return MergePutRequestBody_merge_method|null
    */
    public function getMergeMethod(): ?MergePutRequestBody_merge_method {
        return $this->merge_method;
    }

    /**
     * Gets the sha property value. SHA that pull request head must match to allow merge.
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
        $writer->writeStringValue('commit_message', $this->getCommitMessage());
        $writer->writeStringValue('commit_title', $this->getCommitTitle());
        $writer->writeEnumValue('merge_method', $this->getMergeMethod());
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
     * Sets the commit_message property value. Extra detail to append to automatic commit message.
     * @param string|null $value Value to set for the commit_message property.
    */
    public function setCommitMessage(?string $value): void {
        $this->commit_message = $value;
    }

    /**
     * Sets the commit_title property value. Title for the automatic commit message.
     * @param string|null $value Value to set for the commit_title property.
    */
    public function setCommitTitle(?string $value): void {
        $this->commit_title = $value;
    }

    /**
     * Sets the merge_method property value. The merge method to use.
     * @param MergePutRequestBody_merge_method|null $value Value to set for the merge_method property.
    */
    public function setMergeMethod(?MergePutRequestBody_merge_method $value): void {
        $this->merge_method = $value;
    }

    /**
     * Sets the sha property value. SHA that pull request head must match to allow merge.
     * @param string|null $value Value to set for the sha property.
    */
    public function setSha(?string $value): void {
        $this->sha = $value;
    }

}
