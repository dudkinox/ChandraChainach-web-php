<?php
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : '';
$permissions = $_SESSION['login'] ?? false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>โปรไฟล์รุ่นการอบรมของเกษรกรและวิสาหกิจชุมชน</title>
    <?php
    if ($permissions) {
        include 'components/Head.php';
    } else {
        include 'pages/login/LoginHead.php';
    }
    ?>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php
    if ($permissions) {
        include 'components/Loading.php';
        include 'components/NavBar.php';
        include 'components/Menu.php';
        include 'components/Footer.php';
        include 'components/Script.php';
    } else {
        session_destroy();
        include 'pages/login/Login.php';
        include 'pages/login/LoginScript.php';
    }
    ?>
</body>

</html>