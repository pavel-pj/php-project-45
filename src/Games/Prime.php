<?php

namespace Hexlet\Codes2\Games;

use function cli\line;
use function cli\prompt;

function prime_question(): array
{
    $num =  rand(1, 199);
    $primes = createPrimeArray();
    $result = 'no';

    if (in_array($num, $primes)) {
        $result = 'yes';
    }

    return [
        'question' => "Question: $num ",
        'result' => $result
    ];
}

function createPrimeArray(): array
{
    $primeArray = [
    2, 3, 5, 7 ,11 , 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71,
    73, 79, 83, 89, 97, 101, 103, 107, 109, 113, 127, 131, 137, 139, 149, 151, 157, 163, 167, 173,
    179, 181, 191, 193, 197, 199
        ];
    return $primeArray;
}
