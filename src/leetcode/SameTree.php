<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class SameTree
{
    public static function isSameTree(?TreeNode $p, ?TreeNode $q): bool
    {
        if ($p && $q) {
            return $p->val === $q->val &&
                self::isSameTree($p->left, $q->left) &&
                self::isSameTree($p->right, $q->right);
        }

        return $p === $q;
    }

    public static function isSameTree2(?TreeNode $p, ?TreeNode $q): bool
    {
        $stack = [[$p, $q]];
        while ($stack) {
            [$m, $n] = array_pop($stack);
            if (!$m && !$n) {
                continue;
            }
            if (!$m || !$n) {
                return $m === $n;
            }
            if ($m->val !== $n->val) {
                return false;
            }
            array_push($stack, [$m->right, $n->right]);
            array_push($stack, [$m->left, $n->left]);
        }

        return true;
    }
}
