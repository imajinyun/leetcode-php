<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\ValidateBinarySearchTree;
use leetcode\util\TreeNode;

class ValidateBinarySearchTreeTest extends TestCase
{
    public function testIsValidBST(): void
    {
        // Input: [2, 1, 3]
        $t1 = new TreeNode(2);
        $t1->left = new TreeNode(1);
        $t1->right = new TreeNode(3);
        self::assertTrue(ValidateBinarySearchTree::isValidBST($t1));

        // Input: [5, 1, 4, null, null, 3, 6]
        $t2 = new TreeNode(5);
        $t2->left = new TreeNode(1);
        $t2->right = new TreeNode(4);
        $t2->left->left = null;
        $t2->left->right = null;
        $t2->right->left = new TreeNode(3);
        $t2->right->right = new TreeNode(6);
        self::assertFalse(ValidateBinarySearchTree::isValidBST($t2));
    }

    public function testIsValidBST2(): void
    {
        // Input: [2, 1, 3]
        $t1 = new TreeNode(2);
        $t1->left = new TreeNode(1);
        $t1->right = new TreeNode(3);
        self::assertTrue(ValidateBinarySearchTree::isValidBST2($t1));

        // Input: [5, 1, 4, null, null, 3, 6]
        $t2 = new TreeNode(5);
        $t2->left = new TreeNode(1);
        $t2->right = new TreeNode(4);
        $t2->left->left = null;
        $t2->left->right = null;
        $t2->right->left = new TreeNode(3);
        $t2->right->right = new TreeNode(6);
        self::assertFalse(ValidateBinarySearchTree::isValidBST2($t2));
    }
}
