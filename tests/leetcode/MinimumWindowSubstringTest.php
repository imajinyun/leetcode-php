<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\MinimumWindowSubstring;

class MinimumWindowSubstringTest extends TestCase
{
    public function testMinWindow(): void
    {
        self::assertSame('BANC', MinimumWindowSubstring::minWindow('ADOBECODEBANC', 'ABC'));
        self::assertSame('a', MinimumWindowSubstring::minWindow('a', 'a'));
    }
}
