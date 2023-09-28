<?php
require 'conn.php';
$sql_update="INSERT INTO dvd_info(dvd_id,dvd_name,dvd_style,dvd_since,dvd_rate) VALUES ('$_POST[dvd_id]', '$_POST[dvd_name]' ,'$_POST[dvd_style]', '$_POST[dvd_since]' ,'$_POST[dvd_rate]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/dvdshop/moviemenu.php");
}

?>