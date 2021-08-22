<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class SearchInABinarySearchTree
{
    public static function searchBST(?TreeNode $root, int $val): ?TreeNode
    {
        if (!$root) {
            return $root;
        }

        if ($root->val > $val) {
            return self::searchBST($root->left, $val);
        } elseif ($root->val < $val) {
            return self::searchBST($root->right, $val);
        } else {
            return $root;
        }
    }

    public static function searchBST2(?TreeNode $root, int $val): ?TreeNode
    {
        if (!$root) {
            return $root;
        }
        $curr = $root;
        while ($curr && $curr instanceof TreeNode) {
            if ($curr->val > $val) {
                $curr = $curr->left;
            } elseif ($curr->val < $val) {
                $curr = $curr->right;
            } else {
                return $curr;
            }
        }

        return $curr;
    }
}
