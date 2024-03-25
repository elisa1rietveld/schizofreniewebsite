<?php
require_once 'Lib/Database.php';
require_once 'Lib/verify.php';
require_once 'lib/forms.php';
// okay holy shit I finally got it to work and shit I will explain now.
$verify = new Verify();
$db = new Database();
$forms= new form();



// sets qmade to the amount of questions made
if(!$forms->form()) {
    $forms->create();
}


