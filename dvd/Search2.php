<?php
require 'conn.php';
if (isset($_POST['keyword'])) {
    // รับคำค้นจากฟอร์ม
    $keyword = $_POST['keyword'];

    // สร้างคำสั่ง SQL 1: ค้นหาหนัง
    $sql1 = "SELECT dvd_name FROM dvd_info WHERE dvd_name LIKE '%$keyword%'";

    // ส่งคำสั่ง SQL 1 ไปยังฐานข้อมูล
    $result1 = $conn->query($sql1);

    // แสดงผลลัพธ์ของหนังที่ตรงกับคำค้น
    if ($result1->num_rows > 0) {
        while ($row1 = $result1->fetch_assoc()) {
            echo "<h2>ผลลัพธ์สำหรับหนัง: ". $row1["dvd_name"] ."</h2>";

            // สร้างคำสั่ง SQL 2: ค้นหานักแสดงที่เกี่ยวข้องกับหนังนี้
            $dvd_name = $row1["dvd_name"];
            
            $sql2 = "SELECT actor_first_name, actor_last_name FROM dvd_act WHERE actor_show LIKE '%$dvd_name%'";

            // ส่งคำสั่ง SQL 2 ไปยังฐานข้อมูล
            $result2 = $conn->query($sql2);

            // แสดงผลลัพธ์ของนักแสดงที่เกี่ยวข้องกับหนังนี้
            if ($result2->num_rows > 0) {
                while ($row2 = $result2->fetch_assoc()) {
                    echo "ชื่อนักแสดง: " . $row2["actor_first_name"] . " " .$row2["actor_last_name"] . "<br>". "<br>";
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