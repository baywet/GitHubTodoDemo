from __future__ import annotations
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Callable, Dict, List, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .attachment_base import AttachmentBase
    from .attachment_session import AttachmentSession
    from .checklist_item import ChecklistItem
    from .extension import Extension
    from .linked_resource import LinkedResource
    from .open_type_extension import OpenTypeExtension
    from .task_file_attachment import TaskFileAttachment
    from .todo_task import TodoTask
    from .todo_task_list import TodoTaskList

@dataclass
class Entity(AdditionalDataHolder, Parsable):
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: Dict[str, Any] = field(default_factory=dict)

    # The unique identifier for an entity. Read-only.
    id: Optional[str] = None
    # The OdataType property
    odata_type: Optional[str] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: Optional[ParseNode] = None) -> Entity:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: Entity
        """
        if not parse_node:
            raise TypeError("parse_node cannot be null.")
        try:
            mapping_value = parse_node.get_child_node("@odata.type").get_str_value()
        except AttributeError:
            mapping_value = None
        if mapping_value and mapping_value.casefold() == "#microsoft.graph.attachmentBase".casefold():
            from .attachment_base import AttachmentBase

            return AttachmentBase()
        if mapping_value and mapping_value.casefold() == "#microsoft.graph.attachmentSession".casefold():
            from .attachment_session import AttachmentSession

            return AttachmentSession()
        if mapping_value and mapping_value.casefold() == "#microsoft.graph.checklistItem".casefold():
            from .checklist_item import ChecklistItem

            return ChecklistItem()
        if mapping_value and mapping_value.casefold() == "#microsoft.graph.extension".casefold():
            from .extension import Extension

            return Extension()
        if mapping_value and mapping_value.casefold() == "#microsoft.graph.linkedResource".casefold():
            from .linked_resource import LinkedResource

            return LinkedResource()
        if mapping_value and mapping_value.casefold() == "#microsoft.graph.openTypeExtension".casefold():
            from .open_type_extension import OpenTypeExtension

            return OpenTypeExtension()
        if mapping_value and mapping_value.casefold() == "#microsoft.graph.taskFileAttachment".casefold():
            from .task_file_attachment import TaskFileAttachment

            return TaskFileAttachment()
        if mapping_value and mapping_value.casefold() == "#microsoft.graph.todoTask".casefold():
            from .todo_task import TodoTask

            return TodoTask()
        if mapping_value and mapping_value.casefold() == "#microsoft.graph.todoTaskList".casefold():
            from .todo_task_list import TodoTaskList

            return TodoTaskList()
        return Entity()
    
    def get_field_deserializers(self,) -> Dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: Dict[str, Callable[[ParseNode], None]]
        """
        from .attachment_base import AttachmentBase
        from .attachment_session import AttachmentSession
        from .checklist_item import ChecklistItem
        from .extension import Extension
        from .linked_resource import LinkedResource
        from .open_type_extension import OpenTypeExtension
        from .task_file_attachment import TaskFileAttachment
        from .todo_task import TodoTask
        from .todo_task_list import TodoTaskList

        from .attachment_base import AttachmentBase
        from .attachment_session import AttachmentSession
        from .checklist_item import ChecklistItem
        from .extension import Extension
        from .linked_resource import LinkedResource
        from .open_type_extension import OpenTypeExtension
        from .task_file_attachment import TaskFileAttachment
        from .todo_task import TodoTask
        from .todo_task_list import TodoTaskList

        fields: Dict[str, Callable[[Any], None]] = {
            "id": lambda n : setattr(self, 'id', n.get_str_value()),
            "@odata.type": lambda n : setattr(self, 'odata_type', n.get_str_value()),
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
        writer.write_str_value("id", self.id)
        writer.write_str_value("@odata.type", self.odata_type)
        writer.write_additional_data_value(self.additional_data)
    

