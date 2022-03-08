<div class="card">
    <div class="card-header bg-primary">
        <h3 class="card-title">ข้อมูลนักศึกษา</h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ สกุล</th>
                    <th>เบอร์โทร</th>
                    <th>สาขาวิชา</th>
                    <th>ความสามารถพิเศษ</th>
                    <th>activity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $queryAccount = "SELECT * FROM account";
                $resultAccount = $conn->query($queryAccount);
                if ($resultAccount->num_rows > 0) {
                    while ($rowAccount = $resultAccount->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $rowAccount["id"]; ?></td>
                            <td><?php echo $rowAccount["name"] . ' ' . $rowAccount["lastname"]; ?></td>
                            <td><?php echo $rowAccount["tel"]; ?></td>
                            <td><?php echo $rowAccount["major"]; ?></td>
                            <td><?php echo $rowAccount["ability"]; ?></td>
                            <td class="text-center">
                                <button class="btn btn-primary" onclick="showDetail()">แสดงข้อมูล</button>
                            </td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
</div>