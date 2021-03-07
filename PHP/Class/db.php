<?php

class DB
{
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $db = 'taskManager';
    protected $conn;
    public $feedback = '';

    // Connect to Database ================
    private function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);

        if ($this->conn->connect_error) {
            die('Error connecting:' . $this->conn->connect_error);
        } else {
            $this->feedback = 'Connection to Database Successful';
        }
    }

    // Sign in validation ================

    // Sign up validation ================

    // Login ================

    // Register ================

    // Profile ================
}
