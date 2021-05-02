<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class MaximumDepthOfBinaryTree
{
    public static function maxDepth(TreeNode $root = null): int
    {
        if ($root === null) {
            return 0;
        }
        if ($root->left === null) {
            return self::maxDepth($root->right) + 1;
        }
        if ($root->right === null) {
            return self::maxDepth($root->left) + 1;
        }

        return max(self::maxDepth($root->left), self::maxDepth($root->right)) + 1;
    }
}
