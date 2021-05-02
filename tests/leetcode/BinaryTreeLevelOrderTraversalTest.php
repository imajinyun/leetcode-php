<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\BinaryTreeLevelOrderTraversal;
use leetcode\util\TreeNode;

class BinaryTreeLevelOrderTraversalTest extends TestCase
{
    private $node;

    protected function setUp(): void
    {
        $this->node = new TreeNode(3);
        $this->node->left = new TreeNode(9);
        $this->node->right = new TreeNode(20);
        $this->node->right->left = new TreeNode(15);
        $this->node->right->right = new TreeNode(7);

        parent::setUp();
    }

    public function testLevelOrder(): void
    {
        $expect = [
            [3],
            [9, 20],
            [15, 7],
        ];
        self::assertSame($expect, BinaryTreeLevelOrderTraversal::levelOrder($this->node));
    }

    public function testLevelOrder2(): void
    {
        $expect = [
            [3],
            [9, 20],
            [15, 7],
        ];
        self::assertSame($expect, BinaryTreeLevelOrderTraversal::levelOrder2($this->node));
    }
}
