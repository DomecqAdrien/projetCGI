<?php

class ChatController extends Controller{

    function chat(){
    	$this->loadModel('Chat');
	    
    }

    function ajax(){
    	if (isset($_POST['test'])) {
    		$title = "ajax";
	        echo "1";
	    }
    }
}