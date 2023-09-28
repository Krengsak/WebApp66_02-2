<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>ค้นหาข้อมูล</title>
</head>
<br>
<body>
    <h1>ค้นหาข้อมูล</h1>
    <form method="POST" action="Search2.php">
        <label for="keyword">ใส่รายชื่อหนังเพื่อดูนักแสดงที่เล่น:</label>
        <input type="text" name="keyword" id="keyword">
        <input type="submit" value="ค้นหา" class="btn btn-success">
    </form> <p>กรุณากรอกชื่อหนังภาคให้ถูกต้อง!</p>
    <br>
    <br>
    <form method="POST" action="Search3.php">
        <label for="keyword">ใส่ชื่อนักแสดงเพื่อดูนั่งที่เล่น:</label>
        <input type="text" name="keyword" id="keyword">
        <input type="submit" value="ค้นหา" class="btn btn-success">  <p>กรุณากรอกชื่อนักแสดงให้ถูกต้อง!</p>
    </form><br>
    <a class="btn btn-warning" href='actormenu.php'>กลับหน้าหลัก</a>

    <?php
    // ตรวจสอบว่ามีการส่งคำค้นมาจากฟอร์มหรือไม่
    if(isset($_POST['keyword'])){
        // เชื่อมต่อฐานข้อมูล
        $conn = new mysqli('localhost','root','','dvdshop');

        // ตรวจสอบการเชื่อมต่อ
        if ($conn->connect_error) {
            die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
        }

        // รับคำค้นจากฟอร์ม
        $keyword = $_POST['keyword'];

        // สร้างคำสั่ง SQL
        $sql = "SELECT dvd_name FROM dvd_info WHERE dvd_name LIKE '%$keyword%'";

        // ส่งคำสั่ง SQL ไปยังฐานข้อมูล
        $result1 = $conn->query($sql);

        // แสดงผลลัพธ์
        if ($result1->num_rows > 0) {
            echo "<h2>ผลลัพธ์:</h2>";
            while ($row = $result->fetch_assoc()) {
                echo "ชื่อ: " . $row["dvd_name"] . "<br>";
            }
        } else {
            echo "ไม่พบข้อมูลที่ตรงกับคำค้น";
        }

        // ปิดการเชื่อมต่อฐานข้อมูล
        $conn->close();
    }
    ?>
</body>
</html>