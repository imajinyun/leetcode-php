<?php

declare(strict_types=1);

namespace leetcode;

use JetBrains\PhpStorm\Pure;
use leetcode\util\ListNode;

class MergeTwoSortedLists
{
    public static function mergeTwoLists(?ListNode $p, ?ListNode $q): ?ListNode
    {
        if (!$p || !$q) {
            return $p ?: $q;
        }

        if ($p->val < $q->val) {
            $p->next = self::mergeTwoLists($p->next, $q);
            return $p;
        } else {
            $q->next = self::mergeTwoLists($p, $q->next);
            return $q;
        }
    }

    public static function mergeTwoLists2(?ListNode $p, ?ListNode $q): ?ListNode
    {
        if (!$p || !$q) {
            return $p ?: $q;
        }
        $head = $curr = new ListNode();
        while ($p && $q) {
            if ($p->val < $q->val) {
                $curr->next = $p;
                $p = $p->next;
            } else {
                $curr->next = $q;
                $q = $q->next;
            }
            $curr = $curr->next;
        }
        $curr->next = $p ?: $q;

        return $head->next;
    }
}
