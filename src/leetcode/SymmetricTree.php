<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\TreeNode;

class SymmetricTree
{
    public static function isSymmetric(?TreeNode $root): bool
    {
        if (!$root) {
            return false;
        }
        $stack = [];
        array_push($stack, $root->left);
        array_push($stack, $root->right);
        while ($stack) {
            [$p, $q] = [array_shift($stack), array_shift($stack)];
            if (!$p && !$p) {
                continue;
            }
            if (!$p || !$q || $p->val !== $q->val) {
                return false;
            }
            array_push($stack, $p->left);
            array_push($stack, $q->right);
            array_push($stack, $p->right);
            array_push($stack, $q->left);
        }

        return true;
    }

    public static function isSymmetric2(?TreeNode $root): bool
    {
        if (!$root) {
            return false;
        }

        return self::helper($root->left, $root->right);
    }

    private static function helper(?TreeNode $p, ?TreeNode $q): bool
    {
        if (!$p && !$q) {
            return true;
        }
        if (!$p || !$q) {
            return false;
        }

        return $p->val === $q->val &&
            self::helper($p->left, $q->right) &&
            self::helper($p->right, $q->left);
    }
}
