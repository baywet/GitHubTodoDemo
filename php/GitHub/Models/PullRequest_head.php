<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PullRequest_head implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $label The label property
    */
    private ?string $label = null;
    
    /**
     * @var string|null $ref The ref property
    */
    private ?string $ref = null;
    
    /**
     * @var PullRequest_head_repo|null $repo The repo property
    */
    private ?PullRequest_head_repo $repo = null;
    
    /**
     * @var string|null $sha The sha property
    */
    private ?string $sha = null;
    
    /**
     * @var PullRequest_head_user|null $user The user property
    */
    private ?PullRequest_head_user $user = null;
    
    /**
     * Instantiates a new pullRequest_head and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PullRequest_head
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PullRequest_head {
        return new PullRequest_head();
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
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'ref' => fn(ParseNode $n) => $o->setRef($n->getStringValue()),
            'repo' => fn(ParseNode $n) => $o->setRepo($n->getObjectValue([PullRequest_head_repo::class, 'createFromDiscriminatorValue'])),
            'sha' => fn(ParseNode $n) => $o->setSha($n->getStringValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([PullRequest_head_user::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the label property value. The label property
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the ref property value. The ref property
     * @return string|null
    */
    public function getRef(): ?string {
        return $this->ref;
    }

    /**
     * Gets the repo property value. The repo property
     * @return PullRequest_head_repo|null
    */
    public function getRepo(): ?PullRequest_head_repo {
        return $this->repo;
    }

    /**
     * Gets the sha property value. The sha property
     * @return string|null
    */
    public function getSha(): ?string {
        return $this->sha;
    }

    /**
     * Gets the user property value. The user property
     * @return PullRequest_head_user|null
    */
    public function getUser(): ?PullRequest_head_user {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('ref', $this->getRef());
        $writer->writeObjectValue('repo', $this->getRepo());
        $writer->writeStringValue('sha', $this->getSha());
        $writer->writeObjectValue('user', $this->getUser());
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
     * Sets the label property value. The label property
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

    /**
     * Sets the ref property value. The ref property
     * @param string|null $value Value to set for the ref property.
    */
    public function setRef(?string $value): void {
        $this->ref = $value;
    }

    /**
     * Sets the repo property value. The repo property
     * @param PullRequest_head_repo|null $value Value to set for the repo property.
    */
    public function setRepo(?PullRequest_head_repo $value): void {
        $this->repo = $value;
    }

    /**
     * Sets the sha property value. The sha property
     * @param string|null $value Value to set for the sha property.
    */
    public function setSha(?string $value): void {
        $this->sha = $value;
    }

    /**
     * Sets the user property value. The user property
     * @param PullRequest_head_user|null $value Value to set for the user property.
    */
    public function setUser(?PullRequest_head_user $value): void {
        $this->user = $value;
    }

}
