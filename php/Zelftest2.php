<?php
require_once 'Lib/Database.php';
require_once 'Lib/verify.php';
// okay holy shit I finally got it to work and shit I will explain now.
$verify = new Verify();
$db = new Database();

// this function will update the database with the questions that you have made.
function setQ($user,$Qnum, $value) {
  $verify = new Verify();
  $db = new Database();

    $Q = 'Q' . strval($Qnum);
    
    $db->query("UPDATE questions
                SET ". $Q ." = :val
                WHERE UserId = :usr;");
                
    // $db->bind(':num');
    $db->bind(':val', intval($value));
    $db->bind(':usr', intval($verify->getId($user)));
    $db->execute();
                
    if($verify->Question($user,$Qnum)) {
      return TRUE;
    } else {
      return FALSE;
    }
}
              
              
// Qmade needs to be based on questions made. This will be done through the form function. Need to add later.
if($verify->form($_SESSION['user'])) {
  $Qmade = $verify->Qmade($_SESSION['user']);

} 
              
// A brureforce way to check if the questions is anwsered it will increase the $Qmade and update database. Making it go to the next question.
if (isset($_POST['Q' . strval($qMade + 1)])) {
  echo 'yes';
  $qMade++;
  setQ($_SESSION['user'], $qMade, $_POST['Q' . ($qMade + 1)]);
}
// } elseif (isset($_POST['Q2'])) {
//   $qMade = 2;
//   setQ($_SESSION['user'], $qMade, $_POST['Q2']);

// } elseif (isset($_POST['Q3'])) {
//   $qMade = 3;
//   setQ($_SESSION['user'], $qMade, $_POST['Q3']);

// } elseif (isset($_POST['Q4'])) {
//   $qMade = 4;
//   setQ($_SESSION['user'], $qMade, $_POST['Q4']);

// } elseif (isset($_POST['Q5'])) {
//   $qMade = 5;
//   setQ($_SESSION['user'], $qMade, $_POST['Q5']);
// }

