<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\ListNode;

class RemoveNthNodeFromEndOfList
{
    public static function removeNthFromEnd(?ListNode $head, int $n): ?ListNode
    {
        if (!$head) {
            return null;
        }
        $node = new ListNode();
        $node->next = $head;
        $slow = $fast = $node;
        for ($i = 1; $i <= $n + 1; $i++) {
            $fast = $fast->next;
        }
        while ($fast) {
            $slow = $slow->next;
            $fast = $fast->next;
        }
        $slow->next = $slow->next->next;

        return $node->next;
    }

    public static function removeNthFromEnd2(?ListNode $head, int $n): ?ListNode
    {
        if (!$head) {
            return null;
        }
        $slow = $fast = $head;
        for ($i = 0; $i < $n; $i++) {
            $fast = $fast->next;
        }
        if (!$fast) {
            return $head->next;
        }
        while ($fast->next) {
            $slow = $slow->next;
            $fast = $fast->next;
        }
        $slow->next = $slow->next->next;

        return $head;
    }
}
