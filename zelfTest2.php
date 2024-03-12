<?php include_once 'php/header.php';
session_start();
?>

<?php
$qMade = 0;
if(isset($_POST['Q1'])) {
    $qMade = 1;
} elseif (isset($_POST['Q2'])) {
    $qMade = 2;
} elseif (isset($_POST['Q3'])) {
  $qMade = 3;
} elseif (isset($_POST['Q4'])) {
  $qMade = 4;
}elseif (isset($_POST['Q5'])) {
  $qMade = 5;
}
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
<body background="img/Index1.png">
<div class="container">

  <div class="cell">
    <?php if($qMade == 0): ?>
      <p><strong>Waarneemt u hallicunaties?</strong></p>
      <form action="zelfTest2.php" method="post">
        <input type="radio" name="Q1" value="0">Ja 
        <input type="radio" name="Q1" value="5">Nee 
        <button type="submit">next question</button>
      </form>
      <?php elseif ($qMade == 1): ?>
        <p><strong>Heeft u waanbeelden?</strong></p>
        <form action="zelfTest2.php" method="post">
          <input type="radio" name="Q2" value="0">Ja
        <input type="radio" name="Q2" value="5">Nee
        <button type="submit">next question</button>
      </form>
      <?php elseif ($qMade == 2): ?>
        <p><strong>Heeft u problemen met begrijpen en uiten van uw emoties?</strong></p>
        <form action="zelfTest2.php" method="post">
          <input type="radio" name="Q3" value="0">Ja
          <input type="radio" name="Q3" value="5">Nee
          <button type="submit">next question</button>
        </form>
        <?php elseif ($qMade == 3): ?>
          <p><strong>Komt psychose of schizofrenie eerder voor in de familie? </strong></p>
          <form action="zelfTest2.php" method="post">
            <input type="radio" name="Q4" value="0">Ja
            <input type="radio" name="Q4" value="5">Nee
            <button type="submit">next question</button>
          </form>
        <?php elseif ($qMade == 4): ?>
            <p><strong>Heeft u moeite met echt en nep te onderscheiden? </strong></p>
            <form action="zelfTest2.php" method="post">
              <input type="radio" name="Q5" value="0">Ja
              <input type="radio" name="Q5" value="5">Nee
              <button type="submit">next question</button>
            </form>
            <?php endif; ?>
    </div>
  </div>

<script src="js/index.js"></script>
<script src="js/test.js"></script>
</body>
</html>
