<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\ListNode;

class AddTwoNumbers
{
    public static function addTwoNumbers(ListNode $p, ListNode $q): ?ListNode
    {
        $dummy = new ListNode(0);
        $current = $dummy;
        $carry = 0;

        while ($p || $q) {
            $sum = $p->val + $q->val + $carry;
            $carry = (int) floor($sum / 10);
            $current->next = new ListNode($sum % 10);
            $current = $current->next;

            if ($p) {
                $p = $p->next;
            }

            if ($q) {
                $q = $q->next;
            }
        }

        if ($carry !== 0) {
            $current->next = new ListNode($carry);
        }

        return $dummy->next;
    }
}
