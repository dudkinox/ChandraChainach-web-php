<?php
$type = $_SESSION["type"];
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $type; ?></span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://img.icons8.com/office/30/000000/person-male.png" class="img-circle elevation-2" alt="user" />
            </div>
            <div class="info">
                <a href="#" class="d-block">ชื่อ สกุล</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <img src="https://img.icons8.com/color/30/000000/web.png" />
                        <p>
                            หน้าแรก
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <img src="https://img.icons8.com/external-xnimrodx-lineal-color-xnimrodx/30/000000/external-calendar-holiday-xnimrodx-lineal-color-xnimrodx.png" />
                        <p>
                            ปีการศึกษา
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <img src="https://img.icons8.com/color/30/000000/domain--v1.png" />
                        <p>
                            เว็บไซต์สาขา
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <img src="https://img.icons8.com/external-soft-fill-juicy-fish/30/000000/external-contact-envelopes-and-mail-soft-fill-soft-fill-juicy-fish.png" />
                        <p>
                            ติดต่อ
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="services/loginService.php?logout=1" class="nav-link">
                        <img src="https://img.icons8.com/external-sbts2018-lineal-color-sbts2018/30/000000/external-logout-social-media-sbts2018-lineal-color-sbts2018.png" />
                        <p>
                            ออกจากระบบ
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>