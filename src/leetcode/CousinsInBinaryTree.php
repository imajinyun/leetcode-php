<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class CousinsInBinaryTree
{
    private int $xDepth = 0;
    private int $yDepth = 0;
    private ?TreeNode $xParent = null;
    private ?TreeNode $yParent = null;

    public static function isCousins(?TreeNode $root, int $x, int $y): bool
    {
        if (!$root) {
            return false;
        }
        $queue = [$root];
        while ($queue) {
            [$curr, $n] = [[], count($queue)];
            for ($i = 0; $i < $n; $i++) {
                /** @var \leetcode\util\TreeNode $node */
                $node = array_shift($queue);
                if ($node->left) {
                    array_push($queue, $node->left);
                    $curr[$node->left->val] = $node->val;
                }
                if ($node->right) {
                    array_push($queue, $node->right);
                    $curr[$node->right->val] = $node->val;
                }
            }
            $keys = array_keys($curr);
            if (in_array($x, $keys) && in_array($y, $keys) && $curr[$x] !== $curr[$y]) {
                return true;
            }
        }

        return false;
    }

    public function isCousins2(?TreeNode $root, int $x, int $y): bool
    {
        $this->helper($root, $x, $y, 0, null);

        return $this->xDepth === $this->yDepth && $this->xParent !== $this->yParent;
    }

    public function helper(?TreeNode $node, int $x, int $y, int $depth, ?TreeNode $parent)
    {
        if (!$node) {
            return;
        }
        if ($node->val === $x) {
            [$this->xDepth, $this->xParent] = [$depth, $parent];
        } elseif ($node->val === $y) {
            [$this->yDepth, $this->yParent] = [$depth, $parent];
        } else {
            $this->helper($node->left, $x, $y, $depth + 1, $node);
            $this->helper($node->right, $x, $y, $depth + 1, $node);
        }
    }
}
