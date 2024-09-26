<?php

trait logger{
    public $name = "Logger";
    public function log($message){
        echo $message;
    }
}

class Post{
    use logger;
    public function store(){
        //after post
        echo $this->name;
        $this->log('Data is saved.<br />');
    }
}

class Comment{
    use logger;
    public function commentCreated(){
        //after post
        $this->log('Comment is created.');
    }
}
$post = new Post;
$post->store();

$comment = new Comment;
$comment->commentCreated();