<?php
require_once 'Lib/database.php';
$db = new Database();
$var = 'pass';
$li = 'usr';
<<<<<<< Updated upstream
var_dump($_POST);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $passHash = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $handler = "";
    var_dump($passHash);
        $db->query('INSERT INTO Users(username, password) VALUES (:username, :password);');
=======
$error = FALSE;
// var_dump($_POST);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $passHash = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
    // var_dump($passHash);
        $db->query('INSERT INTO Users(username, password,userRole) VALUES (:username, :password,1);');
>>>>>>> Stashed changes
        $db->bind(':username', $_POST['username']);
        $db->bind(':password', $passHash);

        try {
            $db->execute();
            $handler = "";
            header('Refresh: 3, url=/php/login.php');
        } 
        
        catch(Exception $e) {
            // echo "error";    
            $error = TRUE;
        }
}