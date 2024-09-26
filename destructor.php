<?php

class DatabaseConnection {
    private $connection;
    public function __construct($host, $username, $password, $database)
    {
        $this->connection = mysqli_connect($host, $username, $password, $database);

        if ($this->connection) {
            $die = ('Error: ' . mysqli_connect_error());
        }
    }
    public function query($sql){
        $result = mysqli_query($this->connection, $sql);

        if(!$result) {
            die('Error: ' . mysqli_error($this->connection));
        }
        return $result;
    }
    public function __destruct()
    {
        mysqli_close($this->connection);
    }
}
//cretae new instance of a database connetion class
$db = new DatabaseConnection('localhost', 'root', '', 'mydatabase');

//execute query
$result = $db->query("SELECT * FROM 'users'");

//the distructor will be called autometically when the $db goes out of scope 