from __future__ import annotations
import datetime
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Callable, Dict, List, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .author_association import AuthorAssociation
    from .auto_merge import AutoMerge
    from .nullable_milestone import NullableMilestone
    from .nullable_simple_user import NullableSimpleUser
    from .pull_request_simple_base import PullRequestSimple_base
    from .pull_request_simple_head import PullRequestSimple_head
    from .pull_request_simple_labels import PullRequestSimple_labels
    from .pull_request_simple__links import PullRequestSimple__links
    from .simple_user import SimpleUser
    from .team import Team


@dataclass
class PullRequestSimple(AdditionalDataHolder, Parsable):
    """
    Pull Request Simple
    """
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: Dict[str, Any] = field(default_factory=dict)

    # The _links property
    _links: Optional[PullRequestSimple__links] = None
    # The active_lock_reason property
    active_lock_reason: Optional[str] = None
    # A GitHub user.
    assignee: Optional[NullableSimpleUser] = None
    # The assignees property
    assignees: Optional[List[SimpleUser]] = None
    # How the author is associated with the repository.
    author_association: Optional[AuthorAssociation] = None
    # The status of auto merging a pull request.
    auto_merge: Optional[AutoMerge] = None
    # The base property
    base: Optional[PullRequestSimple_base] = None
    # The body property
    body: Optional[str] = None
    # The closed_at property
    closed_at: Optional[datetime.datetime] = None
    # The comments_url property
    comments_url: Optional[str] = None
    # The commits_url property
    commits_url: Optional[str] = None
    # The created_at property
    created_at: Optional[datetime.datetime] = None
    # The diff_url property
    diff_url: Optional[str] = None
    # Indicates whether or not the pull request is a draft.
    draft: Optional[bool] = None
    # The head property
    head: Optional[PullRequestSimple_head] = None
    # The html_url property
    html_url: Optional[str] = None
    # The id property
    id: Optional[int] = None
    # The issue_url property
    issue_url: Optional[str] = None
    # The labels property
    labels: Optional[List[PullRequestSimple_labels]] = None
    # The locked property
    locked: Optional[bool] = None
    # The merge_commit_sha property
    merge_commit_sha: Optional[str] = None
    # The merged_at property
    merged_at: Optional[datetime.datetime] = None
    # A collection of related issues and pull requests.
    milestone: Optional[NullableMilestone] = None
    # The node_id property
    node_id: Optional[str] = None
    # The number property
    number: Optional[int] = None
    # The patch_url property
    patch_url: Optional[str] = None
    # The requested_reviewers property
    requested_reviewers: Optional[List[SimpleUser]] = None
    # The requested_teams property
    requested_teams: Optional[List[Team]] = None
    # The review_comment_url property
    review_comment_url: Optional[str] = None
    # The review_comments_url property
    review_comments_url: Optional[str] = None
    # The state property
    state: Optional[str] = None
    # The statuses_url property
    statuses_url: Optional[str] = None
    # The title property
    title: Optional[str] = None
    # The updated_at property
    updated_at: Optional[datetime.datetime] = None
    # The url property
    url: Optional[str] = None
    # A GitHub user.
    user: Optional[NullableSimpleUser] = None

    @staticmethod
    def create_from_discriminator_value(
            parse_node: Optional[ParseNode] = None) -> PullRequestSimple:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: PullRequestSimple
        """
        if not parse_node:
            raise TypeError("parse_node cannot be null.")
        return PullRequestSimple()

    def get_field_deserializers(
        self, ) -> Dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: Dict[str, Callable[[ParseNode], None]]
        """
        from .author_association import AuthorAssociation
        from .auto_merge import AutoMerge
        from .nullable_milestone import NullableMilestone
        from .nullable_simple_user import NullableSimpleUser
        from .pull_request_simple_base import PullRequestSimple_base
        from .pull_request_simple_head import PullRequestSimple_head
        from .pull_request_simple_labels import PullRequestSimple_labels
        from .pull_request_simple__links import PullRequestSimple__links
        from .simple_user import SimpleUser
        from .team import Team

        from .author_association import AuthorAssociation
        from .auto_merge import AutoMerge
        from .nullable_milestone import NullableMilestone
        from .nullable_simple_user import NullableSimpleUser
        from .pull_request_simple_base import PullRequestSimple_base
        from .pull_request_simple_head import PullRequestSimple_head
        from .pull_request_simple_labels import PullRequestSimple_labels
        from .pull_request_simple__links import PullRequestSimple__links
        from .simple_user import SimpleUser
        from .team import Team

        fields: Dict[str, Callable[[Any], None]] = {
            "_links":
            lambda n: setattr(self, '_links',
                              n.get_object_value(PullRequestSimple__links)),
            "active_lock_reason":
            lambda n: setattr(self, 'active_lock_reason', n.get_str_value()),
            "assignee":
            lambda n: setattr(self, 'assignee',
                              n.get_object_value(NullableSimpleUser)),
            "assignees":
            lambda n: setattr(self, 'assignees',
                              n.get_collection_of_object_values(SimpleUser)),
            "author_association":
            lambda n: setattr(self, 'author_association',
                              n.get_enum_value(AuthorAssociation)),
            "auto_merge":
            lambda n: setattr(self, 'auto_merge', n.get_object_value(AutoMerge)
                              ),
            "base":
            lambda n: setattr(self, 'base',
                              n.get_object_value(PullRequestSimple_base)),
            "body":
            lambda n: setattr(self, 'body', n.get_str_value()),
            "closed_at":
            lambda n: setattr(self, 'closed_at', n.get_datetime_value()),
            "comments_url":
            lambda n: setattr(self, 'comments_url', n.get_str_value()),
            "commits_url":
            lambda n: setattr(self, 'commits_url', n.get_str_value()),
            "created_at":
            lambda n: setattr(self, 'created_at', n.get_datetime_value()),
            "diff_url":
            lambda n: setattr(self, 'diff_url', n.get_str_value()),
            "draft":
            lambda n: setattr(self, 'draft', n.get_bool_value()),
            "head":
            lambda n: setattr(self, 'head',
                              n.get_object_value(PullRequestSimple_head)),
            "html_url":
            lambda n: setattr(self, 'html_url', n.get_str_value()),
            "id":
            lambda n: setattr(self, 'id', n.get_int_value()),
            "issue_url":
            lambda n: setattr(self, 'issue_url', n.get_str_value()),
            "labels":
            lambda n: setattr(
                self, 'labels',
                n.get_collection_of_object_values(PullRequestSimple_labels)),
            "locked":
            lambda n: setattr(self, 'locked', n.get_bool_value()),
            "merge_commit_sha":
            lambda n: setattr(self, 'merge_commit_sha', n.get_str_value()),
            "merged_at":
            lambda n: setattr(self, 'merged_at', n.get_datetime_value()),
            "milestone":
            lambda n: setattr(self, 'milestone',
                              n.get_object_value(NullableMilestone)),
            "node_id":
            lambda n: setattr(self, 'node_id', n.get_str_value()),
            "number":
            lambda n: setattr(self, 'number', n.get_int_value()),
            "patch_url":
            lambda n: setattr(self, 'patch_url', n.get_str_value()),
            "requested_reviewers":
            lambda n: setattr(self, 'requested_reviewers',
                              n.get_collection_of_object_values(SimpleUser)),
            "requested_teams":
            lambda n: setattr(self, 'requested_teams',
                              n.get_collection_of_object_values(Team)),
            "review_comment_url":
            lambda n: setattr(self, 'review_comment_url', n.get_str_value()),
            "review_comments_url":
            lambda n: setattr(self, 'review_comments_url', n.get_str_value()),
            "state":
            lambda n: setattr(self, 'state', n.get_str_value()),
            "statuses_url":
            lambda n: setattr(self, 'statuses_url', n.get_str_value()),
            "title":
            lambda n: setattr(self, 'title', n.get_str_value()),
            "updated_at":
            lambda n: setattr(self, 'updated_at', n.get_datetime_value()),
            "url":
            lambda n: setattr(self, 'url', n.get_str_value()),
            "user":
            lambda n: setattr(self, 'user',
                              n.get_object_value(NullableSimpleUser)),
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
        writer.write_object_value("_links", self._links)
        writer.write_str_value("active_lock_reason", self.active_lock_reason)
        writer.write_object_value("assignee", self.assignee)
        writer.write_collection_of_object_values("assignees", self.assignees)
        writer.write_enum_value("author_association", self.author_association)
        writer.write_object_value("auto_merge", self.auto_merge)
        writer.write_object_value("base", self.base)
        writer.write_str_value("body", self.body)
        writer.write_datetime_value("closed_at", self.closed_at)
        writer.write_str_value("comments_url", self.comments_url)
        writer.write_str_value("commits_url", self.commits_url)
        writer.write_datetime_value("created_at", self.created_at)
        writer.write_str_value("diff_url", self.diff_url)
        writer.write_bool_value("draft", self.draft)
        writer.write_object_value("head", self.head)
        writer.write_str_value("html_url", self.html_url)
        writer.write_int_value("id", self.id)
        writer.write_str_value("issue_url", self.issue_url)
        writer.write_collection_of_object_values("labels", self.labels)
        writer.write_bool_value("locked", self.locked)
        writer.write_str_value("merge_commit_sha", self.merge_commit_sha)
        writer.write_datetime_value("merged_at", self.merged_at)
        writer.write_object_value("milestone", self.milestone)
        writer.write_str_value("node_id", self.node_id)
        writer.write_int_value("number", self.number)
        writer.write_str_value("patch_url", self.patch_url)
        writer.write_collection_of_object_values("requested_reviewers",
                                                 self.requested_reviewers)
        writer.write_collection_of_object_values("requested_teams",
                                                 self.requested_teams)
        writer.write_str_value("review_comment_url", self.review_comment_url)
        writer.write_str_value("review_comments_url", self.review_comments_url)
        writer.write_str_value("state", self.state)
        writer.write_str_value("statuses_url", self.statuses_url)
        writer.write_str_value("title", self.title)
        writer.write_datetime_value("updated_at", self.updated_at)
        writer.write_str_value("url", self.url)
        writer.write_object_value("user", self.user)
        writer.write_additional_data_value(self.additional_data)
