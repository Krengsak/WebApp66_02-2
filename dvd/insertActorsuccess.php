<?php
require 'conn.php';
$sql_update="INSERT INTO dvd_act(actor_id,actor_first_name,actor_last_name,actor_age,actor_show) VALUES ('$_POST[actor_id]','$_POST[actor_first_name]','$_POST[actor_last_name]' ,'$_POST[actor_age]' ,'$_POST[actor_show]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/dvd/actormenu.php");
}

?>