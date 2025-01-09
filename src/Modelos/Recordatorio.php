<?php
require_once __DIR__ . '/../database.php';

class Recordatorio {
    public static function createReminder($user_id, $title, $description, $date) {
        global $pdo;
        $sql = "INSERT INTO recordatorios (user_id, title, description, date, status) 
                VALUES (:user_id, :title, :description, :date, 'pending')";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'user_id' => $user_id,
            'title' => $title,
            'description' => $description,
            'date' => $date
        ]);
    }

    public static function getRemindersByUser($user_id) {
        global $pdo;
        $sql = "SELECT * FROM recordatorios WHERE user_id = :user_id ORDER BY date ASC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['user_id' => $user_id]);
        return $stmt->fetchAll();
    }
}
?>
