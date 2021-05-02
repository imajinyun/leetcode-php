<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class LowestCommonAncestorOfABinarySearchTree
{
    public static function lowestCommonAncestor(TreeNode $root, TreeNode $p, TreeNode $q): ?TreeNode
    {
        while ($root) {
            if ($p->val < $root->val && $q->val < $root->val) {
                $root = $root->left;
            } elseif ($p->val > $root->val && $q->val > $root->val) {
                $root = $root->right;
            } else {
                return $root;
            }
        }

        return null;
    }
}
