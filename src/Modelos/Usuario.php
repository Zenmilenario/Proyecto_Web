<?php
require_once __DIR__ . '/../database.php';

class Usuario {
    public static function createUser($username, $email, $password) {
        global $pdo;
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO usuarios (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'username' => $username,
            'email' => $email,
            'password' => $hashedPassword
        ]);
    }

    public static function getUserByEmail($email) {
        global $pdo;
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
        return $stmt->fetch();
    }
}
?>
