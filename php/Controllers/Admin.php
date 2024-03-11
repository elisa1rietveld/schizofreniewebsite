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
    if ($object->userRole == 88) {
        $type = "Admin";
    } else {
        $type = "User";
    }
    $tablerow .= "<tr>
                    <td>". $object->UserId . "</td>
                    <td>". $object->Username . "</td>
                    <td>". $type . "</td>
                    <td><a href=''>Change</a></td>
                    <td><a href=''>Delete</a></td>
                  </tr>";
}