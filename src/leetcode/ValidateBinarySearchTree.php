<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class ValidateBinarySearchTree
{
    public static function isValidBST(TreeNode $root): bool
    {
        return self::helper($root);
    }

    public static function isValidBST2(TreeNode $root): bool
    {
        if ($root === null) {
            return true;
        }
        [$stack, $prev] = [[], null];
        while ($root !== null || $stack) {
            while ($root !== null) {
                $stack[] = $root;
                $root = $root->left;
            }
            $root = array_pop($stack);
            if ($prev !== null && $prev instanceof TreeNode && $root->val <= $prev->val) {
                return false;
            }
            $prev = $root;
            $root = $root->right;
        }

        return true;
    }

    private static function helper(TreeNode $root = null, $min = null, $max = null): bool
    {
        if ($root === null) {
            return true;
        }
        if ($min !== null && $min >= $root->val) {
            return false;
        }
        if ($max !== null && $max <= $root->val) {
            return false;
        }

        return self::helper($root->left, $min, $root->val) &&
            self::helper($root->right, $root->val, $max);
    }
}
