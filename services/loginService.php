<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "adminaon" && $password == "admin") {
    $_SESSION["type"] = "admin";
    header("Location: /admin");
} else {
    $_SESSION["error"] = "1";
    header("Location: ../?page=login");
}
