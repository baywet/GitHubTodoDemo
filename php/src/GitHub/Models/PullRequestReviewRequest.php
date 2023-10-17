<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Pull Request Review Request
*/
class PullRequestReviewRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Team>|null $teams The teams property
    */
    private ?array $teams = null;
    
    /**
     * @var array<SimpleUser>|null $users The users property
    */
    private ?array $users = null;
    
    /**
     * Instantiates a new pullRequestReviewRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PullRequestReviewRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PullRequestReviewRequest {
        return new PullRequestReviewRequest();
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
            'teams' => fn(ParseNode $n) => $o->setTeams($n->getCollectionOfObjectValues([Team::class, 'createFromDiscriminatorValue'])),
            'users' => fn(ParseNode $n) => $o->setUsers($n->getCollectionOfObjectValues([SimpleUser::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the teams property value. The teams property
     * @return array<Team>|null
    */
    public function getTeams(): ?array {
        return $this->teams;
    }

    /**
     * Gets the users property value. The users property
     * @return array<SimpleUser>|null
    */
    public function getUsers(): ?array {
        return $this->users;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('teams', $this->getTeams());
        $writer->writeCollectionOfObjectValues('users', $this->getUsers());
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
     * Sets the teams property value. The teams property
     * @param array<Team>|null $value Value to set for the teams property.
    */
    public function setTeams(?array $value): void {
        $this->teams = $value;
    }

    /**
     * Sets the users property value. The users property
     * @param array<SimpleUser>|null $value Value to set for the users property.
    */
    public function setUsers(?array $value): void {
        $this->users = $value;
    }

}
