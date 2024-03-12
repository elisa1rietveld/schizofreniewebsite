<?php
require_once 'Lib/Database.php';
require_once 'Lib/verify.php';
$verify = new Verify();
$db = new Database();


// if($verify->form($_SESSION['user'])) {}

function setQ($user,$Qnum, $value) {
    $db->query('UPDATE Questions AS Q
                LEFT JOIN Users as U
                ON Q.UserId = U.UserId
                SET Q.Q:num = :value
                WHERE U.username = :usr;');

    $db->bind(':num',$qnum);
    $db->bind(':value',$value);
    $bd->bind(':usr',$user);
    $db->execute();

    if($verify->Question($usrId,$Qnum)) {
        return TRUE;
    } else {
        return FALSE;
    }

}

$qMade = 0;
if       (isset($_POST['Q1'])) {
  $qMade = 1;
  setQ($_SESSION['userId'], $qMade, $_POST['Q1']);

} elseif (isset($_POST['Q2'])) {
  $qMade = 2;
  setQ($_SESSION['userId'], $qMade, $_POST['Q2']);

} elseif (isset($_POST['Q3'])) {
  $qMade = 3;
  setQ($_SESSION['userId'], $qMade, $_POST['Q3']);
} elseif (isset($_POST['Q4'])) {
  $qMade = 4;
  setQ($_SESSION['userId'], $qMade, $_POST['Q4']);

} elseif (isset($_POST['Q5'])) {
  $qMade = 5;
  setQ($_SESSION['userId'], $qMade, $_POST['Q5']);
}

