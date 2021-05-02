<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ValidParentheses;
use PHPUnit\Framework\TestCase;

class ValidParenthesesTest extends TestCase
{
    private array $data;
    private array $expect;

    protected function setUp(): void
    {
        $this->data = [
            '()',
            '()[]{}',
            '(]',
            '([)]',
            '{[]}',
            '{[({[()]})]}',
        ];
        $this->expect = [
            true,
            true,
            false,
            false,
            true,
            true,
        ];
    }

    public function testIsValid(): void
    {
        $actual = array_map(static function ($value) {
            return ValidParentheses::isValid($value);
        }, $this->data);
        self::assertSame($this->expect, $actual);
    }
}
