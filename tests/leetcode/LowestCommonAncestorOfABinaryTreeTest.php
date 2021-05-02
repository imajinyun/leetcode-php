<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\LowestCommonAncestorOfABinaryTree;
use leetcode\util\TreeNode;

class LowestCommonAncestorOfABinaryTreeTest extends TestCase
{
    public function testLowestCommonAncestor(): void
    {
        // [3, 5, 1, 6, 2, 0, 8, null, null, 7, 4]
        $root = new TreeNode(3);
        $root->left = new TreeNode(5);
        $root->right = new TreeNode(1);
        $root->left->left = new TreeNode(6);
        $root->left->right = new TreeNode(2);
        $root->right->left = new TreeNode(0);
        $root->right->right = new TreeNode(8);
        $root->left->left->left = null;
        $root->left->left->right = null;
        $root->left->right->left = new TreeNode(7);
        $root->left->right->right = new TreeNode(4);

        [$p, $q] = [new TreeNode(5), new TreeNode(1)];
        $expect = get_class($root);
        $actual = LowestCommonAncestorOfABinaryTree::lowestCommonAncestor($root, $p, $q);
        self::assertInstanceOf($expect, $actual);
        self::assertSame(3, $actual->val);
    }

    public function testLowestCommonAncestor2(): void
    {
        // [3, 5, 1, 6, 2, 0, 8, null, null, 7, 4]
        $root = new TreeNode(3);
        $root->left = new TreeNode(5);
        $root->right = new TreeNode(1);
        $root->left->left = new TreeNode(6);
        $root->left->right = new TreeNode(2);
        $root->right->left = new TreeNode(0);
        $root->right->right = new TreeNode(8);
        $root->left->left->left = null;
        $root->left->left->right = null;
        $root->left->right->left = new TreeNode(7);
        $root->left->right->right = new TreeNode(4);

        [$p, $q] = [new TreeNode(5), new TreeNode(4)];
        $expect = get_class($root);
        $actual = LowestCommonAncestorOfABinaryTree::lowestCommonAncestor($root, $p, $q);
        self::assertInstanceOf($expect, $actual);
        self::assertSame(5, $actual->val);
    }

    public function testLowestCommonAncestor3(): void
    {
        $root = new TreeNode(1);
        $root->left = new TreeNode(2);

        [$p, $q] = [new TreeNode(1), new TreeNode(2)];
        $expect = get_class($root);
        $actual = LowestCommonAncestorOfABinaryTree::lowestCommonAncestor($root, $p, $q);
        self::assertInstanceOf($expect, $actual);
        self::assertSame(1, $actual->val);
    }
}
