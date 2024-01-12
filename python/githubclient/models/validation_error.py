from __future__ import annotations
from dataclasses import dataclass, field
from kiota_abstractions.api_error import APIError
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Callable, Dict, List, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .validation_error_errors import ValidationError_errors


@dataclass
class ValidationError(APIError):
    """
    Validation Error
    """
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: Dict[str, Any] = field(default_factory=dict)

    # The documentation_url property
    documentation_url: Optional[str] = None
    # The errors property
    errors: Optional[List[ValidationError_errors]] = None
    # The message property
    message: Optional[str] = None

    @staticmethod
    def create_from_discriminator_value(
            parse_node: Optional[ParseNode] = None) -> ValidationError:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: ValidationError
        """
        if not parse_node:
            raise TypeError("parse_node cannot be null.")
        return ValidationError()

    def get_field_deserializers(
        self, ) -> Dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: Dict[str, Callable[[ParseNode], None]]
        """
        from .validation_error_errors import ValidationError_errors

        from .validation_error_errors import ValidationError_errors

        fields: Dict[str, Callable[[Any], None]] = {
            "documentation_url":
            lambda n: setattr(self, 'documentation_url', n.get_str_value()),
            "errors":
            lambda n: setattr(
                self, 'errors',
                n.get_collection_of_object_values(ValidationError_errors)),
            "message":
            lambda n: setattr(self, 'message', n.get_str_value()),
        }
        return fields

    def serialize(self, writer: SerializationWriter) -> None:
        """
        Serializes information the current object
        param writer: Serialization writer to use to serialize this model
        Returns: None
        """
        if not writer:
            raise TypeError("writer cannot be null.")
        writer.write_str_value("documentation_url", self.documentation_url)
        writer.write_collection_of_object_values("errors", self.errors)
        writer.write_str_value("message", self.message)
        writer.write_additional_data_value(self.additional_data)

    @property
    def primary_message(self) -> str:
        """
        The primary error message.
        """
        return super().message
