<?php
    require 'conn.php';
    $sql = "SELECT * FROM dvd_";
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
                    <th scope="col">รหัสลูกค้า</th>
                    <th scope="col-4">ชื่อ-นามสกุล</th>
                    <th scope="col-4">ที่อยู่</th>
                    <th scope="col-4">เบอร์โทร</th>
                    <th scope="col-4">แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["member_id"]."</td>"."<td>".$row["first_name"]." ".$row["last_name"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["telephone"]."</td>"."<td>"."<a class='btn btn-warning' href='editmember.php?member_id=".$row["member_id"]."'>แก้ไข</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertMember.php'>เพิ่มรายชื่อลูกค้า</a>
        
    </div>
</body>

</html>
