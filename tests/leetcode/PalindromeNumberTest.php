<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\PalindromeNumber;

class PalindromeNumberTest extends TestCase
{
    private array $data;
    private array $expect;

    protected function setUp(): void
    {
        $this->data = [
            40404,
            -121,
            10,
            12121,
            +98189,
            10001,
            +101,
        ];
        $this->expect = [
            true,
            false,
            false,
            true,
            true,
            true,
            true,
        ];

    }

    public function testIsPalindrome(): void
    {
        $actual = array_map(static function ($value) {
            return PalindromeNumber::isPalindrome($value);
        }, $this->data);
        self::assertSame($this->expect, $actual);
    }

    public function testIsPalindrome2(): void
    {
        $actual = array_map(static function ($value) {
            return PalindromeNumber::isPalindrome2($value);
        }, $this->data);
        self::assertSame($this->expect, $actual);
    }
}
