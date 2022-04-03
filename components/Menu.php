<?php
$type = $_SESSION["type"] ?? 'Genaral';
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $type; ?></span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="?page=home" class="nav-link">
                        <img src="https://img.icons8.com/color/30/000000/web.png" />
                        <p>
                            หน้าแรก
                        </p>
                    </a>
                </li>
                <?php if ($permissions) { ?>
                    <li class="nav-item">
                        <a href="?page=add-student" class="nav-link">
                            <img src="https://img.icons8.com/office/30/000000/add--v1.png" />
                            <p>
                                เพิ่มข้อมูลนักศึกษา
                            </p>
                        </a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a href="https://chainat.chandra.ac.th/" target="_blank" class="nav-link">
                        <img src="https://img.icons8.com/color/30/000000/domain--v1.png" />
                        <p>
                            &emsp;เว็บไซต์<br />&emsp;&emsp;&emsp;จันทรเกษม-ชัยนาท
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
                <?php if ($permissions) { ?>
                    <li class="nav-item">
                        <a href="services/loginService.php?logout=1" class="nav-link">
                            <img src="https://img.icons8.com/external-sbts2018-lineal-color-sbts2018/30/000000/external-logout-social-media-sbts2018-lineal-color-sbts2018.png" />
                            <p>
                                ออกจากระบบ
                            </p>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</aside>