<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class BinaryTreeZigzagLevelOrderTraversal
{
    public static function zigzagLevelOrder(TreeNode $root): array
    {
        if (empty($root)) {
            return [];
        }
        [$ans, $level, $queue] = [[], 1, []];
        $queue = [$root];
        while ($queue) {
            [$curr, $n] = [[], count($queue)];
            for ($i = 0; $i < $n; $i++) {
                /** @var \leetcode\util\TreeNode $node */
                $node = array_shift($queue);
                if ($node instanceof TreeNode && $node->val) {
                    if ($level % 2 === 0 && $node->val) {
                        array_unshift($curr, $node->val);
                    } else {
                        array_push($curr, $node->val);
                    }

                    if ($node->left) {
                        array_push($queue, $node->left);
                    }
                    if ($node->right) {
                        array_push($queue, $node->right);
                    }
                }
            }
            if ($curr) {
                array_push($ans, $curr);
            }
            $level++;
        }

        return $ans;
    }
}
