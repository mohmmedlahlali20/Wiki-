<?php

include_once 'APP\model\utilisateurModel\userDAO.php';

class UserAction {

    public function login() {
        include_once 'APP\view\view_user\login.php';
    }

    public function loginController() {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'loginController') {

            
            
            $email = $_POST['email'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $role = 'auteur';
            $user = new User($email,$name,$password,$role);

            

            try {
                $userDAO = new UserDAO(); // Make sure UserDAO is defined
                

                if ($userDAO->insertUser($user)) {
                    header('Location: index.php');
                    return;
                } else {
                    header('Location: TMP\404.php');
                    return;
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }else{
            exit('logic cant be done');
        }
    }

    public function registerController() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'register') {
            // Handle registration logic
            $email = $_POST['registerEmail'];
            $password = $_POST['registerPassword'];

            // Validate and sanitize inputs (uncomment if needed)
            // $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            $userDAO = new UserDAO(); // Make sure UserDAO is defined
            $userDAO->getUserByEmail($email);

            header('Location: index.php');
            include_once 'APP\view\view_user\registerView.php';
            exit;
        }
    }

    public function register() {
        include_once 'APP\view\view_user\registerView.php';
    }
}

// $userAction = new UserAction();
// $userAction->login();
// $userAction->loginController();
// $userAction->registerController();
// $userAction->register();

 