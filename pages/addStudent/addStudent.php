<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="text-white">จัดการข้อมูลนักศึกษา</h1>
            </div>
        </div>
    </div>
</section>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">เพิ่มข้อมูลนักศึกษา</h3>
    </div>
    <form action="services/studentService.php?mode=insert" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="file-image">รูปภาพ (ถ้ามี)</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file-image" id="file-image">
                        <label class="custom-file-label" for="file-image">เลือกไฟล์รูปภาพ</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="major">คณะ</label>
                <input type="text" class="form-control" name="major" id="major" placeholder="คณะ" required>
            </div>
            <div class="form-group">
                <label for="year">ปีการศึกษา</label>
                <input type="text" class="form-control" name="year" id="year" placeholder="กรอกปี" required>
            </div>
            <div class="form-group">
                <label for="code">รหัสนักศึกษา</label>
                <input type="text" class="form-control" name="code" id="code" placeholder="รหัสนักศึกษา" required>
            </div>
            <div class="form-group">
                <label for="name">ชื่อ</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="ชื่อ" required>
            </div>
            <div class="form-group">
                <label for="lastname">นามสกุล</label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="นามสกุล" required>
            </div>
            <div class="form-group">
                <label for="level">ระดับการศึกษา</label>
                <input type="text" class="form-control" name="level" id="level" placeholder="ระดับการศึกษา" required>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
    </form>
</div>