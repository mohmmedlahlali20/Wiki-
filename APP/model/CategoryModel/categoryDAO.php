<?php 
include 'APP\model\CategoryModel\category.php';


class CategoryDAO{
    private $connection;

    public function __construct(){
        $this->connection = Database::getInstance()->getConnection();
    }
    public function getCategory(){
            $sql = "SELECT * FROM `categorie`";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $caty = array();
                foreach ($result as $row)
                {
                    $obj = new Category(
                        $row['nom_cat'],
                        $row['cat_date']
                    );
                    $caty[] = $obj;
                }
                        return $caty;
        }

    public function insertCategory(Category $category){

            $sql = "INSERT INTO `categorie` (`nom_cat`) VALUES (:nom_cat)";
            $stmt = $this->connection->prepare($sql);
            $nom_cat = $category->getNom_cat();
            $stmt->bindParam(':nom_cat', $nom_cat);
            $stmt->execute();
            return $stmt;
       
    }

    public function updateCategory($category){

      
            $sql = "UPDATE `categorie` SET `nom_cat` = :nom_cat WHERE `categorie`.`nom_cat` = :nom_cat";
            $stmt = $this->connection->prepare($sql);
            $nom_cat = $category->getNom_cat();
            $stmt->bindParam(':nom_cat', $nom_cat);
            $stmt->execute();
            return $stmt;
        
    }
    public function deletCategory($nom){

            $sql = "DELETE FROM `categorie` WHERE `nom_cat` = :nom_cat";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(':nom_cat', $nom);
            $stmt->execute();
      
    }
    public function joinCat(){
        $sql ="SELECT nom_cat FROM  `categorie`
        JOIN wiki ON categorie.nom_cat = wiki.fk_cat
        WHERE categorie.nom_cat = wiki.fk_cat";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
         $result = $stmt->fetch(PDO::FETCH_ASSOC);
         return $result['nom_cat'];
    

    }
}