<?php
include_once 'Lib/database.php';
include_once 'Lib/Verify.php';

$db = new Database();
$verify = new Verify();

if (!$verify->userType($_SESSION['user'], 88)) {
    header('Refresh: 0, url=Login.php');
    exit;
} 

$db->query('SELECT UserId,Username, userRole
            FROM Users
            ORDER BY userRole DESC;');

$result = $db->resultSet();

$tablerow = "";
foreach ($result as $key => $object) {
    $changable = 'change';
    if ($object->userRole == 88) {
        $type = "Admin";
    } else {
        $type = "User";
    }

    if ($object->UserId == 1) {
        $changable = 'no';
    }

    $tablerow .= "<tr class='user'>
                    <td>". $object->UserId . "</td>
                    <td class='name'>". $object->Username . "</td>
                    <td>". $type . "</td>
                    <td><p class='". $changable ."'>change</p></td>
                    <td><a href='controllers/delete.php?url=" . $object->UserId . "'>Delete</a></td>
                  </tr>";
}