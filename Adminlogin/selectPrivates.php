
<?php
$con = new mysqli("localhost", "root", "", "chat");
$repliedId = $_POST['repliedId'];
$senderId = $_POST['senderId'];
$sql = "SELECT chatrooms.id, chatrooms.user_id, chatrooms.msg, chatrooms.created_on, chat_user_table.fname, chat_user_table.user_profile FROM chatrooms, chat_user_table WHERE chat_user_table.user_id = chatrooms.user_id AND  (chatrooms.replied_user_id = '$repliedId' AND  chatrooms.user_id = '$senderId' OR  (chatrooms.user_id = '$repliedId' AND  chatrooms.replied_user_id = '$senderId'))";


$result = $con->query($sql);
if($result->num_rows > 0)
{
$record_set = array();
while ($row = $result->fetch_array()) {
    
    array_push($record_set, $row);
}
$result->free_result();

$con->close();
echo json_encode($record_set);
}
else
{
  echo json_encode('N');
}
?>
