<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The status of auto merging a pull request.
*/
class AutoMerge implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $commit_message Commit message for the merge commit.
    */
    private ?string $commit_message = null;
    
    /**
     * @var string|null $commit_title Title for the merge commit message.
    */
    private ?string $commit_title = null;
    
    /**
     * @var SimpleUser|null $enabled_by A GitHub user.
    */
    private ?SimpleUser $enabled_by = null;
    
    /**
     * @var AutoMerge_merge_method|null $merge_method The merge method to use.
    */
    private ?AutoMerge_merge_method $merge_method = null;
    
    /**
     * Instantiates a new autoMerge and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutoMerge
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutoMerge {
        return new AutoMerge();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the commit_message property value. Commit message for the merge commit.
     * @return string|null
    */
    public function getCommitMessage(): ?string {
        return $this->commit_message;
    }

    /**
     * Gets the commit_title property value. Title for the merge commit message.
     * @return string|null
    */
    public function getCommitTitle(): ?string {
        return $this->commit_title;
    }

    /**
     * Gets the enabled_by property value. A GitHub user.
     * @return SimpleUser|null
    */
    public function getEnabledBy(): ?SimpleUser {
        return $this->enabled_by;
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
            'enabled_by' => fn(ParseNode $n) => $o->setEnabledBy($n->getObjectValue([SimpleUser::class, 'createFromDiscriminatorValue'])),
            'merge_method' => fn(ParseNode $n) => $o->setMergeMethod($n->getEnumValue(AutoMerge_merge_method::class)),
        ];
    }

    /**
     * Gets the merge_method property value. The merge method to use.
     * @return AutoMerge_merge_method|null
    */
    public function getMergeMethod(): ?AutoMerge_merge_method {
        return $this->merge_method;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('commit_message', $this->getCommitMessage());
        $writer->writeStringValue('commit_title', $this->getCommitTitle());
        $writer->writeObjectValue('enabled_by', $this->getEnabledBy());
        $writer->writeEnumValue('merge_method', $this->getMergeMethod());
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
     * Sets the commit_message property value. Commit message for the merge commit.
     * @param string|null $value Value to set for the commit_message property.
    */
    public function setCommitMessage(?string $value): void {
        $this->commit_message = $value;
    }

    /**
     * Sets the commit_title property value. Title for the merge commit message.
     * @param string|null $value Value to set for the commit_title property.
    */
    public function setCommitTitle(?string $value): void {
        $this->commit_title = $value;
    }

    /**
     * Sets the enabled_by property value. A GitHub user.
     * @param SimpleUser|null $value Value to set for the enabled_by property.
    */
    public function setEnabledBy(?SimpleUser $value): void {
        $this->enabled_by = $value;
    }

    /**
     * Sets the merge_method property value. The merge method to use.
     * @param AutoMerge_merge_method|null $value Value to set for the merge_method property.
    */
    public function setMergeMethod(?AutoMerge_merge_method $value): void {
        $this->merge_method = $value;
    }

}
