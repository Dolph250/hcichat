<?php
$con = new mysqli("localhost", "root", "", "chat");

$id = $_POST['id'];

    $del = $con->query("DELETE FROM chatrooms where id = $id");

if($del)
{
    echo "Message already deleted!";
}

?>