<?php

declare(strict_types=1);

use leetcode\ContainerWithMostWater;
use PHPUnit\Framework\TestCase;

class ContainerWithMostWaterTest extends TestCase
{
    public function testMaxArea(): void
    {
        self::assertSame(49, ContainerWithMostWater::maxArea(
            [1, 8, 6, 2, 5, 4, 8, 3, 7]
        ));
    }

    public function testMaxArea2(): void
    {
        self::assertSame(49, ContainerWithMostWater::maxArea2(
            [1, 8, 6, 2, 5, 4, 8, 3, 7]
        ));
    }
}
