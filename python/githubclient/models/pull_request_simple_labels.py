from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union


@dataclass
class PullRequestSimple_labels(AdditionalDataHolder, Parsable):
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: dict[str, Any] = field(default_factory=dict)

    # The color property
    color: Optional[str] = None
    # The default property
    default: Optional[bool] = None
    # The description property
    description: Optional[str] = None
    # The id property
    id: Optional[int] = None
    # The name property
    name: Optional[str] = None
    # The node_id property
    node_id: Optional[str] = None
    # The url property
    url: Optional[str] = None

    @staticmethod
    def create_from_discriminator_value(
            parse_node: ParseNode) -> PullRequestSimple_labels:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PullRequestSimple_labels
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return PullRequestSimple_labels()

    def get_field_deserializers(
        self, ) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "color":
            lambda n: setattr(self, 'color', n.get_str_value()),
            "default":
            lambda n: setattr(self, 'default', n.get_bool_value()),
            "description":
            lambda n: setattr(self, 'description', n.get_str_value()),
            "id":
            lambda n: setattr(self, 'id', n.get_int_value()),
            "name":
            lambda n: setattr(self, 'name', n.get_str_value()),
            "node_id":
            lambda n: setattr(self, 'node_id', n.get_str_value()),
            "url":
            lambda n: setattr(self, 'url', n.get_str_value()),
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
        writer.write_str_value("color", self.color)
        writer.write_bool_value("default", self.default)
        writer.write_str_value("description", self.description)
        writer.write_int_value("id", self.id)
        writer.write_str_value("name", self.name)
        writer.write_str_value("node_id", self.node_id)
        writer.write_str_value("url", self.url)
        writer.write_additional_data_value(self.additional_data)
