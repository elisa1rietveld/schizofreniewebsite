<?php
require_once('../lib/database.php');
require_once('../lib/verify.php');

class form 
{
    public $username;
    public $choice;
    public $password;
    public $Roles;
    
    public function __construct($username,$choice, $password, $Roles) {
        $this->username = $username;
        $this->choice = $choice;
        $this->password = $password;
        $this->Roles = $Roles;
    } 
}

//acoustic thing of me where I like to name it here for now.
$db = new Database();
$verify = new Verify();

//making a form object just form my eyes and less annoying typing.
$form = new form($_POST['name'],$_POST['choice'],$_POST['password'], $_POST['Roles']);



if ($form->choice == 'userRole') {
    //changes userRole and returns true if it doesn't fuck up
    $db->query('UPDATE Users SET userRole = (:userRole) WHERE Username = :username');
    $db->bind(':username',$form->username);
    $db->bind(':userRole', $form->Roles);
    
    try{
        $db->execute();
        echo json_encode(true);
    } catch(Exception $e) {
        echo json_encode(false);
    }

} else if ($form->choice == 'pass') {
    // hashes password and returns true if it doesn't fuck up
    $hashed = password_hash($form->password, PASSWORD_BCRYPT);
    $db->query('UPDATE users SET password = :pass WHERE username = :username');
    $db->bind(':username',$form->username);
    $db->bind(':pass',$hashed);
    
    try{
        $db->execute();
        echo json_encode($hashed);
    } catch(Exception $e) {
        echo json_encode(false);
    }
}