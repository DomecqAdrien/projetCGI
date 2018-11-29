<?php

class ChatController extends Controller{

    function chat(){
    	$this->loadModel('Chat');
    	$this->loadModel('User');
    	$data['users'] = User::getAllUsers($_SESSION['id']);
    	$this->set($data);
    }

    function ajax(){
    	$this->loadModel('Chat');
    	if (isset($_POST['id_to']) && isset($_POST['message'])){
    		$chat = new Chat();
    		$chat->setId_user_to($_POST['id_to']);
    		$chat->setId_user_from($_SESSION['id']);
    		$chat->setMessage($_POST['message']);
    		$date = new DateTime();
            $date->modify("+1 hour");
            $chat->setDatetime($date->format("Y-m-d H:i:s"));
            $chat->create();

    		$data['msgs_user'] = Chat::getAllMessages($_SESSION['id'],$_POST['id_to']);
    		$this->set($data);
    	}
    	if (isset($_POST['id'])) {
    		$data['msgs_user'] = Chat::getAllMessages($_SESSION['id'],$_POST['id']);
    		$this->set($data);
	    }
    }
    function test(){
    	$this->loadModel('Chat');
    	$msg_user1 = Chat::getAllMessages('5','3');
    	debug($msgs_user1);
    	echo $msgs_user1[0]->id;
    }
}