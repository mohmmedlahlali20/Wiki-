<?php 
include 'APP\model\TagModel\Tag.php';

class TagDAO
{
    private $connection;

    public function __construct(){
        
        $this->connection = Database::getInstance()->getConnection();
    }

    public function getAllTags(){
        try {
           
            $sql = "SELECT * FROM `tag`";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            return null;
        }
    }

    public function insertTag(Tag $tag){
        try {
            $sql = "INSERT INTO `tag` (`nom_tag`) VALUES (:nom_tag)";
            $stmt = $this->connection->prepare($sql);
            $nom_tag = $tag->getNom_tag();
            $stmt->bindParam(':nom_tag', $nom_tag);
            $stmt->execute();
            return $stmt;
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            return null;
        }
    }
    public function DeleteTage($nom_tag) {
        try {
            $sql = "DELETE FROM `tag` where nom_tag = :nom_tag";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();
            return $stmt;
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            return null;
        }
    }
    public function updateTag($tag){
        try {
            $sql = "UPDATE `tag` SET `nom_tag` = :nom_tag WHERE `tag`.`nom_tag` = :nom_tag";
            $stmt = $this->connection->prepare($sql);
            $nom_tag = $tag->getNom_tag();
            $stmt->bindParam(':nom_tag', $nom_tag);
            $stmt->execute();
            return $stmt;
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            return null;
        }
    }
    

}