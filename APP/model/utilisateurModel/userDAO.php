<?php


include_once 'APP\model\utilisateurModel\User.php';
  

class userDAO
{
    private $connection;

    public function __construct(){
        
        $this->connection = Database::getInstance()->getConnection();
    }
    
    public function InsertUser(User $user) {
        $email = $user->getEmail();
        $nom = $user->getNom();
        $hashedPassword = password_hash($user->getPswd(), PASSWORD_DEFAULT); 
    
        if ($this->isEmailExists($email)) {
            return false;
        }
    
        
            $sql = "INSERT INTO `utilisateur` (`email`, `nom`, `pswd`) VALUES (:email, :nom, :hashedPassword)";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':hashedPassword', $hashedPassword);
            $stmt->execute();
    
            return true; 
       
    }
    

    private function isEmailExists($email) {
        $sql = "SELECT COUNT(*) FROM `utilisateur` WHERE `email` = :email";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetchColumn() > 0;
        return $result;
    }


    public function getUserByEmail($email) {
     
            $sql = "SELECT * FROM `utilisateur` WHERE `email` = :email";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
    
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($user) {
                return $user;
            } else {
                return false; 
            }
      
    }
    public function CountUser(){
        $count = "SELECT COUNT(*) FROM `utilisateur`";
        $stmt = $this->connection->prepare($count);
        $stmt->execute();
        
    }
    
}