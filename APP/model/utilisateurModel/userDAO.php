<?php

include_once 'APP\model\utilisateurModel\classUser.php';
include_once 'APP\connection\connection.php';  // Include the Database class file

class userDAO
{
    private $connection;

    public function __construct(){
        // Instantiate the Database class
        $this->connection = Database::getInstance()->getConnection();
    }

    public function InsertUser($email, $nom, $pswd, $role){
        try {
            $hashedPassword = password_hash($pswd, PASSWORD_DEFAULT);
    
            $sql = "INSERT INTO utilisateur (email, nom, pswd, role) VALUES (?, ?, ?, ?)";
            $stmt = $this->connection->prepare($sql);
    
            $stmt->bindParam(1, $email);
            $stmt->bindParam(2, $nom, PDO::PARAM_STR);
            $stmt->bindParam(3, $hashedPassword, PDO::PARAM_STR);
            $stmt->bindParam(4, $role, PDO::PARAM_STR);
            
            $stmt->execute();
            // $stmt->closeCursor();
            return $stmt;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
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