<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityAndAnalysis_advanced_security implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var SecurityAndAnalysis_advanced_security_status|null $status The status property
    */
    private ?SecurityAndAnalysis_advanced_security_status $status = null;
    
    /**
     * Instantiates a new securityAndAnalysis_advanced_security and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityAndAnalysis_advanced_security
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityAndAnalysis_advanced_security {
        return new SecurityAndAnalysis_advanced_security();
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
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SecurityAndAnalysis_advanced_security_status::class)),
        ];
    }

    /**
     * Gets the status property value. The status property
     * @return SecurityAndAnalysis_advanced_security_status|null
    */
    public function getStatus(): ?SecurityAndAnalysis_advanced_security_status {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
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
     * Sets the status property value. The status property
     * @param SecurityAndAnalysis_advanced_security_status|null $value Value to set for the status property.
    */
    public function setStatus(?SecurityAndAnalysis_advanced_security_status $value): void {
        $this->status = $value;
    }

}
