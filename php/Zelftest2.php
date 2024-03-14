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
if($forms->form()) {
  $qMade = $forms->Qmade();
} else{
  $forms->create();
}
$question = 'Q' . strval($qMade + 1); //give it to setQuetion

if (isset($_POST[$question])) {
  $qMade ++;
  $forms->setQuestion($qMade, $_POST[$question]);
  //reset the amount after you made it?
}

