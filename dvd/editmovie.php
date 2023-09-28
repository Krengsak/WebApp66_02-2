<?php
if(!isset($_GET['dvd_id'])){
    header("refresh: 0; url=http://localhost/dvd/moviemenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM dvd_info WHERE dvd_id='$_GET[dvd_id]'";
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
    <title>แก้ไขข้อมูลหนัง</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="editmoviesuccess.php">
        <p>

            <label for="dvd_id">รหัสนักศึกษา</label>
            <?php
                echo $row['dvd_id'];
            ?>

        </p>   

        <p>

            <label for="dvd_name">ชื่อ</label>
            <input type="text" name="dvd_id" id="dvd_id" value="<?=$row['dvd_id'];?>" hidden>
            <input type="text" name="dvd_name" id="dvd_name" value="<?=$row['dvd_name'];?>" />

        </p>

        <p>

            <label for="dvd_style">นามสกุล</label>

            <input type="text" name="dvd_style" id="dvd_style" value="<?=$row['dvd_style'];?>" />

        </p>

        <p>

            <label for="dvd_since">ที่อยู่</label>

            <input type="text" name="dvd_since" id="dvd_since" value="<?=$row['dvd_since'];?>" />

        </p>

        <p>

            <label for="dvd_rate">เรทอายุ</label>

            <input type="text" name="dvd_rate" id="dvd_rate" value="<?=$row['dvd_rate'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='moviemenu.php'>หน้าหลัก</a>
    </form>
</body>

</html>