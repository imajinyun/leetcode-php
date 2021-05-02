<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\SumOfEvenNumbersAfterQueries;

class SumOfEvenNumbersAfterQueriesTest extends TestCase
{
    public function testSumEvenAfterQueries(): void
    {
        self::assertSame(
            [8, 6, 2, 4],
            SumOfEvenNumbersAfterQueries::sumEvenAfterQueries(
                [1, 2, 3, 4],
                [[1, 0], [-3, 1], [-4, 0], [2, 3]]
            )
        );
    }
}
