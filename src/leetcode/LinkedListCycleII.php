<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\ListNode;

class LinkedListCycleII
{
    public static function detectCycle(?ListNode $head): ?ListNode
    {
        if (!$head) {
            return null;
        }
        $slow = $fast = $head;
        while ($fast->next && $fast->next->next) {
            $slow = $slow->next;
            $fast = $fast->next->next;
            if ($slow === $fast) {
                $curr = $head;
                while ($curr !== $slow) {
                    $curr = $curr->next;
                    $slow = $slow->next;
                }
                return $slow;
            }
        }

        return null;
    }
}
