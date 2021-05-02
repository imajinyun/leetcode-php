<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\LongestSubstringWithoutRepeatingCharacters;
use PHPUnit\Framework\TestCase;

class LongestSubstringWithoutRepeatingCharactersTest extends TestCase
{
    public function testLengthOfLongestSubstring(): void
    {
        self::assertSame(3, LongestSubstringWithoutRepeatingCharacters::lengthOfLongestSubstring('abcabcbb'));
        self::assertSame(1, LongestSubstringWithoutRepeatingCharacters::lengthOfLongestSubstring('bbbbb'));
        self::assertSame(3, LongestSubstringWithoutRepeatingCharacters::lengthOfLongestSubstring('pwwkew'));
        self::assertSame(0, LongestSubstringWithoutRepeatingCharacters::lengthOfLongestSubstring(''));
    }

    public function testLengthOfLongestSubstring2(): void
    {
        self::assertSame(3, LongestSubstringWithoutRepeatingCharacters::lengthOfLongestSubstring2('abcabcbb'));
        self::assertSame(1, LongestSubstringWithoutRepeatingCharacters::lengthOfLongestSubstring2('bbbbb'));
        self::assertSame(3, LongestSubstringWithoutRepeatingCharacters::lengthOfLongestSubstring2('pwwkew'));
        self::assertSame(0, LongestSubstringWithoutRepeatingCharacters::lengthOfLongestSubstring2(''));
    }
}
