from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .auto_merge_merge_method import AutoMerge_merge_method
    from .simple_user import SimpleUser

@dataclass
class AutoMerge(AdditionalDataHolder, Parsable):
    """
    The status of auto merging a pull request.
    """
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: dict[str, Any] = field(default_factory=dict)

    # Commit message for the merge commit.
    commit_message: Optional[str] = None
    # Title for the merge commit message.
    commit_title: Optional[str] = None
    # A GitHub user.
    enabled_by: Optional[SimpleUser] = None
    # The merge method to use.
    merge_method: Optional[AutoMerge_merge_method] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> AutoMerge:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: AutoMerge
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return AutoMerge()
    
    def get_field_deserializers(self,) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .auto_merge_merge_method import AutoMerge_merge_method
        from .simple_user import SimpleUser

        from .auto_merge_merge_method import AutoMerge_merge_method
        from .simple_user import SimpleUser

        fields: dict[str, Callable[[Any], None]] = {
            "commit_message": lambda n : setattr(self, 'commit_message', n.get_str_value()),
            "commit_title": lambda n : setattr(self, 'commit_title', n.get_str_value()),
            "enabled_by": lambda n : setattr(self, 'enabled_by', n.get_object_value(SimpleUser)),
            "merge_method": lambda n : setattr(self, 'merge_method', n.get_enum_value(AutoMerge_merge_method)),
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
        writer.write_str_value("commit_message", self.commit_message)
        writer.write_str_value("commit_title", self.commit_title)
        writer.write_object_value("enabled_by", self.enabled_by)
        writer.write_enum_value("merge_method", self.merge_method)
        writer.write_additional_data_value(self.additional_data)
    

