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

    public static function fromArray(array $array): ?TreeNode
    {
        if (empty($array)) {
            return null;
        }
        [$queue, $root] = [[], new TreeNode($array[0])];
        [$i, $n] = [0, count($array)];
        $queue[] = $root;

        while ($i < $n) {
            $node = array_shift($queue);
            if ($node) {
                if (isset($array[++$i])) {
                    $value = $array[$i];
                    $node->left = new TreeNode($value);
                    $queue[] = $node->left;
                }
                if (isset($array[++$i])) {
                    $value = $array[$i];
                    $node->right = new TreeNode($value);
                    $queue[] = $node->right;
                }
            }
        }

        return $root;
    }
}
