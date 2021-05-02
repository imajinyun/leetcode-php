<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\ListNode;

class SwapNodesInPairs
{
    public static function swapPairs(ListNode $head): ListNode
    {
        $dummy = new ListNode();
        $dummy->next = $head;
        $curr = $dummy;

        while (($a = $curr->next) && ($b = $curr->next->next)) {
            $a->next = $b->next;
            $curr->next = $b;
            $curr->next->next = $a;
            $curr = $curr->next->next;
        }

        return $dummy->next;
    }
}
