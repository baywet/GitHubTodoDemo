from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union


@dataclass
class NullableSimpleUser(AdditionalDataHolder, Parsable):
    """
    A GitHub user.
    """
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: dict[str, Any] = field(default_factory=dict)

    # The avatar_url property
    avatar_url: Optional[str] = None
    # The email property
    email: Optional[str] = None
    # The events_url property
    events_url: Optional[str] = None
    # The followers_url property
    followers_url: Optional[str] = None
    # The following_url property
    following_url: Optional[str] = None
    # The gists_url property
    gists_url: Optional[str] = None
    # The gravatar_id property
    gravatar_id: Optional[str] = None
    # The html_url property
    html_url: Optional[str] = None
    # The id property
    id: Optional[int] = None
    # The login property
    login: Optional[str] = None
    # The name property
    name: Optional[str] = None
    # The node_id property
    node_id: Optional[str] = None
    # The organizations_url property
    organizations_url: Optional[str] = None
    # The received_events_url property
    received_events_url: Optional[str] = None
    # The repos_url property
    repos_url: Optional[str] = None
    # The site_admin property
    site_admin: Optional[bool] = None
    # The starred_at property
    starred_at: Optional[str] = None
    # The starred_url property
    starred_url: Optional[str] = None
    # The subscriptions_url property
    subscriptions_url: Optional[str] = None
    # The type property
    type: Optional[str] = None
    # The url property
    url: Optional[str] = None

    @staticmethod
    def create_from_discriminator_value(
            parse_node: ParseNode) -> NullableSimpleUser:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: NullableSimpleUser
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return NullableSimpleUser()

    def get_field_deserializers(
        self, ) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        fields: dict[str, Callable[[Any], None]] = {
            "avatar_url":
            lambda n: setattr(self, 'avatar_url', n.get_str_value()),
            "email":
            lambda n: setattr(self, 'email', n.get_str_value()),
            "events_url":
            lambda n: setattr(self, 'events_url', n.get_str_value()),
            "followers_url":
            lambda n: setattr(self, 'followers_url', n.get_str_value()),
            "following_url":
            lambda n: setattr(self, 'following_url', n.get_str_value()),
            "gists_url":
            lambda n: setattr(self, 'gists_url', n.get_str_value()),
            "gravatar_id":
            lambda n: setattr(self, 'gravatar_id', n.get_str_value()),
            "html_url":
            lambda n: setattr(self, 'html_url', n.get_str_value()),
            "id":
            lambda n: setattr(self, 'id', n.get_int_value()),
            "login":
            lambda n: setattr(self, 'login', n.get_str_value()),
            "name":
            lambda n: setattr(self, 'name', n.get_str_value()),
            "node_id":
            lambda n: setattr(self, 'node_id', n.get_str_value()),
            "organizations_url":
            lambda n: setattr(self, 'organizations_url', n.get_str_value()),
            "received_events_url":
            lambda n: setattr(self, 'received_events_url', n.get_str_value()),
            "repos_url":
            lambda n: setattr(self, 'repos_url', n.get_str_value()),
            "site_admin":
            lambda n: setattr(self, 'site_admin', n.get_bool_value()),
            "starred_at":
            lambda n: setattr(self, 'starred_at', n.get_str_value()),
            "starred_url":
            lambda n: setattr(self, 'starred_url', n.get_str_value()),
            "subscriptions_url":
            lambda n: setattr(self, 'subscriptions_url', n.get_str_value()),
            "type":
            lambda n: setattr(self, 'type', n.get_str_value()),
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
        writer.write_str_value("avatar_url", self.avatar_url)
        writer.write_str_value("email", self.email)
        writer.write_str_value("events_url", self.events_url)
        writer.write_str_value("followers_url", self.followers_url)
        writer.write_str_value("following_url", self.following_url)
        writer.write_str_value("gists_url", self.gists_url)
        writer.write_str_value("gravatar_id", self.gravatar_id)
        writer.write_str_value("html_url", self.html_url)
        writer.write_int_value("id", self.id)
        writer.write_str_value("login", self.login)
        writer.write_str_value("name", self.name)
        writer.write_str_value("node_id", self.node_id)
        writer.write_str_value("organizations_url", self.organizations_url)
        writer.write_str_value("received_events_url", self.received_events_url)
        writer.write_str_value("repos_url", self.repos_url)
        writer.write_bool_value("site_admin", self.site_admin)
        writer.write_str_value("starred_at", self.starred_at)
        writer.write_str_value("starred_url", self.starred_url)
        writer.write_str_value("subscriptions_url", self.subscriptions_url)
        writer.write_str_value("type", self.type)
        writer.write_str_value("url", self.url)
        writer.write_additional_data_value(self.additional_data)
