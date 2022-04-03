<?php
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : '';
$permissions = $_SESSION['login'] ?? false;
$login = isset($_GET['login']) ? $_GET['login'] : '0';
$idStudent = isset($_GET['idStudent']) ? $_GET['idStudent'] : '';
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
        echo '<script>window.location.href = "pages/login"</script>';
    }

    ?>
    <div class="wrapper">
        <?php
        include 'components/Modal.php';
        if ($idStudent == '') {
            include 'components/Loading.php';
        }
        include 'components/NavBar.php';
        include 'components/Menu.php';
        ?>
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <?php
                    switch ($page) {
                        case 'logout':
                            header("services/loginService.php?logout=1");
                            break;
                        case 'add-student':
                            include 'pages/addStudent/addStudent.php';
                            break;
                        default:
                            include 'pages/search/searchPage.php';
                            break;
                    }
                    ?>
                </div>
            </section>
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