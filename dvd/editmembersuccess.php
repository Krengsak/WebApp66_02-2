<?php
require 'conn.php';
$sql_update="UPDATE dvd_ SET first_name='$_POST[first_name]',last_name='$_POST[last_name]' ,email='$_POST[email]' ,telephone='$_POST[telephone]' WHERE member_id='$_POST[member_id]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/dvd/membermenu.php");
}

?>