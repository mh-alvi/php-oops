<?php
include_once('Database.php');

class User extends DatabaseConnection{
    private $table_name = 'users';
    public $id;
    public $name;
    public $email;
    public $password;

    public function register(){

        $query1 = "SELECT * FROM " . $this->table_name . " WHERE email = ?";
        $stmt = $this->connection->prepare($query1);
    
        $stmt->bind_param('s', $this->email);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
            return false;
            }
        }
        $query = "INSERT INTO ".$this->table_name. "(name, email, password) VALUES (?,?,?)";
        $stmt = $this->connection->prepare($query);
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        $stmt->bind_param('sss', $this->name, $this->email, $this->password);

        if ($stmt->execute()) {
            return true;
        }
        else{
            return false;
        }
    }
    public function login(){
        $query1 = "SELECT * FROM " . $this->table_name . " WHERE email = ?";
        $stmt = $this->connection->prepare($query1);
    
        // Bind the email parameter
        $stmt->bind_param('s', $this->email);
    
        // Execute the statement
        if ($stmt->execute()) {
            // Get the result set from the statement
            $result = $stmt->get_result();
    
            // Check if any user is returned
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc(); // Fetch the user data
                
                // Verify the password with the hashed password
                if (password_verify($this->password, $user['password'])) {
                    $this->id = $user['id'];
                    $this->name = $user['name'];
                    $this->email = $user['email'];
                    return true; // Login successful
                } else {
                    return false; // Password is incorrect
                }
            } else {
                return false; // No user found with that email
            }
        } else {
            return false; // Query execution failed
        }
    }
}

$user = new User('localhost', 'root', '', 'oops_auth_db');