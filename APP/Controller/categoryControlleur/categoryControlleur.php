<?php 

include_once 'APP\model\CategoryModel\categoryDAO.php';

class categoryControlleur{
    
    public function category() {
        $categoryDAO = new CategoryDAO();
        $categories = $categoryDAO->getCategory();

        include_once 'APP\view\view_adamin\view_admin.php';
    }
    


}