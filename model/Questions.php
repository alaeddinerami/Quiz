<?php

require_once("./../config/db.php");
session_start();
session_destroy();
class Questions
{

    private Database $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function afficheQuestions()
    {
        $displayedQuestions = $_SESSION['displayed_questions'] ?? [];
        $questionIds = implode(',', $displayedQuestions);

        $sql = "SELECT * FROM questions  ";

        if (!empty($displayedQuestions)) {
            $sql .= "WHERE idQuestion NOT IN ($questionIds) ";
        }

        $sql .= " ORDER BY RAND() LIMIT 1";

        try {
            $query = $this->db->connect()->query($sql);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            if (!empty($result)) {
                $_SESSION['displayed_questions'][] = $result[0]["idQuestion"];
            }

            return $result;
        } catch (\Exception $e) {
            throw new \Exception("Error retrieving all questions: " . $e->getMessage());
        }
    }
}

// $q = new Questions();
// var_dump($q->afficheQuestions());
