<div class="card mb-5" style="visibility: hidden;">
    <div class="card-header">
    </div>
</div>
<div class="card text-center mt-5">
    <div class="card-header bg-primary">
        <h3 class="card-title">ข้อมูลนักศึกษา</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="text-center col-12">
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                    <div class="form-group">
                        <label for="search-guitar" class="h1">ค้นหา</label>
                        <input type="search" class="form-control bg-secondary text-white" id="search-guitar" name="search-guitar" placeholder="รหัสนักศึกษา          /           ชื่อ - นามสกุล">
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>คณะ</th>
                    <th>ปีการศึกษา</th>
                    <th>รหัสนักศึกษา</th>
                    <th>ชื่อ สกุล</th>
                    <th>ระดับการศึกษา</th>
                    <?php if ($permissions) { ?><th>activity</th><?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $search = isset($_GET['search']) ? $_GET['search'] : '';
                if (isset($_POST["search-guitar"]) || $search != '') {
                    $search = $_POST["search-guitar"] ?? $search;
                    $queryAccount = "SELECT * FROM student WHERE `รหัสนักศึกษา` = '" . $search . "' OR `ชื่อ` LIKE '%" . $search . "%' OR `นามสกุล` LIKE '%" . $search . "%'";
                    $resultAccount = $conn->query($queryAccount);
                    if ($resultAccount->num_rows > 0) {
                        $rowAccount = $resultAccount->fetch_assoc();
                ?>
                        <tr>
                            <td><?php echo $rowAccount["คณะ"]; ?></td>
                            <td><?php echo $rowAccount["ปีการศึกษา"]; ?></td>
                            <td><?php echo $rowAccount["รหัสนักศึกษา"]; ?></td>
                            <td><?php echo $rowAccount["ชื่อ"] . '  ' . $rowAccount["นามสกุล"]; ?></td>
                            <td><?php echo $rowAccount["ระดับการศึกษา"]; ?></td>
                            <?php if ($permissions) { ?>
                                <td class="text-center">
                                    <button class="btn btn-primary" onclick="showDetail(`<?php echo $rowAccount['รหัสนักศึกษา']; ?>`, `<?php echo $search; ?>`)">จัดการข้อมูล</button>
                                </td>
                            <?php } ?>
                        </tr>
                <?php
                    }
                } ?>
            </tbody>
        </table>
    </div>
</div>