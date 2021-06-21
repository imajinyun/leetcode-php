<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\BinaryTreeInorderTraversal;
use leetcode\util\TreeNode;

class BinaryTreeInorderTraversalTest extends TestCase
{
    protected function setUp(): void
    {
        $this->root1 = new TreeNode(1);
        $this->root1->left = new TreeNode();
        $this->root1->right = new TreeNode(2);
        $this->root1->right->left = new TreeNode(3);

        $this->root2 = new TreeNode();

        $this->root3 = new TreeNode(1);

        $this->root4 = new TreeNode(1);
        $this->root4->left = new TreeNode(2);

        $this->root5 = new TreeNode(1);
        $this->root5->left = new TreeNode();
        $this->root5->right = new TreeNode(2);
    }

    public function testInorderTraversal(): void
    {
        self::assertSame([1, 3, 2], BinaryTreeInorderTraversal::inorderTraversal($this->root1));
        self::assertSame([], BinaryTreeInorderTraversal::inorderTraversal($this->root2));
        self::assertSame([1], BinaryTreeInorderTraversal::inorderTraversal($this->root3));
        self::assertSame([2, 1], BinaryTreeInorderTraversal::inorderTraversal($this->root4));
        self::assertSame([1, 2], BinaryTreeInorderTraversal::inorderTraversal($this->root5));
    }

    public function testInorderTraversal2(): void
    {
        self::assertSame([1, 3, 2], BinaryTreeInorderTraversal::inorderTraversal2($this->root1));
        self::assertSame([], BinaryTreeInorderTraversal::inorderTraversal2($this->root2));
        self::assertSame([1], BinaryTreeInorderTraversal::inorderTraversal2($this->root3));
        self::assertSame([2, 1], BinaryTreeInorderTraversal::inorderTraversal2($this->root4));
        self::assertSame([1, 2], BinaryTreeInorderTraversal::inorderTraversal2($this->root5));
    }
}
