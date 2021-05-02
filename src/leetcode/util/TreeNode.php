<?php

declare(strict_types=1);

namespace leetcode\util;

class TreeNode
{
    public $val = 0;
    public $left;
    public $right;

    public function __construct(int $val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }

    public static function dfsTreeValues(TreeNode $tree, array &$list): void
    {
        $list[] = $tree->val;
        if ($tree->left) {
            self::dfsTreeValues($tree->left, $list);
        }
        if ($tree->right) {
            self::dfsTreeValues($tree->right, $list);
        }
    }

    public static function bfsTreeValues(TreeNode $tree): array
    {
        $result = $queue = [];
        $queue[] = $tree;
        while ($queue) {
            /** @var TreeNode $current */
            $current = array_pop($queue);
            $result[] = $current->val;
            if ($current->right) {
                $queue[] = $current->right;
            }

            if ($current->left) {
                $queue[] = $current->left;
            }
        }

        return $result;
    }
}
