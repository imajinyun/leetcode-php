<?php

declare(strict_types=1);

namespace leetcode\util;

class ListNode
{
    public $val;
    public $next = null;

    public function __construct(int $val = 0, ?ListNode $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }

    public static function toArray(ListNode $node): array
    {
        if (!$node) {
            return [];
        }
        $ans = [];
        while ($node) {
            if ($node->val) {
                $ans[] = $node->val;
            }
            $node = $node->next;
        }

        return $ans;
    }
}
