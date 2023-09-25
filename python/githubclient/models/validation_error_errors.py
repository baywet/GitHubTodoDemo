from __future__ import annotations
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Callable, Dict, List, Optional, TYPE_CHECKING, Union

@dataclass
class ValidationError_errors(AdditionalDataHolder, Parsable):
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: Dict[str, Any] = field(default_factory=dict)

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
    value: Optional[Union[Union[str, int], str]] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: Optional[ParseNode] = None) -> ValidationError_errors:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: ValidationError_errors
        """
        if not parse_node:
            raise TypeError("parse_node cannot be null.")
        return ValidationError_errors()
    
    def get_field_deserializers(self,) -> Dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: Dict[str, Callable[[ParseNode], None]]
        """
        fields: Dict[str, Callable[[Any], None]] = {
            "code": lambda n : setattr(self, 'code', n.get_str_value()),
            "field": lambda n : setattr(self, 'field', n.get_str_value()),
            "index": lambda n : setattr(self, 'index', n.get_int_value()),
            "message": lambda n : setattr(self, 'message', n.get_str_value()),
            "resource": lambda n : setattr(self, 'resource', n.get_str_value()),
            "value": lambda n : setattr(self, 'value', n.get_str_value()),
        }
        return fields
    
    def serialize(self,writer: SerializationWriter) -> None:
        """
        Serializes information the current object
        param writer: Serialization writer to use to serialize this model
        Returns: None
        """
        if not writer:
            raise TypeError("writer cannot be null.")
        writer.write_str_value("code", self.code)
        writer.write_str_value("field", self.field)
        writer.write_int_value("index", self.index)
        writer.write_str_value("message", self.message)
        writer.write_str_value("resource", self.resource)
        writer.write_str_value("value", self.value)
        writer.write_additional_data_value(self.additional_data)
    

