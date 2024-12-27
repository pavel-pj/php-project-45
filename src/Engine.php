<?php

namespace Hexlet\Codes2;

use function cli\line;
use function cli\prompt;


function engine(string $game )
{
    $levels = 3;

    $name = welcome($game);
    gameDescription($game);

    for ($i = 0; $i < $levels; $i++) {

       ['question' =>$question, 'result'=>$result ] = question($game);

       $answer = prompt($question);
       line("Your answer %s!", $answer );

       if ( isCorrectAnswer( $result,$answer)) {
           line("Correct!");
       } else {
           line("Let's try again, $name!");
           exit;
       }

    }
    line("Congratulations, $name");


}

function welcome(string $game): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}

function gameDescription(string $game){

    switch ($game) {
        case 'even' :
        {
            line('Answer "yes" if the number is even, otherwise answer "no".');
        }
        case 'calc' :
        {
            line('What is the result of the expression?');

        }
    }

}


function question($game) {
    switch ($game) {
        case 'even' :
        {
            return games\even_question();
        }
        case 'calc' :
        {
           // line('What is the result of the expression?');
           return games\calc_question();


        }
    }

}

function isCorrectAnswer(mixed $result, mixed $answer): bool
{
    if ($result == $answer) {
        return true;
    }
    return false;
}
