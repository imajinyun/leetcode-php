<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\RemoveNthNodeFromEndOfList;
use leetcode\util\ListNode;

class RemoveNthNodeFromEndOfListTest extends TestCase
{
    public function testRemoveNthFromEnd(): void
    {
        $node1 = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));
        $list1 = RemoveNthNodeFromEndOfList::removeNthFromEnd($node1, 2);
        self::assertSame([1, 2, 3, 5], ListNode::toArray($list1));

        $node2 = new ListNode(1);
        $list2 = RemoveNthNodeFromEndOfList::removeNthFromEnd($node2, 1);
        self::assertSame([], ListNode::toArray($list2));

        $node3 = new ListNode(1, new ListNode(2));
        $list3 = RemoveNthNodeFromEndOfList::removeNthFromEnd($node3, 1);
        self::assertSame([1], ListNode::toArray($list3));
    }

    public function testRemoveNthFromEnd2(): void
    {
        $node1 = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));
        $list1 = RemoveNthNodeFromEndOfList::removeNthFromEnd2($node1, 2);
        self::assertSame([1, 2, 3, 5], ListNode::toArray($list1));

        $node2 = new ListNode(1);
        $list2 = RemoveNthNodeFromEndOfList::removeNthFromEnd2($node2, 1);
        self::assertSame([], ListNode::toArray($list2));

        $node3 = new ListNode(1, new ListNode(2));
        $list3 = RemoveNthNodeFromEndOfList::removeNthFromEnd2($node3, 1);
        self::assertSame([1], ListNode::toArray($list3));
    }
}
