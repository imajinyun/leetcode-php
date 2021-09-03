<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\PalindromeLinkedList;
use leetcode\util\ListNode;

class PalindromeLinkedListTest extends TestCase
{
    public function testIsPalindrome(): void
    {
        $head1 = new ListNode(1, new ListNode(2, new ListNode(2, new ListNode(1))));
        self::assertTrue(PalindromeLinkedList::isPalindrome($head1));

        $head2 = new ListNode(1, new ListNode(2));
        self::assertFalse(PalindromeLinkedList::isPalindrome($head2));
    }

    public function testIsPalindrome2(): void
    {
        $head1 = new ListNode(1, new ListNode(2, new ListNode(2, new ListNode(1))));
        self::assertTrue(PalindromeLinkedList::isPalindrome2($head1));

        $head2 = new ListNode(1, new ListNode(2));
        self::assertFalse(PalindromeLinkedList::isPalindrome2($head2));
    }
}
