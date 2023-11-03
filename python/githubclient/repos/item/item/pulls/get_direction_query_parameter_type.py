from enum import Enum


class GetDirectionQueryParameterType(str, Enum):
    Asc = "asc",
    Desc = "desc",
