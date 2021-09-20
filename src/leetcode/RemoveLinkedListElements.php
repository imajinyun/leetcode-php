<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\ListNode;

class RemoveLinkedListElements
{
    public static function removeElements(?ListNode $head, int $val): ?ListNode
    {
        if (!$head) {
            return null;
        }
        $next = self::removeElements($head->next, $val);
        if ($head->val === $val) {
            return $next;
        }
        $head->next = $next;

        return $head;
    }

    public static function removeElements2(?ListNode $head, int $val): ?ListNode
    {
        if (!$head) {
            return null;
        }
        [$prev, $curr] = [null, $head];
        while ($curr) {
            if ($curr->val === $val) {
                if ($curr === $head) {
                    $curr = $head = $head->next;
                } else {
                    $prev->next = $curr->next;
                    $curr = $curr->next;
                }
            } else {
                $prev = $curr;
                $curr = $curr->next;
            }
        }

        return $head;
    }

    public static function removeElements3(?ListNode $head, int $val): ?ListNode
    {
        if (!$head) {
            return null;
        }
        $dummy = new ListNode();
        $dummy->next = $head;
        [$prev, $curr] = [$dummy, $head];
        while ($curr) {
            if ($curr->val === $val) {
                $prev->next = $curr->next;
            } else {
                $prev = $prev->next;
            }
            $curr = $curr->next;
        }

        return $dummy->next;
    }

    public static function removeElements4(?ListNode $head, int $val): ?ListNode
    {
        if (!$head) {
            return null;
        }
        $curr = $head;
        while ($curr->next) {
            if ($curr->next->val === $val) {
                $curr->next = $curr->next->next;
            } else {
                $curr = $curr->next;
            }
        }

        return $head->val === $val ? $head->next : $head;
    }
}
