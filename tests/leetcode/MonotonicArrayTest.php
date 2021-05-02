<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\MonotonicArray;
use PHPUnit\Framework\TestCase;

class MonotonicArrayTest extends TestCase
{
    public function testIsMonotonic(): void
    {
        self::assertTrue(MonotonicArray::isMonotonic([1, 2, 2, 3]));
        self::assertTrue(MonotonicArray::isMonotonic([6, 5, 4, 4]));
        self::assertFalse(MonotonicArray::isMonotonic([1, 3, 2]));
        self::assertTrue(MonotonicArray::isMonotonic([1, 2, 4, 5]));
        self::assertTrue(MonotonicArray::isMonotonic([1, 1, 1]));
    }

    public function testIsMonotonic2(): void
    {
        self::assertTrue(MonotonicArray::isMonotonic2([1, 2, 2, 3]));
        self::assertTrue(MonotonicArray::isMonotonic2([6, 5, 4, 4]));
        self::assertFalse(MonotonicArray::isMonotonic2([1, 3, 2]));
        self::assertTrue(MonotonicArray::isMonotonic2([1, 2, 4, 5]));
        self::assertTrue(MonotonicArray::isMonotonic2([1, 1, 1]));
    }
}
