<?php 
include_once 'TMP\head.php';
// include_once 'APP\view\auteur_view\add_wiki.php';


// die();

include_once 'TMP\nav.php';
//includer les pages
include_once 'APP\Controller\userControlleur\loginControlleur.php';
include_once 'APP\Controller\wikiControlleur\wiki_controlleur.php';
include_once 'APP\Controller\controlleur_auteur\wikis_contro_auteur.php';
include_once 'APP\Controller\TagControlleur\tag.php';
include_once 'APP\Controller\categoryControlleur\categoryControlleur.php';
include_once 'APP\Controller\admin\contro_admin.php';
include_once 'APP\Controller\TagControlleur\tag.php';
include_once 'APP\Controller\admin\contro_admin.php';
include_once 'APP\Controller\controlleur_auteur\wikis_contro_auteur.php';
// creat object 

$wiki = new WikiController();
$userAction = new UserAction();
$category = new categoryControlleur();
$Admin = new Admin();
$auteur_wiki = new auteurWiki();
 $category = new categoryControlleur();
 $Auteur = new auteurWiki();


// if(isset($_GET['query'])){
//     $searchTerm = $_GET['query'];
//     $wiki->search($searchTerm);
//     $data = $wiki->search($searchTerm);
//     echo json_encode($data);
// }

if (isset($_GET['action'])) {
    // echo "Entering switch case for: " . $_GET['action'];
    switch ($_GET['action']) { 
        case "register":
            $userAction->register();
            break;
        case "registerCOntroller":
            $userAction->registerCOntroller();
            break;
        case "login":
            $userAction->login();
            break;
        case "loginControlleur":
            $userAction->loginControlleur();
            break;
        case "logout":
                $userAction->LogoutAction();
            break;
        case "addCategory":
              $category->category();
            break;
        case "admin":
            $Admin->dashbord();
            break;
        case "insertCategory":
            $category->insertCategory();
            break;
        case "add_wiki":
            $auteur_wiki->getAllTag();
            break;
        case "ADD":
            $auteur_wiki->addWikiAction();
            break;
        case "deleteCat":
            $Admin->deleteCat();
            break;
        case "deleteTag":
            $Admin->deleteTG();
            break;
        case "addCat":
            $Admin->insertCAT();
            break;
        case "search":
            $searchTerm = $_GET['searchTerm'];
            $wiki->search($searchTerm);
            break;
        case "addTag":
            $Admin->inseretTG();
            break;
            case "archive":
            $Admin->archiverWikiByTitre($titre);
            break;
        case "auteur":
             $auteur_wiki->getAllTag();
            break;
        case "show":
            $wiki->show($_GET['id']);
            break;
        default:
            echo ('no route found for : ' . $_GET['action']);
    }
}
else {
    $wiki->wiki();
}
include_once 'TMP\script.php';
include_once 'TMP\footer.php';
