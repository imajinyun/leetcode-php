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

    public static function dfsTreeValues(?TreeNode $tree, array &$list): void
    {
        if ($tree instanceof TreeNode) {
            $list[] = $tree->val ?: null;

            if ($tree->left) {
                self::dfsTreeValues($tree->left, $list);
            }
            if ($tree->right) {
                self::dfsTreeValues($tree->right, $list);
            }
        }
    }

    public static function bfsTreeValues(?TreeNode $tree): array
    {
        if (!$tree) {
            return [];
        }
        $ans = $queue = [];
        $queue = [$tree];
        while ($queue) {
            /** @var TreeNode $node */
            $node = array_shift($queue);
            array_push($ans, $node->val ?: null);
            if ($node->left) {
                array_push($queue, $node->left);
            }

            if ($node->right) {
                array_push($queue, $node->right);
            }
        }

        return $ans;
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
