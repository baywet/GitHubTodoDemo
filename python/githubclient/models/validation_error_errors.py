from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .validation_error_errors_value import ValidationError_errors_value


@dataclass
class ValidationError_errors(AdditionalDataHolder, Parsable):
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: dict[str, Any] = field(default_factory=dict)

    # The code property
    code: Optional[str] = None
    # The field property
    field: Optional[str] = None
    # The index property
    index: Optional[int] = None
    # The message property
    message: Optional[str] = None
    # The resource property
    resource: Optional[str] = None
    # The value property
    value: Optional[ValidationError_errors_value] = None

    @staticmethod
    def create_from_discriminator_value(
            parse_node: ParseNode) -> ValidationError_errors:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: ValidationError_errors
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return ValidationError_errors()

    def get_field_deserializers(
        self, ) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .validation_error_errors_value import ValidationError_errors_value

        from .validation_error_errors_value import ValidationError_errors_value

        fields: dict[str, Callable[[Any], None]] = {
            "code":
            lambda n: setattr(self, 'code', n.get_str_value()),
            "field":
            lambda n: setattr(self, 'field', n.get_str_value()),
            "index":
            lambda n: setattr(self, 'index', n.get_int_value()),
            "message":
            lambda n: setattr(self, 'message', n.get_str_value()),
            "resource":
            lambda n: setattr(self, 'resource', n.get_str_value()),
            "value":
            lambda n: setattr(self, 'value',
                              n.get_object_value(ValidationError_errors_value)
                              ),
        }
        return fields

    def serialize(self, writer: SerializationWriter) -> None:
        """
        Serializes information the current object
        param writer: Serialization writer to use to serialize this model
        Returns: None
        """
        if writer is None:
            raise TypeError("writer cannot be null.")
        writer.write_str_value("code", self.code)
        writer.write_str_value("field", self.field)
        writer.write_int_value("index", self.index)
        writer.write_str_value("message", self.message)
        writer.write_str_value("resource", self.resource)
        writer.write_object_value("value", self.value)
        writer.write_additional_data_value(self.additional_data)
