<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class InsertIntoABinarySearchTree
{
    public static function insertIntoBST(?TreeNode $root, int $val): TreeNode
    {
        if (!$root) {
            return $val ? new TreeNode($val) : new TreeNode();
        }

        if ($root->val > $val) {
            $root->left = self::insertIntoBST($root->left, $val);
        }
        if ($root->val < $val) {
            $root->right = self::insertIntoBST($root->right, $val);
        }

        return $root;
    }

    public static function insertIntoBST2(?TreeNode $root, int $val): TreeNode
    {
        $curr = $root;
        while ($curr instanceof TreeNode) {
            if ($curr->val < $val) {
                if (!$curr->right) {
                    $curr->right = new TreeNode($val);
                    return $root;
                } else {
                    $curr = $curr->right;
                }
            }
            if ($curr->val > $val) {
                if (!$curr->left) {
                    $curr->left = new TreeNode($val);
                    return $root;
                } else {
                    $curr = $curr->left;
                }
            }
        }

        return new TreeNode($val);
    }
}
