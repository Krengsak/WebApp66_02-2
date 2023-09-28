<?php
require 'conn.php';
$sql_update="INSERT INTO dvd_(member_id,first_name,last_name,email,telephone) VALUES ('$_POST[member_id]','$_POST[first_name]','$_POST[last_name]' ,'$_POST[email]' ,'$_POST[telephone]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/dvd/membermenu.php");
}

?>