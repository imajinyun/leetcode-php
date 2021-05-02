<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\MissingRanges;
use PHPUnit\Framework\TestCase;

class MissingRangesTest extends TestCase
{
    public function testFindMissingRanges(): void
    {
        $nums = [0, 1, 3, 50, 75];
        $expect = ['2', '4->49', '51->74', '76->99'];
        self::assertSame($expect, MissingRanges::findMissingRanges($nums, 0, 99));
    }

    public function testFindMissingRanges2(): void
    {
        $nums = [0, 1, 3, 50, 75];
        $expect = ['2', '4->49', '51->74', '76->99'];
        self::assertSame($expect, MissingRanges::findMissingRanges2($nums, 0, 99));
    }
}
