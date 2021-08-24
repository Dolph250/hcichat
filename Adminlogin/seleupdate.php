                             
                             <?php
$con = new mysqli("localhost", "root", "", "chat");


$sql = "SELECT * FROM chatrooms  WHERE id = '$_POST[msgid]'";

$result = $con->query($sql);
$record_set = array();
while ($row = $result->fetch_array()) {
    array_push($record_set, $row);
}
$result->free_result();

//mysql_close($con);
echo json_encode($record_set);

if(isset($_POST['key']))
{
    $id = $_POST['sido'];
    $numsg =$con->real_escape_string($_POST['numsg']);
   
    $update = $con->query("UPDATE chatrooms set msg = '$numsg' WHERE id = $id");
    
    if($update)
    {
        echo"Records are already updated!";
    }
    
    
}


 ?>     