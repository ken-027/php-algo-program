<?php

include_once 'programs.php';
include_once 'test/unit.php';

use Test\Unit;

if (@strtolower($argv[1]) === '--test') {
    Unit::init();
}

function main(): void
{
    echo "\nList of Algorithms Program using PHP\n\n";
    $programs = ['binarySearch', 'fibonacciTerm', 'Exit the program'];
    $choice = 0;

    foreach ($programs as $index => $program) {
        echo sprintf("[%d] %s\n", ++$index, ucwords($program));
    }

    while (true) {
        $choice = (int) readline("Choice: ");

        if ($choice === count($programs)) {
            die("\nThanks for exploring my app :)\nAuthor: @ken\n");
        }

        $function = @$programs[--$choice] or (readline("Invalid choice...") || main());

        $function();
        main();
    }

}

main();
