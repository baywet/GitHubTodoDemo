from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

@dataclass
class DateTimeTimeZone(AdditionalDataHolder, Parsable):
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: dict[str, Any] = field(default_factory=dict)

    # A single point of time in a combined date and time representation ({date}T{time}; for example, 2017-08-29T04:00:00.0000000).
    date_time: Optional[str] = None
    # The OdataType property
    odata_type: Optional[str] = None
    # Represents a time zone, for example, 'Pacific Standard Time'. See below for more possible values.
    time_zone: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> DateTimeTimeZone:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: DateTimeTimeZone
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return DateTimeTimeZone()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "dateTime": lambda n : setattr(self, 'date_time', n.get_str_value()),
            "@odata.type": lambda n : setattr(self, 'odata_type', n.get_str_value()),
            "timeZone": lambda n : setattr(self, 'time_zone', n.get_str_value()),
        }
        return fields
    
    def serialize(self,writer: SerializationWriter) -> None:
        """
        Serializes information the current object
        param writer: Serialization writer to use to serialize this model
        Returns: None
        """
        if writer is None:
            raise TypeError("writer cannot be null.")
        writer.write_str_value("dateTime", self.date_time)
        writer.write_str_value("@odata.type", self.odata_type)
        writer.write_str_value("timeZone", self.time_zone)
        writer.write_additional_data_value(self.additional_data)
    

