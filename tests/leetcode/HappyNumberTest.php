<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\HappyNumber;

class HappyNumberTest extends TestCase
{
    public function testIsHappy(): void
    {
        self::assertTrue(HappyNumber::isHappy(19));
        self::assertFalse(HappyNumber::isHappy(2));
    }

    public function testIsHappy2(): void
    {
        self::assertTrue(HappyNumber::isHappy2(19));
        self::assertFalse(HappyNumber::isHappy2(2));
    }
}
