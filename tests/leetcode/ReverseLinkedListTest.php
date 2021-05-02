<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ReverseLinkedList;
use leetcode\util\ListNode;
use PHPUnit\Framework\TestCase;

class ReverseLinkedListTest extends TestCase
{
    /** @var \leetcode\util\ListNode $node */
    private $node;

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
        $listNode = new ListNode();
        $node = ReverseLinkedList::reverseList($listNode);
        self::assertEmpty(ListNode::toArray($node));
        self::assertSame([], ListNode::toArray($node));
    }

    public function testReverseList(): void
    {
        $actual = ListNode::toArray(ReverseLinkedList::reverseList($this->node));
        self::assertSame([5, 4, 3, 2, 1], $actual);
    }

    public function testReverseList2(): void
    {
        $actual = ListNode::toArray(ReverseLinkedList::reverseList2($this->node));
        self::assertSame([5, 4, 3, 2, 1], $actual);
    }
}
