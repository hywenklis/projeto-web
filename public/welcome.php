<?php
session_start();

if(isset($_SESSION["email"])) {
    echo "Bem-vindo, " . $_SESSION["email"] . "!";
    echo '<br><a href="logout.php">Sair</a>';
} else {
    header("Location: login.php");
    exit();
}
?>