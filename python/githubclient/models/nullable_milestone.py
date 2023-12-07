from __future__ import annotations
import datetime
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Callable, Dict, List, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .nullable_milestone_state import NullableMilestone_state
    from .nullable_simple_user import NullableSimpleUser


@dataclass
class NullableMilestone(AdditionalDataHolder, Parsable):
    """
    A collection of related issues and pull requests.
    """
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: Dict[str, Any] = field(default_factory=dict)

    from .nullable_milestone_state import NullableMilestone_state

    # The state of the milestone.
    state: Optional[NullableMilestone_state] = NullableMilestone_state("open")
    # The closed_at property
    closed_at: Optional[datetime.datetime] = None
    # The closed_issues property
    closed_issues: Optional[int] = None
    # The created_at property
    created_at: Optional[datetime.datetime] = None
    # A GitHub user.
    creator: Optional[NullableSimpleUser] = None
    # The description property
    description: Optional[str] = None
    # The due_on property
    due_on: Optional[datetime.datetime] = None
    # The html_url property
    html_url: Optional[str] = None
    # The id property
    id: Optional[int] = None
    # The labels_url property
    labels_url: Optional[str] = None
    # The node_id property
    node_id: Optional[str] = None
    # The number of the milestone.
    number: Optional[int] = None
    # The open_issues property
    open_issues: Optional[int] = None
    # The title of the milestone.
    title: Optional[str] = None
    # The updated_at property
    updated_at: Optional[datetime.datetime] = None
    # The url property
    url: Optional[str] = None

    @staticmethod
    def create_from_discriminator_value(
            parse_node: Optional[ParseNode] = None) -> NullableMilestone:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: NullableMilestone
        """
        if not parse_node:
            raise TypeError("parse_node cannot be null.")
        return NullableMilestone()

    def get_field_deserializers(
        self, ) -> Dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: Dict[str, Callable[[ParseNode], None]]
        """
        from .nullable_milestone_state import NullableMilestone_state
        from .nullable_simple_user import NullableSimpleUser

        from .nullable_milestone_state import NullableMilestone_state
        from .nullable_simple_user import NullableSimpleUser

        fields: Dict[str, Callable[[Any], None]] = {
            "closed_at":
            lambda n: setattr(self, 'closed_at', n.get_datetime_value()),
            "closed_issues":
            lambda n: setattr(self, 'closed_issues', n.get_int_value()),
            "created_at":
            lambda n: setattr(self, 'created_at', n.get_datetime_value()),
            "creator":
            lambda n: setattr(self, 'creator',
                              n.get_object_value(NullableSimpleUser)),
            "description":
            lambda n: setattr(self, 'description', n.get_str_value()),
            "due_on":
            lambda n: setattr(self, 'due_on', n.get_datetime_value()),
            "html_url":
            lambda n: setattr(self, 'html_url', n.get_str_value()),
            "id":
            lambda n: setattr(self, 'id', n.get_int_value()),
            "labels_url":
            lambda n: setattr(self, 'labels_url', n.get_str_value()),
            "node_id":
            lambda n: setattr(self, 'node_id', n.get_str_value()),
            "number":
            lambda n: setattr(self, 'number', n.get_int_value()),
            "open_issues":
            lambda n: setattr(self, 'open_issues', n.get_int_value()),
            "state":
            lambda n: setattr(self, 'state',
                              n.get_enum_value(NullableMilestone_state)),
            "title":
            lambda n: setattr(self, 'title', n.get_str_value()),
            "updated_at":
            lambda n: setattr(self, 'updated_at', n.get_datetime_value()),
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
        if not writer:
            raise TypeError("writer cannot be null.")
        writer.write_datetime_value("closed_at", self.closed_at)
        writer.write_int_value("closed_issues", self.closed_issues)
        writer.write_datetime_value("created_at", self.created_at)
        writer.write_object_value("creator", self.creator)
        writer.write_str_value("description", self.description)
        writer.write_datetime_value("due_on", self.due_on)
        writer.write_str_value("html_url", self.html_url)
        writer.write_int_value("id", self.id)
        writer.write_str_value("labels_url", self.labels_url)
        writer.write_str_value("node_id", self.node_id)
        writer.write_int_value("number", self.number)
        writer.write_int_value("open_issues", self.open_issues)
        writer.write_enum_value("state", self.state)
        writer.write_str_value("title", self.title)
        writer.write_datetime_value("updated_at", self.updated_at)
        writer.write_str_value("url", self.url)
        writer.write_additional_data_value(self.additional_data)
