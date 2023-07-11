<?php

namespace Test;

use Algo\BinarySearch;
use Algo\FibonacciTerm;

class Unit
{
    private static function test_binary_search(): bool
    {
        $assert = (new BinarySearch([1, 3, 5, 6, 7, 8]))(5) === 2;
        self::print($assert, __FUNCTION__);
        return $assert;
    }

    private static function test_fibonacci_terms(): bool
    {
        $assert = (new FibonacciTerm(5))() === [0, 1, 1, 2, 3];
        self::print($assert, __FUNCTION__);
        return $assert;
    }

    private static function print(bool $assert, string $functionName): void{
        sleep(1);
        $symbol = $assert ? '✓' : 'x';
        echo sprintf("[%s] %s \n", $symbol, str_replace('_', ' ', $functionName));
    }

    public static function init(): void
    {
        echo "\nUnit Test\n";
        echo "Initializing test...\n";
        sleep(1);
        $tests = [self::test_binary_search(), self::test_fibonacci_terms()];
        sleep(1);
        echo (in_array(false, $tests)) ? "There are failed on test case\n" : "Test sucess you may proceed with the app\n";
        exit;

    }
}
