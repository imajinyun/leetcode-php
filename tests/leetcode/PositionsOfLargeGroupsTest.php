<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\PositionsOfLargeGroups;

class PositionsOfLargeGroupsTest extends TestCase
{
    public function testLargeGroupPositions(): void
    {
        self::assertSame([[3, 6]], PositionsOfLargeGroups::largeGroupPositions('abbxxxxzzy'));
        self::assertSame([], PositionsOfLargeGroups::largeGroupPositions('abc'));
        self::assertSame([[3, 5], [6, 9], [12, 14]], PositionsOfLargeGroups::largeGroupPositions('abcdddeeeeaabbbcd'));
        self::assertSame([], PositionsOfLargeGroups::largeGroupPositions('aba'));
    }
}
