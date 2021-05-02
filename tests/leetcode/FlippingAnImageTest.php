<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\FlippingAnImage;
use PHPUnit\Framework\TestCase;

class FlippingAnImageTest extends TestCase
{
    public function testFlipAndInvertImage(): void
    {
        self::assertSame(
            [[1, 0, 0], [0, 1, 0], [1, 1, 1]],
            FlippingAnImage::flipAndInvertImage([[1, 1, 0], [1, 0, 1], [0, 0, 0]])
        );
        self::assertSame(
            [[1, 1, 0, 0], [0, 1, 1, 0], [0, 0, 0, 1], [1, 0, 1, 0]],
            FlippingAnImage::flipAndInvertImage([[1, 1, 0, 0], [1, 0, 0, 1], [0, 1, 1, 1], [1, 0, 1, 0]])
        );
    }

    public function testFlipAndInvertImage2(): void
    {
        self::assertSame(
            [[1, 0, 0], [0, 1, 0], [1, 1, 1]],
            FlippingAnImage::flipAndInvertImage2([[1, 1, 0], [1, 0, 1], [0, 0, 0]])
        );
        self::assertSame(
            [[1, 1, 0, 0], [0, 1, 1, 0], [0, 0, 0, 1], [1, 0, 1, 0]],
            FlippingAnImage::flipAndInvertImage2([[1, 1, 0, 0], [1, 0, 0, 1], [0, 1, 1, 1], [1, 0, 1, 0]])
        );
    }
}
