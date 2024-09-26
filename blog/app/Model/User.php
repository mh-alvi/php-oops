<?php
namespace App\Model;

use App\Database\databaseConnection;

class User extends databaseConnection{
    public function __construct()
    {
        echo "User Model";
    }
}