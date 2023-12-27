<?php
require_once("../controller/quize.php");




$nextQuestion = $questionsModel->afficheQuestions();


$nextreponse = $reponseModel->affichereponse($nextQuestion[0]["idQuestion"]);


$result = array(
    "question" => $nextQuestion,
    "responses" => $nextreponse
);

echo json_encode($result);
