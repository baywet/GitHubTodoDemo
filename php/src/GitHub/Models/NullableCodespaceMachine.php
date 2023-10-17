<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A description of the machine powering a codespace.
*/
class NullableCodespaceMachine implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $cpus How many cores are available to the codespace.
    */
    private ?int $cpus = null;
    
    /**
     * @var string|null $display_name The display name of the machine includes cores, memory, and storage.
    */
    private ?string $display_name = null;
    
    /**
     * @var int|null $memory_in_bytes How much memory is available to the codespace.
    */
    private ?int $memory_in_bytes = null;
    
    /**
     * @var string|null $name The name of the machine.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $operating_system The operating system of the machine.
    */
    private ?string $operating_system = null;
    
    /**
     * @var NullableCodespaceMachine_prebuild_availability|null $prebuild_availability Whether a prebuild is currently available when creating a codespace for this machine and repository. If a branch was not specified as a ref, the default branch will be assumed. Value will be "null" if prebuilds are not supported or prebuild availability could not be determined. Value will be "none" if no prebuild is available. Latest values "ready" and "in_progress" indicate the prebuild availability status.
    */
    private ?NullableCodespaceMachine_prebuild_availability $prebuild_availability = null;
    
    /**
     * @var int|null $storage_in_bytes How much storage is available to the codespace.
    */
    private ?int $storage_in_bytes = null;
    
    /**
     * Instantiates a new nullableCodespaceMachine and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NullableCodespaceMachine
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NullableCodespaceMachine {
        return new NullableCodespaceMachine();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cpus property value. How many cores are available to the codespace.
     * @return int|null
    */
    public function getCpus(): ?int {
        return $this->cpus;
    }

    /**
     * Gets the display_name property value. The display name of the machine includes cores, memory, and storage.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->display_name;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cpus' => fn(ParseNode $n) => $o->setCpus($n->getIntegerValue()),
            'display_name' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'memory_in_bytes' => fn(ParseNode $n) => $o->setMemoryInBytes($n->getIntegerValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'operating_system' => fn(ParseNode $n) => $o->setOperatingSystem($n->getStringValue()),
            'prebuild_availability' => fn(ParseNode $n) => $o->setPrebuildAvailability($n->getEnumValue(NullableCodespaceMachine_prebuild_availability::class)),
            'storage_in_bytes' => fn(ParseNode $n) => $o->setStorageInBytes($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the memory_in_bytes property value. How much memory is available to the codespace.
     * @return int|null
    */
    public function getMemoryInBytes(): ?int {
        return $this->memory_in_bytes;
    }

    /**
     * Gets the name property value. The name of the machine.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the operating_system property value. The operating system of the machine.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        return $this->operating_system;
    }

    /**
     * Gets the prebuild_availability property value. Whether a prebuild is currently available when creating a codespace for this machine and repository. If a branch was not specified as a ref, the default branch will be assumed. Value will be "null" if prebuilds are not supported or prebuild availability could not be determined. Value will be "none" if no prebuild is available. Latest values "ready" and "in_progress" indicate the prebuild availability status.
     * @return NullableCodespaceMachine_prebuild_availability|null
    */
    public function getPrebuildAvailability(): ?NullableCodespaceMachine_prebuild_availability {
        return $this->prebuild_availability;
    }

    /**
     * Gets the storage_in_bytes property value. How much storage is available to the codespace.
     * @return int|null
    */
    public function getStorageInBytes(): ?int {
        return $this->storage_in_bytes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('cpus', $this->getCpus());
        $writer->writeStringValue('display_name', $this->getDisplayName());
        $writer->writeIntegerValue('memory_in_bytes', $this->getMemoryInBytes());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('operating_system', $this->getOperatingSystem());
        $writer->writeEnumValue('prebuild_availability', $this->getPrebuildAvailability());
        $writer->writeIntegerValue('storage_in_bytes', $this->getStorageInBytes());
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
     * Sets the cpus property value. How many cores are available to the codespace.
     * @param int|null $value Value to set for the cpus property.
    */
    public function setCpus(?int $value): void {
        $this->cpus = $value;
    }

    /**
     * Sets the display_name property value. The display name of the machine includes cores, memory, and storage.
     * @param string|null $value Value to set for the display_name property.
    */
    public function setDisplayName(?string $value): void {
        $this->display_name = $value;
    }

    /**
     * Sets the memory_in_bytes property value. How much memory is available to the codespace.
     * @param int|null $value Value to set for the memory_in_bytes property.
    */
    public function setMemoryInBytes(?int $value): void {
        $this->memory_in_bytes = $value;
    }

    /**
     * Sets the name property value. The name of the machine.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the operating_system property value. The operating system of the machine.
     * @param string|null $value Value to set for the operating_system property.
    */
    public function setOperatingSystem(?string $value): void {
        $this->operating_system = $value;
    }

    /**
     * Sets the prebuild_availability property value. Whether a prebuild is currently available when creating a codespace for this machine and repository. If a branch was not specified as a ref, the default branch will be assumed. Value will be "null" if prebuilds are not supported or prebuild availability could not be determined. Value will be "none" if no prebuild is available. Latest values "ready" and "in_progress" indicate the prebuild availability status.
     * @param NullableCodespaceMachine_prebuild_availability|null $value Value to set for the prebuild_availability property.
    */
    public function setPrebuildAvailability(?NullableCodespaceMachine_prebuild_availability $value): void {
        $this->prebuild_availability = $value;
    }

    /**
     * Sets the storage_in_bytes property value. How much storage is available to the codespace.
     * @param int|null $value Value to set for the storage_in_bytes property.
    */
    public function setStorageInBytes(?int $value): void {
        $this->storage_in_bytes = $value;
    }

}
