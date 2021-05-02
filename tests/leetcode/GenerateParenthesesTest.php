<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\GenerateParentheses;
use PHPUnit\Framework\TestCase;

class GenerateParenthesesTest extends TestCase
{
    public function testGenerateParenthesis(): void
    {
        self::assertSame(['()'], GenerateParentheses::generateParenthesis(1));
        self::assertSame(['(())', '()()'], GenerateParentheses::generateParenthesis(2));
        self::assertSame(['((()))', '(()())', '(())()', '()(())', '()()()'], GenerateParentheses::generateParenthesis(3));
    }
}
