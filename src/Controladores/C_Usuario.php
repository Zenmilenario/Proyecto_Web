<?php
require_once __DIR__ . '/../Modelos/Usuario.php';

class C_Usuario {
    public static function register($username, $email, $password) {
        Usuario::createUser($username, $email, $password);
    }

    public static function login($email, $password) {
        $user = Usuario::getUserByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            header('Location: dashboard.php');
            exit();
        }
        return false;
    }
}
?>
