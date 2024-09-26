<?php

class User{
    public static $email = "email@email.com";
    public static function getAge(){
        return 10;
    }
    public static function getName(){
        return "User Name ".self::getAge()."<br />Email: ".self::$email;
    }
}

class Post extends User{
    public static function getAllPost(){
        return "Post name: ". parent::getName();
    }
}
// $user = new User;
// echo $user->getName();

// echo User::getAge();
echo Post::getAllPost();
// echo User::$email;