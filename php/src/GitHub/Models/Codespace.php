<?php

namespace Baywet\Githubtododemo\Github\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A codespace.
*/
class Codespace implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var SimpleUser|null $billable_owner A GitHub user.
    */
    private ?SimpleUser $billable_owner = null;
    
    /**
     * @var DateTime|null $created_at The created_at property
    */
    private ?DateTime $created_at = null;
    
    /**
     * @var string|null $devcontainer_path Path to devcontainer.json from repo root used to create Codespace.
    */
    private ?string $devcontainer_path = null;
    
    /**
     * @var string|null $display_name Display name for this codespace.
    */
    private ?string $display_name = null;
    
    /**
     * @var string|null $environment_id UUID identifying this codespace's environment.
    */
    private ?string $environment_id = null;
    
    /**
     * @var Codespace_git_status|null $git_status Details about the codespace's git repository.
    */
    private ?Codespace_git_status $git_status = null;
    
    /**
     * @var int|null $id The id property
    */
    private ?int $id = null;
    
    /**
     * @var int|null $idle_timeout_minutes The number of minutes of inactivity after which this codespace will be automatically stopped.
    */
    private ?int $idle_timeout_minutes = null;
    
    /**
     * @var string|null $idle_timeout_notice Text to show user when codespace idle timeout minutes has been overriden by an organization policy
    */
    private ?string $idle_timeout_notice = null;
    
    /**
     * @var string|null $last_known_stop_notice The text to display to a user when a codespace has been stopped for a potentially actionable reason.
    */
    private ?string $last_known_stop_notice = null;
    
    /**
     * @var DateTime|null $last_used_at Last known time this codespace was started.
    */
    private ?DateTime $last_used_at = null;
    
    /**
     * @var Codespace_location|null $location The initally assigned location of a new codespace.
    */
    private ?Codespace_location $location = null;
    
    /**
     * @var NullableCodespaceMachine|null $machine A description of the machine powering a codespace.
    */
    private ?NullableCodespaceMachine $machine = null;
    
    /**
     * @var string|null $machines_url API URL to access available alternate machine types for this codespace.
    */
    private ?string $machines_url = null;
    
    /**
     * @var string|null $name Automatically generated name of this codespace.
    */
    private ?string $name = null;
    
    /**
     * @var SimpleUser|null $owner A GitHub user.
    */
    private ?SimpleUser $owner = null;
    
    /**
     * @var bool|null $pending_operation Whether or not a codespace has a pending async operation. This would mean that the codespace is temporarily unavailable. The only thing that you can do with a codespace in this state is delete it.
    */
    private ?bool $pending_operation = null;
    
    /**
     * @var string|null $pending_operation_disabled_reason Text to show user when codespace is disabled by a pending operation
    */
    private ?string $pending_operation_disabled_reason = null;
    
    /**
     * @var bool|null $prebuild Whether the codespace was created from a prebuild.
    */
    private ?bool $prebuild = null;
    
    /**
     * @var string|null $publish_url API URL to publish this codespace to a new repository.
    */
    private ?string $publish_url = null;
    
    /**
     * @var string|null $pulls_url API URL for the Pull Request associated with this codespace, if any.
    */
    private ?string $pulls_url = null;
    
    /**
     * @var array<string>|null $recent_folders The recent_folders property
    */
    private ?array $recent_folders = null;
    
    /**
     * @var MinimalRepository|null $repository Minimal Repository
    */
    private ?MinimalRepository $repository = null;
    
    /**
     * @var DateTime|null $retention_expires_at When a codespace will be auto-deleted based on the "retention_period_minutes" and "last_used_at"
    */
    private ?DateTime $retention_expires_at = null;
    
    /**
     * @var int|null $retention_period_minutes Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).
    */
    private ?int $retention_period_minutes = null;
    
    /**
     * @var Codespace_runtime_constraints|null $runtime_constraints The runtime_constraints property
    */
    private ?Codespace_runtime_constraints $runtime_constraints = null;
    
    /**
     * @var string|null $start_url API URL to start this codespace.
    */
    private ?string $start_url = null;
    
    /**
     * @var Codespace_state|null $state State of this codespace.
    */
    private ?Codespace_state $state = null;
    
    /**
     * @var string|null $stop_url API URL to stop this codespace.
    */
    private ?string $stop_url = null;
    
    /**
     * @var DateTime|null $updated_at The updated_at property
    */
    private ?DateTime $updated_at = null;
    
    /**
     * @var string|null $url API URL for this codespace.
    */
    private ?string $url = null;
    
    /**
     * @var string|null $web_url URL to access this codespace on the web.
    */
    private ?string $web_url = null;
    
    /**
     * Instantiates a new codespace and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Codespace
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Codespace {
        return new Codespace();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billable_owner property value. A GitHub user.
     * @return SimpleUser|null
    */
    public function getBillableOwner(): ?SimpleUser {
        return $this->billable_owner;
    }

    /**
     * Gets the created_at property value. The created_at property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->created_at;
    }

    /**
     * Gets the devcontainer_path property value. Path to devcontainer.json from repo root used to create Codespace.
     * @return string|null
    */
    public function getDevcontainerPath(): ?string {
        return $this->devcontainer_path;
    }

    /**
     * Gets the display_name property value. Display name for this codespace.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->display_name;
    }

    /**
     * Gets the environment_id property value. UUID identifying this codespace's environment.
     * @return string|null
    */
    public function getEnvironmentId(): ?string {
        return $this->environment_id;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billable_owner' => fn(ParseNode $n) => $o->setBillableOwner($n->getObjectValue([SimpleUser::class, 'createFromDiscriminatorValue'])),
            'created_at' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'devcontainer_path' => fn(ParseNode $n) => $o->setDevcontainerPath($n->getStringValue()),
            'display_name' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'environment_id' => fn(ParseNode $n) => $o->setEnvironmentId($n->getStringValue()),
            'git_status' => fn(ParseNode $n) => $o->setGitStatus($n->getObjectValue([Codespace_git_status::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'idle_timeout_minutes' => fn(ParseNode $n) => $o->setIdleTimeoutMinutes($n->getIntegerValue()),
            'idle_timeout_notice' => fn(ParseNode $n) => $o->setIdleTimeoutNotice($n->getStringValue()),
            'last_known_stop_notice' => fn(ParseNode $n) => $o->setLastKnownStopNotice($n->getStringValue()),
            'last_used_at' => fn(ParseNode $n) => $o->setLastUsedAt($n->getDateTimeValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getEnumValue(Codespace_location::class)),
            'machine' => fn(ParseNode $n) => $o->setMachine($n->getObjectValue([NullableCodespaceMachine::class, 'createFromDiscriminatorValue'])),
            'machines_url' => fn(ParseNode $n) => $o->setMachinesUrl($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getObjectValue([SimpleUser::class, 'createFromDiscriminatorValue'])),
            'pending_operation' => fn(ParseNode $n) => $o->setPendingOperation($n->getBooleanValue()),
            'pending_operation_disabled_reason' => fn(ParseNode $n) => $o->setPendingOperationDisabledReason($n->getStringValue()),
            'prebuild' => fn(ParseNode $n) => $o->setPrebuild($n->getBooleanValue()),
            'publish_url' => fn(ParseNode $n) => $o->setPublishUrl($n->getStringValue()),
            'pulls_url' => fn(ParseNode $n) => $o->setPullsUrl($n->getStringValue()),
            'recent_folders' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRecentFolders($val);
            },
            'repository' => fn(ParseNode $n) => $o->setRepository($n->getObjectValue([MinimalRepository::class, 'createFromDiscriminatorValue'])),
            'retention_expires_at' => fn(ParseNode $n) => $o->setRetentionExpiresAt($n->getDateTimeValue()),
            'retention_period_minutes' => fn(ParseNode $n) => $o->setRetentionPeriodMinutes($n->getIntegerValue()),
            'runtime_constraints' => fn(ParseNode $n) => $o->setRuntimeConstraints($n->getObjectValue([Codespace_runtime_constraints::class, 'createFromDiscriminatorValue'])),
            'start_url' => fn(ParseNode $n) => $o->setStartUrl($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(Codespace_state::class)),
            'stop_url' => fn(ParseNode $n) => $o->setStopUrl($n->getStringValue()),
            'updated_at' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
            'web_url' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the git_status property value. Details about the codespace's git repository.
     * @return Codespace_git_status|null
    */
    public function getGitStatus(): ?Codespace_git_status {
        return $this->git_status;
    }

    /**
     * Gets the id property value. The id property
     * @return int|null
    */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Gets the idle_timeout_minutes property value. The number of minutes of inactivity after which this codespace will be automatically stopped.
     * @return int|null
    */
    public function getIdleTimeoutMinutes(): ?int {
        return $this->idle_timeout_minutes;
    }

    /**
     * Gets the idle_timeout_notice property value. Text to show user when codespace idle timeout minutes has been overriden by an organization policy
     * @return string|null
    */
    public function getIdleTimeoutNotice(): ?string {
        return $this->idle_timeout_notice;
    }

    /**
     * Gets the last_known_stop_notice property value. The text to display to a user when a codespace has been stopped for a potentially actionable reason.
     * @return string|null
    */
    public function getLastKnownStopNotice(): ?string {
        return $this->last_known_stop_notice;
    }

    /**
     * Gets the last_used_at property value. Last known time this codespace was started.
     * @return DateTime|null
    */
    public function getLastUsedAt(): ?DateTime {
        return $this->last_used_at;
    }

    /**
     * Gets the location property value. The initally assigned location of a new codespace.
     * @return Codespace_location|null
    */
    public function getLocation(): ?Codespace_location {
        return $this->location;
    }

    /**
     * Gets the machine property value. A description of the machine powering a codespace.
     * @return NullableCodespaceMachine|null
    */
    public function getMachine(): ?NullableCodespaceMachine {
        return $this->machine;
    }

    /**
     * Gets the machines_url property value. API URL to access available alternate machine types for this codespace.
     * @return string|null
    */
    public function getMachinesUrl(): ?string {
        return $this->machines_url;
    }

    /**
     * Gets the name property value. Automatically generated name of this codespace.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the owner property value. A GitHub user.
     * @return SimpleUser|null
    */
    public function getOwner(): ?SimpleUser {
        return $this->owner;
    }

    /**
     * Gets the pending_operation property value. Whether or not a codespace has a pending async operation. This would mean that the codespace is temporarily unavailable. The only thing that you can do with a codespace in this state is delete it.
     * @return bool|null
    */
    public function getPendingOperation(): ?bool {
        return $this->pending_operation;
    }

    /**
     * Gets the pending_operation_disabled_reason property value. Text to show user when codespace is disabled by a pending operation
     * @return string|null
    */
    public function getPendingOperationDisabledReason(): ?string {
        return $this->pending_operation_disabled_reason;
    }

    /**
     * Gets the prebuild property value. Whether the codespace was created from a prebuild.
     * @return bool|null
    */
    public function getPrebuild(): ?bool {
        return $this->prebuild;
    }

    /**
     * Gets the publish_url property value. API URL to publish this codespace to a new repository.
     * @return string|null
    */
    public function getPublishUrl(): ?string {
        return $this->publish_url;
    }

    /**
     * Gets the pulls_url property value. API URL for the Pull Request associated with this codespace, if any.
     * @return string|null
    */
    public function getPullsUrl(): ?string {
        return $this->pulls_url;
    }

    /**
     * Gets the recent_folders property value. The recent_folders property
     * @return array<string>|null
    */
    public function getRecentFolders(): ?array {
        return $this->recent_folders;
    }

    /**
     * Gets the repository property value. Minimal Repository
     * @return MinimalRepository|null
    */
    public function getRepository(): ?MinimalRepository {
        return $this->repository;
    }

    /**
     * Gets the retention_expires_at property value. When a codespace will be auto-deleted based on the "retention_period_minutes" and "last_used_at"
     * @return DateTime|null
    */
    public function getRetentionExpiresAt(): ?DateTime {
        return $this->retention_expires_at;
    }

    /**
     * Gets the retention_period_minutes property value. Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).
     * @return int|null
    */
    public function getRetentionPeriodMinutes(): ?int {
        return $this->retention_period_minutes;
    }

    /**
     * Gets the runtime_constraints property value. The runtime_constraints property
     * @return Codespace_runtime_constraints|null
    */
    public function getRuntimeConstraints(): ?Codespace_runtime_constraints {
        return $this->runtime_constraints;
    }

    /**
     * Gets the start_url property value. API URL to start this codespace.
     * @return string|null
    */
    public function getStartUrl(): ?string {
        return $this->start_url;
    }

    /**
     * Gets the state property value. State of this codespace.
     * @return Codespace_state|null
    */
    public function getState(): ?Codespace_state {
        return $this->state;
    }

    /**
     * Gets the stop_url property value. API URL to stop this codespace.
     * @return string|null
    */
    public function getStopUrl(): ?string {
        return $this->stop_url;
    }

    /**
     * Gets the updated_at property value. The updated_at property
     * @return DateTime|null
    */
    public function getUpdatedAt(): ?DateTime {
        return $this->updated_at;
    }

    /**
     * Gets the url property value. API URL for this codespace.
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Gets the web_url property value. URL to access this codespace on the web.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->web_url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('billable_owner', $this->getBillableOwner());
        $writer->writeDateTimeValue('created_at', $this->getCreatedAt());
        $writer->writeStringValue('devcontainer_path', $this->getDevcontainerPath());
        $writer->writeStringValue('display_name', $this->getDisplayName());
        $writer->writeStringValue('environment_id', $this->getEnvironmentId());
        $writer->writeObjectValue('git_status', $this->getGitStatus());
        $writer->writeIntegerValue('id', $this->getId());
        $writer->writeIntegerValue('idle_timeout_minutes', $this->getIdleTimeoutMinutes());
        $writer->writeStringValue('idle_timeout_notice', $this->getIdleTimeoutNotice());
        $writer->writeStringValue('last_known_stop_notice', $this->getLastKnownStopNotice());
        $writer->writeDateTimeValue('last_used_at', $this->getLastUsedAt());
        $writer->writeEnumValue('location', $this->getLocation());
        $writer->writeObjectValue('machine', $this->getMachine());
        $writer->writeStringValue('machines_url', $this->getMachinesUrl());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('owner', $this->getOwner());
        $writer->writeBooleanValue('pending_operation', $this->getPendingOperation());
        $writer->writeStringValue('pending_operation_disabled_reason', $this->getPendingOperationDisabledReason());
        $writer->writeBooleanValue('prebuild', $this->getPrebuild());
        $writer->writeStringValue('publish_url', $this->getPublishUrl());
        $writer->writeStringValue('pulls_url', $this->getPullsUrl());
        $writer->writeCollectionOfPrimitiveValues('recent_folders', $this->getRecentFolders());
        $writer->writeObjectValue('repository', $this->getRepository());
        $writer->writeDateTimeValue('retention_expires_at', $this->getRetentionExpiresAt());
        $writer->writeIntegerValue('retention_period_minutes', $this->getRetentionPeriodMinutes());
        $writer->writeObjectValue('runtime_constraints', $this->getRuntimeConstraints());
        $writer->writeStringValue('start_url', $this->getStartUrl());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('stop_url', $this->getStopUrl());
        $writer->writeDateTimeValue('updated_at', $this->getUpdatedAt());
        $writer->writeStringValue('url', $this->getUrl());
        $writer->writeStringValue('web_url', $this->getWebUrl());
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
     * Sets the billable_owner property value. A GitHub user.
     * @param SimpleUser|null $value Value to set for the billable_owner property.
    */
    public function setBillableOwner(?SimpleUser $value): void {
        $this->billable_owner = $value;
    }

    /**
     * Sets the created_at property value. The created_at property
     * @param DateTime|null $value Value to set for the created_at property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->created_at = $value;
    }

    /**
     * Sets the devcontainer_path property value. Path to devcontainer.json from repo root used to create Codespace.
     * @param string|null $value Value to set for the devcontainer_path property.
    */
    public function setDevcontainerPath(?string $value): void {
        $this->devcontainer_path = $value;
    }

    /**
     * Sets the display_name property value. Display name for this codespace.
     * @param string|null $value Value to set for the display_name property.
    */
    public function setDisplayName(?string $value): void {
        $this->display_name = $value;
    }

    /**
     * Sets the environment_id property value. UUID identifying this codespace's environment.
     * @param string|null $value Value to set for the environment_id property.
    */
    public function setEnvironmentId(?string $value): void {
        $this->environment_id = $value;
    }

    /**
     * Sets the git_status property value. Details about the codespace's git repository.
     * @param Codespace_git_status|null $value Value to set for the git_status property.
    */
    public function setGitStatus(?Codespace_git_status $value): void {
        $this->git_status = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param int|null $value Value to set for the id property.
    */
    public function setId(?int $value): void {
        $this->id = $value;
    }

    /**
     * Sets the idle_timeout_minutes property value. The number of minutes of inactivity after which this codespace will be automatically stopped.
     * @param int|null $value Value to set for the idle_timeout_minutes property.
    */
    public function setIdleTimeoutMinutes(?int $value): void {
        $this->idle_timeout_minutes = $value;
    }

    /**
     * Sets the idle_timeout_notice property value. Text to show user when codespace idle timeout minutes has been overriden by an organization policy
     * @param string|null $value Value to set for the idle_timeout_notice property.
    */
    public function setIdleTimeoutNotice(?string $value): void {
        $this->idle_timeout_notice = $value;
    }

    /**
     * Sets the last_known_stop_notice property value. The text to display to a user when a codespace has been stopped for a potentially actionable reason.
     * @param string|null $value Value to set for the last_known_stop_notice property.
    */
    public function setLastKnownStopNotice(?string $value): void {
        $this->last_known_stop_notice = $value;
    }

    /**
     * Sets the last_used_at property value. Last known time this codespace was started.
     * @param DateTime|null $value Value to set for the last_used_at property.
    */
    public function setLastUsedAt(?DateTime $value): void {
        $this->last_used_at = $value;
    }

    /**
     * Sets the location property value. The initally assigned location of a new codespace.
     * @param Codespace_location|null $value Value to set for the location property.
    */
    public function setLocation(?Codespace_location $value): void {
        $this->location = $value;
    }

    /**
     * Sets the machine property value. A description of the machine powering a codespace.
     * @param NullableCodespaceMachine|null $value Value to set for the machine property.
    */
    public function setMachine(?NullableCodespaceMachine $value): void {
        $this->machine = $value;
    }

    /**
     * Sets the machines_url property value. API URL to access available alternate machine types for this codespace.
     * @param string|null $value Value to set for the machines_url property.
    */
    public function setMachinesUrl(?string $value): void {
        $this->machines_url = $value;
    }

    /**
     * Sets the name property value. Automatically generated name of this codespace.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the owner property value. A GitHub user.
     * @param SimpleUser|null $value Value to set for the owner property.
    */
    public function setOwner(?SimpleUser $value): void {
        $this->owner = $value;
    }

    /**
     * Sets the pending_operation property value. Whether or not a codespace has a pending async operation. This would mean that the codespace is temporarily unavailable. The only thing that you can do with a codespace in this state is delete it.
     * @param bool|null $value Value to set for the pending_operation property.
    */
    public function setPendingOperation(?bool $value): void {
        $this->pending_operation = $value;
    }

    /**
     * Sets the pending_operation_disabled_reason property value. Text to show user when codespace is disabled by a pending operation
     * @param string|null $value Value to set for the pending_operation_disabled_reason property.
    */
    public function setPendingOperationDisabledReason(?string $value): void {
        $this->pending_operation_disabled_reason = $value;
    }

    /**
     * Sets the prebuild property value. Whether the codespace was created from a prebuild.
     * @param bool|null $value Value to set for the prebuild property.
    */
    public function setPrebuild(?bool $value): void {
        $this->prebuild = $value;
    }

    /**
     * Sets the publish_url property value. API URL to publish this codespace to a new repository.
     * @param string|null $value Value to set for the publish_url property.
    */
    public function setPublishUrl(?string $value): void {
        $this->publish_url = $value;
    }

    /**
     * Sets the pulls_url property value. API URL for the Pull Request associated with this codespace, if any.
     * @param string|null $value Value to set for the pulls_url property.
    */
    public function setPullsUrl(?string $value): void {
        $this->pulls_url = $value;
    }

    /**
     * Sets the recent_folders property value. The recent_folders property
     * @param array<string>|null $value Value to set for the recent_folders property.
    */
    public function setRecentFolders(?array $value): void {
        $this->recent_folders = $value;
    }

    /**
     * Sets the repository property value. Minimal Repository
     * @param MinimalRepository|null $value Value to set for the repository property.
    */
    public function setRepository(?MinimalRepository $value): void {
        $this->repository = $value;
    }

    /**
     * Sets the retention_expires_at property value. When a codespace will be auto-deleted based on the "retention_period_minutes" and "last_used_at"
     * @param DateTime|null $value Value to set for the retention_expires_at property.
    */
    public function setRetentionExpiresAt(?DateTime $value): void {
        $this->retention_expires_at = $value;
    }

    /**
     * Sets the retention_period_minutes property value. Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).
     * @param int|null $value Value to set for the retention_period_minutes property.
    */
    public function setRetentionPeriodMinutes(?int $value): void {
        $this->retention_period_minutes = $value;
    }

    /**
     * Sets the runtime_constraints property value. The runtime_constraints property
     * @param Codespace_runtime_constraints|null $value Value to set for the runtime_constraints property.
    */
    public function setRuntimeConstraints(?Codespace_runtime_constraints $value): void {
        $this->runtime_constraints = $value;
    }

    /**
     * Sets the start_url property value. API URL to start this codespace.
     * @param string|null $value Value to set for the start_url property.
    */
    public function setStartUrl(?string $value): void {
        $this->start_url = $value;
    }

    /**
     * Sets the state property value. State of this codespace.
     * @param Codespace_state|null $value Value to set for the state property.
    */
    public function setState(?Codespace_state $value): void {
        $this->state = $value;
    }

    /**
     * Sets the stop_url property value. API URL to stop this codespace.
     * @param string|null $value Value to set for the stop_url property.
    */
    public function setStopUrl(?string $value): void {
        $this->stop_url = $value;
    }

    /**
     * Sets the updated_at property value. The updated_at property
     * @param DateTime|null $value Value to set for the updated_at property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updated_at = $value;
    }

    /**
     * Sets the url property value. API URL for this codespace.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

    /**
     * Sets the web_url property value. URL to access this codespace on the web.
     * @param string|null $value Value to set for the web_url property.
    */
    public function setWebUrl(?string $value): void {
        $this->web_url = $value;
    }

}
