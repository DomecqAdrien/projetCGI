<?php

class ForumController extends Controller{

    function forum(){
        $this->loadModel('Post');

        $posts = Post::getAll();
        
    }

    function new(){
        
    }


}