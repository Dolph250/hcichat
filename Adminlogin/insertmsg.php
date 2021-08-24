<?php

$con = new mysqli("localhost", "root", "", "chat");

$user_id = $con->real_escape_string($_POST['user_id']);
$msg = $con->real_escape_string($_POST['msg']);
$time = $con->real_escape_string($_POST['timo']);
$insert = $con->query("INSERT INTO chatrooms(user_id, msg, created_on) VALUES('$user_id', '$msg', '$time')")or die("Error".$con->error);
 //$insert = $con->query("insert into chatrooms(user_id, msg, created_on) values('$fname', )");
if($insert)
{
    echo 'Already inserted!';
}

?>
