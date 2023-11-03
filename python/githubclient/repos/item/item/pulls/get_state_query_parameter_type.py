from enum import Enum


class GetStateQueryParameterType(str, Enum):
    Open = "open",
    Closed = "closed",
    All = "all",
