<?php 

include_once 'APP\Controller\loginControlleur.php';
session_start();

include_once 'TMP\head.php';
include_once 'TMP\nav.php';

<<<<<<< HEAD
// register();
// login();

if (isset($_GET['action'])) {

    switch ($_GET['action']) {
            case "login": {
                $userAction  = new UserAction();
                $userAction->login();
            break;
            }
            case "register": {
                
                $userAction  = new UserAction();
                $userAction->register();
                break;
            }
            case "loginController": {
                $userAction  = new UserAction();
                $userAction->loginController();
                break;
            }
            default: {
                exit('no route found for : '.$_GET['action']);
            }
 }

 exit('outside the switch ');
}
=======
>>>>>>> e6e36227f5bfa443d3dbeda330bef8e8db1ff9dd
include_once 'TMP\script.php';
include_once 'TMP\footer.php';
 