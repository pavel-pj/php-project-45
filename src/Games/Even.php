<?php

namespace Hexlet\Codes2\Games;

use function cli\line;
use function cli\prompt;

function even_question( ): array
{
    $num = rand( 1,100);
    $result = 'no';
    if ($num%2 === 0) $result = 'yes';

    return [
        'question' => "Question: $num ",
        'result' => $result
        ];

}

 
