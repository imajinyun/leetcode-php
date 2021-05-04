<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\PartitionArrayIntoThreePartsWithEqualSum;

class PartitionArrayIntoThreePartsWithEqualSumTest extends TestCase
{
    public function testCanThreePartsEqualSum(): void
    {
        self::assertTrue(PartitionArrayIntoThreePartsWithEqualSum::canThreePartsEqualSum(
            [0, 2, 1, -6, 6, -7, 9, 1, 2, 0, 1]
        ));
        self::assertFalse(PartitionArrayIntoThreePartsWithEqualSum::canThreePartsEqualSum(
            [0, 2, 1, -6, 6, 7, 9, -1, 2, 0, 1]
        ));
        self::assertTrue(PartitionArrayIntoThreePartsWithEqualSum::canThreePartsEqualSum(
            [3, 3, 6, 5, -2, 2, 5, 1, -9, 4]
        ));
    }
}
