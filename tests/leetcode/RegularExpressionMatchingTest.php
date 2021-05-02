<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\RegularExpressionMatching;
use PHPUnit\Framework\TestCase;

class RegularExpressionMatchingTest extends TestCase
{
    public function testIsMatch(): void
    {
        self::assertTrue(RegularExpressionMatching::isMatch('', ''));
        self::assertFalse(RegularExpressionMatching::isMatch('aa', 'a'));
        self::assertTrue(RegularExpressionMatching::isMatch('aa', 'a*'));
        self::assertTrue(RegularExpressionMatching::isMatch('ab', '.*'));
        self::assertTrue(RegularExpressionMatching::isMatch('aab', 'c*a*b'));
        self::assertFalse(RegularExpressionMatching::isMatch('mississippi', 'mis*is*p*.'));
        self::assertTrue(RegularExpressionMatching::isMatch('LeetCode', 'LeetCode*a*b*'));
        self::assertTrue(RegularExpressionMatching::isMatch('', 'a*b*c*'));
        self::assertTrue(RegularExpressionMatching::isMatch('abbbbccc', 'a*ab*bbbbc*'));
        self::assertFalse(RegularExpressionMatching::isMatch('abbbbccc', 'aa*bbb*bbbc*'));
        self::assertTrue(RegularExpressionMatching::isMatch('abbbbccc', '.*bcc*'));
        self::assertTrue(RegularExpressionMatching::isMatch('aaa', 'ab*a*c*a'));
    }

    public function testIsMatch2(): void
    {
        self::assertTrue(RegularExpressionMatching::isMatch2('', ''));
        self::assertFalse(RegularExpressionMatching::isMatch2('aa', 'a'));
        self::assertTrue(RegularExpressionMatching::isMatch2('aa', 'a*'));
        self::assertTrue(RegularExpressionMatching::isMatch2('ab', '.*'));
        self::assertTrue(RegularExpressionMatching::isMatch2('aab', 'c*a*b'));
        self::assertFalse(RegularExpressionMatching::isMatch2('mississippi', 'mis*is*p*.'));
        self::assertTrue(RegularExpressionMatching::isMatch2('LeetCode', 'LeetCode*a*b*'));
        self::assertTrue(RegularExpressionMatching::isMatch2('', 'a*b*c*'));
        self::assertTrue(RegularExpressionMatching::isMatch2('abbbbccc', 'a*ab*bbbbc*'));
        self::assertFalse(RegularExpressionMatching::isMatch2('abbbbccc', 'aa*bbb*bbbc*'));
        self::assertTrue(RegularExpressionMatching::isMatch2('abbbbccc', '.*bcc*'));
        self::assertTrue(RegularExpressionMatching::isMatch2('aaa', 'ab*a*c*a'));
    }
}
