<?php
include_once 'Lib/database.php';
$db = new Database();

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
foreach($result as $key => $question) {
    if (isset($question)) {
        $qMade++ ;
        $total += $question;
    }
    // else {
    //     $total = NULL;
    //     break;
    // }
}

// There is a total of 50 points, but we're working on a 0 to 100%. So I multiply.
$num = $total * 2;

$num = 75;
$qMade =10;