<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\ExcelSheetColumnNumber;

class ExcelSheetColumnNumberTest extends TestCase
{
    public function testTitleToNumber(): void
    {
        self::assertSame(1, ExcelSheetColumnNumber::titleToNumber('A'));
        self::assertSame(28, ExcelSheetColumnNumber::titleToNumber('AB'));
        self::assertSame(701, ExcelSheetColumnNumber::titleToNumber('ZY'));
        self::assertSame(2147483647, ExcelSheetColumnNumber::titleToNumber('FXSHRXW'));
    }

    public function testTitleToNumber2(): void
    {
        self::assertSame(1, ExcelSheetColumnNumber::titleToNumber2('A'));
        self::assertSame(28, ExcelSheetColumnNumber::titleToNumber2('AB'));
        self::assertSame(701, ExcelSheetColumnNumber::titleToNumber2('ZY'));
        self::assertSame(2147483647, ExcelSheetColumnNumber::titleToNumber2('FXSHRXW'));
    }
}
