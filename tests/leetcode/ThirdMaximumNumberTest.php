<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ThirdMaximumNumber;
use PHPUnit\Framework\TestCase;

class ThirdMaximumNumberTest extends TestCase
{
    public function testThirdMax(): void
    {
        self::assertSame(1, ThirdMaximumNumber::thirdMax([3, 2, 1]));
        self::assertSame(2, ThirdMaximumNumber::thirdMax([1, 2]));
        self::assertSame(1, ThirdMaximumNumber::thirdMax([2, 2, 3, 1]));
    }
}
