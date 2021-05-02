<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\RangeSumQuery2DImmutable;
use PHPUnit\Framework\TestCase;

class RangeSumQuery2DImmutableTest extends TestCase
{
    private array $matrix;
    private ?RangeSumQuery2DImmutable $instance;

    protected function setUp(): void
    {
        $this->matrix = [
            [3, 0, 1, 4, 2],
            [5, 6, 3, 2, 1],
            [1, 2, 0, 1, 5],
            [4, 1, 0, 1, 7],
            [1, 0, 3, 0, 5],
        ];
        $this->instance = new RangeSumQuery2DImmutable($this->matrix);
    }

    public function testSumRegion(): void
    {
        self::assertSame(8, $this->instance->sumRegion(2, 1, 4, 3));
    }
}
