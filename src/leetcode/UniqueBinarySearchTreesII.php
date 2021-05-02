<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class UniqueBinarySearchTreesII
{
    public static function generateTrees(int $n): array
    {
        if ($n <= 0) {
            return [];
        }

        return self::helper(1, $n);
    }

    private static function helper(int $start, int $end): array
    {
        $ans = [];
        if ($start > $end) {
            $ans[] = null;
        }
        for ($i = $start; $i <= $end; ++$i) {
            $lefts = self::helper($start, $i - 1);
            $rights = self::helper($i + 1, $end);
            foreach ($lefts as $left) {
                foreach ($rights as $right) {
                    $root = new TreeNode($i);
                    $root->left = $left;
                    $root->right = $right;
                    $ans[] = $root;
                }
            }
        }

        return $ans;
    }
}
