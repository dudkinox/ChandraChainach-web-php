<?php
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : '';
$permissions = $_SESSION['login'] ?? false;
$login = isset($_GET['login']) ? $_GET['login'] : '0';
require('http/client.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>โปรไฟล์รุ่นการอบรมของเกษรกรและวิสาหกิจชุมชน</title>
    <?php
    include 'components/Head.php';

    ?>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php
    if ($login == '1') {
        session_destroy();
        header('Location: pages/login');
    }

    ?>
    <div class="wrapper">
        <?php
        include 'components/Modal.php';
        include 'components/Loading.php';
        include 'components/NavBar.php';
        include 'components/Menu.php';
        ?>
        <div class="content-wrapper">
            <?php
            switch ($page) {

                case 'logout':
                    header("services/loginService.php?logout=1");
                    break;
                default:
                    include 'pages/search/searchPage.php';
                    break;
            }
            ?>
        </div>
        <?php
        include 'components/Footer.php';
        ?>
    </div>
    <?php
    include 'components/Script.php';
    ?>
</body>

</html>