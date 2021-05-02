<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\FriendCircles;

class FriendCirclesTest extends TestCase
{
    public function testFindCircleNum(): void
    {
        [$grid1, $grid2] = [
            [
                [1, 1, 0],
                [1, 1, 0],
                [0, 0, 1],
            ],
            [
                [1, 1, 0],
                [1, 1, 1],
                [0, 1, 1],
            ],
        ];

        self::assertSame(2, FriendCircles::findCircleNum($grid1));
        self::assertSame(1, FriendCircles::findCircleNum($grid2));
    }
}
