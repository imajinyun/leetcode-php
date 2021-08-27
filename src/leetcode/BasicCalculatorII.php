<?php

declare(strict_types=1);

namespace leetcode;

class BasicCalculatorII
{
    private static array $operators = ['+', '-', '*', '/'];

    public static function calculate(string $s): int
    {
        if (empty($s)) {
            return 0;
        }
        $s = str_replace(' ', '', $s);
        $n = strlen($s);
        [$stack, $num, $operator] = [[], 0, '+'];
        for ($i = 0; $i < $n; $i++) {
            $char = $s[$i];
            if (is_numeric($char)) {
                $num = $char;
            }
            if ($i === $n - 1 || in_array($char, self::$operators)) {
                switch ($operator) {
                    case '+':
                        array_push($stack, $num);
                        break;
                    case '-':
                        array_push($stack, -$num);
                        break;
                    case '*':
                        array_push($stack, (int)(array_pop($stack) * $num));
                        break;
                    case '/':
                        array_push($stack, (int)(array_pop($stack) / $num));
                        break;
                }
                [$num, $operator] = [0, $char];
            }
        }

        return array_sum($stack);
    }

    public static function calculate2(string $s): int
    {
        if (empty($s)) {
            return 0;
        }
        $s = str_replace(' ', '', $s);
        $n = strlen($s);
        [$stack, $operator] = [[], '+'];

        for ($i = 0; $i < $n; $i++) {
            $char = $s[$i];
            if (is_numeric($char)) {
                if ($operator === '+') {
                    array_push($stack, (int)$char);
                }
                if ($operator === '-') {
                    array_push($stack, -(int)$char);
                }
                if ($operator === '*') {
                    array_push($stack, array_pop($stack) * (int)$char);
                }
                if ($operator === '/') {
                    array_push($stack, (int)(array_pop($stack) / $char));
                }
            } else {
                $operator = $char;
            }
        }

        return array_sum($stack);
    }
}
