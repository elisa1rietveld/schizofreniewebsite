<?php include_once 'php/header.php'
session_start();
;?>

<?php
$qMade = 0;
var_dump($_POST);
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


    <?php if($qMade == 0): ?>
        <p>Waarneemt u hallicunaties?</p>
        <form action="zelfTest2.php" method="post">
        <input type="radio" name="Q1" value="0">Ja
        <input type="radio" name="Q1" value="5">Nee
        <button type="submit">next question</button>
        </form>
    <?php elseif ($qMade == 1): ?>
        <p>Heeft u waanbeelden?</p>
        <form action="zelfTest2.php" method="post">
        <input type="radio" name="Q2" value="0">Ja
        <input type="radio" name="Q2" value="5">Nee
        <button type="submit">next question</button>
        </form>
    <?php elseif ($qMade == 2): ?>
        <p>Heeft u problemen met begrijpen en uiten van uw emoties?</p>
        <form action="zelfTest2.php" method="post">
        <input type="radio" name="Q3" value="0">Ja
        <input type="radio" name="Q3" value="5">Nee
        <button type="submit">next question</button>
        </form>
    <?php elseif ($qMade == 3): ?>
        <p>Komt psychose of schizofrenie eerder voor in de familie? </p>
        <form action="zelfTest2.php" method="post">
        <input type="radio" name="Q4" value="0">Ja
        <input type="radio" name="Q4" value="5">Nee
        <button type="submit">next question</button>
        </form>
    <?php elseif ($qMade == 4): ?>
        <p>Heeft u moeite met echt en nep te onderscheiden? </p>
        <form action="zelfTest2.php" method="post">
        <input type="radio" name="Q5" value="0">Ja
        <input type="radio" name="Q5" value="5">Nee
        <button type="submit">next question</button>
        </form>
    <?php endif; ?>


