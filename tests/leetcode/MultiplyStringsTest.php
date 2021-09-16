<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\MultiplyStrings;

class MultiplyStringsTest extends TestCase
{
    public function testMultiply(): void
    {
        self::assertSame('6', MultiplyStrings::multiply('2', '3'));
        self::assertSame('81', MultiplyStrings::multiply('9', '9'));
        self::assertSame('56088', MultiplyStrings::multiply('123', '456'));
    }
}
