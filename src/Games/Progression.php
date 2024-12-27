<?php

namespace Hexlet\Codes2\Games;

use function cli\line;
use function cli\prompt;

function progression_question( ): array
{
    $keyProgression = rand (1,5);
    $minCountProgression = 12 ;
    $startNum = rand (1, 200);

    $progression = createProgression($keyProgression,$minCountProgression ,$startNum);
    $result = changeArrayNumber($progression);
    $string = getArrayToString($progression);



    return [
        'question' => "Question: $string ",
        'result' => $result
    ];

}

function createProgression(
    int $keyProgression,
    int $minCountProgression ,
    int $startNum): array
{

    $i = 1;
    $result = [];
    $number = $startNum;

    do {

        $result[] = $number;
        $number = $number + $keyProgression;

        $i = $i + 1;
    } while ($i<=$minCountProgression);

    return $result;

}

function changeArrayNumber (array &$arr): int
{
    $count = count($arr);
    $nRand = rand (0, $count -1 );

    $number = $arr[$nRand];
    $arr[$nRand] = '..';

    return $number;
}

function getArrayToString(array $arr): string
{
    $str='';
    foreach ($arr as  $value) {
        $str .= $value . ' ';

    }
    return $str;

}


