<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\AddTwoNumbers;
use leetcode\util\ListNode;
use PHPUnit\Framework\TestCase;

class AddTwoNumbersTest extends TestCase
{
    private ListNode $l1;
    private ListNode $l2;

    protected function setUp(): void
    {
        $this->l1 = new ListNode(3, new ListNode(4, new ListNode(2)));
        $this->l2 = new ListNode(4, new ListNode(6, new ListNode(5)));

        parent::setUp();
    }

    public function testAddTwoNumbers(): void
    {
        $node = AddTwoNumbers::addTwoNumbers($this->l1, $this->l2);
        $expect = [7, 0, 8];
        $actual = [];
        while ($node) {
            $actual[] = $node->val;
            $node = $node->next;
        }
        self::assertEquals($expect, $actual);
    }
}
