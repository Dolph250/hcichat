<?php
$con = new mysqli("localhost", "root", "", "chat");
$sql = $con->query("SELECT count(chatrooms.user_id), chatrooms.msg, chatrooms.created_on, chat_user_table.fname, chat_user_table.user_profile FROM chatrooms, chat_user_table WHERE chat_user_table.user_id = chatrooms.user_id AND chatrooms.replied_user_id = 0");
$row = $sql->fetch_array();
$count = $row[0];
echo $count;
?>