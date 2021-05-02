<?php

declare(strict_types=1);

namespace leetcode;

use PHPUnit\Framework\TestCase;
use leetcode\MinimumDepthOfBinaryTree;
use leetcode\util\TreeNode;

class MinimumDepthOfBinaryTreeTest extends TestCase
{
    public function testMinDepth(): void
    {
        /**
         * [3, 9, 20, null, null, 15, 7]
         *
         *   3
         * 9     20
         *    15    7
         */
        $r1 = new TreeNode(3);
        $r1->left = new TreeNode(9);
        $r1->right = new TreeNode(20);
        $r1->left->left = null;
        $r1->left->right = null;
        $r1->right->left = new TreeNode(15);
        $r1->right->right = new TreeNode(7);
        self::assertSame(2, MinimumDepthOfBinaryTree::minDepth($r1));

        /**
         * [2, null, 3, null, 4, null, 5, null, 6]
         *
         * 2
         *   3
         *     4
         *       5
         *         6
         */
        $r2 = new TreeNode(2);
        $r2->left = null;
        $r2->right = new TreeNode(3);
        $r2->right->left = null;
        $r2->right->right = new TreeNode(4);
        $r2->right->right->left = null;
        $r2->right->right->right = new TreeNode(5);
        $r2->right->right->right->left = null;
        $r2->right->right->right->right = new TreeNode(6);
        self::assertSame(5, MinimumDepthOfBinaryTree::minDepth($r2));
    }
}
