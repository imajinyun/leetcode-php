<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\ReverseLinkedListII;
use leetcode\util\ListNode;

class ReverseLinkedListIITest extends TestCase
{
    public function testReverseBetween(): void
    {
        $head1 = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));
        $node1 = ReverseLinkedListII::reverseBetween($head1, 2, 4);
        self::assertSame([1, 4, 3, 2, 5], ListNode::toArray($node1));

        $head2 = new ListNode(5);
        $node2 = ReverseLinkedListII::reverseBetween($head2, 1, 1);
        self::assertSame([5], ListNode::toArray($node2));
    }

    public function testReverseBetween2(): void
    {
        $head1 = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));
        $node1 = ReverseLinkedListII::reverseBetween2($head1, 2, 4);
        self::assertSame([1, 4, 3, 2, 5], ListNode::toArray($node1));

        $head2 = new ListNode(5);
        $node2 = ReverseLinkedListII::reverseBetween2($head2, 1, 1);
        self::assertSame([5], ListNode::toArray($node2));
    }

    public function testReverseBetween3(): void
    {
        $head1 = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));
        $node1 = ReverseLinkedListII::reverseBetween3($head1, 2, 4);
        self::assertSame([1, 4, 3, 2, 5], ListNode::toArray($node1));

        $head2 = new ListNode(5);
        $node2 = ReverseLinkedListII::reverseBetween3($head2, 1, 1);
        self::assertSame([5], ListNode::toArray($node2));
    }

    public function testReverseBetween4(): void
    {
        $head1 = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));
        $node1 = ReverseLinkedListII::reverseBetween4($head1, 2, 4);
        self::assertSame([1, 4, 3, 2, 5], ListNode::toArray($node1));

        $head2 = new ListNode(5);
        $node2 = ReverseLinkedListII::reverseBetween4($head2, 1, 1);
        self::assertSame([5], ListNode::toArray($node2));
    }
}
