<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class FindLargestValueInEachTreeRow
{
    public static function largestValues(?TreeNode $tree): array
    {
        if (!$tree) {
            return [];
        }

        $ans = $queue = [];
        $queue = [$tree];
        while ($queue) {
            [$curr, $n] = [[], count($queue)];
            for ($i = 0; $i < $n; $i++) {
                $node = array_shift($queue);
                if ($node instanceof TreeNode) {
                    array_push($curr, $node->val);
                    if ($node->left) {
                        array_push($queue, $node->left);
                    }
                    if ($node->right) {
                        array_push($queue, $node->right);
                    }
                }
            }
            if ($curr) {
                array_push($ans, max($curr));
            }
        }

        return $ans;
    }

    public static function largestValues2(?TreeNode $tree): array
    {
        if (!$tree) {
            return [];
        }
        $ans = [];
        self::dfs($tree, 0, $ans);

        return $ans;
    }

    private static function dfs(?TreeNode $node, int $depth, array & $ans): void
    {
        if ($node instanceof TreeNode) {
            if ($depth === count($ans)) {
                array_push($ans, $node->val);
            } else {
                $ans[$depth] = max($ans[$depth], $node->val);
            }
            self::dfs($node->left, $depth + 1, $ans);
            self::dfs($node->right, $depth + 1, $ans);
        }
    }
}
