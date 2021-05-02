<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\IsSubsequence;
use PHPUnit\Framework\TestCase;

class IsSubsequenceTest extends TestCase
{
    public function testIsSubsequence(): void
    {
        self::assertTrue(IsSubsequence::isSubsequence('', ''));
        self::assertFalse(IsSubsequence::isSubsequence('a', ''));
        self::assertTrue(IsSubsequence::isSubsequence('', 'a'));
        self::assertTrue(IsSubsequence::isSubsequence('abc', 'ahbgdc'));
        self::assertFalse(IsSubsequence::isSubsequence('axc', 'ahbgdc'));
    }

    public function testIsSubsequence2(): void
    {
        self::assertTrue(IsSubsequence::isSubsequence2('', ''));
        self::assertFalse(IsSubsequence::isSubsequence2('a', ''));
        self::assertTrue(IsSubsequence::isSubsequence2('', 'a'));
        self::assertTrue(IsSubsequence::isSubsequence2('abc', 'ahbgdc'));
        self::assertFalse(IsSubsequence::isSubsequence2('axc', 'ahbgdc'));
    }
}
