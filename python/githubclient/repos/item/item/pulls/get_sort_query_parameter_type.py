from enum import Enum

class GetSortQueryParameterType(str, Enum):
    Created = "created",
    Updated = "updated",
    Popularity = "popularity",
    LongRunning = "long-running",

