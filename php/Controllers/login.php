<?php
require 'Lib/database.php';
session_start();
$db = new Database();
$handler = NULL;

//defines if it should show the loading screen
$loading = false;

// echo password_hash('geheim', PASSWORD_BCRYPT);
if (isset($_POST['username'])) {
    $db->query('SELECT * FROM Users WHERE username = :username;');
    $db->bind(':username', $_POST['username']);
    $result = $db->single();

    //verifies password and goes back to homepage
    if(isset($result->password) && password_verify($_POST['password'], $result->password)) {
        $_SESSION['user'] = $result->Username;
        header('Refresh: 1, url=/php/profile.php');
        $loading = true;
    } else {
        $handler = 'error';
    }
}
?>