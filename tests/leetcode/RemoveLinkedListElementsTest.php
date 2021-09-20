<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\RemoveLinkedListElements;
use leetcode\util\ListNode;

class RemoveLinkedListElementsTest extends TestCase
{
    private ?ListNode $l1;
    private ?ListNode $l2;
    private ?ListNode $l3;
    private ?ListNode $l4;

    protected function setUp(): void
    {
        $this->l1 = new ListNode(
            1,
            new ListNode(
                2,
                new ListNode(
                    6,
                    new ListNode(
                        3,
                        new ListNode(
                            4,
                            new ListNode(
                                5,
                                new ListNode(6)
                            )
                        )
                    )
                )
            )
        );
        $this->l2 = null;
        $this->l3 = new ListNode(
            7,
            new ListNode(
                7,
                new ListNode(
                    7,
                    new ListNode(
                        7,
                        new ListNode(7)
                    )
                )
            )
        );
        $this->l4 = new ListNode(9);
    }

    public function testRemoveElements(): void
    {
        $node1 = RemoveLinkedListElements::removeElements($this->l1, 6);
        self::assertSame([1, 2, 3, 4, 5], ListNode::toArray($node1));

        $node2 = RemoveLinkedListElements::removeElements($this->l2, 1);
        self::assertSame([], ListNode::toArray($node2));

        $node3 = RemoveLinkedListElements::removeElements($this->l3, 7);
        self::assertSame([], ListNode::toArray($node3));

        $node4 = RemoveLinkedListElements::removeElements($this->l4, 9);
        self::assertSame([], ListNode::toArray($node4));
    }

    public function testRemoveElements2(): void
    {
        $node1 = RemoveLinkedListElements::removeElements2($this->l1, 6);
        self::assertSame([1, 2, 3, 4, 5], ListNode::toArray($node1));

        $node2 = RemoveLinkedListElements::removeElements2($this->l2, 1);
        self::assertSame([], ListNode::toArray($node2));

        $node3 = RemoveLinkedListElements::removeElements2($this->l3, 7);
        self::assertSame([], ListNode::toArray($node3));

        $node4 = RemoveLinkedListElements::removeElements2($this->l4, 9);
        self::assertSame([], ListNode::toArray($node4));
    }

    public function testRemoveElements3(): void
    {
        $node1 = RemoveLinkedListElements::removeElements3($this->l1, 6);
        self::assertSame([1, 2, 3, 4, 5], ListNode::toArray($node1));

        $node2 = RemoveLinkedListElements::removeElements3($this->l2, 1);
        self::assertSame([], ListNode::toArray($node2));

        $node3 = RemoveLinkedListElements::removeElements3($this->l3, 7);
        self::assertSame([], ListNode::toArray($node3));

        $node4 = RemoveLinkedListElements::removeElements3($this->l4, 9);
        self::assertSame([], ListNode::toArray($node4));
    }

    public function testRemoveElements4(): void
    {
        $node1 = RemoveLinkedListElements::removeElements4($this->l1, 6);
        self::assertSame([1, 2, 3, 4, 5], ListNode::toArray($node1));

        $node2 = RemoveLinkedListElements::removeElements4($this->l2, 1);
        self::assertSame([], ListNode::toArray($node2));

        $node3 = RemoveLinkedListElements::removeElements4($this->l3, 7);
        self::assertSame([], ListNode::toArray($node3));

        $node4 = RemoveLinkedListElements::removeElements4($this->l4, 9);
        self::assertSame([], ListNode::toArray($node4));
    }
}
