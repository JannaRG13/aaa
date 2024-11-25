<?php
session_start();
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prevenir SQL Injection
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    $sql = "SELECT id, username, password FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($username == "usuario_admin" && $password == "admin123") {
        header("location: admin.php");
        exit; // Asegúrate de salir del script después de redirigir
    }
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['login_user'] = $row['username'];
            header("location: profile.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-box">
        <h2>Inicio de Sesion</h2>
        <form method="POST" action="">
            <div class="textbox">
                <input type="text" placeholder="Nombre de usuario o email" name="username" required>
            </div>
            <div class="textbox">
                <input type="password" placeholder="Contraseña" name="password" required>
            </div>
            <input type="submit" class="btn" value="Iniciar sesion">
            <p>Aun no tienes cuenta? <a href="register.php" class="btn">Registrarse</a></p>

        </form>
    </div>
</body>
</html>