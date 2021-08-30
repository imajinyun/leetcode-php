<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class InvertBinaryTree
{
    public static function invertTree(?TreeNode $root): ?TreeNode
    {
        if (!$root) {
            return null;
        }
        $node = $root->left;
        $root->left = $root->right;
        $root->right = $node;

        self::invertTree($root->left);
        self::invertTree($root->right);

        return $root;
    }

    public static function invertTree2(?TreeNode $root): ?TreeNode
    {
        if (!$root) {
            return null;
        }
        $stack = [$root];
        while ($stack) {
            $node = array_pop($stack);
            $left = $node->left;
            $node->left = $node->right;
            $node->right = $left;
            if ($node->left) {
                array_push($stack, $node->left);
            }
            if ($node->right) {
                array_push($stack, $node->right);
            }
        }

        return $root;
    }
}
