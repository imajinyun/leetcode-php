<?php

declare(strict_types=1);

namespace leetcode;

class CheckIfItIsAStraightLine
{
    public static function checkStraightLine(array $coordinates): bool
    {
        if (empty($coordinates)) {
            return false;
        }
        if (($n = count($coordinates)) === 2) {
            return true;
        }
        [$x1, $y1] = [$coordinates[0][0], $coordinates[0][1]];
        [$x2, $y2] = [$coordinates[1][0], $coordinates[1][1]];
        for ($i = 2; $i < $n; $i++) {
            [$x, $y] = [$coordinates[$i][0], $coordinates[$i][1]];
            // (y - y1) / (y2 - y1) = (x - x1) / (x2 - x1)
            if (($y - $y1) * ($x2 - $x1) !== ($y2 - $y1) * ($x - $x1)) {
                return false;
            }
        }

        return true;
    }
}
