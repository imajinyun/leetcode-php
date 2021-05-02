<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ThreeSum;
use PHPUnit\Framework\TestCase;

class ThreeSumTest extends TestCase
{
    public function testThreeSum(): void
    {
        self::assertSame(
            [[-6, 3, 3], [-4, 1, 3], [-1, -1, 2], [-1, 0, 1]],
            ThreeSum::threeSum([-1, 0, 1, 2, -1, -4, -6, 3, 3])
        );
        self::assertSame(
            [[-1, -1, 2], [-1, 0, 1]],
            ThreeSum::threeSum([-1, 0, 1, 2, -1, -4])
        );
        self::assertSame([], ThreeSum::threeSum([]));
        self::assertSame([], ThreeSum::threeSum([0]));
    }

    public function testThreeSum2(): void
    {
        self::assertSame(
            [[-6, 3, 3], [-4, 1, 3], [-1, -1, 2], [-1, 0, 1]],
            ThreeSum::threeSum2([-1, 0, 1, 2, -1, -4, -6, 3, 3])
        );
        self::assertSame(
            [[-1, -1, 2], [-1, 0, 1]],
            ThreeSum::threeSum2([-1, 0, 1, 2, -1, -4])
        );
        self::assertSame([], ThreeSum::threeSum2([]));
        self::assertSame([], ThreeSum::threeSum2([0]));
    }

    public function testThreeSum3(): void
    {
        self::assertSame(
            [[-6, 3, 3], [-4, 1, 3], [-1, -1, 2], [-1, 0, 1]],
            ThreeSum::threeSum3([-1, 0, 1, 2, -1, -4, -6, 3, 3])
        );
        self::assertSame(
            [[-1, -1, 2], [-1, 0, 1]],
            ThreeSum::threeSum3([-1, 0, 1, 2, -1, -4])
        );
        self::assertSame([], ThreeSum::threeSum3([]));
        self::assertSame([], ThreeSum::threeSum3([0]));
    }
}
