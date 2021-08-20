<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class BinaryTreeRightSideView
{
    public static function rightSideView(?TreeNode $root): array
    {
        if (!$root) {
            return [];
        }
        $ans = $queue = [];
        $queue = [$root];
        while ($queue) {
            $n = count($queue);
            for ($i = 0; $i < $n; $i++) {
                /** @var \leetcode\util\TreeNode $node */
                $node = array_shift($queue);
                if ($node instanceof TreeNode) {
                    if ($i === $n - 1 && $node->val) {
                        array_push($ans, $node->val);
                    }
                    if ($node->left) {
                        array_push($queue, $node->left);
                    }
                    if ($node->right) {
                        array_push($queue, $node->right);
                    }
                }
            }
        }

        return $ans;
    }

    public static function rightSideView2(?TreeNode $root): array
    {
        if (!$root) {
            return [];
        }
        $ans = [];
        self::dfs($root, 0, $ans);

        return $ans;
    }

    private static function dfs(?TreeNode $node, int $depth, array & $ans): void
    {
        if ($node instanceof TreeNode && $node->val) {
            if ($depth + 1 > count($ans)) {
                array_push($ans, 0);
            }
            $ans[$depth] = $node->val;
            self::dfs($node->left, $depth + 1, $ans);
            self::dfs($node->right, $depth + 1, $ans);
        }
    }
}
