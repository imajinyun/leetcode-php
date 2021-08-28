<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class KthSmallestElementInABST
{
    public static function kthSmallest(TreeNode $root, int $k): int
    {
        if ($k <= 0) {
            return 0;
        }
        $stack = [];
        while ($root || $stack) {
            while ($root && $root->val) {
                array_push($stack, $root);
                $root = $root->left;
            }
            $root = array_pop($stack);
            if (--$k === 0) {
                break;
            }
            $root = $root->right;
        }

        return $root->val;
    }

    public static function kthSmallest2(TreeNode $root, int $k): int
    {
        if ($k <= 0) {
            return 0;
        }
        $n = 0;
        self::helper($root, $k, $n);

        return $n;
    }

    private static function helper(?TreeNode $node, int &$k, int &$n)
    {
        if ($node instanceof TreeNode && $node->val) {
            self::helper($node->left, $k, $n);
            if (--$k === 0) {
                $n = $node->val;
                return;
            }
            self::helper($node->right, $k, $n);
        }
    }
}
