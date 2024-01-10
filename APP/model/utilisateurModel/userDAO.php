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

    public function InsertUser(User $user) {
        try {
    
            $sql = "INSERT INTO `utilisateur` (`email`, `nom`, `pswd`) VALUES (:email, :nom, :hashedPassword)";
            $stmt = $this->connection->prepare($sql);
            $hashedPassword = password_hash($user->getPswd(), PASSWORD_DEFAULT);

            $nom = $user->getNom();
            $email = $user->getEmail();
    
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':hashedPassword', $hashedPassword);
    
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
    
            // $stmt->closeCursor();
    
            return $user;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    

}