<?php
require 'Lib/database.php';
session_start();
$db = new Database();
$done = NULL;

if (!isset($_SESSION['user'])) {
    header('refresh: 0, url=/index.php');
}

var_dump($_POST);
if (isset($_POST['newPassword']) && isset($_POST['oldPass'])) {
    $newhashpass = password_hash($_POST['newPassword'], PASSWORD_BCRYPT);
    var_dump($newhashpass);
    $db->Query('UPDATE Users
                SET password = :pass
                WHERE username = :username;');
    $db->Bind(':username', $_SESSION['user']);
    $db->Bind(':pass', $newhashpass);
    
    // current problem is that it will always return true. Should not be the case. Fix later
    $result = $db->execute();
    
    if ($result) {
        $done = TRUE;
        return header('Refresh: 2, url=/php/profile.php');
    }
    else {
        echo 'error';
    }
}