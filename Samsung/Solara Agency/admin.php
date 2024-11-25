<?php
session_start();

if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
    exit;
}

$username = $_SESSION['login_user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-box">
        <h2>Bienvenido, administrador</h2>
        <p></p>
        <br><br>
        <a href="administrador/index.html" class="btn">Ir a la pagina de administrador</a>
        <br><br><br>
        <a href="index.html" class="btn">Cerrar Sesion</a>
    </div>
</body>
</html>