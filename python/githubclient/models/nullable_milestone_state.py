from enum import Enum


class NullableMilestone_state(str, Enum):
    Open = "open",
    Closed = "closed",
