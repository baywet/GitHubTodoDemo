package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.ValuedEnum;
import java.util.Objects;

/** State of this Pull Request. Either `open` or `closed`. */
public enum PullRequestState implements ValuedEnum {
    Open("open"),
    Closed("closed");
    public final String value;
    PullRequestState(final String value) {
        this.value = value;
    }
    @javax.annotation.Nonnull
    public String getValue() { return this.value; }
    @javax.annotation.Nullable
    public static PullRequestState forValue(@javax.annotation.Nonnull final String searchValue) {
        Objects.requireNonNull(searchValue);
        switch(searchValue) {
            case "open": return Open;
            case "closed": return Closed;
            default: return null;
        }
    }
}
