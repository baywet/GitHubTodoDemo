from __future__ import annotations
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Callable, Dict, List, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .link import Link

@dataclass
class PullRequestSimple__links(AdditionalDataHolder, Parsable):
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: Dict[str, Any] = field(default_factory=dict)

    # Hypermedia Link
    comments: Optional[Link] = None
    # Hypermedia Link
    commits: Optional[Link] = None
    # Hypermedia Link
    html: Optional[Link] = None
    # Hypermedia Link
    issue: Optional[Link] = None
    # Hypermedia Link
    review_comment: Optional[Link] = None
    # Hypermedia Link
    review_comments: Optional[Link] = None
    # Hypermedia Link
    self: Optional[Link] = None
    # Hypermedia Link
    statuses: Optional[Link] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: Optional[ParseNode] = None) -> PullRequestSimple__links:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PullRequestSimple__links
        """
        if not parse_node:
            raise TypeError("parse_node cannot be null.")
        return PullRequestSimple__links()
    
    def get_field_deserializers(self,) -> Dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: Dict[str, Callable[[ParseNode], None]]
        """
        from .link import Link

        from .link import Link

        fields: Dict[str, Callable[[Any], None]] = {
            "comments": lambda n : setattr(self, 'comments', n.get_object_value(Link)),
            "commits": lambda n : setattr(self, 'commits', n.get_object_value(Link)),
            "html": lambda n : setattr(self, 'html', n.get_object_value(Link)),
            "issue": lambda n : setattr(self, 'issue', n.get_object_value(Link)),
            "review_comment": lambda n : setattr(self, 'review_comment', n.get_object_value(Link)),
            "review_comments": lambda n : setattr(self, 'review_comments', n.get_object_value(Link)),
            "self": lambda n : setattr(self, 'self', n.get_object_value(Link)),
            "statuses": lambda n : setattr(self, 'statuses', n.get_object_value(Link)),
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
        writer.write_object_value("comments", self.comments)
        writer.write_object_value("commits", self.commits)
        writer.write_object_value("html", self.html)
        writer.write_object_value("issue", self.issue)
        writer.write_object_value("review_comment", self.review_comment)
        writer.write_object_value("review_comments", self.review_comments)
        writer.write_object_value("self", self.self)
        writer.write_object_value("statuses", self.statuses)
        writer.write_additional_data_value(self.additional_data)
    

