<?php
include_once 'Lib/database.php';
include_once 'Lib/Verify.php';

$db = new Database();
$verify = new Verify();

// sends you back to the login page if anyone but an admin tries to access the page
if (!$verify->userType($_SESSION['user'], 88)) {
    header('Refresh: 0, url=Login.php');
    exit;
} 
// the following code is used to set the user list on the admin dashboard.
$db->query('SELECT UserId,Username, userRole
            FROM Users
            ORDER BY userRole DESC;');

$result = $db->resultSet();

$tablerow = "";
foreach ($result as $key => $object) {
    if ($object->userRole == 88) {
        $type = "Admin";
    } else {
        $type = "User";
    }
    // the if statements are so you can not alter your own role or the admins.
    if ($object->UserId == 1 || $object->Username == $_SESSION['user']) {
        $tablerow .= "<tr class='user'>
        <td>". $object->UserId . "</td>
        <td class='name'>". $object->Username . "</td>
        <td>". $type . "</td>
        <td><p class='no'>change</p></td>
        <td><p class='no'>delete</p></td>
      </tr>";;

    } else {
        $tablerow .= "<tr class='user'>
                        <td>". $object->UserId . "</td>
                        <td class='name'>". $object->Username . "</td>
                        <td>". $type . "</td>
                        <td><p class='change'>change</p></td>
                        <td><a href='controllers/delete.php?url=" . $object->UserId . "'>Delete</a></td>
                      </tr>";
    }
    }
