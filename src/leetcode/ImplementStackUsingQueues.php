<?php

declare(strict_types=1);

namespace leetcode;

class ImplementStackUsingQueues
{
    private array $cache = [];
    private array $queue = [];

    public function push(int $value): void
    {
        $this->cache[] = $value;
        while (count($this->queue)) {
            $this->cache[] = array_shift($this->queue);
        }
        $tmp = $this->cache;
        $this->cache = $this->queue;
        $this->queue = $tmp;
    }

    public function pop(): ?int
    {
        if (empty($this->queue)) {
            return null;
        }

        return array_shift($this->queue);
    }

    public function top(): ?int
    {
        if (empty($this->queue)) {
            return null;
        }

        return current($this->queue);
    }

    public function empty(): bool
    {
        return empty($this->queue) && empty($this->cache);
    }
}
