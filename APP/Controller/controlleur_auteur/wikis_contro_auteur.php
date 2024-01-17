<?php 
include_once 'APP\model\wikiModel\WikiDAO.php';
include_once 'APP\model\CategoryModel\categoryDAO.php';
include_once 'APP\model\TagModel\TagDAO.php';
class auteurWiki{
   


    public function getAllTag (){
        $tag = new TagDAO();
        $tags = $tag->getTags();
        // var_dump($tags);
         $category = new CategoryDAO();
        $categories = $category->getCategory();
                // var_dump($categories);

        include_once 'APP\view\auteur_view\add_wiki.php';

    }

  
    public function addWikiAction() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $content = $_POST['wiki'];
            $categoryId = $_POST['category'];
            $tagIds = isset($_POST['tag']) ? $_POST['tag'] : [];
            $fk_aut_email = $_SESSION['user']['email'];
            $w=new Wiki(0, $title, $content, 0, 0, $fk_aut_email, $categoryId);
            $wikiDAO = new WikiDAO();
            $result = $wikiDAO->InsertWiki($w);
            $id=$wikiDAO->getLastId();
            foreach($tagIds as $tagId) {
                $wikiDAO->insert_wiki_tag($id, $tagId);
            }

            
            if ($result) {
                header('location: index.php');
            } else {
                echo "Failed to insert wiki.";
            }

        }


    }
    



}