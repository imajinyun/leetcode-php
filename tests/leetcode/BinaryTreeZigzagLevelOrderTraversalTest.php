<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\BinaryTreeZigzagLevelOrderTraversal;
use leetcode\util\TreeNode;

class BinaryTreeZigzagLevelOrderTraversalTest extends TestCase
{
    private TreeNode $p;
    private TreeNode $q;

    protected function setUp(): void
    {
        // Input: [3, 9, 20, null, null, 15, 7]
        $this->p = new TreeNode(3);
        $this->p->left = new TreeNode(9);
        $this->p->right = new TreeNode(20);
        $this->p->left->left = new TreeNode();
        $this->p->left->right = new TreeNode();
        $this->p->right->left = new TreeNode(15);
        $this->p->right->right = new TreeNode(7);

        // Input: []
        $this->q = new TreeNode();
    }

    public function testZigzagLevelOrder(): void
    {
        self::assertSame(
            [[3], [20, 9], [15, 7]],
            BinaryTreeZigzagLevelOrderTraversal::zigzagLevelOrder($this->p)
        );
        self::assertSame(
            [],
            BinaryTreeZigzagLevelOrderTraversal::zigzagLevelOrder($this->q)
        );
    }
}
