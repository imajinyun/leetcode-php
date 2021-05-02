<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\LowestCommonAncestorOfABinarySearchTree;
use leetcode\util\TreeNode;

class LowestCommonAncestorOfABinarySearchTreeTest extends TestCase
{
    private $root;

    public function setUp(): void
    {
        $this->root = new TreeNode(6);
        $this->root->left = new TreeNode(2);
        $this->root->right = new TreeNode(8);
        $this->root->left->left = new TreeNode(0);
        $this->root->left->right = new TreeNode(4);
        $this->root->right->left = new TreeNode(7);
        $this->root->right->right = new TreeNode(9);
        $this->root->left->right->left = new TreeNode(3);
        $this->root->left->right->right = new TreeNode(5);

        parent::setUp();
    }

    public function testLowestCommonAncestorOfABinarySearchTree1(): void
    {
        $p = new TreeNode(2);
        $q = new TreeNode(8);

        $expect = get_class($this->root);
        $actual = LowestCommonAncestorOfABinarySearchTree::lowestCommonAncestor($this->root, $p, $q);
        self::assertInstanceOf($expect, $actual);
        self::assertEquals(6, $actual->val);
    }

    public function testLowestCommonAncestorOfABinarySearchTree2(): void
    {
        $p = new TreeNode(2);
        $q = new TreeNode(4);

        $expect = get_class($this->root);
        $actual = LowestCommonAncestorOfABinarySearchTree::lowestCommonAncestor($this->root, $p, $q);
        self::assertInstanceOf($expect, $actual);
        self::assertEquals(2, $actual->val);
    }
}
