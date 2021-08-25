<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\ProductOfArrayExceptSelf;

class ProductOfArrayExceptSelfTest extends TestCase
{
    public function testProductExceptSelf(): void
    {
        self::assertSame(
            [24, 12, 8, 6],
            ProductOfArrayExceptSelf::productExceptSelf([1, 2, 3, 4])
        );
        self::assertSame(
            [0, 0, 9, 0, 0],
            ProductOfArrayExceptSelf::productExceptSelf([-1, 1, 0, -3, 3])
        );
    }

    public function testProductExceptSelf2(): void
    {
        self::assertSame(
            [24, 12, 8, 6],
            ProductOfArrayExceptSelf::productExceptSelf2([1, 2, 3, 4])
        );
        self::assertSame(
            [0, 0, 9, 0, 0],
            ProductOfArrayExceptSelf::productExceptSelf2([-1, 1, 0, -3, 3])
        );
    }
}
