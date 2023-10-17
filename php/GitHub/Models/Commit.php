<?php

namespace Baywet\Githubtododemo\Github\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Commit
*/
class Commit implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var NullableSimpleUser|null $author A GitHub user.
    */
    private ?NullableSimpleUser $author = null;
    
    /**
     * @var string|null $comments_url The comments_url property
    */
    private ?string $comments_url = null;
    
    /**
     * @var Commit_commit|null $commit The commit property
    */
    private ?Commit_commit $commit = null;
    
    /**
     * @var NullableSimpleUser|null $committer A GitHub user.
    */
    private ?NullableSimpleUser $committer = null;
    
    /**
     * @var array<DiffEntry>|null $files The files property
    */
    private ?array $files = null;
    
    /**
     * @var string|null $html_url The html_url property
    */
    private ?string $html_url = null;
    
    /**
     * @var string|null $node_id The node_id property
    */
    private ?string $node_id = null;
    
    /**
     * @var array<Commit_parents>|null $parents The parents property
    */
    private ?array $parents = null;
    
    /**
     * @var string|null $sha The sha property
    */
    private ?string $sha = null;
    
    /**
     * @var Commit_stats|null $stats The stats property
    */
    private ?Commit_stats $stats = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new commit and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Commit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Commit {
        return new Commit();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the author property value. A GitHub user.
     * @return NullableSimpleUser|null
    */
    public function getAuthor(): ?NullableSimpleUser {
        return $this->author;
    }

    /**
     * Gets the comments_url property value. The comments_url property
     * @return string|null
    */
    public function getCommentsUrl(): ?string {
        return $this->comments_url;
    }

    /**
     * Gets the commit property value. The commit property
     * @return Commit_commit|null
    */
    public function getCommit(): ?Commit_commit {
        return $this->commit;
    }

    /**
     * Gets the committer property value. A GitHub user.
     * @return NullableSimpleUser|null
    */
    public function getCommitter(): ?NullableSimpleUser {
        return $this->committer;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'author' => fn(ParseNode $n) => $o->setAuthor($n->getObjectValue([NullableSimpleUser::class, 'createFromDiscriminatorValue'])),
            'comments_url' => fn(ParseNode $n) => $o->setCommentsUrl($n->getStringValue()),
            'commit' => fn(ParseNode $n) => $o->setCommit($n->getObjectValue([Commit_commit::class, 'createFromDiscriminatorValue'])),
            'committer' => fn(ParseNode $n) => $o->setCommitter($n->getObjectValue([NullableSimpleUser::class, 'createFromDiscriminatorValue'])),
            'files' => fn(ParseNode $n) => $o->setFiles($n->getCollectionOfObjectValues([DiffEntry::class, 'createFromDiscriminatorValue'])),
            'html_url' => fn(ParseNode $n) => $o->setHtmlUrl($n->getStringValue()),
            'node_id' => fn(ParseNode $n) => $o->setNodeId($n->getStringValue()),
            'parents' => fn(ParseNode $n) => $o->setParents($n->getCollectionOfObjectValues([Commit_parents::class, 'createFromDiscriminatorValue'])),
            'sha' => fn(ParseNode $n) => $o->setSha($n->getStringValue()),
            'stats' => fn(ParseNode $n) => $o->setStats($n->getObjectValue([Commit_stats::class, 'createFromDiscriminatorValue'])),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the files property value. The files property
     * @return array<DiffEntry>|null
    */
    public function getFiles(): ?array {
        return $this->files;
    }

    /**
     * Gets the html_url property value. The html_url property
     * @return string|null
    */
    public function getHtmlUrl(): ?string {
        return $this->html_url;
    }

    /**
     * Gets the node_id property value. The node_id property
     * @return string|null
    */
    public function getNodeId(): ?string {
        return $this->node_id;
    }

    /**
     * Gets the parents property value. The parents property
     * @return array<Commit_parents>|null
    */
    public function getParents(): ?array {
        return $this->parents;
    }

    /**
     * Gets the sha property value. The sha property
     * @return string|null
    */
    public function getSha(): ?string {
        return $this->sha;
    }

    /**
     * Gets the stats property value. The stats property
     * @return Commit_stats|null
    */
    public function getStats(): ?Commit_stats {
        return $this->stats;
    }

    /**
     * Gets the url property value. The url property
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('author', $this->getAuthor());
        $writer->writeStringValue('comments_url', $this->getCommentsUrl());
        $writer->writeObjectValue('commit', $this->getCommit());
        $writer->writeObjectValue('committer', $this->getCommitter());
        $writer->writeCollectionOfObjectValues('files', $this->getFiles());
        $writer->writeStringValue('html_url', $this->getHtmlUrl());
        $writer->writeStringValue('node_id', $this->getNodeId());
        $writer->writeCollectionOfObjectValues('parents', $this->getParents());
        $writer->writeStringValue('sha', $this->getSha());
        $writer->writeObjectValue('stats', $this->getStats());
        $writer->writeStringValue('url', $this->getUrl());
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
     * Sets the author property value. A GitHub user.
     * @param NullableSimpleUser|null $value Value to set for the author property.
    */
    public function setAuthor(?NullableSimpleUser $value): void {
        $this->author = $value;
    }

    /**
     * Sets the comments_url property value. The comments_url property
     * @param string|null $value Value to set for the comments_url property.
    */
    public function setCommentsUrl(?string $value): void {
        $this->comments_url = $value;
    }

    /**
     * Sets the commit property value. The commit property
     * @param Commit_commit|null $value Value to set for the commit property.
    */
    public function setCommit(?Commit_commit $value): void {
        $this->commit = $value;
    }

    /**
     * Sets the committer property value. A GitHub user.
     * @param NullableSimpleUser|null $value Value to set for the committer property.
    */
    public function setCommitter(?NullableSimpleUser $value): void {
        $this->committer = $value;
    }

    /**
     * Sets the files property value. The files property
     * @param array<DiffEntry>|null $value Value to set for the files property.
    */
    public function setFiles(?array $value): void {
        $this->files = $value;
    }

    /**
     * Sets the html_url property value. The html_url property
     * @param string|null $value Value to set for the html_url property.
    */
    public function setHtmlUrl(?string $value): void {
        $this->html_url = $value;
    }

    /**
     * Sets the node_id property value. The node_id property
     * @param string|null $value Value to set for the node_id property.
    */
    public function setNodeId(?string $value): void {
        $this->node_id = $value;
    }

    /**
     * Sets the parents property value. The parents property
     * @param array<Commit_parents>|null $value Value to set for the parents property.
    */
    public function setParents(?array $value): void {
        $this->parents = $value;
    }

    /**
     * Sets the sha property value. The sha property
     * @param string|null $value Value to set for the sha property.
    */
    public function setSha(?string $value): void {
        $this->sha = $value;
    }

    /**
     * Sets the stats property value. The stats property
     * @param Commit_stats|null $value Value to set for the stats property.
    */
    public function setStats(?Commit_stats $value): void {
        $this->stats = $value;
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
