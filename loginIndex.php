<?php
<<<<<<< HEAD


include_once 'TMP\head.php';

=======
session_start();

include_once 'TMP\head.php';
include_once 'APP\Controller\loginControlleur.php';

login();

if (isset($_GET['action'])) {

    switch ($_GET['action']) {

        case 'login':
           include_once 'APP\Controller\loginControlleur.php';
           loginController();
            break;
        
       


 }
}
>>>>>>> e6e36227f5bfa443d3dbeda330bef8e8db1ff9dd
include_once 'TMP\script.php';
