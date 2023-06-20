package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.ValuedEnum;
import java.util.Objects;

/** How the author is associated with the repository. */
public enum AuthorAssociation implements ValuedEnum {
    COLLABORATOR("COLLABORATOR"),
    CONTRIBUTOR("CONTRIBUTOR"),
    FIRST_TIMER("FIRST_TIMER"),
    FIRST_TIME_CONTRIBUTOR("FIRST_TIME_CONTRIBUTOR"),
    MANNEQUIN("MANNEQUIN"),
    MEMBER("MEMBER"),
    NONE("NONE"),
    OWNER("OWNER");
    public final String value;
    AuthorAssociation(final String value) {
        this.value = value;
    }
    @javax.annotation.Nonnull
    public String getValue() { return this.value; }
    @javax.annotation.Nullable
    public static AuthorAssociation forValue(@javax.annotation.Nonnull final String searchValue) {
        Objects.requireNonNull(searchValue);
        switch(searchValue) {
            case "COLLABORATOR": return COLLABORATOR;
            case "CONTRIBUTOR": return CONTRIBUTOR;
            case "FIRST_TIMER": return FIRST_TIMER;
            case "FIRST_TIME_CONTRIBUTOR": return FIRST_TIME_CONTRIBUTOR;
            case "MANNEQUIN": return MANNEQUIN;
            case "MEMBER": return MEMBER;
            case "NONE": return NONE;
            case "OWNER": return OWNER;
            default: return null;
        }
    }
}
