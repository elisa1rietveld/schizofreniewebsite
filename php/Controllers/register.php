<?php
require_once 'Lib/database.php';
$db = new Database();
$var = 'pass';
$li = 'usr';
var_dump($_POST);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $passHash = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $handler = "";
    var_dump($passHash);
        $db->query('INSERT INTO Users(username, password) VALUES (:username, :password);');
        $db->bind(':username', $_POST['username']);
        $db->bind(':password', $passHash);

        if ($db->execute()) {
            header('Refresh: 3, url=/php/login.php');
        } else {
            echo "error";
            return 'false!!!!';
        }
}