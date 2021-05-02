<?php

declare(strict_types=1);

namespace leetcode\util;

class Position
{
    public $row;
    public $col;

    public function __construct(int $row = 0, int $col = 0)
    {
        $this->row = $row;
        $this->col = $col;
    }
}
