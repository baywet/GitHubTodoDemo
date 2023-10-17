<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Commit_commit implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var NullableGitUser|null $author Metaproperties for Git author/committer information.
    */
    private ?NullableGitUser $author = null;
    
    /**
     * @var int|null $comment_count The comment_count property
    */
    private ?int $comment_count = null;
    
    /**
     * @var NullableGitUser|null $committer Metaproperties for Git author/committer information.
    */
    private ?NullableGitUser $committer = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var Commit_commit_tree|null $tree The tree property
    */
    private ?Commit_commit_tree $tree = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * @var Verification|null $verification The verification property
    */
    private ?Verification $verification = null;
    
    /**
     * Instantiates a new commit_commit and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Commit_commit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Commit_commit {
        return new Commit_commit();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the author property value. Metaproperties for Git author/committer information.
     * @return NullableGitUser|null
    */
    public function getAuthor(): ?NullableGitUser {
        return $this->author;
    }

    /**
     * Gets the comment_count property value. The comment_count property
     * @return int|null
    */
    public function getCommentCount(): ?int {
        return $this->comment_count;
    }

    /**
     * Gets the committer property value. Metaproperties for Git author/committer information.
     * @return NullableGitUser|null
    */
    public function getCommitter(): ?NullableGitUser {
        return $this->committer;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'author' => fn(ParseNode $n) => $o->setAuthor($n->getObjectValue([NullableGitUser::class, 'createFromDiscriminatorValue'])),
            'comment_count' => fn(ParseNode $n) => $o->setCommentCount($n->getIntegerValue()),
            'committer' => fn(ParseNode $n) => $o->setCommitter($n->getObjectValue([NullableGitUser::class, 'createFromDiscriminatorValue'])),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'tree' => fn(ParseNode $n) => $o->setTree($n->getObjectValue([Commit_commit_tree::class, 'createFromDiscriminatorValue'])),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
            'verification' => fn(ParseNode $n) => $o->setVerification($n->getObjectValue([Verification::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the tree property value. The tree property
     * @return Commit_commit_tree|null
    */
    public function getTree(): ?Commit_commit_tree {
        return $this->tree;
    }

    /**
     * Gets the url property value. The url property
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Gets the verification property value. The verification property
     * @return Verification|null
    */
    public function getVerification(): ?Verification {
        return $this->verification;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('author', $this->getAuthor());
        $writer->writeIntegerValue('comment_count', $this->getCommentCount());
        $writer->writeObjectValue('committer', $this->getCommitter());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeObjectValue('tree', $this->getTree());
        $writer->writeStringValue('url', $this->getUrl());
        $writer->writeObjectValue('verification', $this->getVerification());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the author property value. Metaproperties for Git author/committer information.
     * @param NullableGitUser|null $value Value to set for the author property.
    */
    public function setAuthor(?NullableGitUser $value): void {
        $this->author = $value;
    }

    /**
     * Sets the comment_count property value. The comment_count property
     * @param int|null $value Value to set for the comment_count property.
    */
    public function setCommentCount(?int $value): void {
        $this->comment_count = $value;
    }

    /**
     * Sets the committer property value. Metaproperties for Git author/committer information.
     * @param NullableGitUser|null $value Value to set for the committer property.
    */
    public function setCommitter(?NullableGitUser $value): void {
        $this->committer = $value;
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the tree property value. The tree property
     * @param Commit_commit_tree|null $value Value to set for the tree property.
    */
    public function setTree(?Commit_commit_tree $value): void {
        $this->tree = $value;
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

    /**
     * Sets the verification property value. The verification property
     * @param Verification|null $value Value to set for the verification property.
    */
    public function setVerification(?Verification $value): void {
        $this->verification = $value;
    }

}
