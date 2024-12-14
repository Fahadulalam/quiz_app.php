<?php

// Function to evaluate the quiz score
function evaluateQuiz(array $questions, array $answers): int {
    $score = 0;
    foreach ($questions as $index => $question) {
        if (strtolower(trim($answers[$index])) === strtolower(trim($question['correct']))) {
            $score++;
        }
    }
    return $score;
}

// Define the quiz questions and correct answers
$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
];


$answers = [];


foreach ($questions as $question) {
    echo $question['question'] . "\n";
    $userAnswer = readline("Your answer: ");
    $answers[] = $userAnswer;
}



$score = evaluateQuiz($questions, $answers);



echo "\nYou scored $score out of " . count($questions) . ".\n";



if ($score === count($questions)) {
    echo "Excellent job!\n";
} elseif ($score > count($questions) / 2) {
    echo "Good effort!\n";
} else {
    echo "Better luck next time!\n";
}


