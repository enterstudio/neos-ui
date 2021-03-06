<?php
namespace Neos\Neos\Ui\Domain\Model;

use Neos\ContentRepository\Domain\Model\NodeInterface;

/**
 * A change that needs to reference another node
 */
interface ReferencingChangeInterface extends ChangeInterface
{

    /**
     * Set the reference
     *
     * @param NodeInterface $reference
     * @return void
     */
    public function setReference(NodeInterface $reference);

    /**
     * Get the reference
     *
     * @return NodeInterface
     */
    public function getReference();
}
