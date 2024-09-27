<?php

class DatabaseConnection {
    protected $connection;

    public function __construct($host, $username, $password, $database)
    {
        $this->connection = mysqli_connect($host, $username, $password, $database);

        if (!$this->connection) {
            throw new Exception('Database connection failed: ' . mysqli_connect_error());
        }
    }
    public function __destruct()
    {
        mysqli_close($this->connection);
    }
}

$db = new DatabaseConnection('localhost', 'root', '', 'oops_auth_db');