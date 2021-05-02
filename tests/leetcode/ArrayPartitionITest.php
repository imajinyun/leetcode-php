<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ArrayPartitionI;
use PHPUnit\Framework\TestCase;

class ArrayPartitionITest extends TestCase
{
    public function testArrayPairSum(): void
    {
        self::assertSame(4, ArrayPartitionI::arrayPairSum([1, 4, 3, 2]));
        self::assertSame(9, ArrayPartitionI::arrayPairSum([6, 2, 6, 5, 1, 2]));
    }
}
