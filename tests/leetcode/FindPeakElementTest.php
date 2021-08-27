<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\FindPeakElement;

class FindPeakElementTest extends TestCase
{
    public function testFindPeakElement(): void
    {
        self::assertSame(2, FindPeakElement::findPeakElement([1, 2, 3, 1]));
        self::assertSame(5, FindPeakElement::findPeakElement([1, 2, 1, 3, 5, 6, 4]));
    }

    public function testFindPeakElement2(): void
    {
        self::assertSame(2, FindPeakElement::findPeakElement2([1, 2, 3, 1]));
        self::assertSame(5, FindPeakElement::findPeakElement2([1, 2, 1, 3, 5, 6, 4]));
    }
}
