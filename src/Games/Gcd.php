<?php

namespace Hexlet\Codes2\Games;

use function cli\line;
use function cli\prompt;

function gcd_question(): array
{
    $num1 = createEvenNumber();
    $num2 = createEvenNumber();

    $result = getGcd($num1, $num2);

    return [
        'question' => "Question: $num1 $num2 ",
        'result' => $result
    ];
}

function getGcd(int $num1, int $num2): int
{
    $maxNum = max($num1, $num2);
    $i = 1;
    $maxDevider = 0;
    do {
        if ($num1 % $i === 0    &&   $num2 % $i === 0) {
            $maxDevider = $i;
        }

        $i++;
    } while ($i <= $maxNum);

    return $maxDevider;
}

function createEvenNumber()
{
    $num = 1;
    do {
        $num = rand(1, 100);
    } while ($num % 2 !== 0);

    return $num;
}
