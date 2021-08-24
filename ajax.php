<?php

$con = new mysqli("localhost", "root", "", "chat");

$fname = $con->real_escape_string($_POST['fname']);
$lname = $con->real_escape_string($_POST['lname']);
$gender = $con->real_escape_string($_POST['gender']);
$username = $con->real_escape_string($_POST['username']);
$password = $con->real_escape_string($_POST['password']);
$dob = $con->real_escape_string($_POST['dob']);
$insert = $con->query("INSERT INTO chat_user_table(fname, lname, user_name, user_password, user_profile, DOB) VALUES('$fname', '$lname', '$username', '$password', '$gender.png', '$dob')")or die("Error".$con->error);
 //$insert = $con->query("insert into chatrooms(user_id, msg, created_on) values('$fname', )");
if($insert)
{
    echo 'Already inserted!';
}
 else {
    $con->error;
}

?>
