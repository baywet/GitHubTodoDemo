<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Verification implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $payload The payload property
    */
    private ?string $payload = null;
    
    /**
     * @var string|null $reason The reason property
    */
    private ?string $reason = null;
    
    /**
     * @var string|null $signature The signature property
    */
    private ?string $signature = null;
    
    /**
     * @var bool|null $verified The verified property
    */
    private ?bool $verified = null;
    
    /**
     * Instantiates a new verification and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Verification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Verification {
        return new Verification();
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
            'payload' => fn(ParseNode $n) => $o->setPayload($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'signature' => fn(ParseNode $n) => $o->setSignature($n->getStringValue()),
            'verified' => fn(ParseNode $n) => $o->setVerified($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the payload property value. The payload property
     * @return string|null
    */
    public function getPayload(): ?string {
        return $this->payload;
    }

    /**
     * Gets the reason property value. The reason property
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the signature property value. The signature property
     * @return string|null
    */
    public function getSignature(): ?string {
        return $this->signature;
    }

    /**
     * Gets the verified property value. The verified property
     * @return bool|null
    */
    public function getVerified(): ?bool {
        return $this->verified;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('payload', $this->getPayload());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeStringValue('signature', $this->getSignature());
        $writer->writeBooleanValue('verified', $this->getVerified());
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
     * Sets the payload property value. The payload property
     * @param string|null $value Value to set for the payload property.
    */
    public function setPayload(?string $value): void {
        $this->payload = $value;
    }

    /**
     * Sets the reason property value. The reason property
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the signature property value. The signature property
     * @param string|null $value Value to set for the signature property.
    */
    public function setSignature(?string $value): void {
        $this->signature = $value;
    }

    /**
     * Sets the verified property value. The verified property
     * @param bool|null $value Value to set for the verified property.
    */
    public function setVerified(?bool $value): void {
        $this->verified = $value;
    }

}
