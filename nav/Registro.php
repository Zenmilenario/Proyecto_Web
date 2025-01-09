<?php
require_once __DIR__ . '/../src/Controladores/C_Usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    C_Usuario::register($_POST['username'], $_POST['email'], $_POST['password']);
    echo "Usuario registrado con éxito. <a href='login.php'>Inicia sesión</a>";
}
?>
<!-- Formulario HTML para registrar -->
<form method="POST">
    <input type="text" name="username" placeholder="Usuario" required>
    <input type="email" name="email" placeholder="Correo" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Registrar</button>
</form>
