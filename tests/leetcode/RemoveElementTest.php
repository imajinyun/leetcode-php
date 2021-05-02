<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\RemoveElement;

class RemoveElementTest extends TestCase
{
    public function testRemoveElement(): void
    {
        $a = [3, 2, 2, 3];
        self::assertSame(2, RemoveElement::removeElement($a, 3));

        $b = [0, 1, 2, 2, 3, 0, 4, 2];
        self::assertSame(5, RemoveElement::removeElement($b, 2));
    }
}
