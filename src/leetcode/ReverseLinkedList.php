<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\ListNode;

class ReverseLinkedList
{
    public static function reverseList(?ListNode $head): ?ListNode
    {
        if (!$head) {
            return null;
        }
        $node = null;
        while ($head) {
            $curr = $head;
            $head = $head->next;
            $curr->next = $node;
            $node = $curr;
        }

        return $node;
    }

    public static function reverseList2(?ListNode $head): ?ListNode
    {
        if ($head === null || $head->next === null) {
            return $head;
        }
        $node = self::reverseList($head->next);
        $head->next->next = $head;
        $head->next = null;

        return $node;
    }
}
