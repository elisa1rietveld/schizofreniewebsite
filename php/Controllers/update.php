<?php
require_once('../lib/database.php');
require_once('../lib/verify.php');
var_dump($_POST);

$db = new Database();
$verify = new Verify();
//acoustic thing of me where I like to name it here for now.
$choice = $_POST['choice'];


if ($choice == 'userRole') {
    
} else if ($choice == 'password') {

}