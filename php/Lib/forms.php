<?php
include_once 'database.php';
include_once 'verify.php';

class form
{
    private Database $db;
    private Verify $verify;
    

    public function __CONSTRUCT() {
        $this->db = new Database();
        $this->verify = new Verify();

    }

    public function Question($userId, $Qnum){
        // makes it 'Q1' as example
        $question = 'Q' . $Qnum;
        // selects all questions from the user.
        $this->db->query('SELECT UserId,Q1,Q2,Q3,Q4,Q5
                          FROM questions
                          WHERE UserId = :user');

        $this->db->bind(':user',$userId);
        $result = $this->db->single();

        // if the question has had an anwser, return true.
        if(isset($result->$question)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }


    public function form() { //verifies if there's a form connected to this account
            $id = $this->verify->getId($_SESSION['user']);
            echo $id;
            $this->db->query('SELECT TestId, UserId
                              FROM Questions
                              WHERE UserId = :user');
            $this->db->bind(':user', $id);
            $result = $this->db->single();

            if (isset($result->TestId)) {
                return TRUE;
            } else {
                return FALSE;
            }
    }

    public function Qmade() {
        $Qmade = 0;
        $id = $this->verify->getId($_SESSION['user']);
        $this->db->query('SELECT Q1,Q2,Q3,Q4,Q5
                          FROM questions
                          WHERE UserId = :user');
        $this->db->bind(':user', $id);
        $result = $this->db->single();
        
        // adds 1 for each question made
        foreach($result as $question => $value) {
            if(isset($value)) {
                $Qmade++;
            } else {
                $Qmade += 0;
            }
        }
        return $Qmade;
    }

    public function setQuestion($Qnum, $value) {      
          $q = 'Q' . strval($Qnum);
          
          $this->db->query("UPDATE questions
                            SET ". $q ." = :val
                            WHERE UserId = :usr;");
                      
          $this->db->bind(':val', intval($value));
          $this->db->bind(':usr', intval($this->verify->getId($_SESSION['user'])));
          $this->db->execute();
                      
          if($this->Question($this->verify->getId($_SESSION['user']),$Qnum)) {
            return TRUE;
          } else {
            return FALSE;
          }
      }

      public function remove() {
        $id = $this->verify->getId($_SESSION['user']);
        $this->db->query('DELETE FROM questions
                                WHERE UserId = :id');
        $this->db->bind(':id',$id);
        $this->db->execute();

        if(!$this->form()) {
            return TRUE;
        } else {
            return FALSE;
        }
      }

      public function create() {
        if(!$this->form()) {
            $id = $this->verify->getId($_SESSION['user']);
            $this->db->query('INSERT INTO questions(UserId) VALUES (:id)');
            $this->db->bind(':id', $id);
            $this->db->execute();
            return TRUE;
        } else {
            return FALSE;
        }
      }
}
