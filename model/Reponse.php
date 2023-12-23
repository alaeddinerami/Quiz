<?php
require_once('../config/db.php');
require('./Questions.php');

class reponse{
    private $idreponse;
    private $textreponse;
    private $statusreponse;

    private Question $question;

    public function __construct() {
    }
}
?>