<?php
session_start();
// Dit stukje code zorgt ervoor dat het alleen werkt als je ingelogd ben. Haal het weg als je eraan gaat werken -Zico
if (!isset($_SESSION['user'])) :
    header('Refresh: 0, url=/php/login.php'); else: ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Mulish:wght@455&family=Protest+Revolution&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/zelfTest.css">
    <title>Document</title>
</head>
    <?php include_once 'php/header.php';?>
<body background="img/Index1.png">
<div class="container2">
<div class="cell2">
<p>Benieuwd of u tekenen vertoont die kunnen wijzen op schizofrenie? <br>
Doe deze test om erachter te komen. </p>
<a href="zelfTest2.php">
    <button>Start de test</button>
</a>
</div>
</div>

    <script src="js/index.js"></script>
    
</body>
</html>

<?php endif;?>