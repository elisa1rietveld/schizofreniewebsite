<?php
require_once 'Lib/database.php';
$db = new Database();
$error = FALSE;

if (isset($_POST['username']) && isset($_POST['password'])) {
    $passHash = password_hash($_POST['password'], PASSWORD_BCRYPT);
    

        $db->query('INSERT INTO Users(username, password,userRole) VALUES (:username, :password,1);');
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