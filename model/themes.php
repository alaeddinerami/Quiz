<?php
require_once('../config/db.php');

class themes {
    private $idtheme;
    private $nometheme;

    public function __construct() {

    }
    /**
     * Get the value of idtheme
     */ 
    public function getIdtheme()
    {
        return $this->idtheme;
    }

    /**
     * Set the value of idtheme
     *
     * @return  self
     */ 
    public function setIdtheme($idtheme)
    {
        $this->idtheme = $idtheme;

        return $this;
    }

    /**
     * Get the value of nometheme
     */ 
    public function getNometheme()
    {
        return $this->nometheme;
    }

    /**
     * Set the value of nometheme
     *
     * @return  self
     */ 
    public function setNometheme($nometheme)
    {
        $this->nometheme = $nometheme;

        return $this;
    }
}