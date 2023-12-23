<?php


require_once "./../model/Questions.php";

class Question
{
    private Questions $questions;
    public function __construct()
    {
        $this->questions = new Questions();
    }
    public function get_question()
    {
        return  $this->questions->afficheQuestions();
    }
}
