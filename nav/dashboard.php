<?php
require_once __DIR__ . '/../src/Gestiones/autentificador.php';
require_once __DIR__ . '/../src/controladores/C_Recordatorio.php';

checkAuth();

$reminders = C_Recordatorio::getAll($_SESSION['user_id']);
?>
<!-- HTML para listar recordatorios -->
<h1>Mis Recordatorios</h1>
<ul>
    <?php foreach ($reminders as $reminder): ?>
        <li><?= htmlspecialchars($reminder['title']) ?> - <?= htmlspecialchars($reminder['date']) ?></li>
    <?php endforeach; ?>
</ul>

