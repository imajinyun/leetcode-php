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
}
