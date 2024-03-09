<?php
include_once 'Lib/database.php';
include_once 'Lib/Verify.php';

$db = new Database();
$verify = new Verify();

if (!$verify->userType($_SESSION['user'], 88)) {
    header('Refresh: 0, url=Login.php');
    exit;
} 

$db->query('SELECT UserId,Username
            FROM Users
            WHERE userRole = 1;');

$result = $db->resultSet();

$tablerow = "";
foreach ($result as $key => $object) {
    $tablerow .= "<tr>
                    <td>". $object->UserId . "</td>
                    <td>". $object->Username . "</td>
                    <td>User</td>
                  </tr>";
}