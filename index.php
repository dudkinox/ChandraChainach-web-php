<?php
session_start();
session_destroy();
$page = isset($_GET['page']) ? $_GET['page'] : '';
$permissions = $_SESSION['login'];
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
        include 'components/Login.php';
        include 'pages/login/LoginScript.php';
    }
    ?>
</body>

</html>