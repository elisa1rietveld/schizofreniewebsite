<?php
include_once 'Lib/database.php';
include_once 'Lib/Verify.php';
include_once 'Lib/forms.php';


$db = new Database();
$verify = new Verify();
$form = new form();

// if the user is an admin. it will send them to the admin dashboard.
if ($verify->userType($_SESSION['user'], 88)) {
    header('Refresh: 0, url=Admin.php');
    exit;
}

// default values.
$qMade = 0;
$total = 0;

//checks if a form is added to an account
if($form->form()){

    $db->Query('SELECT Q1,Q2,Q3,Q4,Q5
                FROM Questions
                WHERE UserId = :userId');
    $db->bind(':userId',$verify->getId($_SESSION['user']));
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
    } else  {
        // if question have not been filled, give an number between 1-5 so it says we're still doing it
        $qMade=2;
    }

} else {
    //if there's no form, we haven't started yet
    $qMade=0;
}

// There is a total of 25 points, but we're working on a 0 to 100%. So I multiply times 4.
$num = $total * 4;


$round = 816.81408993334624200028727965267;
$blue = $round * ($num / 100);
$grey = $round - $blue;
// this is used for the nice circle
$stroke = '"'. $blue . ' ' . $grey . '"';
