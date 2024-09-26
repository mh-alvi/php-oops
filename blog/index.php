<?php

require __DIR__ . '/vendor/autoload.php';
use App\Database\{databaseConnection, Testing};
use App\Config\Mail;
use App\Model\User;

$user = new User;
// include('app/database/databaseConnection.php');
// include('app/database/testing.php');
// include('app/config/Mail.php');
// class Post1{
//     public function __construct($title)
//     {
//         echo $title;
//     }
// }

// new Post1("Post Tilte");
// new databaseConnection;
// new Testing;
// new Mail;