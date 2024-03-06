<?php
// delete user from database
session_start();
include_once '../Lib/database.php';
$db = new Database();

$db->Query('DELETE FROM Users
            WHERE username = :username;');

$db->bind(':username', $_SESSION['user']);

if ($db->execute()) {
    session_destroy();
    header('Refresh: 0, url=/index.php');
} else {
    echo 'error';
}
