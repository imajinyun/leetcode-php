<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\ValidPalindrome;

class ValidPalindromeTest extends TestCase
{
    public function testIsPalindrome(): void
    {
        self::assertTrue(ValidPalindrome::isPalindrome('A man, a plan, a canal: Panama'));
        self::assertFalse(ValidPalindrome::isPalindrome('race a car'));
    }

    public function testIsPalindrome2(): void
    {
        self::assertTrue(ValidPalindrome::isPalindrome2('A man, a plan, a canal: Panama'));
        self::assertFalse(ValidPalindrome::isPalindrome2('race a car'));
    }

    public function testIsPalindrome3(): void
    {
        self::assertTrue(ValidPalindrome::isPalindrome3('A man, a plan, a canal: Panama'));
        self::assertFalse(ValidPalindrome::isPalindrome3('race a car'));
    }
}
