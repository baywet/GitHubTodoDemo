package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.ValuedEnum;
import java.util.Objects;

/**
 * The default value for a merge commit message.- `PR_TITLE` - default to the pull request's title.- `PR_BODY` - default to the pull request's body.- `BLANK` - default to a blank commit message.
 */
@jakarta.annotation.Generated("com.microsoft.kiota")
public enum RepositoryMergeCommitMessage implements ValuedEnum {
    PR_BODY("PR_BODY"),
    PR_TITLE("PR_TITLE"),
    BLANK("BLANK");
    public final String value;
    RepositoryMergeCommitMessage(final String value) {
        this.value = value;
    }
    @jakarta.annotation.Nonnull
    public String getValue() { return this.value; }
    @jakarta.annotation.Nullable
    public static RepositoryMergeCommitMessage forValue(@jakarta.annotation.Nonnull final String searchValue) {
        Objects.requireNonNull(searchValue);
        switch(searchValue) {
            case "PR_BODY": return PR_BODY;
            case "PR_TITLE": return PR_TITLE;
            case "BLANK": return BLANK;
            default: return null;
        }
    }
}
