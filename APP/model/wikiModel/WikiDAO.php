<?php 
// include_once 'APP\model\wikiModel\Wiki.php';
include_once 'Wiki.php';

// Set properties of $wiki


class WikiDAO{
    private $connection;

    public function __construct(){
        $this->connection = Database::getInstance()->getConnection();
    }
    
    public function InserWiki(Wiki $wiki){
        // Assuming $wiki is an object with properties corresponding to the database columns
        $sql = "INSERT INTO `wiki` (`titre`, `contenu`, `wiki_date`, `isArchive`, `img`, `fk_aut_email`, `fk_cat`) 
                VALUES (:titre, :contenu, :wiki_date, :isArchive, :img, :fk_aut_email, :fk_cat)";
        // Prepare the SQL statement
        $stmt = $this->connection->prepare($sql);
        $wiki = $wiki->getTitre();
        $contenu = $wiki->getContenu();
        $Wiki_date = $wiki->getWiki_date();
        $IsArchiver =$wiki->getIsArchive();
        $img = $wiki->getImg();
        $fk_aut_email = $wiki->getFk_aut_email();
        $Fk_cat = $wiki->getFk_cat();
        $fk_cat = $wiki->getFk_cat();
        // Bind parameters
        $stmt->bindParam(':titre', $wiki );
        $stmt->bindParam(':contenu', $contenu);
        $stmt->bindParam(':wiki_date', $Wiki_date );
        $stmt->bindParam(':isArchive', $IsArchiver);
        $stmt->bindParam(':img',  $img);
        $stmt->bindParam(':fk_aut_email', $fk_aut_email);
        $stmt->bindParam(':fk_cat', $Fk_cat);
        
        $stmt->bindParam(':fk_cat', $fk_cat);
    
        // Execute the statement
        $stmt->execute();
    }
    public function selectWiki()
    {
        try {
            $sql = "SELECT * FROM `wiki`";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            return null;
        }
    }

    public function search($search){
        try {
            $sql = "SELECT * FROM `wiki` WHERE `contenu` LIKE :search";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute(['search' => '%' . $search . '%']);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            return null;
        }
    }
    
}