package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.ValuedEnum;
import java.util.Objects;

/** The merge method to use. */
public enum AutoMergeMergeMethod implements ValuedEnum {
    Merge("merge"),
    Squash("squash"),
    Rebase("rebase");
    public final String value;
    AutoMergeMergeMethod(final String value) {
        this.value = value;
    }
    @javax.annotation.Nonnull
    public String getValue() { return this.value; }
    @javax.annotation.Nullable
    public static AutoMergeMergeMethod forValue(@javax.annotation.Nonnull final String searchValue) {
        Objects.requireNonNull(searchValue);
        switch(searchValue) {
            case "merge": return Merge;
            case "squash": return Squash;
            case "rebase": return Rebase;
            default: return null;
        }
    }
}
