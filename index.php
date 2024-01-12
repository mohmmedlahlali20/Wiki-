<?php 
session_start();
include_once 'TMP\head.php';
include_once 'TMP\nav.php';
include_once 'APP\Controller\userControlleur\loginControlleur.php';
include_once 'APP\Controller\wikiControlleur\wiki_controlleur.php';
include_once 'APP\view\view_adamin\view_admin.php';
include_once 'APP\Controller\TagControlleur\tag.php';
include_once 'APP\Controller\categoryControlleur\categoryControlleur.php';
include_once 'APP\Controller\admin\contro_admin.php';
$wiki = new WikiController();
$userAction = new UserAction();
$tagController = new TagControlleur();
$category = new categoryControlleur();
$Admin = new Admin();

if (isset($_GET['action'])) {
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
        case "add_tag":
            $tagController->add_tag();
            break;
        case "ajouterTAG":
            $tagController->AddTag();
            break;
        case "category":
            $category->category();
            break;
        case "admin":
            $Admin->WailIsAdmin();
            break;
        default:
            exit('no route found for : ' . $_GET['action']);
    }
}
 else {
    $wiki->wiki();
}



include_once 'APP\view\view_tag\Add_Tag.php';
include_once 'TMP\script.php';
include_once 'TMP\footer.php';
