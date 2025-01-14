from __future__ import annotations
from collections.abc import Callable
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from .repository_template_repository_merge_commit_message import Repository_template_repository_merge_commit_message
    from .repository_template_repository_merge_commit_title import Repository_template_repository_merge_commit_title
    from .repository_template_repository_owner import Repository_template_repository_owner
    from .repository_template_repository_permissions import Repository_template_repository_permissions
    from .repository_template_repository_squash_merge_commit_message import Repository_template_repository_squash_merge_commit_message
    from .repository_template_repository_squash_merge_commit_title import Repository_template_repository_squash_merge_commit_title


@dataclass
class Repository_template_repository(AdditionalDataHolder, Parsable):
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: dict[str, Any] = field(default_factory=dict)

    # The allow_auto_merge property
    allow_auto_merge: Optional[bool] = None
    # The allow_merge_commit property
    allow_merge_commit: Optional[bool] = None
    # The allow_rebase_merge property
    allow_rebase_merge: Optional[bool] = None
    # The allow_squash_merge property
    allow_squash_merge: Optional[bool] = None
    # The allow_update_branch property
    allow_update_branch: Optional[bool] = None
    # The archive_url property
    archive_url: Optional[str] = None
    # The archived property
    archived: Optional[bool] = None
    # The assignees_url property
    assignees_url: Optional[str] = None
    # The blobs_url property
    blobs_url: Optional[str] = None
    # The branches_url property
    branches_url: Optional[str] = None
    # The clone_url property
    clone_url: Optional[str] = None
    # The collaborators_url property
    collaborators_url: Optional[str] = None
    # The comments_url property
    comments_url: Optional[str] = None
    # The commits_url property
    commits_url: Optional[str] = None
    # The compare_url property
    compare_url: Optional[str] = None
    # The contents_url property
    contents_url: Optional[str] = None
    # The contributors_url property
    contributors_url: Optional[str] = None
    # The created_at property
    created_at: Optional[str] = None
    # The default_branch property
    default_branch: Optional[str] = None
    # The delete_branch_on_merge property
    delete_branch_on_merge: Optional[bool] = None
    # The deployments_url property
    deployments_url: Optional[str] = None
    # The description property
    description: Optional[str] = None
    # The disabled property
    disabled: Optional[bool] = None
    # The downloads_url property
    downloads_url: Optional[str] = None
    # The events_url property
    events_url: Optional[str] = None
    # The fork property
    fork: Optional[bool] = None
    # The forks_count property
    forks_count: Optional[int] = None
    # The forks_url property
    forks_url: Optional[str] = None
    # The full_name property
    full_name: Optional[str] = None
    # The git_commits_url property
    git_commits_url: Optional[str] = None
    # The git_refs_url property
    git_refs_url: Optional[str] = None
    # The git_tags_url property
    git_tags_url: Optional[str] = None
    # The git_url property
    git_url: Optional[str] = None
    # The has_downloads property
    has_downloads: Optional[bool] = None
    # The has_issues property
    has_issues: Optional[bool] = None
    # The has_pages property
    has_pages: Optional[bool] = None
    # The has_projects property
    has_projects: Optional[bool] = None
    # The has_wiki property
    has_wiki: Optional[bool] = None
    # The homepage property
    homepage: Optional[str] = None
    # The hooks_url property
    hooks_url: Optional[str] = None
    # The html_url property
    html_url: Optional[str] = None
    # The id property
    id: Optional[int] = None
    # The is_template property
    is_template: Optional[bool] = None
    # The issue_comment_url property
    issue_comment_url: Optional[str] = None
    # The issue_events_url property
    issue_events_url: Optional[str] = None
    # The issues_url property
    issues_url: Optional[str] = None
    # The keys_url property
    keys_url: Optional[str] = None
    # The labels_url property
    labels_url: Optional[str] = None
    # The language property
    language: Optional[str] = None
    # The languages_url property
    languages_url: Optional[str] = None
    # The default value for a merge commit message.- `PR_TITLE` - default to the pull request's title.- `PR_BODY` - default to the pull request's body.- `BLANK` - default to a blank commit message.
    merge_commit_message: Optional[
        Repository_template_repository_merge_commit_message] = None
    # The default value for a merge commit title.- `PR_TITLE` - default to the pull request's title.- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
    merge_commit_title: Optional[
        Repository_template_repository_merge_commit_title] = None
    # The merges_url property
    merges_url: Optional[str] = None
    # The milestones_url property
    milestones_url: Optional[str] = None
    # The mirror_url property
    mirror_url: Optional[str] = None
    # The name property
    name: Optional[str] = None
    # The network_count property
    network_count: Optional[int] = None
    # The node_id property
    node_id: Optional[str] = None
    # The notifications_url property
    notifications_url: Optional[str] = None
    # The open_issues_count property
    open_issues_count: Optional[int] = None
    # The owner property
    owner: Optional[Repository_template_repository_owner] = None
    # The permissions property
    permissions: Optional[Repository_template_repository_permissions] = None
    # The private property
    private: Optional[bool] = None
    # The pulls_url property
    pulls_url: Optional[str] = None
    # The pushed_at property
    pushed_at: Optional[str] = None
    # The releases_url property
    releases_url: Optional[str] = None
    # The size property
    size: Optional[int] = None
    # The default value for a squash merge commit message:- `PR_BODY` - default to the pull request's body.- `COMMIT_MESSAGES` - default to the branch's commit messages.- `BLANK` - default to a blank commit message.
    squash_merge_commit_message: Optional[
        Repository_template_repository_squash_merge_commit_message] = None
    # The default value for a squash merge commit title:- `PR_TITLE` - default to the pull request's title.- `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
    squash_merge_commit_title: Optional[
        Repository_template_repository_squash_merge_commit_title] = None
    # The ssh_url property
    ssh_url: Optional[str] = None
    # The stargazers_count property
    stargazers_count: Optional[int] = None
    # The stargazers_url property
    stargazers_url: Optional[str] = None
    # The statuses_url property
    statuses_url: Optional[str] = None
    # The subscribers_count property
    subscribers_count: Optional[int] = None
    # The subscribers_url property
    subscribers_url: Optional[str] = None
    # The subscription_url property
    subscription_url: Optional[str] = None
    # The svn_url property
    svn_url: Optional[str] = None
    # The tags_url property
    tags_url: Optional[str] = None
    # The teams_url property
    teams_url: Optional[str] = None
    # The temp_clone_token property
    temp_clone_token: Optional[str] = None
    # The topics property
    topics: Optional[list[str]] = None
    # The trees_url property
    trees_url: Optional[str] = None
    # The updated_at property
    updated_at: Optional[str] = None
    # The url property
    url: Optional[str] = None
    # The use_squash_pr_title_as_default property
    use_squash_pr_title_as_default: Optional[bool] = None
    # The visibility property
    visibility: Optional[str] = None
    # The watchers_count property
    watchers_count: Optional[int] = None

    @staticmethod
    def create_from_discriminator_value(
            parse_node: ParseNode) -> Repository_template_repository:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: Repository_template_repository
        """
        if parse_node is None:
            raise TypeError("parse_node cannot be null.")
        return Repository_template_repository()

    def get_field_deserializers(
        self, ) -> dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: dict[str, Callable[[ParseNode], None]]
        """
        from .repository_template_repository_merge_commit_message import Repository_template_repository_merge_commit_message
        from .repository_template_repository_merge_commit_title import Repository_template_repository_merge_commit_title
        from .repository_template_repository_owner import Repository_template_repository_owner
        from .repository_template_repository_permissions import Repository_template_repository_permissions
        from .repository_template_repository_squash_merge_commit_message import Repository_template_repository_squash_merge_commit_message
        from .repository_template_repository_squash_merge_commit_title import Repository_template_repository_squash_merge_commit_title

        from .repository_template_repository_merge_commit_message import Repository_template_repository_merge_commit_message
        from .repository_template_repository_merge_commit_title import Repository_template_repository_merge_commit_title
        from .repository_template_repository_owner import Repository_template_repository_owner
        from .repository_template_repository_permissions import Repository_template_repository_permissions
        from .repository_template_repository_squash_merge_commit_message import Repository_template_repository_squash_merge_commit_message
        from .repository_template_repository_squash_merge_commit_title import Repository_template_repository_squash_merge_commit_title

        fields: dict[str, Callable[[Any], None]] = {
            "allow_auto_merge":
            lambda n: setattr(self, 'allow_auto_merge', n.get_bool_value()),
            "allow_merge_commit":
            lambda n: setattr(self, 'allow_merge_commit', n.get_bool_value()),
            "allow_rebase_merge":
            lambda n: setattr(self, 'allow_rebase_merge', n.get_bool_value()),
            "allow_squash_merge":
            lambda n: setattr(self, 'allow_squash_merge', n.get_bool_value()),
            "allow_update_branch":
            lambda n: setattr(self, 'allow_update_branch', n.get_bool_value()),
            "archive_url":
            lambda n: setattr(self, 'archive_url', n.get_str_value()),
            "archived":
            lambda n: setattr(self, 'archived', n.get_bool_value()),
            "assignees_url":
            lambda n: setattr(self, 'assignees_url', n.get_str_value()),
            "blobs_url":
            lambda n: setattr(self, 'blobs_url', n.get_str_value()),
            "branches_url":
            lambda n: setattr(self, 'branches_url', n.get_str_value()),
            "clone_url":
            lambda n: setattr(self, 'clone_url', n.get_str_value()),
            "collaborators_url":
            lambda n: setattr(self, 'collaborators_url', n.get_str_value()),
            "comments_url":
            lambda n: setattr(self, 'comments_url', n.get_str_value()),
            "commits_url":
            lambda n: setattr(self, 'commits_url', n.get_str_value()),
            "compare_url":
            lambda n: setattr(self, 'compare_url', n.get_str_value()),
            "contents_url":
            lambda n: setattr(self, 'contents_url', n.get_str_value()),
            "contributors_url":
            lambda n: setattr(self, 'contributors_url', n.get_str_value()),
            "created_at":
            lambda n: setattr(self, 'created_at', n.get_str_value()),
            "default_branch":
            lambda n: setattr(self, 'default_branch', n.get_str_value()),
            "delete_branch_on_merge":
            lambda n: setattr(self, 'delete_branch_on_merge', n.get_bool_value(
            )),
            "deployments_url":
            lambda n: setattr(self, 'deployments_url', n.get_str_value()),
            "description":
            lambda n: setattr(self, 'description', n.get_str_value()),
            "disabled":
            lambda n: setattr(self, 'disabled', n.get_bool_value()),
            "downloads_url":
            lambda n: setattr(self, 'downloads_url', n.get_str_value()),
            "events_url":
            lambda n: setattr(self, 'events_url', n.get_str_value()),
            "fork":
            lambda n: setattr(self, 'fork', n.get_bool_value()),
            "forks_count":
            lambda n: setattr(self, 'forks_count', n.get_int_value()),
            "forks_url":
            lambda n: setattr(self, 'forks_url', n.get_str_value()),
            "full_name":
            lambda n: setattr(self, 'full_name', n.get_str_value()),
            "git_commits_url":
            lambda n: setattr(self, 'git_commits_url', n.get_str_value()),
            "git_refs_url":
            lambda n: setattr(self, 'git_refs_url', n.get_str_value()),
            "git_tags_url":
            lambda n: setattr(self, 'git_tags_url', n.get_str_value()),
            "git_url":
            lambda n: setattr(self, 'git_url', n.get_str_value()),
            "has_downloads":
            lambda n: setattr(self, 'has_downloads', n.get_bool_value()),
            "has_issues":
            lambda n: setattr(self, 'has_issues', n.get_bool_value()),
            "has_pages":
            lambda n: setattr(self, 'has_pages', n.get_bool_value()),
            "has_projects":
            lambda n: setattr(self, 'has_projects', n.get_bool_value()),
            "has_wiki":
            lambda n: setattr(self, 'has_wiki', n.get_bool_value()),
            "homepage":
            lambda n: setattr(self, 'homepage', n.get_str_value()),
            "hooks_url":
            lambda n: setattr(self, 'hooks_url', n.get_str_value()),
            "html_url":
            lambda n: setattr(self, 'html_url', n.get_str_value()),
            "id":
            lambda n: setattr(self, 'id', n.get_int_value()),
            "is_template":
            lambda n: setattr(self, 'is_template', n.get_bool_value()),
            "issue_comment_url":
            lambda n: setattr(self, 'issue_comment_url', n.get_str_value()),
            "issue_events_url":
            lambda n: setattr(self, 'issue_events_url', n.get_str_value()),
            "issues_url":
            lambda n: setattr(self, 'issues_url', n.get_str_value()),
            "keys_url":
            lambda n: setattr(self, 'keys_url', n.get_str_value()),
            "labels_url":
            lambda n: setattr(self, 'labels_url', n.get_str_value()),
            "language":
            lambda n: setattr(self, 'language', n.get_str_value()),
            "languages_url":
            lambda n: setattr(self, 'languages_url', n.get_str_value()),
            "merge_commit_message":
            lambda n: setattr(
                self, 'merge_commit_message',
                n.get_enum_value(
                    Repository_template_repository_merge_commit_message)),
            "merge_commit_title":
            lambda n: setattr(
                self, 'merge_commit_title',
                n.get_enum_value(
                    Repository_template_repository_merge_commit_title)),
            "merges_url":
            lambda n: setattr(self, 'merges_url', n.get_str_value()),
            "milestones_url":
            lambda n: setattr(self, 'milestones_url', n.get_str_value()),
            "mirror_url":
            lambda n: setattr(self, 'mirror_url', n.get_str_value()),
            "name":
            lambda n: setattr(self, 'name', n.get_str_value()),
            "network_count":
            lambda n: setattr(self, 'network_count', n.get_int_value()),
            "node_id":
            lambda n: setattr(self, 'node_id', n.get_str_value()),
            "notifications_url":
            lambda n: setattr(self, 'notifications_url', n.get_str_value()),
            "open_issues_count":
            lambda n: setattr(self, 'open_issues_count', n.get_int_value()),
            "owner":
            lambda n: setattr(
                self, 'owner',
                n.get_object_value(Repository_template_repository_owner)),
            "permissions":
            lambda n: setattr(
                self, 'permissions',
                n.get_object_value(Repository_template_repository_permissions)
            ),
            "private":
            lambda n: setattr(self, 'private', n.get_bool_value()),
            "pulls_url":
            lambda n: setattr(self, 'pulls_url', n.get_str_value()),
            "pushed_at":
            lambda n: setattr(self, 'pushed_at', n.get_str_value()),
            "releases_url":
            lambda n: setattr(self, 'releases_url', n.get_str_value()),
            "size":
            lambda n: setattr(self, 'size', n.get_int_value()),
            "squash_merge_commit_message":
            lambda n: setattr(
                self, 'squash_merge_commit_message',
                n.get_enum_value(
                    Repository_template_repository_squash_merge_commit_message)
            ),
            "squash_merge_commit_title":
            lambda n: setattr(
                self, 'squash_merge_commit_title',
                n.get_enum_value(
                    Repository_template_repository_squash_merge_commit_title)),
            "ssh_url":
            lambda n: setattr(self, 'ssh_url', n.get_str_value()),
            "stargazers_count":
            lambda n: setattr(self, 'stargazers_count', n.get_int_value()),
            "stargazers_url":
            lambda n: setattr(self, 'stargazers_url', n.get_str_value()),
            "statuses_url":
            lambda n: setattr(self, 'statuses_url', n.get_str_value()),
            "subscribers_count":
            lambda n: setattr(self, 'subscribers_count', n.get_int_value()),
            "subscribers_url":
            lambda n: setattr(self, 'subscribers_url', n.get_str_value()),
            "subscription_url":
            lambda n: setattr(self, 'subscription_url', n.get_str_value()),
            "svn_url":
            lambda n: setattr(self, 'svn_url', n.get_str_value()),
            "tags_url":
            lambda n: setattr(self, 'tags_url', n.get_str_value()),
            "teams_url":
            lambda n: setattr(self, 'teams_url', n.get_str_value()),
            "temp_clone_token":
            lambda n: setattr(self, 'temp_clone_token', n.get_str_value()),
            "topics":
            lambda n: setattr(self, 'topics',
                              n.get_collection_of_primitive_values(str)),
            "trees_url":
            lambda n: setattr(self, 'trees_url', n.get_str_value()),
            "updated_at":
            lambda n: setattr(self, 'updated_at', n.get_str_value()),
            "url":
            lambda n: setattr(self, 'url', n.get_str_value()),
            "use_squash_pr_title_as_default":
            lambda n: setattr(self, 'use_squash_pr_title_as_default',
                              n.get_bool_value()),
            "visibility":
            lambda n: setattr(self, 'visibility', n.get_str_value()),
            "watchers_count":
            lambda n: setattr(self, 'watchers_count', n.get_int_value()),
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
        writer.write_bool_value("allow_auto_merge", self.allow_auto_merge)
        writer.write_bool_value("allow_merge_commit", self.allow_merge_commit)
        writer.write_bool_value("allow_rebase_merge", self.allow_rebase_merge)
        writer.write_bool_value("allow_squash_merge", self.allow_squash_merge)
        writer.write_bool_value("allow_update_branch",
                                self.allow_update_branch)
        writer.write_str_value("archive_url", self.archive_url)
        writer.write_bool_value("archived", self.archived)
        writer.write_str_value("assignees_url", self.assignees_url)
        writer.write_str_value("blobs_url", self.blobs_url)
        writer.write_str_value("branches_url", self.branches_url)
        writer.write_str_value("clone_url", self.clone_url)
        writer.write_str_value("collaborators_url", self.collaborators_url)
        writer.write_str_value("comments_url", self.comments_url)
        writer.write_str_value("commits_url", self.commits_url)
        writer.write_str_value("compare_url", self.compare_url)
        writer.write_str_value("contents_url", self.contents_url)
        writer.write_str_value("contributors_url", self.contributors_url)
        writer.write_str_value("created_at", self.created_at)
        writer.write_str_value("default_branch", self.default_branch)
        writer.write_bool_value("delete_branch_on_merge",
                                self.delete_branch_on_merge)
        writer.write_str_value("deployments_url", self.deployments_url)
        writer.write_str_value("description", self.description)
        writer.write_bool_value("disabled", self.disabled)
        writer.write_str_value("downloads_url", self.downloads_url)
        writer.write_str_value("events_url", self.events_url)
        writer.write_bool_value("fork", self.fork)
        writer.write_int_value("forks_count", self.forks_count)
        writer.write_str_value("forks_url", self.forks_url)
        writer.write_str_value("full_name", self.full_name)
        writer.write_str_value("git_commits_url", self.git_commits_url)
        writer.write_str_value("git_refs_url", self.git_refs_url)
        writer.write_str_value("git_tags_url", self.git_tags_url)
        writer.write_str_value("git_url", self.git_url)
        writer.write_bool_value("has_downloads", self.has_downloads)
        writer.write_bool_value("has_issues", self.has_issues)
        writer.write_bool_value("has_pages", self.has_pages)
        writer.write_bool_value("has_projects", self.has_projects)
        writer.write_bool_value("has_wiki", self.has_wiki)
        writer.write_str_value("homepage", self.homepage)
        writer.write_str_value("hooks_url", self.hooks_url)
        writer.write_str_value("html_url", self.html_url)
        writer.write_int_value("id", self.id)
        writer.write_bool_value("is_template", self.is_template)
        writer.write_str_value("issue_comment_url", self.issue_comment_url)
        writer.write_str_value("issue_events_url", self.issue_events_url)
        writer.write_str_value("issues_url", self.issues_url)
        writer.write_str_value("keys_url", self.keys_url)
        writer.write_str_value("labels_url", self.labels_url)
        writer.write_str_value("language", self.language)
        writer.write_str_value("languages_url", self.languages_url)
        writer.write_enum_value("merge_commit_message",
                                self.merge_commit_message)
        writer.write_enum_value("merge_commit_title", self.merge_commit_title)
        writer.write_str_value("merges_url", self.merges_url)
        writer.write_str_value("milestones_url", self.milestones_url)
        writer.write_str_value("mirror_url", self.mirror_url)
        writer.write_str_value("name", self.name)
        writer.write_int_value("network_count", self.network_count)
        writer.write_str_value("node_id", self.node_id)
        writer.write_str_value("notifications_url", self.notifications_url)
        writer.write_int_value("open_issues_count", self.open_issues_count)
        writer.write_object_value("owner", self.owner)
        writer.write_object_value("permissions", self.permissions)
        writer.write_bool_value("private", self.private)
        writer.write_str_value("pulls_url", self.pulls_url)
        writer.write_str_value("pushed_at", self.pushed_at)
        writer.write_str_value("releases_url", self.releases_url)
        writer.write_int_value("size", self.size)
        writer.write_enum_value("squash_merge_commit_message",
                                self.squash_merge_commit_message)
        writer.write_enum_value("squash_merge_commit_title",
                                self.squash_merge_commit_title)
        writer.write_str_value("ssh_url", self.ssh_url)
        writer.write_int_value("stargazers_count", self.stargazers_count)
        writer.write_str_value("stargazers_url", self.stargazers_url)
        writer.write_str_value("statuses_url", self.statuses_url)
        writer.write_int_value("subscribers_count", self.subscribers_count)
        writer.write_str_value("subscribers_url", self.subscribers_url)
        writer.write_str_value("subscription_url", self.subscription_url)
        writer.write_str_value("svn_url", self.svn_url)
        writer.write_str_value("tags_url", self.tags_url)
        writer.write_str_value("teams_url", self.teams_url)
        writer.write_str_value("temp_clone_token", self.temp_clone_token)
        writer.write_collection_of_primitive_values("topics", self.topics)
        writer.write_str_value("trees_url", self.trees_url)
        writer.write_str_value("updated_at", self.updated_at)
        writer.write_str_value("url", self.url)
        writer.write_bool_value("use_squash_pr_title_as_default",
                                self.use_squash_pr_title_as_default)
        writer.write_str_value("visibility", self.visibility)
        writer.write_int_value("watchers_count", self.watchers_count)
        writer.write_additional_data_value(self.additional_data)
