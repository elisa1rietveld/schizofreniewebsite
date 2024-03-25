<?php
// delete user from database
session_start();
include_once '../Lib/database.php';
$db = new Database();

//gets the userid from the link
$userId = $_GET['url'];

// if there was a link it will delete the user. This is used through the admin.
if (isset($_GET['url'])) {
        $db->Query('DELETE FROM Users
        WHERE UserId= :username;');

        $db->bind(':username', $userId);

        if ($db->execute()) {
        header('Refresh: 0, url=../profile.php');
    } else {
        echo 'user could not be deleted.';
    }

// this is used when the user wants to terminate their own account.
//account will be removed from database and session gets destroyed.
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
