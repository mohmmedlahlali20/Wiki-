<?php 


include_once 'APP\model\wikiModel\WikiDAO.php';

class WikiController{


    public function wiki($word = '')
    {

        $wikiDAO = new WikiDAO();
            $wikiData = $wikiDAO->selectWiki($word);
  
        if (!empty($wikiData)) {
            include_once 'APP\view\view_wiki\home.php';
            echo '<br>';
        } else {
            header('Location: TMP/404.php');
            exit;
        }

    }

    public function show($id_w){

        $wikiDaO = new WikiDAO;
        $wikiData = $wikiDaO->showDAO($id_w);
         $Wiki_TG = $wikiDaO->getAlltag($id_w);
        include_once 'APP\view\view_wiki\singelWiki.php';

    }


    public function search($searchTerm)
    {
        if (!$searchTerm) {
            $searchTerm = '';
        }
    
        $this->wiki($searchTerm);
    }
    
    
}

class vehicule {



}


class voiture extends vehicule{


}

$obj = new voiture();
  