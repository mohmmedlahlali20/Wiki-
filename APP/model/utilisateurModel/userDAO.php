<?php


include_once 'APP\model\utilisateurModel\User.php';
// include_once '../utilisateurModel/User.php';
// include_once '../../connection/connection.php';
include_once 'APP\connection\connection.php';  

class userDAO
{
    private $connection;

    public function __construct(){
        
        $this->connection = Database::getInstance()->getConnection();
    }
    
    public function InsertUser(User $user) {
        $email = $user->getEmail();
        $nom = $user->getNom();
        $hashedPassword = password_hash($user->getPswd(), PASSWORD_DEFAULT); // Use password_hash here
    
        if ($this->isEmailExists($email)) {
            return false; // Email already registered
        }
    
        try {
            $sql = "INSERT INTO `utilisateur` (`email`, `nom`, `pswd`) VALUES (:email, :nom, :hashedPassword)";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':hashedPassword', $hashedPassword);
            $stmt->execute();
    
            return true; // User inserted successfully
        } catch (PDOException $e) {
            error_log('Error inserting user: ' . $e->getMessage());
            return false; // Operation failed
        }
    }
    

    private function isEmailExists($email) {
        $sql = "SELECT COUNT(*) FROM `utilisateur` WHERE `email` = :email";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->fetchColumn() > 0;
    }
    public function getUserByEmail($email) {
        try {
            $sql = "SELECT * FROM `utilisateur` WHERE `email` = :email";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
    
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($user) {
                return $user;
            } else {
                return false; // User not found
            }
        } catch (PDOException $e) {
            error_log('Error retrieving user by email: ' . $e->getMessage());
            return false; // Operation failed
        }
    }
    
}