<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\MinimumAbsoluteDifference;

class MinimumAbsoluteDifferenceTest extends TestCase
{
    public function testMinimumAbsDifference(): void
    {
        self::assertSame(
            [[1, 2], [2, 3], [3, 4]],
            MinimumAbsoluteDifference::minimumAbsDifference([1, 2, 3, 4])
        );
        self::assertSame(
            [[1, 3]],
            MinimumAbsoluteDifference::minimumAbsDifference([1, 3, 6, 10, 15])
        );
        self::assertSame(
            [[-14, -10], [19, 23], [23, 27]],
            MinimumAbsoluteDifference::minimumAbsDifference([3, 8, -10, 23, 19, -4, -14, 27])
        );
    }
}
