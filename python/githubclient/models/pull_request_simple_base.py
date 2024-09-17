from __future__ import annotations
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Callable, Dict, List, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .nullable_simple_user import NullableSimpleUser
    from .repository import Repository

@dataclass
class PullRequestSimple_base(AdditionalDataHolder, Parsable):
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: Dict[str, Any] = field(default_factory=dict)

    # The label property
    label: Optional[str] = None
    # The ref property
    ref: Optional[str] = None
    # A repository on GitHub.
    repo: Optional[Repository] = None
    # The sha property
    sha: Optional[str] = None
    # A GitHub user.
    user: Optional[NullableSimpleUser] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> PullRequestSimple_base:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PullRequestSimple_base
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return PullRequestSimple_base()
    
    def get_field_deserializers(self,) -> Dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: Dict[str, Callable[[ParseNode], None]]
        """
        from .nullable_simple_user import NullableSimpleUser
        from .repository import Repository

        from .nullable_simple_user import NullableSimpleUser
        from .repository import Repository

        fields: Dict[str, Callable[[Any], None]] = {
            "label": lambda n : setattr(self, 'label', n.get_str_value()),
            "ref": lambda n : setattr(self, 'ref', n.get_str_value()),
            "repo": lambda n : setattr(self, 'repo', n.get_object_value(Repository)),
            "sha": lambda n : setattr(self, 'sha', n.get_str_value()),
            "user": lambda n : setattr(self, 'user', n.get_object_value(NullableSimpleUser)),
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
        writer.write_str_value("label", self.label)
        writer.write_str_value("ref", self.ref)
        writer.write_object_value("repo", self.repo)
        writer.write_str_value("sha", self.sha)
        writer.write_object_value("user", self.user)
        writer.write_additional_data_value(self.additional_data)
    

