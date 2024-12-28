<?php

namespace Hexlet\Codes2;

use function cli\line;
use function cli\prompt;

function engine(string $game)
{
    $levels = 3;

    $name = welcome($game);
    gameDescription($game);

    for ($i = 0; $i < $levels; $i++) {
        ['question' => $question, 'result' => $result ] = question($game);

        $answer = prompt($question);
        line("Your answer %s!", $answer);

        if (isCorrectAnswer($result, $answer)) {
            line("Correct!");
        } else {
            line("Let's try again, $name!");
            exit;
        }
    }
    line("Congratulations, $name!");
}

function welcome(string $game): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}

function gameDescription(string $game): void
{
    match ($game) {
        'even'=>  line('Answer "yes" if the number is even, otherwise answer "no".'),
        'calc' =>  line('What is the result of the expression?'),
        'bcd' => line('Find the greatest common divisor of given numbers.'),
        'progression' => line('What number is missing in the progression?'),
        'prime' => line('Answer "yes" if given number is prime. Otherwise answer "no".')
    };
}


function question($game): array
{
     $question = match ($game) {
         'even' =>  games\even_question(),
         'calc' => games\calc_question(),
         'bcd' => games\bcd_question(),
         'progression' => games\progression_question(),
         'prime' => games\prime_question()
     };

    return $question;
}

function isCorrectAnswer(mixed $result, mixed $answer): bool
{
    if ($result == $answer) {
        return true;
    }
    return false;
}
