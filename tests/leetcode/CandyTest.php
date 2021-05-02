<?php

namespace leetcode;

use PHPUnit\Framework\TestCase;

class CandyTest extends TestCase
{
    public function testCandy(): void
    {
        self::assertEquals(5, Candy::candy([1, 0, 2]));
        self::assertEquals(4, Candy::candy([1, 2, 2]));
    }
}
