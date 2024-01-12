<?php

include_once 'APP\model\utilisateurModel\userDAO.php';

class UserAction {

    public function register() {
        include_once 'APP\view\view_user\register.php';
    }

    public function registerController() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $role = 'auteur';
            
            $userDAO = new UserDAO();
            $user = $userDAO->getUserByEmail($email);

            if (!$user) {
                $user = new User($email, $password, $name, $role);

                if ($userDAO->InsertUser($user)) {
                    header('location: index.php');
                    exit;
                } else {
                    header('Location: TMP/404.php');
                    exit;
                }
            } else {
                // Handle case where email already exists
                echo "Email already registered!";
            }
        }
    }

    public function login() {
        include_once 'APP\view\view_user\login.php';
    }

    public function loginControlleur() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['email']) && isset($_POST['password'])) {
                $email = $_POST['email'];
                $enteredPassword = $_POST['password'];
                $userDAO = new UserDAO();
                $user = $userDAO->getUserByEmail($email);
                if ($user) {
                    if ($enteredPassword === $user['pswd']) {
                        $_SESSION['user'] = $user;
    
                        if (isset($_SESSION['user']['role'])) {
                            switch ($_SESSION['user']['role']) {
                                case 'admin':
                                    header('Location: index.php?action=admin');
                                    break;
                                case 'auteur':
                                    header('Location: index.php?action=auteur');
                                    break;
                                default:
                                    header('Location: TMP/404.php');
                                    break;
                            }
                        } else {
                            header('Location: TMP/404.php');
                        }
                    } else {
                        echo ('User login failed');
                    }
                } else {
                    echo ('User not found');
                }
            } else {
                echo ('Email or password not set in $_POST');
            }
        }
    }
    
    
    
}
