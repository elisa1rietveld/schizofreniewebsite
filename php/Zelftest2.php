<?php
require_once 'Lib/Database.php';
require_once 'Lib/verify.php';
require_once 'lib/forms.php';
// okay holy shit I finally got it to work and shit I will explain now.
$verify = new Verify();
$db = new Database();
$forms= new form();

// this function will update the database with the questions that you have made.


$qMade= 0;
// A brureforce way to check if the questions is anwsered it will increase the $Qmade and update database. Making it go to the next question.

// sets qmade to the amount of questions made
if($forms->form($_SESSION['user'])) {
  $qMade = $forms->Qmade($_SESSION['user']);
} else{
  echo 'nO';
}
$question = 'Q' . strval($qMade + 1);

if (isset($_POST[$question])) {
  $qMade ++;
  $forms->setQ($_SESSION['user'], $qMade, $_POST[$question]);
  //reset the amount after you made it?
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

