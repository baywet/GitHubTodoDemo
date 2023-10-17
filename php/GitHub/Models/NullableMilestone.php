<?php

namespace Baywet\Githubtododemo\Github\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A collection of related issues and pull requests.
*/
class NullableMilestone implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $closed_at The closed_at property
    */
    private ?DateTime $closed_at = null;
    
    /**
     * @var int|null $closed_issues The closed_issues property
    */
    private ?int $closed_issues = null;
    
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var NullableSimpleUser|null $creator A GitHub user.
    */
    private ?NullableSimpleUser $creator = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var DateTime|null $due_on The due_on property
    */
    private ?DateTime $due_on = null;
    
    /**
     * @var string|null $html_url The html_url property
    */
    private ?string $html_url = null;
    
    /**
     * @var int|null $id The id property
    */
    private ?int $id = null;
    
    /**
     * @var string|null $labels_url The labels_url property
    */
    private ?string $labels_url = null;
    
    /**
     * @var string|null $node_id The node_id property
    */
    private ?string $node_id = null;
    
    /**
     * @var int|null $number The number of the milestone.
    */
    private ?int $number = null;
    
    /**
     * @var int|null $open_issues The open_issues property
    */
    private ?int $open_issues = null;
    
    /**
     * @var NullableMilestone_state|null $state The state of the milestone.
    */
    private ?NullableMilestone_state $state = null;
    
    /**
     * @var string|null $title The title of the milestone.
    */
    private ?string $title = null;
    
    /**
     * @var DateTime|null $updated_at The updated_at property
    */
    private ?DateTime $updated_at = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new nullableMilestone and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setState(new NullableMilestone_state('open'));
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NullableMilestone
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NullableMilestone {
        return new NullableMilestone();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the closed_at property value. The closed_at property
     * @return DateTime|null
    */
    public function getClosedAt(): ?DateTime {
        return $this->closed_at;
    }

    /**
     * Gets the closed_issues property value. The closed_issues property
     * @return int|null
    */
    public function getClosedIssues(): ?int {
        return $this->closed_issues;
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * Gets the creator property value. A GitHub user.
     * @return NullableSimpleUser|null
    */
    public function getCreator(): ?NullableSimpleUser {
        return $this->creator;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the due_on property value. The due_on property
     * @return DateTime|null
    */
    public function getDueOn(): ?DateTime {
        return $this->due_on;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'closed_at' => fn(ParseNode $n) => $o->setClosedAt($n->getDateTimeValue()),
            'closed_issues' => fn(ParseNode $n) => $o->setClosedIssues($n->getIntegerValue()),
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'creator' => fn(ParseNode $n) => $o->setCreator($n->getObjectValue([NullableSimpleUser::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'due_on' => fn(ParseNode $n) => $o->setDueOn($n->getDateTimeValue()),
            'html_url' => fn(ParseNode $n) => $o->setHtmlUrl($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'labels_url' => fn(ParseNode $n) => $o->setLabelsUrl($n->getStringValue()),
            'node_id' => fn(ParseNode $n) => $o->setNodeId($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getIntegerValue()),
            'open_issues' => fn(ParseNode $n) => $o->setOpenIssues($n->getIntegerValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(NullableMilestone_state::class)),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'updated_at' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the html_url property value. The html_url property
     * @return string|null
    */
    public function getHtmlUrl(): ?string {
        return $this->html_url;
    }

    /**
     * Gets the id property value. The id property
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the labels_url property value. The labels_url property
     * @return string|null
    */
    public function getLabelsUrl(): ?string {
        return $this->labels_url;
    }

    /**
     * Gets the node_id property value. The node_id property
     * @return string|null
    */
    public function getNodeId(): ?string {
        return $this->node_id;
    }

    /**
     * Gets the number property value. The number of the milestone.
     * @return int|null
    */
    public function getNumber(): ?int {
        return $this->number;
    }

    /**
     * Gets the open_issues property value. The open_issues property
     * @return int|null
    */
    public function getOpenIssues(): ?int {
        return $this->open_issues;
    }

    /**
     * Gets the state property value. The state of the milestone.
     * @return NullableMilestone_state|null
    */
    public function getState(): ?NullableMilestone_state {
        return $this->state;
    }

    /**
     * Gets the title property value. The title of the milestone.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the updated_at property value. The updated_at property
     * @return DateTime|null
    */
    public function getUpdatedAt(): ?DateTime {
        return $this->updated_at;
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
        $writer->writeDateTimeValue('closed_at', $this->getClosedAt());
        $writer->writeIntegerValue('closed_issues', $this->getClosedIssues());
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeObjectValue('creator', $this->getCreator());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeDateTimeValue('due_on', $this->getDueOn());
        $writer->writeStringValue('html_url', $this->getHtmlUrl());
        $writer->writeIntegerValue('id', $this->getId());
        $writer->writeStringValue('labels_url', $this->getLabelsUrl());
        $writer->writeStringValue('node_id', $this->getNodeId());
        $writer->writeIntegerValue('number', $this->getNumber());
        $writer->writeIntegerValue('open_issues', $this->getOpenIssues());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeDateTimeValue('updated_at', $this->getUpdatedAt());
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
     * Sets the closed_at property value. The closed_at property
     * @param DateTime|null $value Value to set for the closed_at property.
    */
    public function setClosedAt(?DateTime $value): void {
        $this->closed_at = $value;
    }

    /**
     * Sets the closed_issues property value. The closed_issues property
     * @param int|null $value Value to set for the closed_issues property.
    */
    public function setClosedIssues(?int $value): void {
        $this->closed_issues = $value;
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the creator property value. A GitHub user.
     * @param NullableSimpleUser|null $value Value to set for the creator property.
    */
    public function setCreator(?NullableSimpleUser $value): void {
        $this->creator = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the due_on property value. The due_on property
     * @param DateTime|null $value Value to set for the due_on property.
    */
    public function setDueOn(?DateTime $value): void {
        $this->due_on = $value;
    }

    /**
     * Sets the html_url property value. The html_url property
     * @param string|null $value Value to set for the html_url property.
    */
    public function setHtmlUrl(?string $value): void {
        $this->html_url = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param int|null $value Value to set for the id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the labels_url property value. The labels_url property
     * @param string|null $value Value to set for the labels_url property.
    */
    public function setLabelsUrl(?string $value): void {
        $this->labels_url = $value;
    }

    /**
     * Sets the node_id property value. The node_id property
     * @param string|null $value Value to set for the node_id property.
    */
    public function setNodeId(?string $value): void {
        $this->node_id = $value;
    }

    /**
     * Sets the number property value. The number of the milestone.
     * @param int|null $value Value to set for the number property.
    */
    public function setNumber(?int $value): void {
        $this->number = $value;
    }

    /**
     * Sets the open_issues property value. The open_issues property
     * @param int|null $value Value to set for the open_issues property.
    */
    public function setOpenIssues(?int $value): void {
        $this->open_issues = $value;
    }

    /**
     * Sets the state property value. The state of the milestone.
     * @param NullableMilestone_state|null $value Value to set for the state property.
    */
    public function setState(?NullableMilestone_state $value): void {
        $this->state = $value;
    }

    /**
     * Sets the title property value. The title of the milestone.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the updated_at property value. The updated_at property
     * @param DateTime|null $value Value to set for the updated_at property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updated_at = $value;
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
