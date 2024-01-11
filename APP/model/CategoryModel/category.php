<?php 

include_once 'APP\connection\connection.php';
 
class Category{
    private $nom_cat;

    private  $cat_date;


    public function __construct( $nom_cat, $cat_date){

        $this->nom_cat = $nom_cat;
        $this->cat_date = $cat_date;
    }

    /**
     * Get the value of nom_cat
     */ 
    public function getNom_cat()
    {
        return $this->nom_cat;
    }

    /**
     * Set the value of nom_cat
     *
     * @return  self
     */ 
    public function setNom_cat($nom_cat)
    {
        $this->nom_cat = $nom_cat;

        return $this;
    }

    /**
     * Get the value of cat_date
     */ 
    public function getCat_date()
    {
        return $this->cat_date;
    }

    /**
     * Set the value of cat_date
     *
     * @return  self
     */ 
    public function setCat_date($cat_date)
    {
        $this->cat_date = $cat_date;

        return $this;
    }
}