<?php
session_start();
require('../http/client.php');

$logout = isset($_GET['logout']) ? $_GET['logout'] : '';

if ($logout == '1') {
    session_destroy();
    header("location: ../");
} else {

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = "SELECT * FROM `login` WHERE username = '$username' AND `password` = '$password'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["login"] = true;
        $_SESSION["type"] = $row["type"];
        header("Location: ../");
    } else {
        $_SESSION["error"] = "1";
        header("Location: ../pages/login");
    }
}
