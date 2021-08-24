<?php
$con = new mysqli("localhost", "root", "", "chat");

$box = $_POST['check'];
while (list($key, $val) = each($box))
{
    $del = $con->query("DELETE FROM chatrooms where id = $val");
}
if($del)
{
    echo "Messages already deleted!";
}

?>