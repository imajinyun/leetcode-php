<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\LinkedListCycleII;
use PHPUnit\Framework\TestCase;
use leetcode\util\ListNode;

class LinkedListCycleIITest extends TestCase
{
    public static function testDetectCycle(): void
    {
        $node1 = new ListNode(3, new ListNode(2, new ListNode(0, new ListNode(-4))));
        $list1 = LinkedListCycleII::detectCycle($node1);
        self::assertSame([], ListNode::toArray($list1));

        $node2 = new ListNode(1, new ListNode(2));
        $list2 = LinkedListCycleII::detectCycle($node2);
        self::assertSame([], ListNode::toArray($list2));

        $node3 = new ListNode(1);
        $list3 = LinkedListCycleII::detectCycle($node3);
        self::assertSame([], ListNode::toArray($list3));
    }
}
