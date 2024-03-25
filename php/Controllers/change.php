<?php
require_once 'Lib/database.php';
require_once 'Lib/Verify.php';
session_start();
$db = new Database();
$verify = new Verify();
$done = NULL;

if (!isset($_SESSION['user'])) {
    header('refresh: 0, url=/index.php');
}

if (isset($_POST['newPassword']) && isset($_POST['oldPass'])) {
    // checks if old password is the same as database password
    if($verify->Pass($_SESSION['user'],$_POST['oldPass'])) {
        // changes password to the new one.
        $newhashpass = password_hash($_POST['newPassword'], PASSWORD_BCRYPT);
        $db->Query('UPDATE Users
                    SET password = :pass
                    WHERE username = :user;');
        $db->Bind(':user', $_SESSION['user']);
        $db->Bind(':pass', $newhashpass);
        $db->execute();
    }

    // checks if all went well
    if ($verify->pass($_SESSION['user'],$_POST['newPassword'])) {
        $done = TRUE;
        return header('Refresh: 2, url=/php/profile.php');
    }
    else {
        return 'something went wrong while changing password';
    }
}