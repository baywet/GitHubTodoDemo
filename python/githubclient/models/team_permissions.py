from __future__ import annotations
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Callable, Dict, List, Optional, TYPE_CHECKING, Union

@dataclass
class Team_permissions(AdditionalDataHolder, Parsable):
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: Dict[str, Any] = field(default_factory=dict)

    # The admin property
    admin: Optional[bool] = None
    # The maintain property
    maintain: Optional[bool] = None
    # The pull property
    pull: Optional[bool] = None
    # The push property
    push: Optional[bool] = None
    # The triage property
    triage: Optional[bool] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: Optional[ParseNode] = None) -> Team_permissions:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: Team_permissions
        """
        if not parse_node:
            raise TypeError("parse_node cannot be null.")
        return Team_permissions()
    
    def get_field_deserializers(self,) -> Dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: Dict[str, Callable[[ParseNode], None]]
        """
        fields: Dict[str, Callable[[Any], None]] = {
            "admin": lambda n : setattr(self, 'admin', n.get_bool_value()),
            "maintain": lambda n : setattr(self, 'maintain', n.get_bool_value()),
            "pull": lambda n : setattr(self, 'pull', n.get_bool_value()),
            "push": lambda n : setattr(self, 'push', n.get_bool_value()),
            "triage": lambda n : setattr(self, 'triage', n.get_bool_value()),
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
        writer.write_bool_value("admin", self.admin)
        writer.write_bool_value("maintain", self.maintain)
        writer.write_bool_value("pull", self.pull)
        writer.write_bool_value("push", self.push)
        writer.write_bool_value("triage", self.triage)
        writer.write_additional_data_value(self.additional_data)
    

