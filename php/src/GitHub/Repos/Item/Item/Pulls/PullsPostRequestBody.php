<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PullsPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $base The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository.
    */
    private ?string $base = null;
    
    /**
     * @var string|null $body The contents of the pull request.
    */
    private ?string $body = null;
    
    /**
     * @var bool|null $draft Indicates whether the pull request is a draft. See "[Draft Pull Requests](https://docs.github.com/articles/about-pull-requests#draft-pull-requests)" in the GitHub Help documentation to learn more.
    */
    private ?bool $draft = null;
    
    /**
     * @var string|null $head The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`.
    */
    private ?string $head = null;
    
    /**
     * @var string|null $head_repo The name of the repository where the changes in the pull request were made. This field is required for cross-repository pull requests if both repositories are owned by the same organization.
    */
    private ?string $head_repo = null;
    
    /**
     * @var int|null $issue An issue in the repository to convert to a pull request. The issue title, body, and comments will become the title, body, and comments on the new pull request. Required unless `title` is specified.
    */
    private ?int $issue = null;
    
    /**
     * @var bool|null $maintainer_can_modify Indicates whether [maintainers can modify](https://docs.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
    */
    private ?bool $maintainer_can_modify = null;
    
    /**
     * @var string|null $title The title of the new pull request. Required unless `issue` is specified.
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new pullsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PullsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PullsPostRequestBody {
        return new PullsPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the base property value. The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository.
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
     * Gets the draft property value. Indicates whether the pull request is a draft. See "[Draft Pull Requests](https://docs.github.com/articles/about-pull-requests#draft-pull-requests)" in the GitHub Help documentation to learn more.
     * @return bool|null
    */
    public function getDraft(): ?bool {
        return $this->draft;
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
            'draft' => fn(ParseNode $n) => $o->setDraft($n->getBooleanValue()),
            'head' => fn(ParseNode $n) => $o->setHead($n->getStringValue()),
            'head_repo' => fn(ParseNode $n) => $o->setHeadRepo($n->getStringValue()),
            'issue' => fn(ParseNode $n) => $o->setIssue($n->getIntegerValue()),
            'maintainer_can_modify' => fn(ParseNode $n) => $o->setMaintainerCanModify($n->getBooleanValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the head property value. The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`.
     * @return string|null
    */
    public function getHead(): ?string {
        return $this->head;
    }

    /**
     * Gets the head_repo property value. The name of the repository where the changes in the pull request were made. This field is required for cross-repository pull requests if both repositories are owned by the same organization.
     * @return string|null
    */
    public function getHeadRepo(): ?string {
        return $this->head_repo;
    }

    /**
     * Gets the issue property value. An issue in the repository to convert to a pull request. The issue title, body, and comments will become the title, body, and comments on the new pull request. Required unless `title` is specified.
     * @return int|null
    */
    public function getIssue(): ?int {
        return $this->issue;
    }

    /**
     * Gets the maintainer_can_modify property value. Indicates whether [maintainers can modify](https://docs.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     * @return bool|null
    */
    public function getMaintainerCanModify(): ?bool {
        return $this->maintainer_can_modify;
    }

    /**
     * Gets the title property value. The title of the new pull request. Required unless `issue` is specified.
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
        $writer->writeBooleanValue('draft', $this->getDraft());
        $writer->writeStringValue('head', $this->getHead());
        $writer->writeStringValue('head_repo', $this->getHeadRepo());
        $writer->writeIntegerValue('issue', $this->getIssue());
        $writer->writeBooleanValue('maintainer_can_modify', $this->getMaintainerCanModify());
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
     * Sets the base property value. The name of the branch you want the changes pulled into. This should be an existing branch on the current repository. You cannot submit a pull request to one repository that requests a merge to a base of another repository.
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
     * Sets the draft property value. Indicates whether the pull request is a draft. See "[Draft Pull Requests](https://docs.github.com/articles/about-pull-requests#draft-pull-requests)" in the GitHub Help documentation to learn more.
     * @param bool|null $value Value to set for the draft property.
    */
    public function setDraft(?bool $value): void {
        $this->draft = $value;
    }

    /**
     * Sets the head property value. The name of the branch where your changes are implemented. For cross-repository pull requests in the same network, namespace `head` with a user like this: `username:branch`.
     * @param string|null $value Value to set for the head property.
    */
    public function setHead(?string $value): void {
        $this->head = $value;
    }

    /**
     * Sets the head_repo property value. The name of the repository where the changes in the pull request were made. This field is required for cross-repository pull requests if both repositories are owned by the same organization.
     * @param string|null $value Value to set for the head_repo property.
    */
    public function setHeadRepo(?string $value): void {
        $this->head_repo = $value;
    }

    /**
     * Sets the issue property value. An issue in the repository to convert to a pull request. The issue title, body, and comments will become the title, body, and comments on the new pull request. Required unless `title` is specified.
     * @param int|null $value Value to set for the issue property.
    */
    public function setIssue(?int $value): void {
        $this->issue = $value;
    }

    /**
     * Sets the maintainer_can_modify property value. Indicates whether [maintainers can modify](https://docs.github.com/articles/allowing-changes-to-a-pull-request-branch-created-from-a-fork/) the pull request.
     * @param bool|null $value Value to set for the maintainer_can_modify property.
    */
    public function setMaintainerCanModify(?bool $value): void {
        $this->maintainer_can_modify = $value;
    }

    /**
     * Sets the title property value. The title of the new pull request. Required unless `issue` is specified.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
