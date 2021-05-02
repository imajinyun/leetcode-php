<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\EditDistance;
use PHPUnit\Framework\TestCase;

class EditDistanceTest extends TestCase
{
    public function test(): void
    {
        self::assertEquals(3, EditDistance::minDistance('horse', 'ros'));
        self::assertEquals(5, EditDistance::minDistance('intention', 'execution'));
    }
}
