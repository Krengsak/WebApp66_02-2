<?php
if(!isset($_GET['actor_id'])){
    header("refresh: 0; url=http://localhost/dvd/membermenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM dvd_act WHERE actor_id='$_GET[actor_id]'";
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
    <title>แก้ไขข้อมูลนักแสดง</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="editactorsuccess.php">
        <p>

            <label for="actor_id">รหัสนักแสดง</label>
            <?php
                echo $row['actor_id'];
            ?>

        </p>   

        <p>

            <label for="actor_first_name">ชื่อ</label>
            <input type="text" name="actor_id" id="actor_id" value="<?=$row['actor_id'];?>" hidden>
            <input type="text" name="actor_first_name" id="actor_first_name" value="<?=$row['actor_first_name'];?>" />

        </p>

        <p>

            <label for="actor_last_name">นามสกุล</label>

            <input type="text" name="actor_last_name" id="actor_last_name" value="<?=$row['actor_last_name'];?>" />

        </p>

        <p>

            <label for="actor_age">อายุ</label>

            <input type="text" name="actor_age" id="actor_age" value="<?=$row['actor_age'];?>" />

        </p>

        <p>

            <label for="actor_show">หนังที่แสดง</label>

            <input type="text" name="actor_show" id="actor_show" value="<?=$row['actor_show'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='actormenu.php'>หน้าหลัก</a>
    </form>
</body>

</html>