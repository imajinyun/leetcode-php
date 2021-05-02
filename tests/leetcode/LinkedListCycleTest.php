<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\LinkedListCycle;
use leetcode\util\ListNode;
use PHPUnit\Framework\TestCase;

class LinkedListCycleTest extends TestCase
{
    private $l1;
    private $l2;
    private $l3;

    protected function setUp(): void
    {
        $this->l1 = new ListNode(3);
        $this->l1->next = new ListNode(2);
        $this->l1->next->next = new ListNode(0);
        $this->l1->next->next->next = new ListNode(-4);

        $this->l2 = new ListNode(1);
        $this->l2->next = new ListNode(2);

        $this->l3 = new ListNode(1);

        parent::setUp();
    }

    public function testHasCycle(): void
    {
        self::assertTrue(LinkedListCycle::hasCycle($this->l1));
        self::assertTrue(LinkedListCycle::hasCycle($this->l2));
        self::assertFalse(LinkedListCycle::hasCycle($this->l3));
    }
}
