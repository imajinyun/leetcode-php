<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class BinaryTreeLevelOrderTraversal
{
    public static function levelOrder(TreeNode $root): array
    {
        $ans = $queue = [];
        if (empty($root)) {
            return $ans;
        }
        $queue = [$root];
        while ($queue) {
            $curr = [];
            for ($i = 0, $n = count($queue); $i < $n; $i++) {
                /** @var \leetcode\util\TreeNode $node */
                $node = array_shift($queue);
                $curr[] = $node->val;
                if ($node->left !== null) {
                    $queue[] = $node->left;
                }
                if ($node->right !== null) {
                    $queue[] = $node->right;
                }
            }
            $ans[] = $curr;
        }

        return $ans;
    }

    public static function levelOrder2(TreeNode $root): array
    {
        $ans = [];
        if (empty($root) || $root === null) {
            return $ans;
        }
        self::helper($ans, $root, 0);

        return $ans;
    }

    private static function helper(array &$ans, TreeNode $node, int $curr): void
    {
        if ($node === null) {
            return;
        }
        if (count($ans) < $curr + 1) {
            $ans[] = [];
        }
        $ans[$curr][] = $node->val;

        if ($node->left) {
            self::helper($ans, $node->left, $curr + 1);
        }
        if ($node->right) {
            self::helper($ans, $node->right, $curr + 1);
        }
    }
}
