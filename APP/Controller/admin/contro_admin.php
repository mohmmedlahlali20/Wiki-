<?php 
include_once 'APP\model\CategoryModel\categoryDAO.php';
include_once 'APP\model\TagModel\TagDAO.php';
class Admin{

    public function dashbord(){
        $tag = new TagDAO();
        $tags = $tag->getTags();
        $category = new CategoryDAO();
        $categories = $category->getCategory();
        $wiki = new WikiDAO();
        $wikis = $wiki->selectWiki();
        include_once 'APP\view\view_adamin\view_admin.php';
    }

    public function insertCAT(){
        extract($_POST);
        $cat = new Category($nom_cat, $cat_date);
        $category = new CategoryDAO();
        $category->insertCategory($cat);
        header('location: index.php?action=admin');
        exit();
    }

    public function deleteCat(){
        $nom = $_GET['nom_cat'];
        $category = new CategoryDAO();
        $join = $category->joinCat();
if ($join) {
    
    header('location: index.php?action=admin'); 

}else {
    $category->deletCategory($nom);
            header('location: index.php?action=admin'); 

        exit();
} 
    }
    public function deleteTG(){
        
        $nom = $_GET['nom'];
        $category = new TagDAO();
        $category->deleteTag($nom);
        header('location: index.php?action=admin');
        exit();
    }
    public function inseretTG() {
        extract($_POST);
        $TG = new Tag($nom_tag);
        $tag = new TagDAO();
       $tag->insertTag($TG);
       header('location: index.php?action=admin');
       exit();
    }
    public function modifyCAT() {
        extract($_POST);
        $nom = $_GET['nom_cat'];
        $category = new CategoryDAO();
        $category->updateCategory( $nom_cat);
        header('location: index.php?action=admin');
        
    }
    public function archiverWikiByTitre($titre) {
        $titre = $_GET['titre'];
        $wiki = new WikiDAO();
    
        if (!empty($titre)) {
            $wiki->archiverWiki();
            header("Location: index.php?action=admin"); 
            exit();
        } else {
            echo 'error';
        }
    }
    

} 
