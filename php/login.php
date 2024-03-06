<?php
require_once 'Controllers/login.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Poppins:wght@500&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Mulish:wght@455&family=Protest+Revolution&display=swap" rel="stylesheet">
    <title>Log in</title>
</head>
<body>
<header>
    <div class="background">
        <img src="/img/login-background.jpg" alt="">
    </div>
</header>
<main class="container">
    <div class="login">
    <?php if ($loading): ?>
        <h1 class="logging">Logging in...</h1>
        
    <?php else: ?>
        <h1>Log In!</h1>
        <form action="login.php" method="post" autocomplete="off">
            <label for="username">Gebruikersnaam</label>
            <input type="text" name="username" id="username">  

            <label for="password">wachtwoord</label>
            <input type="password" name="password" id="password">
            
        <?php if (isset($handler)): ?>
            <p class="loginError">username or password incorrect</p>
        <?php endif; ?>
        
            <button type="submit" id="submit">Log in!</button>
            <a href="register.php">Create account?</a>
        </form>
    <?php  endif; ?>
    </div>
</main>
</body>
</html>