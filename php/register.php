<?php
require_once 'Controllers/register.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Mulish:wght@455&family=Protest+Revolution&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/login.css">
    <title>Document</title>
</head>
<body>
<header>
    <div class="background">
        <img src="/img/login-background.jpg" alt="">
    </div>
</header>
<main class="container">
    <div class="login">
        <h1>Register</h1>
        <form action="register.php" method="post">
            <label for="username">Gebruikersnaam</label>
            <input type="text" name="username" id="username">  

            <label for="password">wachtwoord</label>
            <input type="password" name="password" id="password">
            
        <?php if (isset($handler)): ?>
            <p class="loginError">User created! Redirecting...</p>
        <?php endif; ?>
        
            <button type="submit" id="submit">Register</button>
            <a href="login.php">Already have an account?</a>
        </form>
    </div>
</main>
</body>
</html>