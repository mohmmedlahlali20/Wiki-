<?php 

include_once 'APP\connection\connection.php';

class Tag{
    private $nom_tag;

    public function __construct( $nom_tag){
        
        $this->nom_tag = $nom_tag;
    }
    
    

    /**
     * Get the value of nom_tag
     */ 
    public function getNom_tag()
    {
        return $this->nom_tag;
    }

    /**
     * Set the value of nom_tag
     *
     * @return  self
     */ 
    public function setNom_tag($nom_tag)
    {
        $this->nom_tag = $nom_tag;

        return $this;
    }
}