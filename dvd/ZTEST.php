<?php
require 'conn.php';
if(isset($_POST['keyword'])){

    // รับคำค้นจากฟอร์ม
    $keyword = $_POST['keyword'];

    // สร้างคำสั่ง SQL
    $sql = "SELECT dvd_name FROM dvd_info WHERE dvd_name LIKE '%$keyword%'";
    $sql2 = "SELECT actor_first_name, actor_last_name FROM dvd_act WHERE actor_show IN (SELECT dvd_name FROM dvd_info WHERE dvd_name LIKE '%$keyword%')";
    

    // ส่งคำสั่ง SQL ไปยังฐานข้อมูล
    $result = $conn->query($sql); // ชื่อหนัง
    $result2 = $conn->query($sql2);} // ชื่อนักแสดง


    // แสดงผลลัพธ์
    if ($result->num_rows > 0) {
        echo "<h2>ผลลัพธ์:</h2>";
        while ($row = $result2->fetch_assoc()) {
            echo "ชื่อ: " . $row["actor_first_name"] ." ".$row["actor_last_name"] . "<br>";
        }
    } else {
        echo "ไม่พบข้อมูลที่ตรงกับคำค้น";
    }
?>

<?php
require 'conn.php';
if(isset($_POST['keyword'])){

    // รับคำค้นจากฟอร์ม
    $keyword = $_POST['keyword'];

    // สร้างคำสั่ง SQL
    $sql = "SELECT actor_first_name, actor_last_name FROM dvd_act WHERE actor_first_name LIKE '%$keyword%'";

    // ส่งคำสั่ง SQL ไปยังฐานข้อมูล
    $result = $conn->query($sql);}

    // แสดงผลลัพธ์
    if ($result->num_rows > 0) {
        echo "<h2>ผลลัพธ์:</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "ชื่อ: " . $row["actor_first_name"]." ".$row["actor_last_name"]. "<br>";
        }
    } else {
        echo "ไม่พบข้อมูลที่ตรงกับคำค้น";
    }

?>

<?php
require 'conn.php';
if (isset($_POST['keyword'])) {
    // รับคำค้นจากฟอร์ม
    $keyword = $_POST['keyword'];

    // สร้างคำสั่ง SQL 1: ค้นหาหนัง
    $sql1 = "SELECT actor_first_name || ' ' || actor_last_name AS NAMES FROM dvd_act WHERE NAMES LIKE '%$keyword%'";

    // ส่งคำสั่ง SQL 1 ไปยังฐานข้อมูล
    $result1 = $conn->query($sql1);

    // แสดงผลลัพธ์ของหนังที่ตรงกับคำค้น
    if ($result1->num_rows > 0) {
        while ($row1 = $result1->fetch_assoc()) {
            echo "<h2>ผลลัพธ์สำหรับหนัง: " . $row1["NAMES"] . "</h2>";

            // สร้างคำสั่ง SQL 2: ค้นหานักแสดงที่เกี่ยวข้องกับหนังนี้
            $DVD_NAMES = $row1["NAMES"];
            
            $sql2 = "SELECT dvd_name FROM dvd_info WHERE dvd_name LIKE '%$DVD_NAMES%'";

            // ส่งคำสั่ง SQL 2 ไปยังฐานข้อมูล
            $result2 = $conn->query($sql2);

            // แสดงผลลัพธ์ของนักแสดงที่เกี่ยวข้องกับหนังนี้
            if ($result2->num_rows > 0) {
                while ($row2 = $result2->fetch_assoc()) {
                    echo "ชื่อนักแสดง: " . $row2["dvd_name"] . "<br>";
                }
            } else {
                echo "ไม่พบข้อมูลนักแสดงที่เกี่ยวข้องกับหนังนี้";
            }
        }
    } else {
        echo "ไม่พบหนังที่ตรงกับคำค้น";
    }
}
?>

