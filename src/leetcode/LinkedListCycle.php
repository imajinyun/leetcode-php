<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\ListNode;

class LinkedListCycle
{
    public static function hasCycle(ListNode $head): bool
    {
        $slow = $fast = $head;
        while ($slow && $fast && $fast->next) {
            if ($slow === $fast) {
                return true;
            }
            $slow = $slow->next;
            $fast = $fast->next->next;
        }

        return false;
    }
}
