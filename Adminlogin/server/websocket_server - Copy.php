<?php
set_time_limit(0);

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
require_once '../vendor/autoload.php';

class Chat implements MessageComponentInterface {
	protected $clients;
	private $subscriptions;
        private $users;

	public function __construct() {
		$this->clients = new \SplObjectStorage;
                 $this->subscriptions = [];
                 $this->users = [];
	}

	public function onOpen(ConnectionInterface $conn) {
		$this->clients->attach($conn);
		 $this->users[$conn->resourceId] = $conn;
	}

	public function onClose(ConnectionInterface $conn) {
		$this->clients->detach($conn);
		 unset($this->users[$conn->resourceId]);
                  unset($this->subscriptions[$conn->resourceId]);
	}

	public function onMessage(ConnectionInterface $from,  $data) {
		$from_id = $from->resourceId;
		$data = json_decode($data);
		$type = $data->type;
		switch ($type) {
			case 'chat':
				$user_id = $data->user_id;
                                 $realid = $data->realId;
                                 $replied = $data->replied;
				$chat_msg = $data->chat_msg;
                                $pic = $data->profile;
                                $timeStamp = $data->timeStamp;
    if($replied > 0)
    {
        
        $con = new mysqli("localhost", "root", "", "chat");
$repliedId = $replied;
$senderId = $realid;
$sql = "SELECT chatrooms.id, chatrooms.user_id, chatrooms.msg, chatrooms.created_on, chat_user_table.fname, chat_user_table.user_profile FROM chatrooms, chat_user_table WHERE chat_user_table.user_id = chatrooms.user_id AND  (chatrooms.replied_user_id = '$repliedId' AND  chatrooms.user_id = '$senderId' OR  (chatrooms.user_id = '$repliedId' AND  chatrooms.replied_user_id = '$senderId')) ORDER BY chatrooms.id DESC LIMIT 1";



        $results = $con->query($sql);
        $row = $results->fetch_array();
        
        
        $response_from = '<div  class="containeri darker"><img src="./Thumbs/'.$pic.'" alt="Avatar" class="right" style="width:100%; max-width: 50px; height: 50px"><span class="nametag">'.$user_id.'</span><br><p style="padding-top:10px">'.$chat_msg.'</p> <span class="time-left">'.$timeStamp.'</span></div>';
				//$response_from = '<img src="./Thumbs/'.$pic.'" alt="Avatar" class="right" style="width:100%; max-width: 50px; height: 50px"> <span style="color:#999"><b>'.$user_id.':</b> '.$chat_msg.'</span><br><br>';
    
			
     $response_to = '<div class="containeris"><img src="./Thumbs/'.$pic.'" alt="Avatar" class="right" style="width:100%; max-width: 50px; height: 50px"><span class="nametag">'.$user_id.'</span><br><p style="padding-top:10px">'.$chat_msg.'</p> <span class="time-right">'.$timeStamp.'</span></div>';			
				// Output
				$from->send(json_encode([
					"type"=>$type,"msg"=>$response_from
				]));
				foreach($this->clients as $client) {
					if($from!=$client) {
						$client->send(json_encode([
							"type"=>$type,"msg"=>$response_to
						]));
					}
				}
                                
    }
 if($replied == 0)
{
      $response_from = '<div class="containeri darker"><img src="./Thumbs/'.$pic.'" alt="Avatar" class="right" style="width:100%; max-width: 50px; height: 50px"><span class="nametag">'.$user_id.'</span><br><p style="padding-top:10px">'.$chat_msg.'</p> <span class="time-left">'.$timeStamp.'</span></div>';
				//$response_from = '<img src="./Thumbs/'.$pic.'" alt="Avatar" class="right" style="width:100%; max-width: 50px; height: 50px"> <span style="color:#999"><b>'.$user_id.':</b> '.$chat_msg.'</span><br><br>';
    
     $response_to = '<div class="containeris"><img src="./Thumbs/'.$pic.'" alt="Avatar" class="right" style="width:100%; max-width: 50px; height: 50px"><span class="nametag">'.$user_id.'</span><br><p style="padding-top:10px">'.$chat_msg.'</p> <span class="time-right">'.$timeStamp.'</span></div>';			
     //$response_to = "<b>".$user_id."</b>: ".$chat_msg."<br><br>";
				// Output
				$from->send(json_encode([
					"type"=>$type,"msg"=>$response_from
				]));
				foreach($this->clients as $client) {
					if($from!=$client) {
						$client->send(json_encode([
							"type"=>$type,"msg"=>$response_to
						]));
					}
				}  
}
    break;
		}
	}

	public function onError(ConnectionInterface $conn, \Exception $e) {
		$conn->close();
	}
}
$server = new Ratchet\App('localhost', 8080);
$server->route('/', new Chat, ['*']);
$server->run();
?>