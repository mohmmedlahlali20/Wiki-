<?php 
include_once 'APP\model\TagModel\TagDAO.php'; 
// include_once __DIR__ . '/APP/model/TagModel/TagDAO.php';

class TagControlleur{

    public function add_tag(){
        include_once 'APP\view\view_tag\Add_Tag.php';
        
    }
    public function AddTag(){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['nom_tag'])){
                $nom_tag = $_POST['nom_tag'];
                $tag = new Tag($nom_tag);
                $tagDAO = new TagDAO();
                $tagDAO->InsertTag($tag);
            }
        }
    }
         

    }
