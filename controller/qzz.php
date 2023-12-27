<?php
require_once("../controller/quize.php");

session_start();

$requestData = json_decode(file_get_contents("php://input"), true);
$currentQuestionId = $requestData['currentQuestionId'];

$nextQuestion = $questionsModel->afficheQuestions();
$_SESSION["current_question_id"] = $nextQuestion[0]["idQuestion"];

$nextreponse = $reponseModel->affichereponse($nextQuestion[0]["idQuestion"]);


$result = array(
    "question" => $nextQuestion,
    "responses" => $nextreponse
);

echo json_encode($result);
