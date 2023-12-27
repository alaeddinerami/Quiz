<?php
require("../model/Questions.php");
require("../model/Reponse.php");

$questionsModel = new Questions();
$questions = $questionsModel->afficheQuestions();

$reponseModel = new Reponse();
$reponse = $reponseModel->affichereponse($questions[0]["idQuestion"]);
