<?php

declare(strict_types=1);

namespace leetcode\util;

class TrieNode
{
    public $value;
    public $isWord = false;
    public $children = [];

    public function __construct(string $value = '')
    {
        $this->value = $value;
    }
}
