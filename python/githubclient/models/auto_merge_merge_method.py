from enum import Enum


class AutoMerge_merge_method(str, Enum):
    Merge = "merge",
    Squash = "squash",
    Rebase = "rebase",
