<?php
require_once 'Lib/database.php';
require_once 'Lib/Verify.php';
session_start();
$db = new Database();
$verify = new Verify();

$handler = NULL;

//defines if it should show the loading screen
$loading = false;

if (isset($_POST['username'])) {
    //verifies password and goes to profile
    if($verify->User($_POST['username']) && $verify->Pass($_POST['username'],$_POST['password'])) {
        $_SESSION['user'] = $_POST['username'];
        header('Refresh: 1, url=/php/profile.php');
        $loading = true;
    } else {
        // this is just used to give an error message on the login page. The text inside holds no value.
        $handler = 'error';
    }
}
?>