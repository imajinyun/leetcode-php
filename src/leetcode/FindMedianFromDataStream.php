<?php

declare(strict_types=1);

namespace leetcode;

class FindMedianFromDataStream
{
    private \SplMinHeap $small;
    private \SplMaxHeap $large;
    private bool $isEven = true;

    public function __construct()
    {
        $this->small = new \SplMinHeap();
        $this->large = new \SplMaxHeap();
    }

    public function addNum(int $num): void
    {
        if ($this->isEven) {
            $this->large->insert($num);
            $this->small->insert($this->large->extract());
        } else {
            $this->small->insert($num);
            $this->large->insert($this->small->extract());
        }
        $this->isEven = !$this->isEven;
    }

    public function findMedian(): float
    {
        if ($this->isEven) {
            return !$this->small->isEmpty() && !$this->large->isEmpty()
                ? ($this->small->top() + $this->large->top()) / 2.0
                : 0;
        } else {
            return $this->small->isEmpty() ? 0 : $this->small->top();
        }
    }
}
