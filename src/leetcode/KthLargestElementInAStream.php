<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\MinHeap;

class KthLargestElementInAStream
{
    private int $k;
    private MinHeap $minHeap;

    public function __construct(int $k, array $nums)
    {
        $this->k = $k;
        $this->minHeap = new MinHeap();
        foreach ($nums as $val) {
            $this->add($val);
        }
    }

    public function add(int $val): int
    {
        $heap = $this->minHeap;
        if ($heap->count() < $this->k) {
            $heap->push($val);
        } elseif ($heap->top() < $val) {
            $heap->pop();
            $heap->push($val);
        }

        return $heap->top();
    }
}
