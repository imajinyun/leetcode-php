<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\MajorityElement;
use PHPUnit\Framework\TestCase;

class MajorityElementTest extends TestCase
{
    public function testMajorityElement(): void
    {
        self::assertSame(3, MajorityElement::majorityElement([3, 2, 3]));
        self::assertSame(2, MajorityElement::majorityElement([2, 2, 1, 1, 1, 2, 2]));
        self::assertSame(5, MajorityElement::majorityElement([6, 5, 5]));
    }

    public function testMajorityElement2(): void
    {
        self::assertSame(3, MajorityElement::majorityElement2([3, 2, 3]));
        self::assertSame(2, MajorityElement::majorityElement2([2, 2, 1, 1, 1, 2, 2]));
        self::assertSame(5, MajorityElement::majorityElement2([6, 5, 5]));
    }

    public function testMajorityElement3(): void
    {
        self::assertSame(3, MajorityElement::majorityElement3([3, 2, 3]));
        self::assertSame(2, MajorityElement::majorityElement3([2, 2, 1, 1, 1, 2, 2]));
        self::assertSame(5, MajorityElement::majorityElement3([6, 5, 5]));
    }
}
