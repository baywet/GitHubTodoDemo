package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.ValuedEnum;
import java.util.Objects;

/**
 * The merge method to use.
 */
@jakarta.annotation.Generated("com.microsoft.kiota")
public enum AutoMergeMergeMethod implements ValuedEnum {
    Merge("merge"),
    Squash("squash"),
    Rebase("rebase");
    public final String value;
    AutoMergeMergeMethod(final String value) {
        this.value = value;
    }
    @jakarta.annotation.Nonnull
    public String getValue() { return this.value; }
    @jakarta.annotation.Nullable
    public static AutoMergeMergeMethod forValue(@jakarta.annotation.Nonnull final String searchValue) {
        Objects.requireNonNull(searchValue);
        switch(searchValue) {
            case "merge": return Merge;
            case "squash": return Squash;
            case "rebase": return Rebase;
            default: return null;
        }
    }
}
