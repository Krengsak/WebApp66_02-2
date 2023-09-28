
<!DOCTYPE html>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>สั่งซื้อดีวีดี</title>

</head>

<body>

    <br>
    <h2>สั่งซื้อดีวีดี</h2>
    <br>
    <form action="insertMTOM.php" method="POST">

        <label for="name">ชื่อ:</label>

        <input type="text" id="name" name="name" required><br><br>

 

        <label for="name">นามสกุล:</label>

        <input type="text" id="lastname" name="lastname" required><br><br>

 

        <label for="email">อีเมล:</label>

        <input type="text" id="email" name="email" required><br><br>

 

        <label for="movie">ดีวีดีที่ต้องการสั่งซื้อ:</label>

        <select id="movie" name="movie" required>

            <option value="" disabled selected>โปรดเลือกหนัง</option>

            <!-- ใส่ตัวเลือกหนังจากฐานข้อมูล -->

            <?php

                $conn = new mysqli('localhost','root','','dvdshop');

                $conn->query("SET NAMES utf8");

                if($conn->connect_error){

                    die("Connection Fail God damn it ". $conn->$conn_error);

                }

                // ดึงข้อมูลหนังจากตาราง dvd

                $result = $conn->query("SELECT * FROM dvd_info");

 

                // สร้างตัวเลือกใน dropdown menu

                while ($row = $result->fetch_assoc()) {

                    echo "<option value='" . $row["dvd_name"] . "'>" . $row["dvd_name"] . "</option>";

                }

 

                // ปิดการเชื่อมต่อฐานข้อมูล

                $conn->close();

            ?>

        </select><br><br>

 

        <input type="submit" value="สั่งซื้อ" class="btn btn-success">
        <a class="btn btn-warning" href='actormenu.php'>กลับหน้าหลัก</a>
    </form>

</body>

</html>

 