<?php

declare(strict_types=1);

namespace leetcode;

class EvaluateReversePolishNotation
{
    public static function evalRPN(array $tokens): int
    {
        if (empty($tokens)) {
            return 0;
        }
        $stack = new \SplStack();
        foreach ($tokens as $token) {
            if ($token === "+") {
                $stack->push($stack->pop() + $stack->pop());
            } elseif ($token === "-") {
                [$b, $a] = [$stack->pop(), $stack->pop()];
                $stack->push($a - $b);
            } elseif ($token === '*') {
                $stack->push($stack->pop() * $stack->pop());
            } elseif ($token === '/') {
                [$b, $a] = [$stack->pop(), $stack->pop()];
                $stack->push((int)($a / $b));
            } else {
                $stack->push((int)$token);
            }
        }

        return $stack->pop();
    }

    public static function evalRPN2(array $tokens): int
    {
        if (empty($tokens)) {
            return 0;
        }
        $stack = [];
        foreach ($tokens as $token) {
            if (!in_array($token, ['+', '-', '*', '/'])) {
                array_push($stack, (int)$token);
            } else {
                [$r, $l] = [array_pop($stack), array_pop($stack)];
                if ($token === '+') {
                    array_push($stack, $l + $r);
                } elseif ($token === '-') {
                    array_push($stack, $l - $r);
                } elseif ($token === '*') {
                    array_push($stack, $l * $r);
                } else {
                    array_push($stack, (int)($l / $r));
                }
            }
        }

        return array_pop($stack);
    }
}
