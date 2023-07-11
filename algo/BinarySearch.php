<?php

namespace Algo;

class BinarySearch
{
    public function __construct(private array $elements)
    {}

    public function __invoke(int $target = 0): int
    {
        $elements = $this->elements;
        [$left, $right] = [0, count($elements) - 1];

        while ($left <= $right) {
            $mid = ($left + $right) / 2;

            if ($target === $elements[$mid]) {
                return $mid;
            } elseif ($target < $elements[$mid]) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }
        return -1;
    }
}
