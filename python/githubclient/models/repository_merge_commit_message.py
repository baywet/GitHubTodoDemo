from enum import Enum

class Repository_merge_commit_message(str, Enum):
    PR_BODY = "PR_BODY",
    PR_TITLE = "PR_TITLE",
    BLANK = "BLANK",

