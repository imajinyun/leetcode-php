<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\LongestPalindromicSubstring;
use PHPUnit\Framework\TestCase;

class LongestPalindromicSubstringTest extends TestCase
{
    public function testLongestPalindrome(): void
    {
        self::assertSame('', LongestPalindromicSubstring::longestPalindrome3(''));

        // Either "bab" or "aba" is a valid answer.
        self::assertSame('bab', LongestPalindromicSubstring::longestPalindrome('babad'));
        self::assertSame('bb', LongestPalindromicSubstring::longestPalindrome('cbbd'));
        self::assertSame('bbabb', LongestPalindromicSubstring::longestPalindrome('cbbabbf'));
        self::assertSame('a', LongestPalindromicSubstring::longestPalindrome('ab'));
    }

    public function testLongestPalindrome2(): void
    {
        self::assertSame('', LongestPalindromicSubstring::longestPalindrome3(''));

        // Either "bab" or "aba" is a valid answer.
        self::assertSame('bab', LongestPalindromicSubstring::longestPalindrome2('babad'));
        self::assertSame('bb', LongestPalindromicSubstring::longestPalindrome2('cbbd'));
        self::assertSame('bbabb', LongestPalindromicSubstring::longestPalindrome2('cbbabbf'));
        self::assertSame('a', LongestPalindromicSubstring::longestPalindrome('ab'));
    }

    public function testLongestPalindrome3(): void
    {
        self::assertSame('', LongestPalindromicSubstring::longestPalindrome3(''));

        // Either "bab" or "aba" is a valid answer.
        self::assertSame('bab', LongestPalindromicSubstring::longestPalindrome3('babad'));
        self::assertSame('bb', LongestPalindromicSubstring::longestPalindrome3('cbbd'));
        self::assertSame('bbabb', LongestPalindromicSubstring::longestPalindrome3('cbbabbf'));
        self::assertSame('a', LongestPalindromicSubstring::longestPalindrome3('ab'));
    }
}
