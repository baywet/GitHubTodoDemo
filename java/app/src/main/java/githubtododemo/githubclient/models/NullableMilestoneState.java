package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.ValuedEnum;
import java.util.Objects;

/**
 * The state of the milestone.
 */
@jakarta.annotation.Generated("com.microsoft.kiota")
public enum NullableMilestoneState implements ValuedEnum {
    Open("open"),
    Closed("closed");
    public final String value;
    NullableMilestoneState(final String value) {
        this.value = value;
    }
    @jakarta.annotation.Nonnull
    public String getValue() { return this.value; }
    @jakarta.annotation.Nullable
    public static NullableMilestoneState forValue(@jakarta.annotation.Nonnull final String searchValue) {
        Objects.requireNonNull(searchValue);
        switch(searchValue) {
            case "open": return Open;
            case "closed": return Closed;
            default: return null;
        }
    }
}
