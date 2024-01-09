<?php
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
include_once 'TMP\script.php';
