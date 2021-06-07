<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\CheckIfItIsAStraightLine;

class CheckIfItIsAStraightLineTest extends TestCase
{
    public function testCheckStraightLine(): void
    {
        self::assertTrue(CheckIfItIsAStraightLine::checkStraightLine([[1, 2], [2, 3], [3, 4], [4, 5], [5, 6], [6, 7]]));
        self::assertFalse(CheckIfItIsAStraightLine::checkStraightLine([[1, 1], [2, 2], [3, 4], [4, 5], [5, 6], [7, 7]]));
    }
}
