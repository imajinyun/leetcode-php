<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\GenerateParentheses;

class GenerateParenthesesTest extends TestCase
{
    public function testGenerateParenthesis(): void
    {
        self::assertSame(['()'], GenerateParentheses::generateParenthesis(1));
        self::assertSame(['(())', '()()'], GenerateParentheses::generateParenthesis(2));
        self::assertSame(['((()))', '(()())', '(())()', '()(())', '()()()'], GenerateParentheses::generateParenthesis(3));
    }
}
