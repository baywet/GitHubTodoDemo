<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Codespaces;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CodespacesPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $client_ip IP for location auto-detection when proxying a request
    */
    private ?string $client_ip = null;
    
    /**
     * @var string|null $devcontainer_path Path to devcontainer.json config to use for this codespace
    */
    private ?string $devcontainer_path = null;
    
    /**
     * @var string|null $display_name Display name for this codespace
    */
    private ?string $display_name = null;
    
    /**
     * @var CodespacesPostRequestBody_geo|null $geo The geographic area for this codespace. If not specified, the value is assigned by IP. This property replaces `location`, which is being deprecated.
    */
    private ?CodespacesPostRequestBody_geo $geo = null;
    
    /**
     * @var int|null $idle_timeout_minutes Time in minutes before codespace stops from inactivity
    */
    private ?int $idle_timeout_minutes = null;
    
    /**
     * @var string|null $location The requested location for a new codespace. Best efforts are made to respect this upon creation. Assigned by IP if not provided.
    */
    private ?string $location = null;
    
    /**
     * @var string|null $machine Machine type to use for this codespace
    */
    private ?string $machine = null;
    
    /**
     * @var bool|null $multi_repo_permissions_opt_out Whether to authorize requested permissions from devcontainer.json
    */
    private ?bool $multi_repo_permissions_opt_out = null;
    
    /**
     * @var int|null $retention_period_minutes Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).
    */
    private ?int $retention_period_minutes = null;
    
    /**
     * @var string|null $working_directory Working directory for this codespace
    */
    private ?string $working_directory = null;
    
    /**
     * Instantiates a new codespacesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CodespacesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CodespacesPostRequestBody {
        return new CodespacesPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the client_ip property value. IP for location auto-detection when proxying a request
     * @return string|null
    */
    public function getClientIp(): ?string {
        return $this->client_ip;
    }

    /**
     * Gets the devcontainer_path property value. Path to devcontainer.json config to use for this codespace
     * @return string|null
    */
    public function getDevcontainerPath(): ?string {
        return $this->devcontainer_path;
    }

    /**
     * Gets the display_name property value. Display name for this codespace
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->display_name;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'client_ip' => fn(ParseNode $n) => $o->setClientIp($n->getStringValue()),
            'devcontainer_path' => fn(ParseNode $n) => $o->setDevcontainerPath($n->getStringValue()),
            'display_name' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'geo' => fn(ParseNode $n) => $o->setGeo($n->getEnumValue(CodespacesPostRequestBody_geo::class)),
            'idle_timeout_minutes' => fn(ParseNode $n) => $o->setIdleTimeoutMinutes($n->getIntegerValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getStringValue()),
            'machine' => fn(ParseNode $n) => $o->setMachine($n->getStringValue()),
            'multi_repo_permissions_opt_out' => fn(ParseNode $n) => $o->setMultiRepoPermissionsOptOut($n->getBooleanValue()),
            'retention_period_minutes' => fn(ParseNode $n) => $o->setRetentionPeriodMinutes($n->getIntegerValue()),
            'working_directory' => fn(ParseNode $n) => $o->setWorkingDirectory($n->getStringValue()),
        ];
    }

    /**
     * Gets the geo property value. The geographic area for this codespace. If not specified, the value is assigned by IP. This property replaces `location`, which is being deprecated.
     * @return CodespacesPostRequestBody_geo|null
    */
    public function getGeo(): ?CodespacesPostRequestBody_geo {
        return $this->geo;
    }

    /**
     * Gets the idle_timeout_minutes property value. Time in minutes before codespace stops from inactivity
     * @return int|null
    */
    public function getIdleTimeoutMinutes(): ?int {
        return $this->idle_timeout_minutes;
    }

    /**
     * Gets the location property value. The requested location for a new codespace. Best efforts are made to respect this upon creation. Assigned by IP if not provided.
     * @return string|null
    */
    public function getLocation(): ?string {
        return $this->location;
    }

    /**
     * Gets the machine property value. Machine type to use for this codespace
     * @return string|null
    */
    public function getMachine(): ?string {
        return $this->machine;
    }

    /**
     * Gets the multi_repo_permissions_opt_out property value. Whether to authorize requested permissions from devcontainer.json
     * @return bool|null
    */
    public function getMultiRepoPermissionsOptOut(): ?bool {
        return $this->multi_repo_permissions_opt_out;
    }

    /**
     * Gets the retention_period_minutes property value. Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).
     * @return int|null
    */
    public function getRetentionPeriodMinutes(): ?int {
        return $this->retention_period_minutes;
    }

    /**
     * Gets the working_directory property value. Working directory for this codespace
     * @return string|null
    */
    public function getWorkingDirectory(): ?string {
        return $this->working_directory;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('client_ip', $this->getClientIp());
        $writer->writeStringValue('devcontainer_path', $this->getDevcontainerPath());
        $writer->writeStringValue('display_name', $this->getDisplayName());
        $writer->writeEnumValue('geo', $this->getGeo());
        $writer->writeIntegerValue('idle_timeout_minutes', $this->getIdleTimeoutMinutes());
        $writer->writeStringValue('location', $this->getLocation());
        $writer->writeStringValue('machine', $this->getMachine());
        $writer->writeBooleanValue('multi_repo_permissions_opt_out', $this->getMultiRepoPermissionsOptOut());
        $writer->writeIntegerValue('retention_period_minutes', $this->getRetentionPeriodMinutes());
        $writer->writeStringValue('working_directory', $this->getWorkingDirectory());
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
     * Sets the client_ip property value. IP for location auto-detection when proxying a request
     * @param string|null $value Value to set for the client_ip property.
    */
    public function setClientIp(?string $value): void {
        $this->client_ip = $value;
    }

    /**
     * Sets the devcontainer_path property value. Path to devcontainer.json config to use for this codespace
     * @param string|null $value Value to set for the devcontainer_path property.
    */
    public function setDevcontainerPath(?string $value): void {
        $this->devcontainer_path = $value;
    }

    /**
     * Sets the display_name property value. Display name for this codespace
     * @param string|null $value Value to set for the display_name property.
    */
    public function setDisplayName(?string $value): void {
        $this->display_name = $value;
    }

    /**
     * Sets the geo property value. The geographic area for this codespace. If not specified, the value is assigned by IP. This property replaces `location`, which is being deprecated.
     * @param CodespacesPostRequestBody_geo|null $value Value to set for the geo property.
    */
    public function setGeo(?CodespacesPostRequestBody_geo $value): void {
        $this->geo = $value;
    }

    /**
     * Sets the idle_timeout_minutes property value. Time in minutes before codespace stops from inactivity
     * @param int|null $value Value to set for the idle_timeout_minutes property.
    */
    public function setIdleTimeoutMinutes(?int $value): void {
        $this->idle_timeout_minutes = $value;
    }

    /**
     * Sets the location property value. The requested location for a new codespace. Best efforts are made to respect this upon creation. Assigned by IP if not provided.
     * @param string|null $value Value to set for the location property.
    */
    public function setLocation(?string $value): void {
        $this->location = $value;
    }

    /**
     * Sets the machine property value. Machine type to use for this codespace
     * @param string|null $value Value to set for the machine property.
    */
    public function setMachine(?string $value): void {
        $this->machine = $value;
    }

    /**
     * Sets the multi_repo_permissions_opt_out property value. Whether to authorize requested permissions from devcontainer.json
     * @param bool|null $value Value to set for the multi_repo_permissions_opt_out property.
    */
    public function setMultiRepoPermissionsOptOut(?bool $value): void {
        $this->multi_repo_permissions_opt_out = $value;
    }

    /**
     * Sets the retention_period_minutes property value. Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).
     * @param int|null $value Value to set for the retention_period_minutes property.
    */
    public function setRetentionPeriodMinutes(?int $value): void {
        $this->retention_period_minutes = $value;
    }

    /**
     * Sets the working_directory property value. Working directory for this codespace
     * @param string|null $value Value to set for the working_directory property.
    */
    public function setWorkingDirectory(?string $value): void {
        $this->working_directory = $value;
    }

}
