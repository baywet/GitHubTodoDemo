<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Groups of organization members that gives permissions on specified repositories.
*/
class Team implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $html_url The html_url property
    */
    private ?string $html_url = null;
    
    /**
     * @var int|null $id The id property
    */
    private ?int $id = null;
    
    /**
     * @var string|null $members_url The members_url property
    */
    private ?string $members_url = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $node_id The node_id property
    */
    private ?string $node_id = null;
    
    /**
     * @var string|null $notification_setting The notification_setting property
    */
    private ?string $notification_setting = null;
    
    /**
     * @var NullableTeamSimple|null $parent Groups of organization members that gives permissions on specified repositories.
    */
    private ?NullableTeamSimple $parent = null;
    
    /**
     * @var string|null $permission The permission property
    */
    private ?string $permission = null;
    
    /**
     * @var Team_permissions|null $permissions The permissions property
    */
    private ?Team_permissions $permissions = null;
    
    /**
     * @var string|null $privacy The privacy property
    */
    private ?string $privacy = null;
    
    /**
     * @var string|null $repositories_url The repositories_url property
    */
    private ?string $repositories_url = null;
    
    /**
     * @var string|null $slug The slug property
    */
    private ?string $slug = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new team and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Team
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Team {
        return new Team();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'html_url' => fn(ParseNode $n) => $o->setHtmlUrl($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'members_url' => fn(ParseNode $n) => $o->setMembersUrl($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'node_id' => fn(ParseNode $n) => $o->setNodeId($n->getStringValue()),
            'notification_setting' => fn(ParseNode $n) => $o->setNotificationSetting($n->getStringValue()),
            'parent' => fn(ParseNode $n) => $o->setParent($n->getObjectValue([NullableTeamSimple::class, 'createFromDiscriminatorValue'])),
            'permission' => fn(ParseNode $n) => $o->setPermission($n->getStringValue()),
            'permissions' => fn(ParseNode $n) => $o->setPermissions($n->getObjectValue([Team_permissions::class, 'createFromDiscriminatorValue'])),
            'privacy' => fn(ParseNode $n) => $o->setPrivacy($n->getStringValue()),
            'repositories_url' => fn(ParseNode $n) => $o->setRepositoriesUrl($n->getStringValue()),
            'slug' => fn(ParseNode $n) => $o->setSlug($n->getStringValue()),
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
     * Gets the members_url property value. The members_url property
     * @return string|null
    */
    public function getMembersUrl(): ?string {
        return $this->members_url;
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
     * Gets the notification_setting property value. The notification_setting property
     * @return string|null
    */
    public function getNotificationSetting(): ?string {
        return $this->notification_setting;
    }

    /**
     * Gets the parent property value. Groups of organization members that gives permissions on specified repositories.
     * @return NullableTeamSimple|null
    */
    public function getParent(): ?NullableTeamSimple {
        return $this->parent;
    }

    /**
     * Gets the permission property value. The permission property
     * @return string|null
    */
    public function getPermission(): ?string {
        return $this->permission;
    }

    /**
     * Gets the permissions property value. The permissions property
     * @return Team_permissions|null
    */
    public function getPermissions(): ?Team_permissions {
        return $this->permissions;
    }

    /**
     * Gets the privacy property value. The privacy property
     * @return string|null
    */
    public function getPrivacy(): ?string {
        return $this->privacy;
    }

    /**
     * Gets the repositories_url property value. The repositories_url property
     * @return string|null
    */
    public function getRepositoriesUrl(): ?string {
        return $this->repositories_url;
    }

    /**
     * Gets the slug property value. The slug property
     * @return string|null
    */
    public function getSlug(): ?string {
        return $this->slug;
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
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('html_url', $this->getHtmlUrl());
        $writer->writeIntegerValue('id', $this->getId());
        $writer->writeStringValue('members_url', $this->getMembersUrl());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('node_id', $this->getNodeId());
        $writer->writeStringValue('notification_setting', $this->getNotificationSetting());
        $writer->writeObjectValue('parent', $this->getParent());
        $writer->writeStringValue('permission', $this->getPermission());
        $writer->writeObjectValue('permissions', $this->getPermissions());
        $writer->writeStringValue('privacy', $this->getPrivacy());
        $writer->writeStringValue('repositories_url', $this->getRepositoriesUrl());
        $writer->writeStringValue('slug', $this->getSlug());
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
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
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
     * Sets the members_url property value. The members_url property
     * @param string|null $value Value to set for the members_url property.
    */
    public function setMembersUrl(?string $value): void {
        $this->members_url = $value;
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
     * Sets the notification_setting property value. The notification_setting property
     * @param string|null $value Value to set for the notification_setting property.
    */
    public function setNotificationSetting(?string $value): void {
        $this->notification_setting = $value;
    }

    /**
     * Sets the parent property value. Groups of organization members that gives permissions on specified repositories.
     * @param NullableTeamSimple|null $value Value to set for the parent property.
    */
    public function setParent(?NullableTeamSimple $value): void {
        $this->parent = $value;
    }

    /**
     * Sets the permission property value. The permission property
     * @param string|null $value Value to set for the permission property.
    */
    public function setPermission(?string $value): void {
        $this->permission = $value;
    }

    /**
     * Sets the permissions property value. The permissions property
     * @param Team_permissions|null $value Value to set for the permissions property.
    */
    public function setPermissions(?Team_permissions $value): void {
        $this->permissions = $value;
    }

    /**
     * Sets the privacy property value. The privacy property
     * @param string|null $value Value to set for the privacy property.
    */
    public function setPrivacy(?string $value): void {
        $this->privacy = $value;
    }

    /**
     * Sets the repositories_url property value. The repositories_url property
     * @param string|null $value Value to set for the repositories_url property.
    */
    public function setRepositoriesUrl(?string $value): void {
        $this->repositories_url = $value;
    }

    /**
     * Sets the slug property value. The slug property
     * @param string|null $value Value to set for the slug property.
    */
    public function setSlug(?string $value): void {
        $this->slug = $value;
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
