<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\MinimumWindowSubstring;
use PHPUnit\Framework\TestCase;

class MinimumWindowSubstringTest extends TestCase
{
    public function testMinWindow(): void
    {
        self::assertSame('BANC', MinimumWindowSubstring::minWindow('ADOBECODEBANC', 'ABC'));
        self::assertSame('a', MinimumWindowSubstring::minWindow('a', 'a'));
    }

    public function testMinWindow2(): void
    {
        self::assertSame('BANC', MinimumWindowSubstring::minWindow2('ADOBECODEBANC', 'ABC'));
        self::assertSame('a', MinimumWindowSubstring::minWindow2('a', 'a'));
    }
}
