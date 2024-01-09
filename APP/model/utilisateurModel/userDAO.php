<?php

include_once 'APP\model\utilisateurModel\User.php';
include_once 'APP\connection\connection.php';  // Include the Database class file

class userDAO
{
    private $connection;

    public function __construct(){
        // Instantiate the Database class
        $this->connection = Database::getInstance()->getConnection();
    }

    public function InsertUser(User $user){
        try {
            
            $hashedPassword = password_hash($user->getPswd(), PASSWORD_DEFAULT);
    
            $sql = "INSERT INTO `utilisateur` (`email`, `nom`, `pswd`) VALUES (?, ?, ?)";
            $stmt = $this->connection->prepare($sql);

            $nom = $user->getNom();
            $email = $user->getEmail();


            $stmt->bindParam(1, $email);
            $stmt->bindParam(2, $nom, PDO::PARAM_STR);
            $stmt->bindParam(3, $hashedPassword, PDO::PARAM_STR);
            
            
            $stmt->execute();

            
          
            return $stmt;

            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            exit('here');
        }
    }
    
    
    public function getUserByEmail($email) {
        try {
            $sql = "SELECT * FROM utilisateur WHERE email = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(1, $email, PDO::PARAM_STR);
            $stmt->execute();
    
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            $stmt->closeCursor();
    
            return $user;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}