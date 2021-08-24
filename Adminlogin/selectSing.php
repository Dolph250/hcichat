
<?php
$con = new mysqli("localhost", "root", "", "chat");
$userIdId = $_POST['user_id'];

$sql = "SELECT * FROM chat_user_table where user_id = '$userIdId'";


$result = $con->query($sql);
if($result->num_rows > 0)
{

while ($row = $result->fetch_array()) {
    
  echo $row['fname'];
}


}
else
{
  echo 'No res';
}
?>
