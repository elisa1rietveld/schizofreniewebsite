<?php
// delete user from database
session_start();
include_once '../Lib/database.php';
$db = new Database();

$userId = $_GET['url'];

if (isset($_GET['url'])) {
        $db->Query('DELETE FROM Users
        WHERE UserId= :username;');

        $db->bind(':username', $userId);

        if ($db->execute()) {
        header('Refresh: 0, url=../profile.php');
    } else {
        echo 'error';
    }

} else {
    $db->Query('DELETE FROM Users
            WHERE username = :username;');

    $db->bind(':username', $_SESSION['user']);

    if ($db->execute()) {
        session_destroy();
        header('Refresh: 0, url=/index.php');
    } else {
        echo 'error';
}
}
