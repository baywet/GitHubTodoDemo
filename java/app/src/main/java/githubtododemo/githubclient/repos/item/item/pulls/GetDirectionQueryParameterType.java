package githubtododemo.githubclient.repos.item.item.pulls;

import com.microsoft.kiota.serialization.ValuedEnum;
import java.util.Objects;

@jakarta.annotation.Generated("com.microsoft.kiota")
public enum GetDirectionQueryParameterType implements ValuedEnum {
    Asc("asc"),
    Desc("desc");
    public final String value;
    GetDirectionQueryParameterType(final String value) {
        this.value = value;
    }
    @jakarta.annotation.Nonnull
    public String getValue() { return this.value; }
    @jakarta.annotation.Nullable
    public static GetDirectionQueryParameterType forValue(@jakarta.annotation.Nonnull final String searchValue) {
        Objects.requireNonNull(searchValue);
        switch(searchValue) {
            case "asc": return Asc;
            case "desc": return Desc;
            default: return null;
        }
    }
}
