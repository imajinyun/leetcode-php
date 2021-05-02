<?php

declare(strict_types=1);

namespace leetcode;

class RangeSumQuery2DImmutable
{
    private array $matrix;
    private array $dp;

    public function __construct(array $matrix)
    {
        $this->matrix = $matrix;
        [$m, $n] = [count($matrix), is_array($matrix[0]) ? count($matrix[0]) : 0];
        if (! $matrix || $m <= 0 || $n <= 0) {
            return 0;
        }
        $this->dp = array_fill(0, $m + 1, array_fill(0, $n + 1, 0));
        for ($i = 1; $i <= $m; $i++) {
            for ($j = 1; $j <= $n; $j++) {
                $this->dp[$i][$j] = $this->dp[$i - 1][$j]
                    + $this->dp[$i][$j - 1]
                    - $this->dp[$i - 1][$j - 1]
                    + $this->matrix[$i - 1][$j - 1];
            }
        }
    }

    public function sumRegion(int $left, int $top, int $right, int $bottom): int
    {
        $left++;
        $top++;
        $right++;
        $bottom++;

        return $this->dp[$right][$bottom]
            - $this->dp[$right][$top - 1]
            - $this->dp[$left - 1][$bottom]
            + $this->dp[$left - 1][$top - 1];
    }
}
