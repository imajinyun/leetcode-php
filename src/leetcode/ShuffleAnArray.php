<?php

declare(strict_types=1);

namespace leetcode;

class ShuffleAnArray
{
    private array $nums;

    /**
     * Initializes the object with the integer array nums.
     *
     * @param array $nums
     */
    public function __construct(array $nums)
    {
        $this->nums = $nums;
    }

    /**
     * Resets the array to its original configuration and return it.
     *
     * @return array
     */
    public function reset(): array
    {
        return $this->nums;
    }

    /**
     * Returns a random shuffling of the array.
     *
     * @return array
     */
    public function shuffle(): array
    {
        if (!$this->nums) {
            return [];
        }
        $nums = $this->nums;
        $n = count($nums);
        for ($i = 0; $i < $n; $i++) {
            $j = random_int(0, $i);
            [$nums[$i], $nums[$j]] = [$nums[$j], $nums[$i]];
        }

        return $nums;
    }
}
