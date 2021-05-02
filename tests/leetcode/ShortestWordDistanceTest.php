<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ShortestWordDistance;
use PHPUnit\Framework\TestCase;

class ShortestWordDistanceTest extends TestCase
{
    public function testShortestDistance(): void
    {
        $words = ['practice', 'makes', 'perfect', 'coding', 'makes'];
        self::assertSame(3, ShortestWordDistance::shortestDistance($words, 'coding', 'practice'));
    }
}
