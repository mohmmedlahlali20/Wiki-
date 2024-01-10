<?php

include_once 'APP\model\utilisateurModel\userDAO.php';

class UserAction {

  
public function  registerCOntroller()  {
        include_once 'APP\view\view_user\register.php';
    }
    
    public function  register(){
        var_dump($_POST);
        print_r($_POST);
    //    exit('here');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            var_dump($_POST);
            $email = $_POST['email'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $role = 'auteur';
            $user = new User($email,$password,$name,$role);
            try {
                $userDAO = new UserDAO(); 
                var_dump($userDAO);
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
        }
        }
  


        public  function login() {
        include_once 'APP\view\view_user\login.php';
    }
    public function loginControlleur() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['registerEmail'];
            $password = $_POST['registerPassword'];
            // Sanitize email
            $hash_password = password_hash($password, PASSWORD_DEFAULT);
            // Save $hash_password in the database
                        $userDAO = new UserDAO();

            $user = $userDAO->getUserByEmail($email);
          
        if ($_SERVER['$_REQUEST METHOD'] === 'POST') {
           if ($user && password_verify($hash_password, $user['pswd'])) {
                if ($user['role'] === 'admin') {
                    header('Location: dashboard_admin.php');
                   return ;
                } else {
                    header('Location: index.php');
                   
                }
                exit;
            } else {
                header('Location: index.php');

                exit;
            }
        }
           
        }
    
}
    
  }

// $userAction = new UserAction();
// $userAction->login();
// $userAction->loginController();
// $userAction->registerController();
// $userAction->register();

 