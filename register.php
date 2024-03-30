<?php 

    session_start();
    require_once 'config/con_db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beta Registration System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h3 class="mt-4">Beta Registration System</h3>
        <hr>
        <form action="php/register_db.php" method="post">
            <div class="mb-3">
                <label for="uID" class="form-label">รหัสนักศึกษา</label>
                <input type="text" class="form-control" name="uID" aria-describedby="uID">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" name="username" aria-describedby="username">
            </div>
            <div class="mb-3">
                <label for="fullname" class="form-label">ชื่อ-สกุล</label>
                <input type="text" class="form-control" name="fullname" aria-describedby="fullname">
            </div>
            <div class="mb-3">
                <label for="mID" class="form-label">สาขา</label>
                <select class="form-control" id="mID" name="mID" required>
                <option value="">กรุณาเลือกรายการ</option>
                <option value="T12">วิศวกรรมระบบไอโอทีและสารสนเทศ</option>
                <option value="S03">วิศวกรรมระบบไอโอทีและสารสนเทศและฟิสิกส์อุตสาหกรรม</option>
              </select>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="confirm password" class="form-label">ยืนยันรหัสผ่าน</label>
                <input type="password" class="form-control" name="c_password">
            </div>
            <button type="submit" name="signup" class="btn btn-primary">ลงชื่อเข้าใช้</button>
            <a href='index.php';>
                <div class="btn btn-secondary">Login</div>
            </a>
        </form>
        <hr>
    </div>
    
</body>
</html>
