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
        if ($root === null) {
            return $root;
        }
        if ($root->val === $p->val || $root->val === $q->val) {
            return $root;
        }

        $left = self::lowestCommonAncestor($root->left, $p, $q);
        $right = self::lowestCommonAncestor($root->right, $p, $q);
        if ($left && $right) {
            return $root;
        }

        return $left ?: $right;
    }
}
