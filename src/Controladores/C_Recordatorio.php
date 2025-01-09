<?php
require_once __DIR__ . '/../Modelos/Recordatorio.php';

class C_Recordatorio {
    public static function create($user_id, $title, $description, $date) {
        Recordatorio::createReminder($user_id, $title, $description, $date);
    }

    public static function getAll($user_id) {
        return Recordatorio::getRemindersByUser($user_id);
    }
}
?>
