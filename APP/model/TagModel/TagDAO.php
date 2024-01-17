<?php
include 'APP\model\TagModel\Tag.php';

class TagDAO
{
    private $connection;

    public function __construct()
    {
        $this->connection = Database::getInstance()->getConnection();
    }

    
public function getTags()
{
    $sql = "SELECT * FROM `tag`";

    $stmt = $this->connection->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $tags = array();
    
    foreach ($result as $tagData) {
        $tag = new Tag($tagData['nom_tag']);
        $tags[] = $tag;
        // var_dump($tag);
    } 

    return $tags;
   
}


    public function insertTag(Tag $tag)
    {
        $sql = "INSERT INTO `tag` (`nom_tag`) VALUES (:nom_tag)";
        $stmt = $this->connection->prepare($sql);
        $nom_tag = $tag->getNom_tag();
        $stmt->bindParam(':nom_tag', $nom_tag, PDO::PARAM_STR);
        $stmt->execute();

    }

    public function deleteTag($nom_tag)
    {
        $sql = "DELETE FROM `tag` WHERE nom_tag = :nom_tag";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':nom_tag', $nom_tag, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function updateTag(Tag $tag)
    {
        $sql = "UPDATE `tag` SET `nom_tag` = :nom_tag WHERE `tag`.`nom_tag` = :nom_tag";
        $stmt = $this->connection->prepare($sql);
        $nom_tag = $tag->getNom_tag();
        $stmt->bindParam(':nom_tag', $nom_tag, PDO::PARAM_STR);

        return $stmt->execute();
    }
    public function countTag(){
        $sql = "SELECT COUNT(*) as count FROM tags";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_COLUMN);
        return $result;

    }
   
}