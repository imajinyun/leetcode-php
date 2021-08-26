<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\KthSmallestElementInASortedMatrix;
use PHPUnit\Framework\TestCase;

class KthSmallestElementInASortedMatrixTest extends TestCase
{
    public function testKthSmallest(): void
    {
        $matrix = [[1, 5, 9], [10, 11, 13], [12, 13, 15]];
        self::assertSame(13, KthSmallestElementInASortedMatrix::kthSmallest($matrix, 8));
        self::assertSame(-5, KthSmallestElementInASortedMatrix::kthSmallest([[-5]], 1));
    }

    public function testKthSmallest2(): void
    {
        $matrix = [[1, 5, 9], [10, 11, 13], [12, 13, 15]];
        self::assertSame(13, KthSmallestElementInASortedMatrix::kthSmallest2($matrix, 8));
        self::assertSame(-5, KthSmallestElementInASortedMatrix::kthSmallest2([[-5]], 1));
    }
}
