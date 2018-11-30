<?php

if(isset($_SERVER['PATH_INFO'])){

	if(!$_SESSION){

		if(strpos($_SERVER['PATH_INFO'], "admin") !== false){
			$this->redirect('');
		}

		if(strpos($_SERVER['PATH_INFO'], "/forum/post/") !== false){
			$this->redirect('user/login');
		}

		if(strpos($_SERVER['PATH_INFO'], "/forum/new") !== false){
			$this->redirect('user/login');
		}

		if(strpos($_SERVER['PATH_INFO'], "/chat") !== false){
			$this->redirect('');
		}

		if(strpos($_SERVER['PATH_INFO'], "/actualites/create") !== false){
			$this->redirect('actualites');
		}

		if(strpos($_SERVER['PATH_INFO'], "/user/adherer") !== false){
			$this->redirect('');
		}
	}
}