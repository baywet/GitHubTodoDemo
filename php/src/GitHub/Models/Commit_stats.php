<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Commit_stats implements AdditionalDataHolder, Parsable 
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
     * @var int|null $deletions The deletions property
    */
    private ?int $deletions = null;
    
    /**
     * @var int|null $total The total property
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new commit_stats and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Commit_stats
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Commit_stats {
        return new Commit_stats();
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
            'deletions' => fn(ParseNode $n) => $o->setDeletions($n->getIntegerValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the total property value. The total property
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('additions', $this->getAdditions());
        $writer->writeIntegerValue('deletions', $this->getDeletions());
        $writer->writeIntegerValue('total', $this->getTotal());
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
     * Sets the deletions property value. The deletions property
     * @param int|null $value Value to set for the deletions property.
    */
    public function setDeletions(?int $value): void {
        $this->deletions = $value;
    }

    /**
     * Sets the total property value. The total property
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
