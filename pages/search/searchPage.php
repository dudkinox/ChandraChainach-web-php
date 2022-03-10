<div class="card">
    <div class="card-header bg-primary">
        <h3 class="card-title">ข้อมูลนักศึกษา</h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ลำดับ</th>
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
                $queryAccount = "SELECT * FROM student";
                $resultAccount = $conn->query($queryAccount);
                if ($resultAccount->num_rows > 0) {
                    $order = 1;
                    while ($rowAccount = $resultAccount->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $order; ?></td>
                            <td><?php echo $rowAccount["คณะ"]; ?></td>
                            <td><?php echo $rowAccount["ปีการศึกษา"]; ?></td>
                            <td><?php echo $rowAccount["รหัสนักศึกษา"]; ?></td>
                            <td><?php echo $rowAccount["ชื่อ"] . '  ' . $rowAccount["นามสกุล"]; ?></td>
                            <td><?php echo $rowAccount["ระดับการศึกษา"]; ?></td>
                            <?php if ($permissions) { ?>
                                <td class="text-center">
                                    <button class="btn btn-primary" onclick="showDetail()">ดูรูป</button>
                                </td>
                            <?php } ?>
                        </tr>
                <?php
                        $order++;
                    }
                } ?>
            </tbody>
        </table>
    </div>
</div>