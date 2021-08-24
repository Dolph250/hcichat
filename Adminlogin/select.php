
<?php
$con = new mysqli("localhost", "root", "", "chat");

$sql = "SELECT chatrooms.id, chatrooms.user_id, chatrooms.msg, chatrooms.created_on, chat_user_table.fname, chat_user_table.user_profile FROM chatrooms, chat_user_table WHERE chat_user_table.user_id = chatrooms.user_id AND chatrooms.replied_user_id = 0";

$result = $con->query($sql);
$record_set = array();
while ($row = $result->fetch_array()) {
    array_push($record_set, $row);
}
$result->free_result();

$con->close();
echo json_encode($record_set);
?>
