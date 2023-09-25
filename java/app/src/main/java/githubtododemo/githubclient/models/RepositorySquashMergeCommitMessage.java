package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.ValuedEnum;
import java.util.Objects;

/**
 * The default value for a squash merge commit message:- `PR_BODY` - default to the pull request's body.- `COMMIT_MESSAGES` - default to the branch's commit messages.- `BLANK` - default to a blank commit message.
 */
@jakarta.annotation.Generated("com.microsoft.kiota")
public enum RepositorySquashMergeCommitMessage implements ValuedEnum {
    PR_BODY("PR_BODY"),
    COMMIT_MESSAGES("COMMIT_MESSAGES"),
    BLANK("BLANK");
    public final String value;
    RepositorySquashMergeCommitMessage(final String value) {
        this.value = value;
    }
    @jakarta.annotation.Nonnull
    public String getValue() { return this.value; }
    @jakarta.annotation.Nullable
    public static RepositorySquashMergeCommitMessage forValue(@jakarta.annotation.Nonnull final String searchValue) {
        Objects.requireNonNull(searchValue);
        switch(searchValue) {
            case "PR_BODY": return PR_BODY;
            case "COMMIT_MESSAGES": return COMMIT_MESSAGES;
            case "BLANK": return BLANK;
            default: return null;
        }
    }
}
