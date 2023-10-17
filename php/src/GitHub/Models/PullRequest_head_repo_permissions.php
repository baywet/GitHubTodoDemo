<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PullRequest_head_repo_permissions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $admin The admin property
    */
    private ?bool $admin = null;
    
    /**
     * @var bool|null $maintain The maintain property
    */
    private ?bool $maintain = null;
    
    /**
     * @var bool|null $pull The pull property
    */
    private ?bool $pull = null;
    
    /**
     * @var bool|null $push The push property
    */
    private ?bool $push = null;
    
    /**
     * @var bool|null $triage The triage property
    */
    private ?bool $triage = null;
    
    /**
     * Instantiates a new pullRequest_head_repo_permissions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PullRequest_head_repo_permissions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PullRequest_head_repo_permissions {
        return new PullRequest_head_repo_permissions();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the admin property value. The admin property
     * @return bool|null
    */
    public function getAdmin(): ?bool {
        return $this->admin;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'admin' => fn(ParseNode $n) => $o->setAdmin($n->getBooleanValue()),
            'maintain' => fn(ParseNode $n) => $o->setMaintain($n->getBooleanValue()),
            'pull' => fn(ParseNode $n) => $o->setPull($n->getBooleanValue()),
            'push' => fn(ParseNode $n) => $o->setPush($n->getBooleanValue()),
            'triage' => fn(ParseNode $n) => $o->setTriage($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the maintain property value. The maintain property
     * @return bool|null
    */
    public function getMaintain(): ?bool {
        return $this->maintain;
    }

    /**
     * Gets the pull property value. The pull property
     * @return bool|null
    */
    public function getPull(): ?bool {
        return $this->pull;
    }

    /**
     * Gets the push property value. The push property
     * @return bool|null
    */
    public function getPush(): ?bool {
        return $this->push;
    }

    /**
     * Gets the triage property value. The triage property
     * @return bool|null
    */
    public function getTriage(): ?bool {
        return $this->triage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('admin', $this->getAdmin());
        $writer->writeBooleanValue('maintain', $this->getMaintain());
        $writer->writeBooleanValue('pull', $this->getPull());
        $writer->writeBooleanValue('push', $this->getPush());
        $writer->writeBooleanValue('triage', $this->getTriage());
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
     * Sets the admin property value. The admin property
     * @param bool|null $value Value to set for the admin property.
    */
    public function setAdmin(?bool $value): void {
        $this->admin = $value;
    }

    /**
     * Sets the maintain property value. The maintain property
     * @param bool|null $value Value to set for the maintain property.
    */
    public function setMaintain(?bool $value): void {
        $this->maintain = $value;
    }

    /**
     * Sets the pull property value. The pull property
     * @param bool|null $value Value to set for the pull property.
    */
    public function setPull(?bool $value): void {
        $this->pull = $value;
    }

    /**
     * Sets the push property value. The push property
     * @param bool|null $value Value to set for the push property.
    */
    public function setPush(?bool $value): void {
        $this->push = $value;
    }

    /**
     * Sets the triage property value. The triage property
     * @param bool|null $value Value to set for the triage property.
    */
    public function setTriage(?bool $value): void {
        $this->triage = $value;
    }

}
