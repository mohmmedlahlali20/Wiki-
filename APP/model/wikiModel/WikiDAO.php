<?php 
// include_once 'APP\model\wikiModel\Wiki.php';
include_once 'Wiki.php';

// Set properties of $wiki


class WikiDAO{
    private $connection;

    public function __construct(){
        $this->connection = Database::getInstance()->getConnection();
    }
    
    public function InsertWiki(Wiki $wiki){
        $query = "INSERT INTO wiki (titre, contenu, wiki_date, isArchive, fk_aut_email, fk_cat)
        VALUES (:titre, :contenu, NOW(), :isArchive, :fk_aut_email, :fk_cat)";
            
            $stmt = $this->connection->prepare($query);

            
            $titre = $wiki->getTitre();
            $contenu = $wiki->getContenu();
           
            $isArchive = $wiki->getIsArchive();
            // $img = $wiki->getImg();31
            $fk_aut_email = $wiki->getFk_aut_email();
            $fk_cat = $wiki->getFk_cat();
            $stmt->bindParam(':titre', $titre);
            $stmt->bindParam(':contenu', $contenu);
            
            $stmt->bindParam(':isArchive', $isArchive);
            // $stmt->bindParam(':img', $wiki->getImg());
            $stmt->bindParam(':fk_aut_email', $fk_aut_email);
            $stmt->bindParam(':fk_cat', $fk_cat);

            // Execute the query
            $stmt->execute();

            return true; 



    }
    public function getLastId(){
        return $this->connection->lastInsertId();
    }

    public function insert_wiki_tag($wiki_id, $tag_id){
        $sql = "INSERT INTO wiki_tag (fk_nom_tag,fk_id_w) VALUES (:tag_id,:wiki_id )";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':wiki_id', $wiki_id);
        $stmt->bindParam(':tag_id', $tag_id);
        $stmt->execute();
    }
    public function selectWiki($word = '')
    {
        $sql = "SELECT * FROM `wiki` WHERE `isArchive` = 0 ORDER BY `wiki`.`id_w` DESC LIMIT 6";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function showDAO($id_w){
        $sql = "SELECT * FROM `wiki` WHERE `id_w` = :id_w"; 
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id_w', $id_w);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }
    public function getWikiCount() {
        $sql = "SELECT COUNT(*) as count FROM wiki"; 
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_COLUMN);
        return $result;
    }
    public function getAlltag($fk_id_w){
        $sql = "SELECT * FROM `wiki_tag` where fk_id_w = :id_w ";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id_w', $fk_id_w);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function search($searchTerm){
        $sql = "SELECT * FROM `wiki` WHERE `titre` LIKE :search";
        $stmt = $this->connection->prepare($sql);
        $searchValue = '%' . $searchTerm . '%'; 
        // var_dump($searchValue);
        $stmt->bindValue(':search', $searchValue, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function archiverWiki(){

        $sql = "UPDATE `wiki` SET `isArchive` = 1 WHERE `isArchive` = 0";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    }
