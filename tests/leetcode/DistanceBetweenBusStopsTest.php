<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\DistanceBetweenBusStops;

class DistanceBetweenBusStopsTest extends TestCase
{
    public function testDistanceBetweenBusStops(): void
    {
        self::assertSame(1, DistanceBetweenBusStops::distanceBetweenBusStops([1, 2, 3, 4], 0, 1));
        self::assertSame(3, DistanceBetweenBusStops::distanceBetweenBusStops([1, 2, 3, 4], 0, 2));
        self::assertSame(4, DistanceBetweenBusStops::distanceBetweenBusStops([1, 2, 3, 4], 0, 3));
    }

    public function testDistanceBetweenBusStops2(): void
    {
        self::assertSame(1, DistanceBetweenBusStops::distanceBetweenBusStops2([1, 2, 3, 4], 0, 1));
        self::assertSame(3, DistanceBetweenBusStops::distanceBetweenBusStops2([1, 2, 3, 4], 0, 2));
        self::assertSame(4, DistanceBetweenBusStops::distanceBetweenBusStops2([1, 2, 3, 4], 0, 3));
    }

    public function testDistanceBetweenBusStops3(): void
    {
        self::assertSame(1, DistanceBetweenBusStops::distanceBetweenBusStops3([1, 2, 3, 4], 0, 1));
        self::assertSame(3, DistanceBetweenBusStops::distanceBetweenBusStops3([1, 2, 3, 4], 0, 2));
        self::assertSame(4, DistanceBetweenBusStops::distanceBetweenBusStops3([1, 2, 3, 4], 0, 3));
    }
}
