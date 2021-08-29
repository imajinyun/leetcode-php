<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\ListNode;

class ReverseLinkedListII
{
    public static function reverseBetween(?ListNode $head, int $left, int $right): ?ListNode
    {
        if (!$head || $left <= 0 || $right <= 0 || $left > $right) {
            return null;
        }
        $dummy = new ListNode();
        $dummy->next = $head;
        $prev = $dummy;
        $curr = $dummy->next;
        $i = 1;
        while ($i < $left) {
            $prev = $curr;
            $curr = $curr->next;
            $i++;
        }
        $node = $prev;
        while ($i <= $right) {
            $temp = $curr->next;
            $curr->next = $prev;
            $prev = $curr;
            $curr = $temp;
            $i++;
        }
        $node->next->next = $curr;
        $node->next = $prev;

        return $dummy->next;
    }

    public static function reverseBetween2(?ListNode $head, int $left, int $right): ?ListNode
    {
        if (!$head || $left <= 0 || $right <= 0 || $left > $right) {
            return null;
        }
        $dummy = new ListNode();
        $dummy->next = $head;
        $prev = $dummy;
        for ($i = 0; $i < $left - 1; $i++) {
            $prev = $prev->next;
        }
        $tail = $prev->next;

        for ($i = 0; $i < $right - $left; $i++) {
            $temp = $prev->next;
            $prev->next = $tail->next;
            $tail->next = $tail->next->next;
            $prev->next->next = $temp;
        }

        return $dummy->next;
    }

    public static function reverseBetween3(?ListNode $head, int $left, int $right): ?ListNode
    {
        if (!$head || $left <= 0 || $right <= 0 || $left > $right) {
            return null;
        }
        $dummy = new ListNode();
        $dummy->next = $head;
        $prev = $dummy;
        for ($i = 1; $i < $left; $i++) {
            $prev = $prev->next;
        }

        $node = $prev->next;
        for ($i = $left; $i < $right; $i++) {
            self::swap($prev, $node->next);
            self::swap($prev, $node);
        }

        return $dummy->next;
    }

    public static function reverseBetween4(?ListNode $head, int $left, int $right): ?ListNode
    {
        if (!$head || $left <= 0 || $right <= 0 || $left > $right) {
            return null;
        }
        if ($left === $right) {
            return $head;
        }
        if ($left > 1) {
            $node = $head;
            $node->next = self::reverseBetween4($head->next, $left - 1, $right - 1);
            return $node;
        } else {
            $next = $head->next;
            $node = self::reverseBetween4($next, 1, $right - 1);
            $tail = $next->next;
            $next->next = $head;
            $head->next = $tail;
            return $node;
        }
    }

    private static function swap(ListNode $p, ListNode $q)
    {
        $t = $p->next;
        $p->next = $q->next;
        $q->next = $t;
    }
}
