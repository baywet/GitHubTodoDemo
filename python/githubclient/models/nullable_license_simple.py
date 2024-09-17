from __future__ import annotations
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Callable, Dict, List, Optional, TYPE_CHECKING, Union

@dataclass
class NullableLicenseSimple(AdditionalDataHolder, Parsable):
    """
    License Simple
    """
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: Dict[str, Any] = field(default_factory=dict)

    # The html_url property
    html_url: Optional[str] = None
    # The key property
    key: Optional[str] = None
    # The name property
    name: Optional[str] = None
    # The node_id property
    node_id: Optional[str] = None
    # The spdx_id property
    spdx_id: Optional[str] = None
    # The url property
    url: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> NullableLicenseSimple:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: NullableLicenseSimple
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return NullableLicenseSimple()
    
    def get_field_deserializers(self,) -> Dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: Dict[str, Callable[[ParseNode], None]]
        """
        fields: Dict[str, Callable[[Any], None]] = {
            "html_url": lambda n : setattr(self, 'html_url', n.get_str_value()),
            "key": lambda n : setattr(self, 'key', n.get_str_value()),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "node_id": lambda n : setattr(self, 'node_id', n.get_str_value()),
            "spdx_id": lambda n : setattr(self, 'spdx_id', n.get_str_value()),
            "url": lambda n : setattr(self, 'url', n.get_str_value()),
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
        writer.write_str_value("html_url", self.html_url)
        writer.write_str_value("key", self.key)
        writer.write_str_value("name", self.name)
        writer.write_str_value("node_id", self.node_id)
        writer.write_str_value("spdx_id", self.spdx_id)
        writer.write_str_value("url", self.url)
        writer.write_additional_data_value(self.additional_data)
    

