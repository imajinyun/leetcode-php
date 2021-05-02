<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\FindPivotIndex;
use PHPUnit\Framework\TestCase;

class FindPivotIndexTest extends TestCase
{
    public function testPivotIndex(): void
    {
        self::assertSame(3, FindPivotIndex::pivotIndex([1, 7, 3, 6, 5, 6]));
        self::assertSame(-1, FindPivotIndex::pivotIndex([1, 2, 3]));
        self::assertSame(0, FindPivotIndex::pivotIndex([2, 1, -1]));
    }

    public function testPivotIndex2(): void
    {
        self::assertSame(3, FindPivotIndex::pivotIndex2([1, 7, 3, 6, 5, 6]));
        self::assertSame(-1, FindPivotIndex::pivotIndex2([1, 2, 3]));
        self::assertSame(0, FindPivotIndex::pivotIndex2([2, 1, -1]));
    }

    public function testPivotIndex3(): void
    {
        self::assertSame(3, FindPivotIndex::pivotIndex3([1, 7, 3, 6, 5, 6]));
        self::assertSame(-1, FindPivotIndex::pivotIndex3([1, 2, 3]));
        self::assertSame(0, FindPivotIndex::pivotIndex3([2, 1, -1]));
    }
}
