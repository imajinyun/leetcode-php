<?php

declare(strict_types=1);

namespace leetcode;

use PHPUnit\Framework\TestCase;

class HouseRobberIITest extends TestCase
{
    public function testRob(): void
    {
        self::assertSame(3, HouseRobberII::rob([2, 3, 2]));
        self::assertSame(4, HouseRobberII::rob([1, 2, 3, 1]));
        self::assertSame(0, HouseRobberII::rob([0]));
    }

    public function testRob2(): void
    {
        self::assertSame(3, HouseRobberII::rob2([2, 3, 2]));
        self::assertSame(4, HouseRobberII::rob2([1, 2, 3, 1]));
        self::assertSame(0, HouseRobberII::rob2([0]));
    }
}
