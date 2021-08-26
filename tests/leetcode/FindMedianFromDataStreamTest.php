<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\FindMedianFromDataStream;

class FindMedianFromDataStreamTest extends TestCase
{
    public function testFindMedian(): void
    {
        $object = new FindMedianFromDataStream();
        self::assertSame(0.0, $object->findMedian());

        $object->addNum(1);
        self::assertSame(1.0, $object->findMedian());

        $object->addNum(2);
        self::assertSame(1.5, $object->findMedian());

        $object->addNum(3);
        self::assertSame(2.0, $object->findMedian());
    }
}
