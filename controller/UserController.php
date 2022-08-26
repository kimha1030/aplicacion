<?php
require_once "model/user.php";

class userController
{
    public function index() {
        echo "<h2>index</h2>";
    }

    public function signup() {
       require_once 'view/signup.php';
    }

    public function save() {
        $post = (isset($_POST['password']) && !empty($_POST['username']));
        if($post) {
            $user = new User();
            $user->name = trim($_POST['name']);
            $user->username = trim($_POST['username']);
            $user->password = trim($_POST['password']);
            
            $result = $user->save();
            if ($result) {
                $response = "Registro exitoso";
            } else {
                $response = "Error en registro";
            }
            header("Location:".base_url.'Activity/index');
        } else {
            header("Location:".base_url.'User/signup');
            echo "Registro vacío";
        }
    }

    public function login() {
        $post = (isset($_POST['username']) && !empty($_POST['password']));
        if($post) { 
            $user = new User();
            $user->username = trim($_POST['username']);
            $user->password = trim($_POST['password']);
            $result = $user->login();
            if ($result) {
                $_SESSION['user'] = $result->id;
                header("Location:".base_url.'Activity/index');
            } else {
                echo "<script type=\"text/javascript\">window.alert('Usuario o contraseña incorrecta');window.location.href = 'index';</script>"; 
                exit;
            }
        } else {
            require_once 'view/user/login.php';
        }
    }

    public function logout() {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        header("Location:".base_url);
    }
}
