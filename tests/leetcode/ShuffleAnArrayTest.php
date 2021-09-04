<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\ShuffleAnArray;

class ShuffleAnArrayTest extends TestCase
{
    public function testShuffle(): void
    {
        $object = new ShuffleAnArray([1, 2, 3]);
        $ans = $object->shuffle();
        self::assertIsArray($ans);

        $ans = $object->reset();
        self::assertSame([1, 2, 3], $ans);

        $ans = $object->shuffle();
        self::assertIsArray($ans);
    }
}
