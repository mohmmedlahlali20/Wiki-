<?php 
include 'APP\model\CategoryModel\category.php';


class CategoryDAO{
    private $connection;

    public function __construct(){
        
        $this->connection = Database::getInstance()->getConnection();
    }

    public function getCategory(){
        try {
            $sql = "SELECT * FROM `categorie`";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            return []; 
        }
    }
    public function insertCategory($category){

        try {
            $sql = "INSERT INTO `category` (`nom_cat`) VALUES (:nom_cat)";
            $stmt = $this->connection->prepare($sql);
            $nom_cat = $category->getNom_cat();
            $stmt->bindParam(':nom_cat', $nom_cat);
            $stmt->execute();
            return $stmt;
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            return null;
        }
    }

    public function updateCategory($category){

        try {
            $sql = "UPDATE `category` SET `nom_cat` = :nom_cat WHERE `category`.`nom_cat` = :nom_cat";
            $stmt = $this->connection->prepare($sql);
            $nom_cat = $category->getNom_cat();
            $stmt->bindParam(':nom_cat', $nom_cat);
            $stmt->execute();
            return $stmt;
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            return null;
        }
    }
    public function deletCategory($category){

        try {
            $sql = "DELETE FROM `category` WHERE `category`.`nom_cat` = :nom_cat";
            $stmt = $this->connection->prepare($sql);
            $nom_cat = $category->getNom_cat();
            $stmt->bindParam(':nom_cat', $nom_cat);
            $stmt->execute();
            return $stmt;
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            return null;
        }
    }
}