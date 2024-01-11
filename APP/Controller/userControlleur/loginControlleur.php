<?php

include_once 'APP\model\utilisateurModel\userDAO.php';
// include_once '../model/utilisateurModel/userDAO.php';
class UserAction {

public function  register()  {
        include_once 'APP\view\view_user\register.php';
    }
    public function   registerCOntroller(){
               var_dump($_POST);     

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo 'Register';
            $email = $_POST['email'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $role = 'auteur';
            $user = new User($email,$password,$name,$role);
            
            try {
                $userDAO = new UserDAO(); 
                
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
  


        public  function login () {
        include_once 'APP\view\view_user\login.php';
    }
    public function loginControlleur() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['registerEmail'];
            $password = $_POST['registerPassword'];

            $hash_password = password_hash($password, PASSWORD_DEFAULT);

            $userDAO = new UserDAO();
            $user = $userDAO->getUserByEmail($email);
          
         
                if ($user && password_verify($hash_password, $user['pswd'])) {
                    if ($user['role'] === 'admin') {
                        header('Location: dashboard_admin.php');
                        error_log('User login successful - admin');
                        return ;
                    } else {
                        header('Location: index.php');
                        error_log('User login successful - non-admin');
                        return ;
                    }
                } else {
                    header('Location: index.php');
                    error_log('User login failed');
                    return ;
                }
            
           
        }
}
    
  
}
// $userAction = new UserAction();
// $userAction->login();
// $userAction->loginController();
// $userAction->registerController();
// $userAction->register();

 