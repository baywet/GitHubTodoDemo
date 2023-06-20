package githubtododemo.githubclient.models;

import com.microsoft.kiota.serialization.Parsable;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.SerializationWriter;
import java.util.HashMap;
import java.util.Map;
import java.util.Objects;
/**
 * The status of auto merging a pull request.
 */
public class AutoMerge implements Parsable {
    /** Commit message for the merge commit. */
    private String commitMessage;
    /** Title for the merge commit message. */
    private String commitTitle;
    /** A GitHub user. */
    private SimpleUser enabledBy;
    /** The merge method to use. */
    private AutoMergeMergeMethod mergeMethod;
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param parseNode The parse node to use to read the discriminator value and create the object
     * @return a autoMerge
     */
    @javax.annotation.Nonnull
    public static AutoMerge createFromDiscriminatorValue(@javax.annotation.Nonnull final ParseNode parseNode) {
        Objects.requireNonNull(parseNode);
        return new AutoMerge();
    }
    /**
     * Gets the commit_message property value. Commit message for the merge commit.
     * @return a string
     */
    @javax.annotation.Nullable
    public String getCommitMessage() {
        return this.commitMessage;
    }
    /**
     * Gets the commit_title property value. Title for the merge commit message.
     * @return a string
     */
    @javax.annotation.Nullable
    public String getCommitTitle() {
        return this.commitTitle;
    }
    /**
     * Gets the enabled_by property value. A GitHub user.
     * @return a simpleUser
     */
    @javax.annotation.Nullable
    public SimpleUser getEnabledBy() {
        return this.enabledBy;
    }
    /**
     * The deserialization information for the current model
     * @return a Map<String, java.util.function.Consumer<ParseNode>>
     */
    @javax.annotation.Nonnull
    public Map<String, java.util.function.Consumer<ParseNode>> getFieldDeserializers() {
        final HashMap<String, java.util.function.Consumer<ParseNode>> deserializerMap = new HashMap<String, java.util.function.Consumer<ParseNode>>(4);
        deserializerMap.put("commit_message", (n) -> { this.setCommitMessage(n.getStringValue()); });
        deserializerMap.put("commit_title", (n) -> { this.setCommitTitle(n.getStringValue()); });
        deserializerMap.put("enabled_by", (n) -> { this.setEnabledBy(n.getObjectValue(SimpleUser::createFromDiscriminatorValue)); });
        deserializerMap.put("merge_method", (n) -> { this.setMergeMethod(n.getEnumValue(AutoMergeMergeMethod.class)); });
        return deserializerMap;
    }
    /**
     * Gets the merge_method property value. The merge method to use.
     * @return a AutoMergeMergeMethod
     */
    @javax.annotation.Nullable
    public AutoMergeMergeMethod getMergeMethod() {
        return this.mergeMethod;
    }
    /**
     * Serializes information the current object
     * @param writer Serialization writer to use to serialize this model
     * @return a void
     */
    @javax.annotation.Nonnull
    public void serialize(@javax.annotation.Nonnull final SerializationWriter writer) {
        Objects.requireNonNull(writer);
        writer.writeStringValue("commit_message", this.getCommitMessage());
        writer.writeStringValue("commit_title", this.getCommitTitle());
        writer.writeObjectValue("enabled_by", this.getEnabledBy());
        writer.writeEnumValue("merge_method", this.getMergeMethod());
    }
    /**
     * Sets the commit_message property value. Commit message for the merge commit.
     * @param value Value to set for the commitMessage property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setCommitMessage(@javax.annotation.Nullable final String value) {
        this.commitMessage = value;
    }
    /**
     * Sets the commit_title property value. Title for the merge commit message.
     * @param value Value to set for the commitTitle property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setCommitTitle(@javax.annotation.Nullable final String value) {
        this.commitTitle = value;
    }
    /**
     * Sets the enabled_by property value. A GitHub user.
     * @param value Value to set for the enabledBy property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setEnabledBy(@javax.annotation.Nullable final SimpleUser value) {
        this.enabledBy = value;
    }
    /**
     * Sets the merge_method property value. The merge method to use.
     * @param value Value to set for the mergeMethod property.
     * @return a void
     */
    @javax.annotation.Nonnull
    public void setMergeMethod(@javax.annotation.Nullable final AutoMergeMergeMethod value) {
        this.mergeMethod = value;
    }
}
