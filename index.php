<?php
    session_start();
    // var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Mulish:wght@455&family=Protest+Revolution&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <?php include_once 'php/header.php';?>
    <div class="content">
        <img src="img/Index1.png" alt="Background photo" class="left-aligned-photo">
    </div>

<div class="container">
  <div class="my-box1">
    <h1>Schizofrenie</h1>
    <p>Schizofrenie is een complexe psychiatrische aandoening die gekenmerkt wordt door verstoringen in het denken, de emoties en het gedrag van een individu. Voor uitgebreide informatie, ondersteunende hulpbronnen en zelfevaluatiemogelijkheden, wordt verwezen naar deze website.
        <button onclick="location.href='info.php'">Lees Meer</button>
    </p>
  </div>
</div>
  <script src="js/nav.js"></script>
</body>
</html>