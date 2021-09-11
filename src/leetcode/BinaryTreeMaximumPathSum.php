<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class BinaryTreeMaximumPathSum
{
    public static function maxPathSum(TreeNode $root): int
    {
        $max = PHP_INT_MIN;
        self::helper($root, $max);

        return $max;
    }

    public static function maxPathSum2(TreeNode $root): int
    {
        $helper = static function (TreeNode $node) {
            [$order, $stack] = [[], [$node]];
            while ($stack) {
                $top = array_pop($stack);
                array_push($order, $top);
                if ($top->left) {
                    array_push($stack, $top->left);
                }
                if ($top->right) {
                    array_push($stack, $top->right);
                }
            }
            return array_reverse($order);
        };
        if (!$root->left && !$root->right) {
            return $root->val;
        }
        [$ans, $map] = [PHP_INT_MIN, []];
        $nodes = $helper($root);
        foreach ($nodes as $node) {
            $left = $right = 0;
            if ($node->left) {
                $left = spl_object_hash($node->left);
            }
            if ($node->right) {
                $right = spl_object_hash($node->right);
            }
            $left = max(0, $map[$left] ?? 0);
            $right = max(0, $map[$right] ?? 0);
            $map[spl_object_hash($node)] = max($left, $right) + $node->val;
            $ans = max($ans, $left + $node->val + $right);
        }

        return $ans;
    }

    private static function helper(?TreeNode $node, int &$max): int
    {
        if (! $node) {
            return 0;
        }
        $left = max(0, self::helper($node->left, $max));
        $right = max(0, self::helper($node->right, $max));
        $max = max($max, $left + $right + $node->val);

        return max($left, $right) + $node->val;
    }
}
