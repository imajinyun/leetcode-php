<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\LowestCommonAncestorOfABinaryTree;
use leetcode\util\TreeNode;
use PHPUnit\Framework\TestCase;

class LowestCommonAncestorOfABinaryTreeTest extends TestCase
{
    private TreeNode $root1;
    private TreeNode $root2;
    private TreeNode $root3;

    protected function setUp(): void
    {
        $this->root1 = TreeNode::fromArray([3, 5, 1, 6, 2, 0, 8, null, null, 7, 4]);
        $this->root2 = TreeNode::fromArray([3, 5, 1, 6, 2, 0, 8, null, null, 7, 4]);
        $this->root3 = TreeNode::fromArray([1, 2]);
    }

    public function testLowestCommonAncestor(): void
    {
        $actual = LowestCommonAncestorOfABinaryTree::lowestCommonAncestor(
            $this->root1,
            new TreeNode(5),
            new TreeNode(1)
        );
        self::assertInstanceOf(get_class($this->root1), $actual);
        self::assertSame(3, $actual->val);

        $actual = LowestCommonAncestorOfABinaryTree::lowestCommonAncestor(
            $this->root2,
            new TreeNode(5),
            new TreeNode(4)
        );
        self::assertInstanceOf(get_class($this->root2), $actual);
        self::assertSame(5, $actual->val);

        $actual = LowestCommonAncestorOfABinaryTree::lowestCommonAncestor(
            $this->root3,
            new TreeNode(1),
            new TreeNode(2)
        );
        self::assertInstanceOf(get_class($this->root3), $actual);
        self::assertSame(1, $actual->val);
    }
}
