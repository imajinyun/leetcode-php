<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\MergeTwoSortedLists;
use leetcode\util\ListNode;

class MergeTwoSortedListsTest extends TestCase
{
    private array $items;

    protected function setUp(): void
    {
        $this->items = [
            [
                new ListNode(1, new ListNode(2, new ListNode(4))),
                new ListNode(1, new ListNode(3, new ListNode(4))),
                [1, 1, 2, 3, 4, 4],
            ],
            [[], [], []],
            [[], new ListNode(), [0]],
        ];
    }

    public function testMergeTwoLists(): void
    {
        foreach ($this->items as $item) {
            $node = MergeTwoSortedLists::mergeTwoLists($item[0] ?: null, $item[1] ?: null);
            self::assertSame($item[2], ListNode::toArray($node));
        }
    }

    public function testMergeTwoLists2(): void
    {
        foreach ($this->items as $item) {
            $node = MergeTwoSortedLists::mergeTwoLists2($item[0] ?: null, $item[1] ?: null);
            self::assertSame($item[2], ListNode::toArray($node));
        }
    }
}
