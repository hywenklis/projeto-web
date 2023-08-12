<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if($password === "senha_correta") {
        $_SESSION["email"] = $email;
        header("Location: welcome.php");
        exit();
    } else {
        echo "Credenciais inválidas.";
    }
}
?>