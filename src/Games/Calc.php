<?php

namespace Hexlet\Codes2\Games;

use function cli\line;
use function cli\prompt;

function calc_question(): array
{
    $num1 = rand(1, 4);
    $num2 = rand(1, 4);
    $type = rand(1, 3);
    $sign = '';
    $result = 0;
    switch ($type) {
        case 1:
            $sign = '+';
            $result = $num1 + $num2;
            break;

        case 2:
            $sign = '-';
            $result = $num1 - $num2;
            break;

        case 3:
            $sign = '*';
            $result = $num1 * $num2;
            break;
    }

    return [
        'question' => "Question: $num1 $sign $num2 ",
        'result' => $result
    ];
}
