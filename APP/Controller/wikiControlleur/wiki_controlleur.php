<?php 

// wiki_controlleur.php

include_once 'APP\model\wikiModel\WikiDAO.php';

// include_once '../../model/wikiModel/WikiDAO.php';
// wiki_controlleur.php

class WikiController
{
    public function wiki()
    {
        $wikiDAO = new WikiDAO();

        $wikiData = $wikiDAO->selectWiki();
        // var_dump($wikiData);
        if (!empty($wikiData)) {
            include_once 'APP\view\view_wiki\home.php';
            echo '<br>';
        } else {
            header('Location: TMP/404.php');
            exit;
        }
    }

   
}
    
