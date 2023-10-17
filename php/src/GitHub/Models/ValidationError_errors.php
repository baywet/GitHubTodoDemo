<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ValidationError_errors implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $code The code property
    */
    private ?string $code = null;
    
    /**
     * @var string|null $field The field property
    */
    private ?string $field = null;
    
    /**
     * @var int|null $index The index property
    */
    private ?int $index = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var string|null $resource The resource property
    */
    private ?string $resource = null;
    
    /**
     * @var ValidationError_errors_value|null $value The value property
    */
    private ?ValidationError_errors_value $value = null;
    
    /**
     * Instantiates a new validationError_errors and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidationError_errors
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ValidationError_errors {
        return new ValidationError_errors();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the code property value. The code property
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Gets the field property value. The field property
     * @return string|null
    */
    public function getField(): ?string {
        return $this->field;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'field' => fn(ParseNode $n) => $o->setField($n->getStringValue()),
            'index' => fn(ParseNode $n) => $o->setIndex($n->getIntegerValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getObjectValue([ValidationError_errors_value::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the index property value. The index property
     * @return int|null
    */
    public function getIndex(): ?int {
        return $this->index;
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the resource property value. The resource property
     * @return string|null
    */
    public function getResource(): ?string {
        return $this->resource;
    }

    /**
     * Gets the value property value. The value property
     * @return ValidationError_errors_value|null
    */
    public function getValue(): ?ValidationError_errors_value {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('code', $this->getCode());
        $writer->writeStringValue('field', $this->getField());
        $writer->writeIntegerValue('index', $this->getIndex());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('resource', $this->getResource());
        $writer->writeObjectValue('value', $this->getValue());
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
     * Sets the code property value. The code property
     * @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value): void {
        $this->code = $value;
    }

    /**
     * Sets the field property value. The field property
     * @param string|null $value Value to set for the field property.
    */
    public function setField(?string $value): void {
        $this->field = $value;
    }

    /**
     * Sets the index property value. The index property
     * @param int|null $value Value to set for the index property.
    */
    public function setIndex(?int $value): void {
        $this->index = $value;
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the resource property value. The resource property
     * @param string|null $value Value to set for the resource property.
    */
    public function setResource(?string $value): void {
        $this->resource = $value;
    }

    /**
     * Sets the value property value. The value property
     * @param ValidationError_errors_value|null $value Value to set for the value property.
    */
    public function setValue(?ValidationError_errors_value $value): void {
        $this->value = $value;
    }

}
