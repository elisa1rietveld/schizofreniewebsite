<?php
session_start();
require_once 'lib/database.php';
require_once 'lib/verify.php';
require_once 'lib/forms.php';

$db = new database();
$verify = new verify();
$form = new form();


// is used to set the questions after completing the test. if stopped halfway it will save using cookies.
foreach ($_POST as $key => $value) {
    
    if(!$form->setQuestion($key,$value)) {
        echo "nope :)" . $key .' '. $value;
        exit;
    }
}

header('Refresh: 0, url=/php/profile.php');

?>