<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\ListNode;

class DeleteNodeInALinkedList
{
    public static function deleteNode(ListNode $head, int $value): ListNode
    {
        if ($head->val === $value) {
            $head = $head->next;
        }

        $prev = $curr = $head;
        while ($curr) {
            if ($curr->val === $value) {
                $prev->next = $curr->next;
            } else {
                $prev = $curr;
            }
            $curr = $curr->next;
        }

        return $head;
    }
}
