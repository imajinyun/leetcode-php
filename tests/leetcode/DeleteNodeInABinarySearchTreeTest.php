<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\DeleteNodeInABinarySearchTree;
use PHPUnit\Framework\TestCase;
use leetcode\util\TreeNode;

class DeleteNodeInABinarySearchTreeTest extends TestCase
{
    private TreeNode $p;
    private TreeNode $q;
    private ?TreeNode $t;

    protected function setUp(): void
    {
        $this->p = new TreeNode(5);
        $this->p->left = new TreeNode(3);
        $this->p->right = new TreeNode(6);
        $this->p->left->left = new TreeNode(2);
        $this->p->left->right = new TreeNode(4);
        $this->p->right->left = new TreeNode();
        $this->p->right->right = new TreeNode(7);

        $this->q = new TreeNode(5);
        $this->q->left = new TreeNode(3);
        $this->q->right = new TreeNode(6);
        $this->q->left->left = new TreeNode(2);
        $this->q->left->right = new TreeNode(4);
        $this->q->right->left = new TreeNode();
        $this->q->right->right = new TreeNode(7);

        $this->t = null;
    }

    public function testDeleteNode(): void
    {
        $node1 = DeleteNodeInABinarySearchTree::deleteNode($this->p, 3);
        self::assertSame([5, 4, 6, 2, null, null, 7], TreeNode::bfsTreeValues($node1));

        $node2 = DeleteNodeInABinarySearchTree::deleteNode($this->q, 0);
        self::assertSame([5, 3, 6, 2, 4, null, 7], TreeNode::bfsTreeValues($node2));

        $node3 = DeleteNodeInABinarySearchTree::deleteNode($this->t, 0);
        if (!$node3 instanceof TreeNode) {
            self::assertSame([], (array) $node3);
        }
    }
}
