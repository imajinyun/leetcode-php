<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class LowestCommonAncestorOfABinaryTree
{
    public static function lowestCommonAncestor(TreeNode $root, TreeNode $p, TreeNode $q): ?TreeNode
    {
        if ($root === null || $root === $p || $root === $q) {
            return $root;
        }

        $left = $right = null;
        if ($root->left !== null) {
            $left = self::lowestCommonAncestor($root->left, $p, $q);
        }
        if ($root->right !== null) {
            $right = self::lowestCommonAncestor($root->right, $p, $q);
        }

        return $left ?: ($right ?: $root);
    }
}
