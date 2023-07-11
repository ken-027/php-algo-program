<?php

namespace Algo;

class FibonacciTerm
{
    public function __construct(private int $term)
    {

    }

    public function __invoke(): array
    {
        [$term, $terms] = [2, [0, 1]];

        while ($term < $this->term) {
            array_push($terms, $terms[$term - 1] + $terms[$term - 2]);
            $term++;
        }

        return $terms;
    }
}
