<?php
if(!isset($_GET['member_id'])){
    header("refresh: 0; url=http://localhost/dvd/membermenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM dvd_ WHERE member_id='$_GET[member_id]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลสมาชิก</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="editmembersuccess.php">
        <p>

            <label for="member_id">รหัสนักศึกษา</label>
            <?php
                echo $row['member_id'];
            ?>

        </p>   

        <p>

            <label for="first_name">ชื่อ</label>
            <input type="text" name="member_id" id="member_id" value="<?=$row['member_id'];?>" hidden>
            <input type="text" name="first_name" id="first_name" value="<?=$row['first_name'];?>" />

        </p>

        <p>

            <label for="last_name">นามสกุล</label>

            <input type="text" name="last_name" id="last_name" value="<?=$row['last_name'];?>" />

        </p>

        <p>

            <label for="email">ที่อยู่</label>

            <input type="text" name="email" id="email" value="<?=$row['email'];?>" />

        </p>

        <p>

            <label for="telephone">เบอร์โทร</label>

            <input type="text" name="telephone" id="telephone" value="<?=$row['telephone'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='membermenu.php'>หน้าหลัก</a>
    </form>
</body>

</html>