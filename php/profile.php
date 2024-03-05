<?php
session_start();



if (isset($_SESSION['user'])) : ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Mulish:wght@455&family=Protest+Revolution&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
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
                <a href="">Change password</a>
                <a href="">Change username</a>
                <a href="">Delete account</a>
            </section>

            <section class="test">
                <h2>Zelftest</h2>
            </section>

            <section class="test">
                <h2>Resultaat</h2>
            </section>

        </div>
    </main>
    <script src="../js/index.js"></script>
</body>
</html>

<?php else : header('Refresh: 0, url=../php/login.php'); endif;?>