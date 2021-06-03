<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\CheckIfANumberIsMajorityElementInASortedArrayEasy;

class CheckIfANumberIsMajorityElementInASortedArrayEasyTest extends TestCase
{
    public function testIsMajorityElement(): void
    {
        self::assertTrue(CheckIfANumberIsMajorityElementInASortedArrayEasy::isMajorityElement(
            [2 ,4 ,5 ,5 ,5 ,5 ,5 ,6 ,6],
            5
        ));
        self::assertFalse(CheckIfANumberIsMajorityElementInASortedArrayEasy::isMajorityElement(
            [10, 100, 101, 101],
            101
        ));
    }
}
