<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WithPull_numberPatchRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $base The name of the branch you want your changes pulled into. This should be an existing branch on the current repository. You cannot update the base branch on a pull request to point to another repository.
    */
    private ?string $base = null;
    
    /**
     * @var string|null $body The contents of the pull request.
    */
    private ?string $body = null;
    
    /**
     * @var bool|null $maintainer_can_modify Indicates whether [maintainers can modify](https://docs.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
    */
    private ?bool $maintainer_can_modify = null;
    
    /**
     * @var WithPull_numberPatchRequestBody_state|null $state State of this Pull Request. Either `open` or `closed`.
    */
    private ?WithPull_numberPatchRequestBody_state $state = null;
    
    /**
     * @var string|null $title The title of the pull request.
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new WithPull_numberPatchRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WithPull_numberPatchRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WithPull_numberPatchRequestBody {
        return new WithPull_numberPatchRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the base property value. The name of the branch you want your changes pulled into. This should be an existing branch on the current repository. You cannot update the base branch on a pull request to point to another repository.
     * @return string|null
    */
    public function getBase(): ?string {
        return $this->base;
    }

    /**
     * Gets the body property value. The contents of the pull request.
     * @return string|null
    */
    public function getBody(): ?string {
        return $this->body;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'base' => fn(ParseNode $n) => $o->setBase($n->getStringValue()),
            'body' => fn(ParseNode $n) => $o->setBody($n->getStringValue()),
            'maintainer_can_modify' => fn(ParseNode $n) => $o->setMaintainerCanModify($n->getBooleanValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(WithPull_numberPatchRequestBody_state::class)),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the maintainer_can_modify property value. Indicates whether [maintainers can modify](https://docs.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     * @return bool|null
    */
    public function getMaintainerCanModify(): ?bool {
        return $this->maintainer_can_modify;
    }

    /**
     * Gets the state property value. State of this Pull Request. Either `open` or `closed`.
     * @return WithPull_numberPatchRequestBody_state|null
    */
    public function getState(): ?WithPull_numberPatchRequestBody_state {
        return $this->state;
    }

    /**
     * Gets the title property value. The title of the pull request.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('base', $this->getBase());
        $writer->writeStringValue('body', $this->getBody());
        $writer->writeBooleanValue('maintainer_can_modify', $this->getMaintainerCanModify());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('title', $this->getTitle());
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
     * Sets the base property value. The name of the branch you want your changes pulled into. This should be an existing branch on the current repository. You cannot update the base branch on a pull request to point to another repository.
     * @param string|null $value Value to set for the base property.
    */
    public function setBase(?string $value): void {
        $this->base = $value;
    }

    /**
     * Sets the body property value. The contents of the pull request.
     * @param string|null $value Value to set for the body property.
    */
    public function setBody(?string $value): void {
        $this->body = $value;
    }

    /**
     * Sets the maintainer_can_modify property value. Indicates whether [maintainers can modify](https://docs.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     * @param bool|null $value Value to set for the maintainer_can_modify property.
    */
    public function setMaintainerCanModify(?bool $value): void {
        $this->maintainer_can_modify = $value;
    }

    /**
     * Sets the state property value. State of this Pull Request. Either `open` or `closed`.
     * @param WithPull_numberPatchRequestBody_state|null $value Value to set for the state property.
    */
    public function setState(?WithPull_numberPatchRequestBody_state $value): void {
        $this->state = $value;
    }

    /**
     * Sets the title property value. The title of the pull request.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
