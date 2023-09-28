<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มรายชื่อหนัง</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="insertMoviesuccess.php">
        <p>

            <label for="dvd_id">รหัสแผ่นดีวีดี</label>
            <input type="text" name="dvd_id" id="dvd_id">

        </p>
        
        <p>

            <label for="dvd_name">ชื่อหนัง</label>
            <input type="text" name="dvd_name" id="dvd_name">

        </p>

        <p>

            <label for="dvd_style">แนวหนัง</label>

            <input type="text" name="dvd_style" id="dvd_style">

        </p>

        <p>

            <label for="dvd_since">ออกมาภายในปี</label>

            <input type="text" name="dvd_since" id="dvd_since">

        </p>

        <p>

            <label for="dvd_rate">เรทอายุ</label>

            <input type="text" name="dvd_rate" id="dvd_rate">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='moviemenu.php'>กลับหน้าหลัก</a>
    </form>
</body>

</html>