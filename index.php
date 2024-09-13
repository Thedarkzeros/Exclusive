<?php
    require("connect.php");
    $sql = "SELECT *  FROM data_student";
    $result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบลงทะเบียน</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">ระบบลงทะเบียน</h1>
    <h2 style="text-align:right;">ลงทะเบียน/ผู้พัฒนา</h2>
    <table>
        <thead>
            <tr>
                <th>รหัสนักเรียน</th>
                <th>ชื่อ-นามสกุล</th>
                <th>อีเมลล์</th>
                <th>หมายเลขโทรศัพท์</th>
                <th>วันที่ลงทะเบียน</th>
                <th>จัดการข้อมูล</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['stu_id']; ?></td>
                    <td><?php echo $row['stu_name']; ?></td> <!-- Full name -->
                    <td><?php echo $row['stu_email']; ?></td>
                    <td><?php echo $row['stu_tel']; ?></td>
                    <td><?php echo $row['stu_date']; ?></td>
                    <td>
                        <a href="edit_form.php?id=<?php echo $row['id']; ?>">แก้ไข</a> |
                        <a href="delete.php?delete_id=<?php echo $row['id']; ?>">ลบ</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="register.php" role="button"><h1><center>บันทึก</center></h2></a>
</body>
</html>
