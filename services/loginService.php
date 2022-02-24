<?php
session_start();
require('../http/client.php');

$username = $_POST["username"];
$password = md5($_POST["password"]);

$query = "SELECT * FROM `login` WHERE username = '$username' AND `password` = '$password'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $_SESSION["login"] = true;
} else {
    $_SESSION["error"] = "1";
}

header("Location: ../");
