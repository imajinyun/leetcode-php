<?php

declare(strict_types=1);

namespace leetcode\util;

class UnionFind
{
    public $count = 0;
    public $parent = [];

    public function __construct(array $grid)
    {
        [$m, $n] = [count($grid), count($grid[0])];
        $this->parent = new \SplFixedArray($m * $n);
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($grid[$i][$j] === 1) {
                    $id = $i * $n + $j;
                    $this->parent[$id] = $id;
                    $this->count++;
                }
            }
        }
    }

    public function find(int $node): int
    {
        if ($this->parent[$node] !== $node) {
            $this->parent[$node] = $this->find($this->parent[$node]);
        }

        return $this->parent[$node];
    }

    public function union(int $x, int $y): void
    {
        [$rootx, $rooty] = [$this->find($x), $this->find($y)];

        if ($rootx !== $rooty) {
            $this->parent[$rootx] = $rooty;
            $this->count--;
        }
    }

    public function count(): int
    {
        return $this->count;
    }
}
