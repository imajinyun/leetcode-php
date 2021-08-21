<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class DeleteNodeInABinarySearchTree
{
    public static function deleteNode(?TreeNode $root, int $key): ?TreeNode
    {
        if (!$root) {
            return $root;
        }
        if ($root->val > $key) {
            $root->left = self::deleteNode($root->left, $key);
        } elseif ($root->val < $key) {
            $root->right = self::deleteNode($root->right, $key);
        } else {
            if (!$root->left) {
                return $root->right ?? new TreeNode();
            }
            if (!$root->right) {
                return $root->left ?? new TreeNode();
            }
            $node = self::findMinNode($root->right);
            $root->val = $node->val;
            $root->right = self::deleteNode($root->right, $node->val);
        }

        return $root;
    }

    private static function findMinNode(?TreeNode $node): TreeNode
    {
        while (!$node) {
            $node = $node->left;
        }
        return $node;
    }
}
