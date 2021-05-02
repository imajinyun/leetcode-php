<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\AndroidUnlockPatterns;
use PHPUnit\Framework\TestCase;

class AndroidUnlockPatternsTest extends TestCase
{
    public function testNumberOfPatterns(): void
    {
        self::assertSame(9, AndroidUnlockPatterns::numberOfPatterns(1, 1));
    }

    public function testNumberOfPatterns2(): void
    {
        self::assertSame(9, AndroidUnlockPatterns::numberOfPatterns2(1, 1));
    }
}
