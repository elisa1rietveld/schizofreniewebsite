<?php
include_once 'database.php';
Class Verify
{
    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }

    // verifies password
    public function Pass($user,$pass) {
        
        // gets database password
        $this->db->Query('SELECT password
                          FROM Users
                          WHERE username = :username;');
        $this->db->Bind(':username', $user);
        $result = $this->db->single();

        // checks if $pass is the same as database password
        if(isset($result->password) && password_verify($pass, $result->password)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // verifies Usernames
    public function User($user) {
        
        // gets username
        $this->db->Query('SELECT username
                          FROM Users
                          WHERE username = :username;');
        $this->db->Bind(':username',$user);
        $result = $this->db->single();

        // checks if $user and database username are the same, 
        // which it already did as it had something in there but still. We have to be sure!!!
        if(isset($result->username) && $user == $result->username) {
            return  TRUE;
        } else {
            return FALSE;
        }
    }

    // 

    // verifies user type
    public function userType(string $user, int $type) {
        // gets usertype
        $this->db->query('SELECT userRole
                          FROM Users
                          WHERE username = :username;');
        $this->db->bind(':username', $user);
        $result = $this->db->single();

        // checks if usertype is the same as given type.
        if(isset($result->userRole) && $result->userRole == $type) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getId($user) {
        $this->db->query('SELECT userId
                          FROM USERS
                          WHERE userName = :user;');
        $this->db->bind(':user',$user);
        $result = $this->db->single();

        if(isset($result->userId)){
            return intval($result->userId);
        } else {
            return FALSE;
        }
    }
}