<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มรายชื่อนักแสดง</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="insertActorsuccess.php">
        <p>

            <label for="actor_id">รหัสลูกค้า</label>
            <input type="text" name="actor_id" id="actor_id">

        </p>
        
        <p>

            <label for="actor_first_name">ชื่อ</label>
            <input type="text" name="actor_first_name" id="actor_first_name">

        </p>

        <p>

            <label for="actor_last_name">นามสกุล</label>

            <input type="text" name="actor_last_name" id="actor_last_name">

        </p>

        <p>

            <label for="actor_age">อายุ</label>

            <input type="text" name="actor_age" id="actor_age">

        </p>

        <p>

            <label for="actor_show">หนังที่แสดง</label>

            <input type="text" name="actor_show" id="actor_show">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='actormenu.php'>กลับหน้าหลัก</a>
    </form>
</body>

</html>