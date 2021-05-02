<?php

declare(strict_types=1);

namespace leetcode;

class FlippingAnImage
{
    public static function flipAndInvertImage(array $image): array
    {
        if (empty($image)) {
            return [];
        }
        for ($i = 0, $n = count($image); $i < $n; $i++) {
            [$low, $high] = [0, count($image[0]) - 1];
            while ($low <= $high) {
                if ($image[$i][$low] === $image[$i][$high]) {
                    $image[$i][$low] = 1 - $image[$i][$low];
                    $image[$i][$high] = $image[$i][$low];
                }
                $low++;
                $high--;
            }
        }

        return $image;
    }

    public static function flipAndInvertImage2(array $image): array
    {
        if (empty($image)) {
            return [];
        }
        foreach ($image as &$row) {
            $row = array_reverse($row);
            foreach ($row as &$val) {
                $val ^= 1;
            }
        }

        return $image;
    }
}
