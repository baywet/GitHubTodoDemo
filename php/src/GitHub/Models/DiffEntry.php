<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Diff Entry
*/
class DiffEntry implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $additions The additions property
    */
    private ?int $additions = null;
    
    /**
     * @var string|null $blob_url The blob_url property
    */
    private ?string $blob_url = null;
    
    /**
     * @var int|null $changes The changes property
    */
    private ?int $changes = null;
    
    /**
     * @var string|null $contents_url The contents_url property
    */
    private ?string $contents_url = null;
    
    /**
     * @var int|null $deletions The deletions property
    */
    private ?int $deletions = null;
    
    /**
     * @var string|null $filename The filename property
    */
    private ?string $filename = null;
    
    /**
     * @var string|null $patch The patch property
    */
    private ?string $patch = null;
    
    /**
     * @var string|null $previous_filename The previous_filename property
    */
    private ?string $previous_filename = null;
    
    /**
     * @var string|null $raw_url The raw_url property
    */
    private ?string $raw_url = null;
    
    /**
     * @var string|null $sha The sha property
    */
    private ?string $sha = null;
    
    /**
     * @var DiffEntry_status|null $status The status property
    */
    private ?DiffEntry_status $status = null;
    
    /**
     * Instantiates a new diffEntry and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DiffEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DiffEntry {
        return new DiffEntry();
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
     * Gets the blob_url property value. The blob_url property
     * @return string|null
    */
    public function getBlobUrl(): ?string {
        return $this->blob_url;
    }

    /**
     * Gets the changes property value. The changes property
     * @return int|null
    */
    public function getChanges(): ?int {
        return $this->changes;
    }

    /**
     * Gets the contents_url property value. The contents_url property
     * @return string|null
    */
    public function getContentsUrl(): ?string {
        return $this->contents_url;
    }

    /**
     * Gets the deletions property value. The deletions property
     * @return int|null
    */
    public function getDeletions(): ?int {
        return $this->deletions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additions' => fn(ParseNode $n) => $o->setAdditions($n->getIntegerValue()),
            'blob_url' => fn(ParseNode $n) => $o->setBlobUrl($n->getStringValue()),
            'changes' => fn(ParseNode $n) => $o->setChanges($n->getIntegerValue()),
            'contents_url' => fn(ParseNode $n) => $o->setContentsUrl($n->getStringValue()),
            'deletions' => fn(ParseNode $n) => $o->setDeletions($n->getIntegerValue()),
            'filename' => fn(ParseNode $n) => $o->setFilename($n->getStringValue()),
            'patch' => fn(ParseNode $n) => $o->setPatch($n->getStringValue()),
            'previous_filename' => fn(ParseNode $n) => $o->setPreviousFilename($n->getStringValue()),
            'raw_url' => fn(ParseNode $n) => $o->setRawUrl($n->getStringValue()),
            'sha' => fn(ParseNode $n) => $o->setSha($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DiffEntry_status::class)),
        ];
    }

    /**
     * Gets the filename property value. The filename property
     * @return string|null
    */
    public function getFilename(): ?string {
        return $this->filename;
    }

    /**
     * Gets the patch property value. The patch property
     * @return string|null
    */
    public function getPatch(): ?string {
        return $this->patch;
    }

    /**
     * Gets the previous_filename property value. The previous_filename property
     * @return string|null
    */
    public function getPreviousFilename(): ?string {
        return $this->previous_filename;
    }

    /**
     * Gets the raw_url property value. The raw_url property
     * @return string|null
    */
    public function getRawUrl(): ?string {
        return $this->raw_url;
    }

    /**
     * Gets the sha property value. The sha property
     * @return string|null
    */
    public function getSha(): ?string {
        return $this->sha;
    }

    /**
     * Gets the status property value. The status property
     * @return DiffEntry_status|null
    */
    public function getStatus(): ?DiffEntry_status {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('additions', $this->getAdditions());
        $writer->writeStringValue('blob_url', $this->getBlobUrl());
        $writer->writeIntegerValue('changes', $this->getChanges());
        $writer->writeStringValue('contents_url', $this->getContentsUrl());
        $writer->writeIntegerValue('deletions', $this->getDeletions());
        $writer->writeStringValue('filename', $this->getFilename());
        $writer->writeStringValue('patch', $this->getPatch());
        $writer->writeStringValue('previous_filename', $this->getPreviousFilename());
        $writer->writeStringValue('raw_url', $this->getRawUrl());
        $writer->writeStringValue('sha', $this->getSha());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the additions property value. The additions property
     * @param int|null $value Value to set for the additions property.
    */
    public function setAdditions(?int $value): void {
        $this->additions = $value;
    }

    /**
     * Sets the blob_url property value. The blob_url property
     * @param string|null $value Value to set for the blob_url property.
    */
    public function setBlobUrl(?string $value): void {
        $this->blob_url = $value;
    }

    /**
     * Sets the changes property value. The changes property
     * @param int|null $value Value to set for the changes property.
    */
    public function setChanges(?int $value): void {
        $this->changes = $value;
    }

    /**
     * Sets the contents_url property value. The contents_url property
     * @param string|null $value Value to set for the contents_url property.
    */
    public function setContentsUrl(?string $value): void {
        $this->contents_url = $value;
    }

    /**
     * Sets the deletions property value. The deletions property
     * @param int|null $value Value to set for the deletions property.
    */
    public function setDeletions(?int $value): void {
        $this->deletions = $value;
    }

    /**
     * Sets the filename property value. The filename property
     * @param string|null $value Value to set for the filename property.
    */
    public function setFilename(?string $value): void {
        $this->filename = $value;
    }

    /**
     * Sets the patch property value. The patch property
     * @param string|null $value Value to set for the patch property.
    */
    public function setPatch(?string $value): void {
        $this->patch = $value;
    }

    /**
     * Sets the previous_filename property value. The previous_filename property
     * @param string|null $value Value to set for the previous_filename property.
    */
    public function setPreviousFilename(?string $value): void {
        $this->previous_filename = $value;
    }

    /**
     * Sets the raw_url property value. The raw_url property
     * @param string|null $value Value to set for the raw_url property.
    */
    public function setRawUrl(?string $value): void {
        $this->raw_url = $value;
    }

    /**
     * Sets the sha property value. The sha property
     * @param string|null $value Value to set for the sha property.
    */
    public function setSha(?string $value): void {
        $this->sha = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param DiffEntry_status|null $value Value to set for the status property.
    */
    public function setStatus(?DiffEntry_status $value): void {
        $this->status = $value;
    }

}
