<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ZigzagConversion;
use PHPUnit\Framework\TestCase;

class ZigzagConversionTest extends TestCase
{
    public function testConvert(): void
    {
        self::assertSame('PAHNAPLSIIGYIR', ZigzagConversion::convert('PAYPALISHIRING', 3));
        self::assertSame('PINALSIGYAHRPI', ZigzagConversion::convert('PAYPALISHIRING', 4));
        self::assertSame('A', ZigzagConversion::convert('A', 1));
    }

    public function testConvert2(): void
    {
        self::assertSame('PAHNAPLSIIGYIR', ZigzagConversion::convert2('PAYPALISHIRING', 3));
        self::assertSame('PINALSIGYAHRPI', ZigzagConversion::convert2('PAYPALISHIRING', 4));
        self::assertSame('A', ZigzagConversion::convert2('A', 1));
    }
}
