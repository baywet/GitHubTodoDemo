<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Files503Error extends ApiException implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $documentation_url The documentation_url property
    */
    private ?string $documentation_url = null;
    
    /**
     * @var string|null $escapedCode The code property
    */
    private ?string $escapedCode = null;
    
    /**
     * @var string|null $escapedMessage The message property
    */
    private ?string $escapedMessage = null;
    
    /**
     * Instantiates a new files503Error and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Files503Error
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Files503Error {
        return new Files503Error();
    }

    /**
     * Gets the code property value. The code property
     * @return string|null
    */
    public function escapedGetCode(): ?string {
        return $this->escapedCode;
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function escapedGetMessage(): ?string {
        return $this->escapedMessage;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the documentation_url property value. The documentation_url property
     * @return string|null
    */
    public function getDocumentationUrl(): ?string {
        return $this->documentation_url;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'documentation_url' => fn(ParseNode $n) => $o->setDocumentationUrl($n->getStringValue()),
            'code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
        ];
    }

    /**
     * The primary error message.
     * @return string
    */
    public function getPrimaryErrorMessage(): string {
        return parent::getMessage();
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('documentation_url', $this->getDocumentationUrl());
        $writer->writeStringValue('code', $this->escapedGetCode());
        $writer->writeStringValue('message', $this->escapedGetMessage());
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
        $this->escapedCode = $value;
    }

    /**
     * Sets the documentation_url property value. The documentation_url property
     * @param string|null $value Value to set for the documentation_url property.
    */
    public function setDocumentationUrl(?string $value): void {
        $this->documentation_url = $value;
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->escapedMessage = $value;
    }

}