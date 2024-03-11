<?php
include_once 'Lib/database.php';
include_once 'Lib/Verify.php';

$db = new Database();
$verify = new Verify();

if ($verify->userType($_SESSION['user'], 88)) {
    header('Refresh: 0, url=Admin.php');
    exit;
}

$qMade = 0;
$total = 0;

// Returns all the Questions Anwsered. 
// Current problem: Need to remove the old Record if we're redoing the test!!!!!
$db->Query('SELECT Questions.Q1,Questions.Q2,Questions.Q3,Questions.Q4,Questions.Q5,Questions.Q6,Questions.Q7,Questions.Q8,Questions.Q9,Questions.Q10
            FROM Users
            RIGHT JOIN Questions
            ON Questions.UserId = Users.UserId;
            WHERE Users.username == :username');
$db->bind(':username',$_SESSION['user']);
$result = $db->single();

// checks how many questions have been made and the total value of them
if(isset($result->Q1)){
    foreach($result as $key => $question) {
        if (isset($question)) {
            $qMade++ ;
            $total += $question;
        } else {
            $total = NULL;
            break;
        }
    }
}

// There is a total of 25 points, but we're working on a 0 to 100%. So I multiply times 4.
$num = $total * 4;

$qMade = 0;
$num =  0;


$round = 816.81408993334624200028727965267;
$blue = $round * ($num / 100);
$grey = $round - $blue;

$stroke = '"'. $blue . ' ' . $grey . '"';