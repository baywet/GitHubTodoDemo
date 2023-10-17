<?php

namespace Baywet\Githubtododemo\Github\Repos\Item\Item\Pulls\Item\Reviews\Item\Dismissals;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DismissalsPutRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DismissalsPutRequestBody_event|null $event The event property
    */
    private ?DismissalsPutRequestBody_event $event = null;
    
    /**
     * @var string|null $message The message for the pull request review dismissal
    */
    private ?string $message = null;
    
    /**
     * Instantiates a new dismissalsPutRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DismissalsPutRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DismissalsPutRequestBody {
        return new DismissalsPutRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the event property value. The event property
     * @return DismissalsPutRequestBody_event|null
    */
    public function getEvent(): ?DismissalsPutRequestBody_event {
        return $this->event;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'event' => fn(ParseNode $n) => $o->setEvent($n->getEnumValue(DismissalsPutRequestBody_event::class)),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
        ];
    }

    /**
     * Gets the message property value. The message for the pull request review dismissal
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('event', $this->getEvent());
        $writer->writeStringValue('message', $this->getMessage());
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
     * Sets the event property value. The event property
     * @param DismissalsPutRequestBody_event|null $value Value to set for the event property.
    */
    public function setEvent(?DismissalsPutRequestBody_event $value): void {
        $this->event = $value;
    }

    /**
     * Sets the message property value. The message for the pull request review dismissal
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

}
