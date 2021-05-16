<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\DuplicateZeros;

class DuplicateZerosTest extends TestCase
{
    public function testDuplicateZeros(): void
    {
        $items1 = [1, 0, 2, 3, 0, 4, 5, 0];
        self::assertNull(DuplicateZeros::duplicateZeros($items1));
        self::assertSame([1, 0, 0, 2, 3, 0, 0, 4], $items1);

        $items2 = [1, 2, 3];
        self::assertNull(DuplicateZeros::duplicateZeros($items2));
        self::assertSame([1, 2, 3], $items2);
    }

    public function testDuplicateZeros2(): void
    {
        $items1 = [1, 0, 2, 3, 0, 4, 5, 0];
        self::assertNull(DuplicateZeros::duplicateZeros2($items1));
        self::assertSame([1, 0, 0, 2, 3, 0, 0, 4], $items1);

        $items2 = [1, 2, 3];
        self::assertNull(DuplicateZeros::duplicateZeros2($items2));
        self::assertSame([1, 2, 3], $items2);
    }
}
