<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ReverseLinkedList;
use leetcode\util\ListNode;
use PHPUnit\Framework\TestCase;

class ReverseLinkedListTest extends TestCase
{
    /** @var \leetcode\util\ListNode */
    private ListNode $node;

    protected function setUp(): void
    {
        $this->node = new ListNode(
            1,
            new ListNode(
                2,
                new ListNode(
                    3,
                    new ListNode(
                        4,
                        new ListNode(5)
                    )
                )
            )
        );
        parent::setUp();
    }

    public function testReverseListIsEmpty(): void
    {
        $node = ReverseLinkedList::reverseList(null);
        self::assertEmpty($node);
        self::assertSame([], ListNode::toArray($node));
    }

    public function testReverseList(): void
    {
        $node = ReverseLinkedList::reverseList($this->node);
        $actual = ListNode::toArray($node);
        self::assertSame([5, 4, 3, 2, 1], $actual);
    }

    public function testReverseList2(): void
    {
        $node = ReverseLinkedList::reverseList2($this->node);
        $actual = ListNode::toArray($node);
        self::assertSame([5, 4, 3, 2, 1], $actual);
    }
}
