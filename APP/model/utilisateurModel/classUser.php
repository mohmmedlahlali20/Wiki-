<?php 
include_once 'APP\connection\connection.php';

class User {
    private $email;

     private $nom;

     private $pswd;
      
     private $role; 

     public function __construct($email, $nom, $pswd, $role){

        $this->email = $email;
        $this->nom = $nom;
        $this->pswd = $pswd;
        $this->role = $role;
        
     }




    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

     /**
      * Get the value of nom
      */ 
     public function getNom()
     {
          return $this->nom;
     }

     /**
      * Set the value of nom
      *
      * @return  self
      */ 
     public function setNom($nom)
     {
          $this->nom = $nom;

          return $this;
     }

     /**
      * Get the value of pswd
      */ 
     public function getPswd()
     {
          return $this->pswd;
     }

     /**
      * Set the value of pswd
      *
      * @return  self
      */ 
     public function setPswd($pswd)
     {
          $this->pswd = $pswd;

          return $this;
     }

     /**
      * Get the value of role
      */ 
     public function getRole()
     {
          return $this->role;
     }

     /**
      * Set the value of role
      *
      * @return  self
      */ 
     public function setRole($role)
     {
          $this->role = $role;

          return $this;
     }
}