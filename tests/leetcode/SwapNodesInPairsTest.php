<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\SwapNodesInPairs;
use leetcode\util\ListNode;

class SwapNodesInPairsTest extends TestCase
{
    private $listNode;

    protected function setUp(): void
    {
        parent::setUp();

        $this->listNode = new ListNode(1);
        $this->listNode->next = new ListNode(2);
        $this->listNode->next->next = new ListNode(3);
        $this->listNode->next->next->next = new ListNode(4);
        $this->listNode->next->next->next->next = new ListNode(5);
    }

    public function testSwapPairs(): void
    {
        $actual = [];
        $node = SwapNodesInPairs::swapPairs($this->listNode);
        while ($node) {
            $actual[] = $node->val;
            $node = $node->next;
        }
        self::assertSame([2, 1, 4, 3, 5], $actual);
    }
}
