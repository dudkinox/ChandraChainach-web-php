<?php

?>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">แจ้งเตือน</h5>
            </div>
            <div class="modal-body">
                บัญชีผู้ใช้หรือรหัสผ่านผิด
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="success-insert-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title" id="exampleModalCenterTitle">แจ้งเตือน</h5>
            </div>
            <div class="modal-body">
                เพิ่มข้อมูลสำเร็จ
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="showDetailStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">รายละเอียด</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            $queryGetDetail = "SELECT * FROM detail_student WHERE id_student = '$idStudent'";
            $resultGetDetail = $conn->query($queryGetDetail);
            $aptitude = "";
            $sport = "";
            $music = "";
            $computer = "";
            $english = "";
            $intern = "";
            $organization = "";
            $major = "";
            if ($resultGetDetail->num_rows > 0) {
                $rowGetDetail = $resultGetDetail->fetch_assoc();
                $imageDetail = explode("../", $rowGetDetail["image"]);
                $aptitude = $rowGetDetail["aptitude"];
                $sport = $rowGetDetail["sport"];
                $music = $rowGetDetail["music"];
                $computer = $rowGetDetail["computer"];
                $english = $rowGetDetail["english"];
                $intern = $rowGetDetail["intern"];
                $organization = $rowGetDetail["organization"];
                $major = $rowGetDetail["major"];
            ?>
                <form action="services/detailService.php?method=edit" method="post" enctype="multipart/form-data">
                <?php } else { ?>
                    <form action="services/detailService.php?method=insert" method="post" enctype="multipart/form-data">
                    <?php } ?>
                    <input type="text" style="display: none" value="<?php echo $idStudent; ?>" id="id-student" name="id-student">
                    <div class="card card-primary">
                        <div class="modal-body text-center">
                            <img src="<?php echo $imageDetail[1]; ?>" class="img-fluid" alt="ยังไม่มีรูปภาพ">
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="image">เพิ่มรูป</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="aptitude">ความถนัด</label>
                                <input type="text" class="form-control" value="<?php echo $aptitude; ?>" name="aptitude" required placeholder="ความถนัด">
                            </div>
                            <div class="form-group">
                                <label for="sport">กีฬา</label>
                                <input type="text" class="form-control" value="<?php echo $sport; ?>" name="sport" required placeholder="กีฬา">
                            </div>
                            <div class="form-group">
                                <label for="music">ดนตรี</label>
                                <input type="text" class="form-control" value="<?php echo $music; ?>" name="music" required placeholder="ดนตรี">
                            </div>
                            <div class="form-group">
                                <label for="computer">ทักษะทางคอมพิวเตอร์</label>
                                <input type="text" class="form-control" value="<?php echo $computer; ?>" name="computer" required placeholder="ทักษะทางคอมพิวเตอร์">
                            </div>
                            <div class="form-group">
                                <label for="english">ทักษะภาษาอังกฤษ</label>
                                <input type="text" class="form-control" value="<?php echo $english; ?>" name="english" required placeholder="ทักษะภาษาอังกฤษ">
                            </div>
                            <div class="form-group">
                                <label for="intern">สถานที่ฝึกงาน/ฝึกสหกิจ</label>
                                <input type="text" class="form-control" value="<?php echo $intern; ?>" name="intern" required placeholder="สถานที่ฝึกงาน/ฝึกสหกิจ">
                            </div>
                            <div class="form-group">
                                <label for="organization">สถานที่ทำงาน</label>
                                <input type="text" class="form-control" value="<?php echo $organization; ?>" name="organization" required placeholder="สถานที่ทำงาน">
                            </div>
                            <div class="form-group">
                                <label for="major">สาขาที่เรียน</label>
                                <input type="text" class="form-control" value="<?php echo $major; ?>" name="major" required placeholder="สาขาที่เรียน">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">บันทึก</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    </div>
                    </form>
        </div>
    </div>
</div>