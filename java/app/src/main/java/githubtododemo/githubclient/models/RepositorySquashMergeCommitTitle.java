package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.ValuedEnum;
import java.util.Objects;

/** The default value for a squash merge commit title:- `PR_TITLE` - default to the pull request's title.- `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit). */
public enum RepositorySquashMergeCommitTitle implements ValuedEnum {
    PR_TITLE("PR_TITLE"),
    COMMIT_OR_PR_TITLE("COMMIT_OR_PR_TITLE");
    public final String value;
    RepositorySquashMergeCommitTitle(final String value) {
        this.value = value;
    }
    @javax.annotation.Nonnull
    public String getValue() { return this.value; }
    @javax.annotation.Nullable
    public static RepositorySquashMergeCommitTitle forValue(@javax.annotation.Nonnull final String searchValue) {
        Objects.requireNonNull(searchValue);
        switch(searchValue) {
            case "PR_TITLE": return PR_TITLE;
            case "COMMIT_OR_PR_TITLE": return COMMIT_OR_PR_TITLE;
            default: return null;
        }
    }
}
