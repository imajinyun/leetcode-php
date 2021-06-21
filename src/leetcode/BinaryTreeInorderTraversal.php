<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class BinaryTreeInorderTraversal
{
    public static function inorderTraversal(TreeNode $root): array
    {
        if (empty($root)) {
            return [];
        }
        [$ans, $curr, $stack] = [[], $root, []];
        while ($curr || $stack) {
            while ($curr) {
                array_push($stack, $curr);
                $curr = $curr->left;
            }
            /** @var \leetcode\util\TreeNode $curr */
            $curr = array_pop($stack);
            if ($curr->val) {
                array_push($ans, $curr->val);
            }
            $curr = $curr->right;
        }

        return $ans;
    }

    public static function inorderTraversal2(TreeNode $root): array
    {
        if (empty($root)) {
            return [];
        }
        $ans = [];
        self::helper($root, $ans);

        return $ans;
    }

    private static function helper(TreeNode $root, array & $arr): void
    {
        if ($root) {
            if ($root->left) {
                self::helper($root->left, $arr);
            }
            if ($root->val) {
                array_push($arr, $root->val);
            }
            if ($root->right) {
                self::helper($root->right, $arr);
            }
        }
    }
}
