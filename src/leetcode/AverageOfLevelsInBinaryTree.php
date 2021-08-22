<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class AverageOfLevelsInBinaryTree
{
    public static function averageOfLevels(TreeNode $root): array
    {
        if (!$root) {
            return [];
        }
        $ans = $queue = [];
        $queue = [$root];
        while ($queue) {
            [$curr, $n] = [[], count($queue)];
            for ($i = 0; $i < $n; $i++) {
                $node = array_shift($queue);
                if ($node instanceof TreeNode && $node->val) {
                    array_push($curr, $node->val);
                    if ($node->left && $node->left->val) {
                        array_push($queue, $node->left);
                    }
                    if ($node->right && $node->right->val) {
                        array_push($queue, $node->right);
                    }
                }
            }
            $val = round(array_sum($curr) / $n, 2);
            array_push($ans, $val);
        }

        return $ans;
    }

    public static function averageOfLevels2(TreeNode $root): array
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
            if ($depth === count($ans)) {
                array_push($ans, round($node->val, 2));
            } else {
                $curr = [$ans[$depth], $node->val];
                $ans[$depth] = round(array_sum($curr) / count($curr), 2);
            }
            self::dfs($node->left, $depth + 1, $ans);
            self::dfs($node->right, $depth + 1, $ans);
        }
    }
}
