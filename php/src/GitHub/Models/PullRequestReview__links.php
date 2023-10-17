<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PullRequestReview__links implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var PullRequestReview__links_html|null $html The html property
    */
    private ?PullRequestReview__links_html $html = null;
    
    /**
     * @var PullRequestReview__links_pull_request|null $pull_request The pull_request property
    */
    private ?PullRequestReview__links_pull_request $pull_request = null;
    
    /**
     * Instantiates a new pullRequestReview__links and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PullRequestReview__links
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PullRequestReview__links {
        return new PullRequestReview__links();
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
            'html' => fn(ParseNode $n) => $o->setHtml($n->getObjectValue([PullRequestReview__links_html::class, 'createFromDiscriminatorValue'])),
            'pull_request' => fn(ParseNode $n) => $o->setPullRequest($n->getObjectValue([PullRequestReview__links_pull_request::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the html property value. The html property
     * @return PullRequestReview__links_html|null
    */
    public function getHtml(): ?PullRequestReview__links_html {
        return $this->html;
    }

    /**
     * Gets the pull_request property value. The pull_request property
     * @return PullRequestReview__links_pull_request|null
    */
    public function getPullRequest(): ?PullRequestReview__links_pull_request {
        return $this->pull_request;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('html', $this->getHtml());
        $writer->writeObjectValue('pull_request', $this->getPullRequest());
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
     * Sets the html property value. The html property
     * @param PullRequestReview__links_html|null $value Value to set for the html property.
    */
    public function setHtml(?PullRequestReview__links_html $value): void {
        $this->html = $value;
    }

    /**
     * Sets the pull_request property value. The pull_request property
     * @param PullRequestReview__links_pull_request|null $value Value to set for the pull_request property.
    */
    public function setPullRequest(?PullRequestReview__links_pull_request $value): void {
        $this->pull_request = $value;
    }

}
