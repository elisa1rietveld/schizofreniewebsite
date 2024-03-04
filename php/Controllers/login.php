<?php
require 'Lib/database.php';
session_start();
$handler = NULL;

//defines if it should show the loading screen
$loading = false;

// echo password_hash('geheim', PASSWORD_BCRYPT);
if (isset($_POST['username'])) {
    $db = new Database();
    $db->query('SELECT * FROM Users WHERE username = :username;');
    $db->bind(':username', $_POST['username']);
    $result = $db->single();

    //verifies password and goes back to homepage
    if(isset($result->password) && password_verify($_POST['password'], $result->password)) {
        $_SESSION['user'] = $result->username;
        header('Refresh: 2, url=../index.php');
        $loading = true;
    } else {
        $handler = 'error';
    }
}
?>