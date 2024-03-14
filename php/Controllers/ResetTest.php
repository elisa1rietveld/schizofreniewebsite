<?php   
require_once '../Lib/Database.php';
require_once '../Lib/verify.php';
require_once '../Lib/forms.php';
session_start();

$db = new Database();
$verify = new Verify();
$forms = new form();

if ($forms->remove()) {
    header('Refresh:0, URL=/zelftest.php');
}
