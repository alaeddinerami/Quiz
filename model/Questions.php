<?php

require_once("./../config/db.php");

class Questions
{

    private Database $db;
    public  function __construct()
    {
        $this->db = new Database();
    }


    public function afficheQuestions()
    {
        $sql = "select * from questions";
        $query = $this->db->connect()->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}


$q = new Questions();
var_dump($q->afficheQuestions());
