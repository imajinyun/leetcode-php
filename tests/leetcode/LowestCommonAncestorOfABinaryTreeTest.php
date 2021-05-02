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
        // [3, 5, 1, 6, 2, 0, 8, null, null, 7, 4]
        $this->root1 = new TreeNode(3);
        $this->root1->left = new TreeNode(5);
        $this->root1->right = new TreeNode(1);
        $this->root1->left->left = new TreeNode(6);
        $this->root1->left->right = new TreeNode(2);
        $this->root1->right->left = new TreeNode(0);
        $this->root1->right->right = new TreeNode(8);
        $this->root1->left->left->left = null;
        $this->root1->left->left->right = null;
        $this->root1->left->right->left = new TreeNode(7);
        $this->root1->left->right->right = new TreeNode(4);

        // [3, 5, 1, 6, 2, 0, 8, null, null, 7, 4]
        $this->root2 = $this->root1;

        $this->root3 = new TreeNode(1);
        $this->root3->left = new TreeNode(2);
    }

    public function testLowestCommonAncestor(): void
    {
        [$p, $q] = [new TreeNode(5), new TreeNode(1)];
        $expect = get_class($this->root1);
        $actual = LowestCommonAncestorOfABinaryTree::lowestCommonAncestor($this->root1, $p, $q);
        self::assertInstanceOf($expect, $actual);
        self::assertSame(3, $actual->val);

        [$p, $q] = [new TreeNode(5), new TreeNode(4)];
        $expect = get_class($this->root2);
        $actual = LowestCommonAncestorOfABinaryTree::lowestCommonAncestor($this->root2, $p, $q);
        self::assertInstanceOf($expect, $actual);
        self::assertSame(5, $actual->val);

        [$p, $q] = [new TreeNode(1), new TreeNode(2)];
        $expect = get_class($this->root3);
        $actual = LowestCommonAncestorOfABinaryTree::lowestCommonAncestor($this->root3, $p, $q);
        self::assertInstanceOf($expect, $actual);
        self::assertSame(1, $actual->val);
    }
}
