<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class MinimumDepthOfBinaryTree
{
    public static function minDepth(TreeNode $root = null): int
    {
        if (!$root) {
            return 0;
        }
        $left = self::minDepth($root->left);
        $right = self::minDepth($root->right);

        return ($left === 0 || $right === 0)
            ? $left + $right + 1
            : min($left, $right) + 1;
    }
}
