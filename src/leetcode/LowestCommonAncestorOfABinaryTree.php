<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class LowestCommonAncestorOfABinaryTree
{
    public static function lowestCommonAncestor(
        TreeNode $root = null,
        TreeNode $p = null,
        TreeNode $q = null
    ): ?TreeNode {
        if ($root === null || $root === $p || $root === $q) {
            return $root;
        }

        $left = self::lowestCommonAncestor($root->left, $p, $q);
        $right = self::lowestCommonAncestor($root->right, $p, $q);
        if ($left !== null && $right !== null) {
            return $root;
        }

        return $left !== null ? $left: $right;
    }
}
