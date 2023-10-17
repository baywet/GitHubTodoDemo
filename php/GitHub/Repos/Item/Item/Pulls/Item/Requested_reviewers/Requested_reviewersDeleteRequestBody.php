<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Requested_reviewers;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Requested_reviewersDeleteRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $reviewers An array of user `login`s that will be removed.
    */
    private ?array $reviewers = null;
    
    /**
     * @var array<string>|null $team_reviewers An array of team `slug`s that will be removed.
    */
    private ?array $team_reviewers = null;
    
    /**
     * Instantiates a new requested_reviewersDeleteRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Requested_reviewersDeleteRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Requested_reviewersDeleteRequestBody {
        return new Requested_reviewersDeleteRequestBody();
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
            'reviewers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setReviewers($val);
            },
            'team_reviewers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTeamReviewers($val);
            },
        ];
    }

    /**
     * Gets the reviewers property value. An array of user `login`s that will be removed.
     * @return array<string>|null
    */
    public function getReviewers(): ?array {
        return $this->reviewers;
    }

    /**
     * Gets the team_reviewers property value. An array of team `slug`s that will be removed.
     * @return array<string>|null
    */
    public function getTeamReviewers(): ?array {
        return $this->team_reviewers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('reviewers', $this->getReviewers());
        $writer->writeCollectionOfPrimitiveValues('team_reviewers', $this->getTeamReviewers());
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
     * Sets the reviewers property value. An array of user `login`s that will be removed.
     * @param array<string>|null $value Value to set for the reviewers property.
    */
    public function setReviewers(?array $value): void {
        $this->reviewers = $value;
    }

    /**
     * Sets the team_reviewers property value. An array of team `slug`s that will be removed.
     * @param array<string>|null $value Value to set for the team_reviewers property.
    */
    public function setTeamReviewers(?array $value): void {
        $this->team_reviewers = $value;
    }

}
