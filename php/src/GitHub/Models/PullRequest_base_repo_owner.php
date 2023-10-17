<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PullRequest_base_repo_owner implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $avatar_url The avatar_url property
    */
    private ?string $avatar_url = null;
    
    /**
     * @var string|null $events_url The events_url property
    */
    private ?string $events_url = null;
    
    /**
     * @var string|null $followers_url The followers_url property
    */
    private ?string $followers_url = null;
    
    /**
     * @var string|null $following_url The following_url property
    */
    private ?string $following_url = null;
    
    /**
     * @var string|null $gists_url The gists_url property
    */
    private ?string $gists_url = null;
    
    /**
     * @var string|null $gravatar_id The gravatar_id property
    */
    private ?string $gravatar_id = null;
    
    /**
     * @var string|null $html_url The html_url property
    */
    private ?string $html_url = null;
    
    /**
     * @var int|null $id The id property
    */
    private ?int $id = null;
    
    /**
     * @var string|null $login The login property
    */
    private ?string $login = null;
    
    /**
     * @var string|null $node_id The node_id property
    */
    private ?string $node_id = null;
    
    /**
     * @var string|null $organizations_url The organizations_url property
    */
    private ?string $organizations_url = null;
    
    /**
     * @var string|null $received_events_url The received_events_url property
    */
    private ?string $received_events_url = null;
    
    /**
     * @var string|null $repos_url The repos_url property
    */
    private ?string $repos_url = null;
    
    /**
     * @var bool|null $site_admin The site_admin property
    */
    private ?bool $site_admin = null;
    
    /**
     * @var string|null $starred_url The starred_url property
    */
    private ?string $starred_url = null;
    
    /**
     * @var string|null $subscriptions_url The subscriptions_url property
    */
    private ?string $subscriptions_url = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new pullRequest_base_repo_owner and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PullRequest_base_repo_owner
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PullRequest_base_repo_owner {
        return new PullRequest_base_repo_owner();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the avatar_url property value. The avatar_url property
     * @return string|null
    */
    public function getAvatarUrl(): ?string {
        return $this->avatar_url;
    }

    /**
     * Gets the events_url property value. The events_url property
     * @return string|null
    */
    public function getEventsUrl(): ?string {
        return $this->events_url;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'avatar_url' => fn(ParseNode $n) => $o->setAvatarUrl($n->getStringValue()),
            'events_url' => fn(ParseNode $n) => $o->setEventsUrl($n->getStringValue()),
            'followers_url' => fn(ParseNode $n) => $o->setFollowersUrl($n->getStringValue()),
            'following_url' => fn(ParseNode $n) => $o->setFollowingUrl($n->getStringValue()),
            'gists_url' => fn(ParseNode $n) => $o->setGistsUrl($n->getStringValue()),
            'gravatar_id' => fn(ParseNode $n) => $o->setGravatarId($n->getStringValue()),
            'html_url' => fn(ParseNode $n) => $o->setHtmlUrl($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getIntegerValue()),
            'login' => fn(ParseNode $n) => $o->setLogin($n->getStringValue()),
            'node_id' => fn(ParseNode $n) => $o->setNodeId($n->getStringValue()),
            'organizations_url' => fn(ParseNode $n) => $o->setOrganizationsUrl($n->getStringValue()),
            'received_events_url' => fn(ParseNode $n) => $o->setReceivedEventsUrl($n->getStringValue()),
            'repos_url' => fn(ParseNode $n) => $o->setReposUrl($n->getStringValue()),
            'site_admin' => fn(ParseNode $n) => $o->setSiteAdmin($n->getBooleanValue()),
            'starred_url' => fn(ParseNode $n) => $o->setStarredUrl($n->getStringValue()),
            'subscriptions_url' => fn(ParseNode $n) => $o->setSubscriptionsUrl($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the followers_url property value. The followers_url property
     * @return string|null
    */
    public function getFollowersUrl(): ?string {
        return $this->followers_url;
    }

    /**
     * Gets the following_url property value. The following_url property
     * @return string|null
    */
    public function getFollowingUrl(): ?string {
        return $this->following_url;
    }

    /**
     * Gets the gists_url property value. The gists_url property
     * @return string|null
    */
    public function getGistsUrl(): ?string {
        return $this->gists_url;
    }

    /**
     * Gets the gravatar_id property value. The gravatar_id property
     * @return string|null
    */
    public function getGravatarId(): ?string {
        return $this->gravatar_id;
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
     * Gets the login property value. The login property
     * @return string|null
    */
    public function getLogin(): ?string {
        return $this->login;
    }

    /**
     * Gets the node_id property value. The node_id property
     * @return string|null
    */
    public function getNodeId(): ?string {
        return $this->node_id;
    }

    /**
     * Gets the organizations_url property value. The organizations_url property
     * @return string|null
    */
    public function getOrganizationsUrl(): ?string {
        return $this->organizations_url;
    }

    /**
     * Gets the received_events_url property value. The received_events_url property
     * @return string|null
    */
    public function getReceivedEventsUrl(): ?string {
        return $this->received_events_url;
    }

    /**
     * Gets the repos_url property value. The repos_url property
     * @return string|null
    */
    public function getReposUrl(): ?string {
        return $this->repos_url;
    }

    /**
     * Gets the site_admin property value. The site_admin property
     * @return bool|null
    */
    public function getSiteAdmin(): ?bool {
        return $this->site_admin;
    }

    /**
     * Gets the starred_url property value. The starred_url property
     * @return string|null
    */
    public function getStarredUrl(): ?string {
        return $this->starred_url;
    }

    /**
     * Gets the subscriptions_url property value. The subscriptions_url property
     * @return string|null
    */
    public function getSubscriptionsUrl(): ?string {
        return $this->subscriptions_url;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
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
        $writer->writeStringValue('avatar_url', $this->getAvatarUrl());
        $writer->writeStringValue('events_url', $this->getEventsUrl());
        $writer->writeStringValue('followers_url', $this->getFollowersUrl());
        $writer->writeStringValue('following_url', $this->getFollowingUrl());
        $writer->writeStringValue('gists_url', $this->getGistsUrl());
        $writer->writeStringValue('gravatar_id', $this->getGravatarId());
        $writer->writeStringValue('html_url', $this->getHtmlUrl());
        $writer->writeIntegerValue('id', $this->getId());
        $writer->writeStringValue('login', $this->getLogin());
        $writer->writeStringValue('node_id', $this->getNodeId());
        $writer->writeStringValue('organizations_url', $this->getOrganizationsUrl());
        $writer->writeStringValue('received_events_url', $this->getReceivedEventsUrl());
        $writer->writeStringValue('repos_url', $this->getReposUrl());
        $writer->writeBooleanValue('site_admin', $this->getSiteAdmin());
        $writer->writeStringValue('starred_url', $this->getStarredUrl());
        $writer->writeStringValue('subscriptions_url', $this->getSubscriptionsUrl());
        $writer->writeStringValue('type', $this->getType());
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
     * Sets the avatar_url property value. The avatar_url property
     * @param string|null $value Value to set for the avatar_url property.
    */
    public function setAvatarUrl(?string $value): void {
        $this->avatar_url = $value;
    }

    /**
     * Sets the events_url property value. The events_url property
     * @param string|null $value Value to set for the events_url property.
    */
    public function setEventsUrl(?string $value): void {
        $this->events_url = $value;
    }

    /**
     * Sets the followers_url property value. The followers_url property
     * @param string|null $value Value to set for the followers_url property.
    */
    public function setFollowersUrl(?string $value): void {
        $this->followers_url = $value;
    }

    /**
     * Sets the following_url property value. The following_url property
     * @param string|null $value Value to set for the following_url property.
    */
    public function setFollowingUrl(?string $value): void {
        $this->following_url = $value;
    }

    /**
     * Sets the gists_url property value. The gists_url property
     * @param string|null $value Value to set for the gists_url property.
    */
    public function setGistsUrl(?string $value): void {
        $this->gists_url = $value;
    }

    /**
     * Sets the gravatar_id property value. The gravatar_id property
     * @param string|null $value Value to set for the gravatar_id property.
    */
    public function setGravatarId(?string $value): void {
        $this->gravatar_id = $value;
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
     * Sets the login property value. The login property
     * @param string|null $value Value to set for the login property.
    */
    public function setLogin(?string $value): void {
        $this->login = $value;
    }

    /**
     * Sets the node_id property value. The node_id property
     * @param string|null $value Value to set for the node_id property.
    */
    public function setNodeId(?string $value): void {
        $this->node_id = $value;
    }

    /**
     * Sets the organizations_url property value. The organizations_url property
     * @param string|null $value Value to set for the organizations_url property.
    */
    public function setOrganizationsUrl(?string $value): void {
        $this->organizations_url = $value;
    }

    /**
     * Sets the received_events_url property value. The received_events_url property
     * @param string|null $value Value to set for the received_events_url property.
    */
    public function setReceivedEventsUrl(?string $value): void {
        $this->received_events_url = $value;
    }

    /**
     * Sets the repos_url property value. The repos_url property
     * @param string|null $value Value to set for the repos_url property.
    */
    public function setReposUrl(?string $value): void {
        $this->repos_url = $value;
    }

    /**
     * Sets the site_admin property value. The site_admin property
     * @param bool|null $value Value to set for the site_admin property.
    */
    public function setSiteAdmin(?bool $value): void {
        $this->site_admin = $value;
    }

    /**
     * Sets the starred_url property value. The starred_url property
     * @param string|null $value Value to set for the starred_url property.
    */
    public function setStarredUrl(?string $value): void {
        $this->starred_url = $value;
    }

    /**
     * Sets the subscriptions_url property value. The subscriptions_url property
     * @param string|null $value Value to set for the subscriptions_url property.
    */
    public function setSubscriptionsUrl(?string $value): void {
        $this->subscriptions_url = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
