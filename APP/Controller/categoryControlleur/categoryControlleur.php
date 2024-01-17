<?php 

include_once 'APP\model\CategoryModel\categoryDAO.php';

class categoryControlleur{
    
    public function category() {
        $categoryDAO = new CategoryDAO();
        $categories = $categoryDAO->getCategory();
        include_once 'APP\view\view_adamin\view_admin.php';
    }

    public function insertCategory() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom_cat = $_POST['nom_cat'];
            $cat_date = date('Y-m-d H:i:s');
            $category = new Category($nom_cat, $cat_date);
            $category->setNom_cat($_POST['nom_cat']);
    
            $categoryDAO = new CategoryDAO();
            $categoryDAO->insertCategory($category);
        }
    
        include_once 'APP\view\view_adamin\view_admin.php';
    }
    


}