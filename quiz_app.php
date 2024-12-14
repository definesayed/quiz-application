<?php
//predefined questions and answers
$questions=[
    ["question"=>"What is 2+2?","correct"=>"4"],
    ["question"=>"What is the capital of France?","correct"=>"Paris"],
    ["question"=>"Who wrote \"Hamlet\"?","correct"=>"Shakespeare"]
];

//answer input from user
$answers=[];
foreach($questions as $index => $question){
    echo ($index+1).". ".$question["question"];
    echo PHP_EOL;
    $answers[]=trim(readline("Your answer: "));
}

//evaluation and scoring
function evaluateQuiz(array $questions, array $answers):int{
    $score=0;
    foreach ($questions as $index => $question) {
        if($answers[$index]===$question["correct"]){
            $score++;
        }
    }
    return $score;
}

//output the score
$score=evaluateQuiz($questions,$answers);
echo PHP_EOL;
echo "You scored {$score} out of ".count($questions).".";
echo PHP_EOL;

//the feedback
if($score===count($questions)){
    echo "Excellent job!";
}elseif($score>1){
    echo "Good effort!";
}else{
    echo "Better luck next time!";
}

?>