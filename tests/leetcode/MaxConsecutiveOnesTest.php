<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\MaxConsecutiveOnes;
use PHPUnit\Framework\TestCase;

class MaxConsecutiveOnesTest extends TestCase
{
    public function testFindMaxConsecutiveOnes(): void
    {
        self::assertSame(3, MaxConsecutiveOnes::findMaxConsecutiveOnes([1, 1, 0, 1, 1, 1]));
    }

    public function testFindMaxConsecutiveOnes2(): void
    {
        self::assertSame(3, MaxConsecutiveOnes::findMaxConsecutiveOnes2([1, 1, 0, 1, 1, 1]));
    }
}
