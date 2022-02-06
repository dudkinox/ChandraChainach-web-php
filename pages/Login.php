<link rel="stylesheet" href="assets/css/login.css">
<div class="container login-container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 login-form-1">
            <h3>เข้าสู่ระบบ</h3>
            <form action="services/loginService.php" method="POST">
                <div class="form-group my-3">
                    <input type="text" class="form-control" name="username" placeholder="กรอกชื่อผู้ใช้" />
                </div>
                <div class="form-group my-3">
                    <input type="password" class="form-control" name="password" placeholder="กรอกรหัสผ่าน" />
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>