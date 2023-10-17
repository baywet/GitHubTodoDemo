<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes integer, string
*/
class ValidationError_errors_value implements Parsable 
{
    /**
     * @var int|null $integer Composed type representation for type integer
    */
    private ?int $integer = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidationError_errors_value
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ValidationError_errors_value {
        $result = new ValidationError_errors_value();
        $mappingValueNode = $parseNode->getChildNode("");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
        }
        if ($parseNode->getIntegerValue() !== null) {
            $result->setInteger($parseNode->getIntegerValue());
        } else if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        }
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        return [];
    }

    /**
     * Gets the integer property value. Composed type representation for type integer
     * @return int|null
    */
    public function getInteger(): ?int {
        return $this->integer;
    }

    /**
     * Gets the string property value. Composed type representation for type string
     * @return string|null
    */
    public function getString(): ?string {
        return $this->string;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getInteger() !== null) {
            $writer->writeIntegerValue(null, $this->getInteger());
        } else if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        }
    }

    /**
     * Sets the integer property value. Composed type representation for type integer
     * @param int|null $value Value to set for the integer property.
    */
    public function setInteger(?int $value): void {
        $this->integer = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
