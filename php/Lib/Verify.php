<?php
include_once 'database.php';
Class Verify
{
    private Database $db;

    public function __CONSTRUCT() {
        $this->db = new Database();
    }
    // verifies password
    public function pass($user,$pass) {
        
        // gets database password
        $this->db->query('SELECT password
                          FROM Users
                          WHERE username = :username;');
        $this->db->bind(':username', $user);
        $result = $this->db->single();

        // checks if $pass is the same as database password
        if(isset($result->password) && password_verify($pass, $result->password)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // verifies Usernames
    public function user($user) {
        
        // gets username
        $this->db->query('SELECT username
                          FROM Users
                          WHERE username = :username;');
        $this->db->bind(':username',$user);
        $result = $this->db->single();

        // checks if $user and database username are the same, 
        // which it already did as it had something in there but still. We have to be sure!!!
        if(isset($result->username) && $user == $result->username) {
            return  TRUE;
        } else {
            return FALSE;
        }
    }

    // verifies user type
    public function userType(string $user, int $type) {
        // gets usertype
        $this->db->query('SELECT userType
                          FROM Users
                          WHERE username = :username;');
        $this->db->bind(':username', $user);
        $result = $this->db->single();

        // checks if usertype is the same as given type.
        if(isset($result->userType) && $result->userType == $type) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

