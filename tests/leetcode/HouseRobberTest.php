<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\HouseRobber;
use PHPUnit\Framework\TestCase;

class HouseRobberTest extends TestCase
{
    public function testRob(): void
    {
        self::assertSame(4, HouseRobber::rob([1, 2, 3, 1]));
        self::assertSame(12, HouseRobber::rob([2, 7, 9, 3, 1]));
    }

    public function testRob2(): void
    {
        self::assertSame(4, HouseRobber::rob2([1, 2, 3, 1]));
        self::assertSame(12, HouseRobber::rob2([2, 7, 9, 3, 1]));
    }

    public function testRob3(): void
    {
        self::assertSame(4, HouseRobber::rob3([1, 2, 3, 1]));
        self::assertSame(12, HouseRobber::rob3([2, 7, 9, 3, 1]));
    }
}
