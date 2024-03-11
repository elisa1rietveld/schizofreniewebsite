<?php
include_once 'database.php';
Class Verify
{
    private Database $db;

    public function __CONSTRUCT() {
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

    public function Question($userName, $Qnum){
        // makes it 'Q1' as example
        $question = 'Q' . $Qnum;
        // selects all questions from the user.
        $this->db->query('SELECT Users.username,Users.UserId,Questions.Q1,Questions.Q2,Questions.Q3,Questions.Q4,Questions.Q5,Questions.Q6,Questions.Q7,Questions.Q8,Questions.Q9,Questions.Q10
                          FROM Users
                          RIGHT JOIN Questions
                          ON Questions.UserId = Users.UserId
                          WHERE Users.username = :user;');
        $this->db->bind(':user',$userName);
        $result = $this->db->single();

        // if the question has had an anwser, return true.
        if(isset($result->$question)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }


    public function from($user) { //verifies if there's a form connected to this account

    }
}

