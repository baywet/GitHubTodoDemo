package githubtododemo.githubclient.repos.item.item.pulls;

import com.microsoft.kiota.serialization.ValuedEnum;
import java.util.Objects;

@jakarta.annotation.Generated("com.microsoft.kiota")
public enum GetStateQueryParameterType implements ValuedEnum {
    Open("open"),
    Closed("closed"),
    All("all");
    public final String value;
    GetStateQueryParameterType(final String value) {
        this.value = value;
    }
    @jakarta.annotation.Nonnull
    public String getValue() { return this.value; }
    @jakarta.annotation.Nullable
    public static GetStateQueryParameterType forValue(@jakarta.annotation.Nonnull final String searchValue) {
        Objects.requireNonNull(searchValue);
        switch(searchValue) {
            case "open": return Open;
            case "closed": return Closed;
            case "all": return All;
            default: return null;
        }
    }
}
