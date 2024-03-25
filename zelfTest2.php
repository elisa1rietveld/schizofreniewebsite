<?php 
session_start();
var_dump($_POST);
// I made a controller for this shit, AKA the code part will be in a seperate file
require_once 'php/zelfTest2.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Mulish:wght@455&family=Protest+Revolution&display=swap" rel="stylesheet">
    <title>Simple Self Test</title>
    <link rel="stylesheet" href="css/zelfTest.css">
  </head>
  <?php
  include_once 'php/header.php';
  ?>
<body background="img/Index1.png">
<div class="container">

  <div class="cell">
    <form id='form' action="/php/result.php" method="post">
    <div class="question active">
    <p><strong>Waarneemt u hallicunaties?</strong></p>
      <input type="radio" name="Q1" value="5">Ja 
      <input type="radio" name="Q1" value="0">Nee 
    </div>
    
    <div class="question">
      <p><strong>Heeft u waanbeelden?</strong></p>
        <input type="radio" name="Q2" value="5">Ja
        <input type="radio" name="Q2" value="0">Nee
    </div>
      
    <div class="question">
      <p><strong>Heeft u problemen met begrijpen en uiten van uw emoties?</strong></p>
      <input type="radio" name="Q3" value="5">Ja
      <input type="radio" name="Q3" value="0">Nee
    </div>
    
    <div class="question">
      <p><strong>Komt psychose of schizofrenie eerder voor in de familie? </strong></p>
        <input type="radio" name="Q4" value="5">Ja
        <input type="radio" name="Q4" value="0">Nee
    </div>
        
    <div class="question">
        <p><strong>Heeft u moeite met echt en nep te onderscheiden? </strong></p>
          <input type="radio" name="Q5" value="5">Ja
          <input type="radio" name="Q5" value="0">Nee
    </div>

    <div class="question">
      <button type="submit">submit</button>
    </div>

</form>
  </div>
</div>

<script src="js/index.js"></script>
<script src="js/selftest.js"></script>
</body>
</html>
