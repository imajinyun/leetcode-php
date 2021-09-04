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

    public static function maxDepth2(?TreeNode $root): int
    {
        if (!$root) {
            return 0;
        }
        [$cnt, $queue] = [0, [$root]];
        while ($queue) {
            $size = count($queue);
            while ($size-- > 0) {
                $node = array_pop($queue);
                if ($node->left) {
                    array_push($queue, $node->left);
                }
                if ($node->right) {
                    array_push($queue, $node->right);
                }
            }
            $cnt++;
        }

        return $cnt;
    }
}
