<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\MaximumDepthOfBinaryTree;
use leetcode\util\TreeNode;

class MaximumDepthOfBinaryTreeTest extends TestCase
{
    private $root;

    protected function setUp(): void
    {
        $this->root = new TreeNode(3);
        $this->root->left = new TreeNode(9);
        $this->root->right = new TreeNode(20);
        $this->root->left->left = null;
        $this->root->left->right = null;
        $this->root->right->left = new TreeNode(15);
        $this->root->right->right = new TreeNode(7);

        parent::setUp();
    }

    public function testMaxDepth(): void
    {
        self::assertSame(3, MaximumDepthOfBinaryTree::maxDepth($this->root));
    }
}
