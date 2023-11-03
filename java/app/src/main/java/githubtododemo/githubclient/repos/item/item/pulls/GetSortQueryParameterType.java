package githubtododemo.githubclient.repos.item.item.pulls;

import com.microsoft.kiota.serialization.ValuedEnum;
import java.util.Objects;

@jakarta.annotation.Generated("com.microsoft.kiota")
public enum GetSortQueryParameterType implements ValuedEnum {
    Created("created"),
    Updated("updated"),
    Popularity("popularity"),
    LongRunning("long-running");
    public final String value;
    GetSortQueryParameterType(final String value) {
        this.value = value;
    }
    @jakarta.annotation.Nonnull
    public String getValue() { return this.value; }
    @jakarta.annotation.Nullable
    public static GetSortQueryParameterType forValue(@jakarta.annotation.Nonnull final String searchValue) {
        Objects.requireNonNull(searchValue);
        switch(searchValue) {
            case "created": return Created;
            case "updated": return Updated;
            case "popularity": return Popularity;
            case "long-running": return LongRunning;
            default: return null;
        }
    }
}
