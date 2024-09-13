<?php
require("connect.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM data_student WHERE id = $id";
    if ($con->query($sql) === TRUE) {
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Student Information</title>
</head>
<body>
<div class="container" style="max-width: 600px; margin: auto;">
        <h1 class="text-center" style="margin-top: 20px; margin-bottom: 20px;">ระบบลงทะเบียน</h1>
        <hr>
        <form action="data_success.php" method="POST">
            <table class="table" style="width: 100%; margin: 20px auto; border-collapse: collapse;">
                <tr>
                    <th style="width: 30%; padding: 10px; border: 2px solid #000;">รหัสนักเรียน :</th>
                    <td style="width: 70%; padding: 10px; border: 2px solid #000;"><input class="form-control" type="text" name="stu_id" required></td>
                </tr>
                <tr>
                    <th style="width: 30%; padding: 10px; border: 2px solid #000;">ชื่อ-นามสกุล :</th>
                    <td style="width: 70%; padding: 10px; border: 2px solid #000;"><input class="form-control" type="text" name="stu_name" required></td>
                </tr>
                <tr>
                    <th style="width: 30%; padding: 10px; border: 2px solid #000;">อีเมลล์ :</th>
                    <td style="width: 70%; padding: 10px; border: 2px solid #000;"><input class="form-control" type="email" name="stu_email" required></td>
                </tr>
                <tr>
                    <th style="width: 30%; padding: 10px; border: 2px solid #000;">หมายเลขโทรศัพท์ :</th>
                    <td style="width: 70%; padding: 10px; border: 2px solid #000;"><input class="form-control" type="text" name="stu_tel" required></td>
                </tr>
                <tr>
                    <th style="width: 30%; padding: 10px; border: 2px solid #000;">วันที่ลงทะเบียน :</th>
                    <td style="width: 70%; padding: 10px; border: 2px solid #000;"><input class="form-control" type="date" name="stu_date" required></td>
                </tr>
            </table>
            <div class="text-center" style="margin-top: 20px;">
                <input type="submit" class="btn btn-success" value="บันทึก">
            </div>
        </form>
    </div>
</body>
</html> 
