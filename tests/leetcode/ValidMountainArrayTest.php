<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\ValidMountainArray;

class ValidMountainArrayTest extends TestCase
{
    public function testValidMountainArray(): void
    {
        self::assertFalse(ValidMountainArray::validMountainArray([2, 1]));
        self::assertFalse(ValidMountainArray::validMountainArray([3, 5, 5]));
        self::assertTrue(ValidMountainArray::validMountainArray([0, 3, 2, 1]));
        self::assertTrue(ValidMountainArray::validMountainArray([0, 2, 3, 4, 5, 2, 1, 0]));
    }

    public function testValidMountainArray2(): void
    {
        self::assertFalse(ValidMountainArray::validMountainArray2([2, 1]));
        self::assertFalse(ValidMountainArray::validMountainArray2([3, 5, 5]));
        self::assertTrue(ValidMountainArray::validMountainArray2([0, 3, 2, 1]));
        self::assertTrue(ValidMountainArray::validMountainArray2([0, 2, 3, 4, 5, 2, 1, 0]));
    }
}
