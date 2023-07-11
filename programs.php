<?php

include_once __DIR__ . '/algo/BinarySearch.php';
include_once __DIR__ . '/algo/FibonacciTerm.php';

use Algo\BinarySearch;
use Algo\FibonacciTerm;

function binarySearch(): void
{
    echo "\nBinary Search:\n";
    // $elements = [21, 63, 2, 3, 5, 12, 13];
    $elements = [2, 3, 5, 12, 13, 21, 63];
    echo sprintf("Elements are %s\n", json_encode($elements));
    $target = (int) readline("Search: ");
    $start = microtime(true);
    print sprintf("Searching %d is index of %d", $target, (new BinarySearch($elements))($target));
    printExecution($start);
}

function fibonacciTerm(): void
{
    echo "\nFibonacci By Term\n";
    $term = (int) readline("Term: ");
    $start = microtime(true);
    echo sprintf("%d term in fibonacci is %s", $term, json_encode((new FibonacciTerm($term))()));
    printExecution($start);
}

function printExecution(float $timeStart): void
{
    echo sprintf("\nExecution time: %s\n", microtime(true) - $timeStart);
}
