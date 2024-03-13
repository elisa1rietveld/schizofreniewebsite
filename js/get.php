<?php
require_once '../php/Lib/database.php';
require_once '../php/Lib/verify.php';
session_start();

$db = new database();
$verify = new Verify();

$qMade= 0;
$total = 0;

$db->Query('SELECT Q1,Q2,Q3,Q4,Q5
            FROM Questions
            WHERE UserId = :userId');
$db->bind(':userId',$verify->getId($_SESSION['user']));
$result = json_encode($db->single());

echo $result;

