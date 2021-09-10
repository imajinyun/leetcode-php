<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\LongestPalindrome;

class LongestPalindromeTest extends TestCase
{
    public function testLongestPalindrome(): void
    {
        self::assertSame(7, LongestPalindrome::longestPalindrome('abccccdd'));
        self::assertSame(1, LongestPalindrome::longestPalindrome('a'));
        self::assertSame(2, LongestPalindrome::longestPalindrome('bb'));
    }

    public function testLongestPalindrome2(): void
    {
        self::assertSame(7, LongestPalindrome::longestPalindrome2('abccccdd'));
        self::assertSame(1, LongestPalindrome::longestPalindrome2('a'));
        self::assertSame(2, LongestPalindrome::longestPalindrome2('bb'));
    }
}
