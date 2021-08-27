<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\EvaluateReversePolishNotation;

class EvaluateReversePolishNotationTest extends TestCase
{
    public function testEvalRPN(): void
    {
        self::assertSame(9, EvaluateReversePolishNotation::evalRPN(['2', '1', '+', '3', '*']));
        self::assertSame(6, EvaluateReversePolishNotation::evalRPN(['4', '13', '5', '/', '+']));
        self::assertSame(22, EvaluateReversePolishNotation::evalRPN([
            '10', '6', '9', '3', '+', '-11', '*', '/', '*', '17', '+', '5', '+'
        ]));
    }

    public function testEvalRPN2(): void
    {
        self::assertSame(9, EvaluateReversePolishNotation::evalRPN2(['2', '1', '+', '3', '*']));
        self::assertSame(6, EvaluateReversePolishNotation::evalRPN2(['4', '13', '5', '/', '+']));
        self::assertSame(22, EvaluateReversePolishNotation::evalRPN2([
            '10', '6', '9', '3', '+', '-11', '*', '/', '*', '17', '+', '5', '+'
        ]));
    }
}
