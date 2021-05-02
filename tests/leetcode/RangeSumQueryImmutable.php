<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\RangeSumQueryImmutable;
use PHPUnit\Framework\TestCase;

class RangeSumQueryImmutable extends TestCase
{
    private array $num = [];

    protected function setUp(): void
    {
        $this->nums = [-2, 0, 3, -5, 2, -1];
    }

    public function testSumRange(): void
    {
        self::assertSame(1, RangeSumQueryImmutable::sumRange($this->nums, 0, 2));
        self::assertSame(-1, RangeSumQueryImmutable::sumRange($this->nums, 2, 5));
        self::assertSame(-3, RangeSumQueryImmutable::sumRange($this->nums, 0, 5));
    }

    public function testSumRange2(): void
    {
        self::assertSame(1, RangeSumQueryImmutable::sumRange2($this->nums, 0, 2));
        self::assertSame(-1, RangeSumQueryImmutable::sumRange2($this->nums, 2, 5));
        self::assertSame(-3, RangeSumQueryImmutable::sumRange2($this->nums, 0, 5));
    }
}
