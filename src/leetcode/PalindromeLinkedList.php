<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\ListNode;

class PalindromeLinkedList
{
    public static function isPalindrome(ListNode $head): bool
    {
        $fast = $head;
        $slow = $head;
        while ($fast && $fast->next) {
            $fast = $fast->next->next;
            $slow = $slow->next;
        }
        if ($fast) {
            $slow = $slow->next;
        }
        $fast = $head;
        $slow = self::helper($slow);
        while ($slow) {
            if ($fast->val !== $slow->val) {
                return false;
            }
            $fast = $fast->next;
            $slow = $slow->next;
        }

        return true;
    }

    /**
     * Note: Time Limit Exceeded.
     *
     * @param \leetcode\util\ListNode $head
     *
     * @return bool
     */
    public static function isPalindrome2(ListNode $head): bool
    {
        $node = $head;
        $queue = [];
        while ($node) {
            array_push($queue, $node);
            $node = $node->next;
        }
        while (count($queue) >= 2) {
            [$p, $q] = [array_shift($queue), array_pop($queue)];
            if ($p && $q && $p->val != $q->val) {
                return false;
            }
        }

        return true;
    }

    private static function helper(ListNode $head): ?ListNode
    {
        $prev = null;
        while ($head) {
            $next = $head->next;
            $head->next = $prev;
            $prev = $head;
            $head = $next;
        }

        return $prev;
    }
}
