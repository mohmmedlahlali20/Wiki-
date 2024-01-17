<?php 

include_once 'APP\connection\connection.php';
// include_once '../../connection/connection.php';
class Wiki{
    private $id_w;
    
    private $titre;

    private $contenu;

    private $wiki_date;

    private $isArchive;

  

    private $fk_aut_email;

     private $fk_cat;

public function __construct($id_w , $titre ,$contenu,$wiki_date , $isArchive  ,$fk_aut_email , $fk_cat){

    $this->id_w = $id_w;
    $this->titre = $titre;
    $this->contenu = $contenu;
    $this->wiki_date = $wiki_date;
    $this->isArchive = $isArchive;
    
    $this->fk_aut_email = $fk_aut_email;
    $this-> fk_cat = $fk_cat;


}




    /**
     * Get the value of id_w
     */ 
    public function getId_w()
    {
        return $this->id_w;
    }

    /**
     * Set the value of id_w
     *
     * @return  self
     */ 
    public function setId_w($id_w)
    {
        $this->id_w = $id_w;

        return $this;
    }

    

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of contenu
     */ 
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get the value of wiki_date
     */ 
    public function getWiki_date()
    {
        return $this->wiki_date;
    }

    /**
     * Set the value of wiki_date
     *
     * @return  self
     */ 
    public function setWiki_date($wiki_date)
    {
        $this->wiki_date = $wiki_date;

        return $this;
    }

    /**
     * Get the value of isArchive
     */ 
    public function getIsArchive()
    {
        return $this->isArchive;
    }

    /**
     * Set the value of isArchive
     *
     * @return  self
     */ 
    public function setIsArchive($isArchive)
    {
        $this->isArchive = $isArchive;

        return $this;
    }

 
    public function getFk_aut_email()
    {
        return $this->fk_aut_email;
    }

    /**
     * Set the value of fk_aut_email
     *
     * @return  self
     */ 
    public function setFk_aut_email($fk_aut_email)
    {
        $this->fk_aut_email = $fk_aut_email;

        return $this;
    }

     /**
      * Get the value of fk_cat
      */ 
     public function getFk_cat()
     {
          return $this->fk_cat;
     }

     /**
      * Set the value of fk_cat
      *
      * @return  self
      */ 
     public function setFk_cat($fk_cat)
     {
          $this->fk_cat = $fk_cat;

          return $this;
     }
}