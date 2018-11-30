<?php

if(isset($_SERVER['PATH_INFO'])){

	if(!$_SESSION){

		if(strpos($_SERVER['PATH_INFO'], "admin") !== false){
			$this->redirect('');
		}

		if(strpos($_SERVER['PATH_INFO'], "/forum/post/") !== false){
			$this->redirect('forum');
		}

		if(strpos($_SERVER['PATH_INFO'], "/forum/new") !== false){
			$this->redirect('forum');
		}

		if(strpos($_SERVER['PATH_INFO'], "/chat") !== false){
			$this->redirect('');
		}

		if(strpos($_SERVER['PATH_INFO'], "/actualites/create") !== false){
			$this->redirect('actualites');
		}
	}
}