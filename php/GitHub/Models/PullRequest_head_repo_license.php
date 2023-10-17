<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PullRequest_head_repo_license implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $key The key property
    */
    private ?string $key = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $node_id The node_id property
    */
    private ?string $node_id = null;
    
    /**
     * @var string|null $spdx_id The spdx_id property
    */
    private ?string $spdx_id = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new pullRequest_head_repo_license and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PullRequest_head_repo_license
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PullRequest_head_repo_license {
        return new PullRequest_head_repo_license();
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
            'key' => fn(ParseNode $n) => $o->setKey($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'node_id' => fn(ParseNode $n) => $o->setNodeId($n->getStringValue()),
            'spdx_id' => fn(ParseNode $n) => $o->setSpdxId($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the key property value. The key property
     * @return string|null
    */
    public function getKey(): ?string {
        return $this->key;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the node_id property value. The node_id property
     * @return string|null
    */
    public function getNodeId(): ?string {
        return $this->node_id;
    }

    /**
     * Gets the spdx_id property value. The spdx_id property
     * @return string|null
    */
    public function getSpdxId(): ?string {
        return $this->spdx_id;
    }

    /**
     * Gets the url property value. The url property
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('key', $this->getKey());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('node_id', $this->getNodeId());
        $writer->writeStringValue('spdx_id', $this->getSpdxId());
        $writer->writeStringValue('url', $this->getUrl());
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
     * Sets the key property value. The key property
     * @param string|null $value Value to set for the key property.
    */
    public function setKey(?string $value): void {
        $this->key = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the node_id property value. The node_id property
     * @param string|null $value Value to set for the node_id property.
    */
    public function setNodeId(?string $value): void {
        $this->node_id = $value;
    }

    /**
     * Sets the spdx_id property value. The spdx_id property
     * @param string|null $value Value to set for the spdx_id property.
    */
    public function setSpdxId(?string $value): void {
        $this->spdx_id = $value;
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
