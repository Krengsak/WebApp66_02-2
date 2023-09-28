<?php
require 'conn.php';
$sql_update="UPDATE dvd_info SET dvd_name='$_POST[dvd_name]',dvd_style='$_POST[dvd_style]' ,dvd_since='$_POST[dvd_since]' ,dvd_rate='$_POST[dvd_rate]' WHERE dvd_id='$_POST[dvd_id]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/dvd/membermenu.php");
}

?>