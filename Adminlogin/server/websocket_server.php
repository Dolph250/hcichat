<?php
set_time_limit(0);

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
require_once '../vendor/autoload.php';

class Chat implements MessageComponentInterface {
	protected $clients;
	// protected $users;

	public function __construct() {
		$this->clients = new \SplObjectStorage;
	}

	public function onOpen(ConnectionInterface $conn) {
		$this->clients->attach($conn);
		// $this->users[$conn->resourceId] = $conn;
	}

	public function onClose(ConnectionInterface $conn) {
		$this->clients->detach($conn);
		// unset($this->users[$conn->resourceId]);
	}

	public function onMessage(ConnectionInterface $from,  $data) {
		$from_id = $from->resourceId;
		$data = json_decode($data);
		$type = $data->type;
		switch ($type) {
			case 'chat':
				$user_id = $data->user_id;
				$chat_msg = $data->chat_msg;
                                $pic = $data->profile;
                                $timeStamp = $data->timeStamp;
     $response_from = '<div class="containeri darker all"><img src="./Thumbs/'.$pic.'" alt="Avatar" class="right" style="width:100%; max-width: 50px; height: 50px"><span class="nametag">'.$user_id.'</span><br><p style="padding-top:10px">'.$chat_msg.'</p> <span class="time-left">'.$timeStamp.'</span></div>';
				//$response_from = '<img src="./Thumbs/'.$pic.'" alt="Avatar" class="right" style="width:100%; max-width: 50px; height: 50px"> <span style="color:#999"><b>'.$user_id.':</b> '.$chat_msg.'</span><br><br>';
    
     $response_to = '<div class="containeris all"><img src="./Thumbs/'.$pic.'" alt="Avatar" class="right" style="width:100%; max-width: 50px; height: 50px"><span class="nametag">'.$user_id.'</span><br><p style="padding-top:10px">'.$chat_msg.'</p> <span class="time-right">'.$timeStamp.'</span></div>';			
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