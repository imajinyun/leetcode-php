<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\ArrayTransformation;

class ArrayTransformationTest extends TestCase
{
    public function testTransformArray(): void
    {
        self::assertSame([6, 3, 3, 4], ArrayTransformation::transformArray([6, 2, 3, 4]));
        self::assertSame([1, 4, 4, 4, 4, 5], ArrayTransformation::transformArray([1, 6, 3, 4, 3, 5]));
    }

    public function testTransformArray2(): void
    {
        self::assertSame([6, 3, 3, 4], ArrayTransformation::transformArray2([6, 2, 3, 4]));
        self::assertSame([1, 4, 4, 4, 4, 5], ArrayTransformation::transformArray2([1, 6, 3, 4, 3, 5]));
    }
}
