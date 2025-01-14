from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .nullable_team_simple import NullableTeamSimple
    from .team_permissions import Team_permissions

@dataclass
class Team(AdditionalDataHolder, Parsable):
    """
    Groups of organization members that gives permissions on specified repositories.
    """
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: dict[str, Any] = field(default_factory=dict)

    # The description property
    description: Optional[str] = None
    # The html_url property
    html_url: Optional[str] = None
    # The id property
    id: Optional[int] = None
    # The members_url property
    members_url: Optional[str] = None
    # The name property
    name: Optional[str] = None
    # The node_id property
    node_id: Optional[str] = None
    # Groups of organization members that gives permissions on specified repositories.
    parent: Optional[NullableTeamSimple] = None
    # The permission property
    permission: Optional[str] = None
    # The permissions property
    permissions: Optional[Team_permissions] = None
    # The privacy property
    privacy: Optional[str] = None
    # The repositories_url property
    repositories_url: Optional[str] = None
    # The slug property
    slug: Optional[str] = None
    # The url property
    url: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> Team:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: Team
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return Team()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .nullable_team_simple import NullableTeamSimple
        from .team_permissions import Team_permissions

        from .nullable_team_simple import NullableTeamSimple
        from .team_permissions import Team_permissions

        fields: dict[str, Callable[[Any], None]] = {
            "description": lambda n : setattr(self, 'description', n.get_str_value()),
            "html_url": lambda n : setattr(self, 'html_url', n.get_str_value()),
            "id": lambda n : setattr(self, 'id', n.get_int_value()),
            "members_url": lambda n : setattr(self, 'members_url', n.get_str_value()),
            "name": lambda n : setattr(self, 'name', n.get_str_value()),
            "node_id": lambda n : setattr(self, 'node_id', n.get_str_value()),
            "parent": lambda n : setattr(self, 'parent', n.get_object_value(NullableTeamSimple)),
            "permission": lambda n : setattr(self, 'permission', n.get_str_value()),
            "permissions": lambda n : setattr(self, 'permissions', n.get_object_value(Team_permissions)),
            "privacy": lambda n : setattr(self, 'privacy', n.get_str_value()),
            "repositories_url": lambda n : setattr(self, 'repositories_url', n.get_str_value()),
            "slug": lambda n : setattr(self, 'slug', n.get_str_value()),
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
        writer.write_str_value("description", self.description)
        writer.write_str_value("html_url", self.html_url)
        writer.write_int_value("id", self.id)
        writer.write_str_value("members_url", self.members_url)
        writer.write_str_value("name", self.name)
        writer.write_str_value("node_id", self.node_id)
        writer.write_object_value("parent", self.parent)
        writer.write_str_value("permission", self.permission)
        writer.write_object_value("permissions", self.permissions)
        writer.write_str_value("privacy", self.privacy)
        writer.write_str_value("repositories_url", self.repositories_url)
        writer.write_str_value("slug", self.slug)
        writer.write_str_value("url", self.url)
        writer.write_additional_data_value(self.additional_data)
    

