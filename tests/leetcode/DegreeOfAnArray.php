<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\DegreeOfAnArray;
use PHPUnit\Framework\TestCase;

class DegreeOfAnArrayTest extends TestCase
{
    public function testFindShortestSubArray(): void
    {
        self::assertSame(1, DegreeOfAnArray::findShortestSubArray([1]));
        self::assertSame(2, DegreeOfAnArray::findShortestSubArray([1, 2, 2, 3, 1]));
        self::assertSame(6, DegreeOfAnArray::findShortestSubArray([1, 2, 2, 3, 1, 4, 2]));
    }
}
