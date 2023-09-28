<?php
    require 'conn.php';
    $sql = "SELECT * FROM dvd_info";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>DVD Shop</title>
</head>
<br>
<body>
    <div class="container"><h1>DVD Shop</h1><br>
    <a href="membermenu.php" style = "font-size:24px; margin:40px;">ข้อมูลลูกค้า</a>
    <a href="moviemenu.php" style = "font-size:24px; margin:40px;">ข้อมูลแผ่นดีวีดี</a>
    <a href="actormenu.php" style = "font-size:24px; margin:40px;">ข้อมูลดาราแสดง</a>
    <a href="search.php" style = "font-size:24px; margin:40px;">ค้นหาข้อมูล</a>
    <a href="MTOMmenu.php" style = "font-size:24px; margin:40px;">เพิ่มข้อมูลการสั่งซื้อดีวีดี</a>
    </div>
    <br>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">รหัสแผ่นดีวีดี</th>
                    <th scope="col-4">ชื่อหนัง</th>
                    <th scope="col-4">แนวหนัง</th>
                    <th scope="col-4">ออกมาภายในปี</th>
                    <th scope="col-4">เรทอายุ</th>
                    <th scope="col-4">แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["dvd_id"]."</td>"."<td>".$row["dvd_name"]."</td>"."<td>".$row["dvd_style"]."</td>"."<td>".$row["dvd_since"]."</td>"."<td>".$row["dvd_rate"]."</td>"."<td>"."<a class='btn btn-warning' href='editmovie.php?dvd_id=".$row["dvd_id"]."'>แก้ไข</a>"."</td></tr>";
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertMovie.php'>เพิ่มรายชื่อหนัง</a>
        
    </div>
</body>

</html>