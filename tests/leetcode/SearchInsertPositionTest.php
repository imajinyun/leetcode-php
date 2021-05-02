<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\SearchInsertPosition;

class SearchInsertPositionTest extends TestCase
{
    public function testSearchInsert(): void
    {
        self::assertSame(2, SearchInsertPosition::searchInsert([1, 3, 5, 6], 5));
        self::assertSame(1, SearchInsertPosition::searchInsert([1, 3, 5, 6], 2));
        self::assertSame(4, SearchInsertPosition::searchInsert([1, 3, 5, 6], 7));
        self::assertSame(0, SearchInsertPosition::searchInsert([1, 3, 5, 6], 0));
        self::assertSame(0, SearchInsertPosition::searchInsert([1], 0));
        self::assertSame(0, SearchInsertPosition::searchInsert([], 0));
    }
}
