package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.ValuedEnum;
import java.util.Objects;

/**
 * The default value for a merge commit title.- `PR_TITLE` - default to the pull request's title.- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
 */
public enum RepositoryTemplateRepositoryMergeCommitTitle implements ValuedEnum {
    PR_TITLE("PR_TITLE"),
    MERGE_MESSAGE("MERGE_MESSAGE");
    public final String value;
    RepositoryTemplateRepositoryMergeCommitTitle(final String value) {
        this.value = value;
    }
    @javax.annotation.Nonnull
    public String getValue() { return this.value; }
    @javax.annotation.Nullable
    public static RepositoryTemplateRepositoryMergeCommitTitle forValue(@javax.annotation.Nonnull final String searchValue) {
        Objects.requireNonNull(searchValue);
        switch(searchValue) {
            case "PR_TITLE": return PR_TITLE;
            case "MERGE_MESSAGE": return MERGE_MESSAGE;
            default: return null;
        }
    }
}
