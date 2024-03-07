<?php
session_start();
    if (!isset($_SESSION['user'])) :
        header('Refresh: 0, url=/php/login.php'); else: ?>
<?php include_once 'Controllers/Profile.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/profile.css">
    <link href="                 https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Mulish:wght@455&family=Protest+Revolution&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Poppins:wght@500&display=swap">
    <title>Profile</title>
</head>
<body>
    <div class='background'>
        <!-- <div class="color"></div>
        <img src="../img/Index1.png" alt=""> -->
    </div>
    <?php include_once 'header.php'; ?>
    <main>
        <h1>Hallo <?php echo $_SESSION['user']?>!</h1>
        <div class="container">
            <!-- if statement to show a "make the test" link if the test wasn't made -->
            <!-- in said else statement another section with some information about what to do  -->
            <!-- a section with the % chance of having schizo -->
            
            <!-- another section with account management -->
            <section class="manage">
                <h2>Account</h2>
                <p>Gebruikersnaam: <?php echo $_SESSION['user']?></p>
                <p>Password: ***********</p>
                <a href="change.php">Change password</a>
                <a href="Controllers/delete.php">Delete account</a>
            </section>

            <section class="test">
                <h2>Selftest</h2>
                <?php if ($qMade == 10): ?>
                    <p>je hebt de test gemaakt! wil je hem opnieuw doen?</p>
                    <a href="">Redo test</a>
                <?php elseif ($qMade > 0): ?>
                    <p>Je bent nog bezig met de test, ga verder?</p>
                    <a href="">Verder met de test</a>
                <?php else: ?>
                    <p>Je hebt de test nog niet gedaan, wil je hem maken?</p>
                    <a href="">Maak de test</a>
                <?php endif; ?>
            </section>

            <section class="result">
                <h2>Result</h2>
                <div class="results">
                    <!-- What i'm trying to do is make a progress circle. We currently only have the circle -->
                    <!-- Js needs to be added to show the %, although I could probably use PHP functions for it aswell -->
                    <!-- css is used for the animation -->
                    <svg id="progress" width="300" height="300" viewBox=" 0 0 300 300">
                        <circle class="bg" cx="150" cy="150" r="130" fill='none' stroke="grey" stroke-width="20" />
                        <circle class="fg" cx="150" cy="150" r="130" fill='none' stroke="blue" stroke-width="20" 
                        stroke-dasharray='408.40 408.40'/> 
                        <text x="150" y="150" font-size="30" text-anchor="middle" fill="black">schizo Chance: </text>
                        <text x="150" y="200" font-size="30" text-anchor="middle" fill="black" id='nice'><?php echo $num?>%</text> 
                    </svg>
                    <div class="box">
                        
                        <?php if ($qMade == 10 && $num > 0) : ?>
                            <h3>What I do now?</h3>
                            <p>If you have a 60% chance or higher we recommend you looking help from a professional, our test is just to give a direction
                               And is not made to perfectly predict your situation.
                            </p>
                        <?php else: ?>
                            <h3>You haven't done the test yet</h3>
                            <p>Please do the test to see how big the chance is you have schizo</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <section class="contact">
                <h2>Contact professionals</h2>
                <p>To contact professionals you can go
                <a href="/contact.php">here</a>. 
                Alternatively we have health experts available in your local hospital</p>
            </section>
        </div>
    </main>
    <script src="/js/index.js"></script>
    <script src="/js/kms.js"> 
</script>
</body>
</html>
<?php endif;?>