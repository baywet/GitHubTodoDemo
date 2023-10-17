<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Details about the codespace's git repository.
*/
class Codespace_git_status implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $ahead The number of commits the local repository is ahead of the remote.
    */
    private ?int $ahead = null;
    
    /**
     * @var int|null $behind The number of commits the local repository is behind the remote.
    */
    private ?int $behind = null;
    
    /**
     * @var bool|null $has_uncommitted_changes Whether the local repository has uncommitted changes.
    */
    private ?bool $has_uncommitted_changes = null;
    
    /**
     * @var bool|null $has_unpushed_changes Whether the local repository has unpushed changes.
    */
    private ?bool $has_unpushed_changes = null;
    
    /**
     * @var string|null $ref The current branch (or SHA if in detached HEAD state) of the local repository.
    */
    private ?string $ref = null;
    
    /**
     * Instantiates a new codespace_git_status and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Codespace_git_status
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Codespace_git_status {
        return new Codespace_git_status();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the ahead property value. The number of commits the local repository is ahead of the remote.
     * @return int|null
    */
    public function getAhead(): ?int {
        return $this->ahead;
    }

    /**
     * Gets the behind property value. The number of commits the local repository is behind the remote.
     * @return int|null
    */
    public function getBehind(): ?int {
        return $this->behind;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ahead' => fn(ParseNode $n) => $o->setAhead($n->getIntegerValue()),
            'behind' => fn(ParseNode $n) => $o->setBehind($n->getIntegerValue()),
            'has_uncommitted_changes' => fn(ParseNode $n) => $o->setHasUncommittedChanges($n->getBooleanValue()),
            'has_unpushed_changes' => fn(ParseNode $n) => $o->setHasUnpushedChanges($n->getBooleanValue()),
            'ref' => fn(ParseNode $n) => $o->setRef($n->getStringValue()),
        ];
    }

    /**
     * Gets the has_uncommitted_changes property value. Whether the local repository has uncommitted changes.
     * @return bool|null
    */
    public function getHasUncommittedChanges(): ?bool {
        return $this->has_uncommitted_changes;
    }

    /**
     * Gets the has_unpushed_changes property value. Whether the local repository has unpushed changes.
     * @return bool|null
    */
    public function getHasUnpushedChanges(): ?bool {
        return $this->has_unpushed_changes;
    }

    /**
     * Gets the ref property value. The current branch (or SHA if in detached HEAD state) of the local repository.
     * @return string|null
    */
    public function getRef(): ?string {
        return $this->ref;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('ahead', $this->getAhead());
        $writer->writeIntegerValue('behind', $this->getBehind());
        $writer->writeBooleanValue('has_uncommitted_changes', $this->getHasUncommittedChanges());
        $writer->writeBooleanValue('has_unpushed_changes', $this->getHasUnpushedChanges());
        $writer->writeStringValue('ref', $this->getRef());
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
     * Sets the ahead property value. The number of commits the local repository is ahead of the remote.
     * @param int|null $value Value to set for the ahead property.
    */
    public function setAhead(?int $value): void {
        $this->ahead = $value;
    }

    /**
     * Sets the behind property value. The number of commits the local repository is behind the remote.
     * @param int|null $value Value to set for the behind property.
    */
    public function setBehind(?int $value): void {
        $this->behind = $value;
    }

    /**
     * Sets the has_uncommitted_changes property value. Whether the local repository has uncommitted changes.
     * @param bool|null $value Value to set for the has_uncommitted_changes property.
    */
    public function setHasUncommittedChanges(?bool $value): void {
        $this->has_uncommitted_changes = $value;
    }

    /**
     * Sets the has_unpushed_changes property value. Whether the local repository has unpushed changes.
     * @param bool|null $value Value to set for the has_unpushed_changes property.
    */
    public function setHasUnpushedChanges(?bool $value): void {
        $this->has_unpushed_changes = $value;
    }

    /**
     * Sets the ref property value. The current branch (or SHA if in detached HEAD state) of the local repository.
     * @param string|null $value Value to set for the ref property.
    */
    public function setRef(?string $value): void {
        $this->ref = $value;
    }

}
