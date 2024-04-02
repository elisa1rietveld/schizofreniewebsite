<?php
require_once('../lib/database.php');
require_once('../lib/verify.php');

//acoustic thing of me where I like to name it here for now.
$db = new Database();
$verify = new Verify();


// change userRole if it was selected.
if ($_POST['choice'] == 'userRole') {
    //changes userRole and returns true if it doesn't fuck up
    $db->query('UPDATE Users SET userRole = (:userRole) WHERE Username = :username');
    $db->bind(':username',$_POST['name']);
    $db->bind(':userRole', $_POST['Roles']);
    
    // returns a true or false.
    try{
        $db->execute();
        echo json_encode(true);
    } catch(Exception $e) {
        echo json_encode(false);
    }

    // changes pass if it was selected.
} else if ($_POST['choice'] == 'pass') {
    // hashes password and returns true if it doesn't fuck up
    $hashed = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $db->query('UPDATE users SET password = :pass WHERE username = :username');
    $db->bind(':username',$_POST['name']);
    $db->bind(':pass',$hashed);
    
    try{
        $db->execute();     
        echo json_encode($hashed);
    } catch(Exception $e) {
        echo json_encode(false);
    }
}