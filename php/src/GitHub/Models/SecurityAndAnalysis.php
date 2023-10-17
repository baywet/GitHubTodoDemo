<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityAndAnalysis implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var SecurityAndAnalysis_advanced_security|null $advanced_security The advanced_security property
    */
    private ?SecurityAndAnalysis_advanced_security $advanced_security = null;
    
    /**
     * @var SecurityAndAnalysis_dependabot_security_updates|null $dependabot_security_updates Enable or disable Dependabot security updates for the repository.
    */
    private ?SecurityAndAnalysis_dependabot_security_updates $dependabot_security_updates = null;
    
    /**
     * @var SecurityAndAnalysis_secret_scanning|null $secret_scanning The secret_scanning property
    */
    private ?SecurityAndAnalysis_secret_scanning $secret_scanning = null;
    
    /**
     * @var SecurityAndAnalysis_secret_scanning_push_protection|null $secret_scanning_push_protection The secret_scanning_push_protection property
    */
    private ?SecurityAndAnalysis_secret_scanning_push_protection $secret_scanning_push_protection = null;
    
    /**
     * Instantiates a new securityAndAnalysis and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityAndAnalysis
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityAndAnalysis {
        return new SecurityAndAnalysis();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the advanced_security property value. The advanced_security property
     * @return SecurityAndAnalysis_advanced_security|null
    */
    public function getAdvancedSecurity(): ?SecurityAndAnalysis_advanced_security {
        return $this->advanced_security;
    }

    /**
     * Gets the dependabot_security_updates property value. Enable or disable Dependabot security updates for the repository.
     * @return SecurityAndAnalysis_dependabot_security_updates|null
    */
    public function getDependabotSecurityUpdates(): ?SecurityAndAnalysis_dependabot_security_updates {
        return $this->dependabot_security_updates;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'advanced_security' => fn(ParseNode $n) => $o->setAdvancedSecurity($n->getObjectValue([SecurityAndAnalysis_advanced_security::class, 'createFromDiscriminatorValue'])),
            'dependabot_security_updates' => fn(ParseNode $n) => $o->setDependabotSecurityUpdates($n->getObjectValue([SecurityAndAnalysis_dependabot_security_updates::class, 'createFromDiscriminatorValue'])),
            'secret_scanning' => fn(ParseNode $n) => $o->setSecretScanning($n->getObjectValue([SecurityAndAnalysis_secret_scanning::class, 'createFromDiscriminatorValue'])),
            'secret_scanning_push_protection' => fn(ParseNode $n) => $o->setSecretScanningPushProtection($n->getObjectValue([SecurityAndAnalysis_secret_scanning_push_protection::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the secret_scanning property value. The secret_scanning property
     * @return SecurityAndAnalysis_secret_scanning|null
    */
    public function getSecretScanning(): ?SecurityAndAnalysis_secret_scanning {
        return $this->secret_scanning;
    }

    /**
     * Gets the secret_scanning_push_protection property value. The secret_scanning_push_protection property
     * @return SecurityAndAnalysis_secret_scanning_push_protection|null
    */
    public function getSecretScanningPushProtection(): ?SecurityAndAnalysis_secret_scanning_push_protection {
        return $this->secret_scanning_push_protection;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('advanced_security', $this->getAdvancedSecurity());
        $writer->writeObjectValue('dependabot_security_updates', $this->getDependabotSecurityUpdates());
        $writer->writeObjectValue('secret_scanning', $this->getSecretScanning());
        $writer->writeObjectValue('secret_scanning_push_protection', $this->getSecretScanningPushProtection());
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
     * Sets the advanced_security property value. The advanced_security property
     * @param SecurityAndAnalysis_advanced_security|null $value Value to set for the advanced_security property.
    */
    public function setAdvancedSecurity(?SecurityAndAnalysis_advanced_security $value): void {
        $this->advanced_security = $value;
    }

    /**
     * Sets the dependabot_security_updates property value. Enable or disable Dependabot security updates for the repository.
     * @param SecurityAndAnalysis_dependabot_security_updates|null $value Value to set for the dependabot_security_updates property.
    */
    public function setDependabotSecurityUpdates(?SecurityAndAnalysis_dependabot_security_updates $value): void {
        $this->dependabot_security_updates = $value;
    }

    /**
     * Sets the secret_scanning property value. The secret_scanning property
     * @param SecurityAndAnalysis_secret_scanning|null $value Value to set for the secret_scanning property.
    */
    public function setSecretScanning(?SecurityAndAnalysis_secret_scanning $value): void {
        $this->secret_scanning = $value;
    }

    /**
     * Sets the secret_scanning_push_protection property value. The secret_scanning_push_protection property
     * @param SecurityAndAnalysis_secret_scanning_push_protection|null $value Value to set for the secret_scanning_push_protection property.
    */
    public function setSecretScanningPushProtection(?SecurityAndAnalysis_secret_scanning_push_protection $value): void {
        $this->secret_scanning_push_protection = $value;
    }

}
