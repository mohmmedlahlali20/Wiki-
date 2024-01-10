
<?php 
session_start();

include_once 'TMP\head.php';
include_once 'TMP\nav.php';
include_once 'APP\Controller\loginControlleur.php';
include_once 'APP\Controller\wikiControlleur\wiki_controlleur.php';
$wiki = new WikiController();




if (isset($_GET['action'])) {

    switch ($_GET['action']) {
        
            case "register": {
                $userAction  = new UserAction();
                $userAction->register();
                break;
            }
            case "registerCOntroller": {
                $userAction  = new UserAction();
                $userAction->registerCOntroller();
                break;
            }
            case "login": {
                $userAction  = new UserAction();
                $userAction->login();
                break;
            }
            case "loginControlleur": {
                
                $userAction  = new UserAction();
                $userAction->loginControlleur();
               
                break;
            }
            default: {
                exit('no route found for : '.$_GET['action']);
            }
 }

}else $wiki->wiki();  
include_once 'TMP\script.php';
include_once 'TMP\footer.php';
 