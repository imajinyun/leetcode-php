<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\DeleteNodeInALinkedList;
use leetcode\util\ListNode;

class DeleteNodeInALinkedListTest extends TestCase
{
    private array $items;

    protected function setUp(): void
    {
        $this->items = [
            [new ListNode(4, new ListNode(5, new ListNode(1, new ListNode(9)))), 5, [4, 1, 9]],
            [new ListNode(4, new ListNode(5, new ListNode(1, new ListNode(9)))), 1, [4, 5, 9]],
            [new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4)))), 3, [1, 2, 4]],
            [new ListNode(0, new ListNode(1)), 0, [1]],
            [new ListNode(-3, new ListNode(5, new ListNode(-99))), -3, [5, -99]],
        ];
    }

    public function testDeleteNode(): void
    {
        foreach ($this->items as $item) {
            $node = DeleteNodeInALinkedList::deleteNode($item[0], $item[1]);
            self::assertSame($item[2], ListNode::toArray($node));
        }
    }
}
