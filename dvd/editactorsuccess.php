<?php
require 'conn.php';
$sql_update="UPDATE dvd_act SET actor_first_name='$_POST[actor_first_name]',actor_last_name='$_POST[actor_last_name]' ,actor_age='$_POST[actor_age]' ,actor_show='$_POST[actor_show]' WHERE actor_id='$_POST[actor_id]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/dvd/actormenu.php");
}

?>