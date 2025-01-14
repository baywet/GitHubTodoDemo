from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import ComposedTypeWrapper, Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

@dataclass
class ValidationError_errors_value(ComposedTypeWrapper, Parsable):
    """
    Composed type wrapper for classes int, list[str], str
    """
    # Composed type representation for type int
    integer: Optional[int] = None
    # Composed type representation for type list[str]
    string: Optional[list[str]] = None
    # Composed type representation for type str
    validation_error_errors_value_string: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> ValidationError_errors_value:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: ValidationError_errors_value
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        try:
            child_node = parse_node.get_child_node("")
            mapping_value = child_node.get_str_value() if child_node else None
        except AttributeError:
            mapping_value = None
        result = ValidationError_errors_value()
        if integer_value := parse_node.get_int_value():
            result.integer = integer_value
        elif validation_error_errors_value_string_value := parse_node.get_str_value():
            result.validation_error_errors_value_string = validation_error_errors_value_string_value
        elif string_value := parse_node.get_collection_of_primitive_values(str):
            result.string = string_value
        return result
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        return {}
    
    def serialize(self,writer: SerializationWriter) -> None:
        """
        Serializes information the current object
        param writer: Serialization writer to use to serialize this model
        Returns: None
        """
        if writer is None:
            raise TypeError("writer cannot be null.")
        if self.integer:
            writer.write_int_value(None, self.integer)
        elif self.validation_error_errors_value_string:
            writer.write_str_value(None, self.validation_error_errors_value_string)
        elif self.string:
            writer.write_collection_of_primitive_values(None, self.string)
    

