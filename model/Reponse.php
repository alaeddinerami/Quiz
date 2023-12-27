<?php
require_once('../config/db.php');


class Reponse
{

    private Database $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function affichereponse($idQuestion)
    {
        $sql = "SELECT * FROM `reponse` WHERE idQuestion=$idQuestion";
        $query = $this->db->connect()->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
