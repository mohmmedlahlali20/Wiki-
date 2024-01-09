<?php

include_once 'APP\model\utilisateurModel\userDAO.php';

 function login(){
    include_once 'APP\view\view_user\login.php';

 }

function loginController() {
  
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nom = $_POST['name']; 
        $role = 'auteur'; 
        try {
            $userDAO = new UserDAO();
            $user = $userDAO->insertUser($email, $nom, $password, $role);
            if($user === false) {   
                header('Location: loginIndex.php');
                return;
                }  else {
                    header('Location: index.php');
                    return;
                }             
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    
}

login();
loginController();