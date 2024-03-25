<?php
include_once 'Controllers/Change.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Mulish:wght@455&family=Protest+Revolution&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/login.css">
    <title>Change password</title>
</head>
<body>
<header>
    <div class="background">
        <div class='layer'>
        <img src="/img/login-background.jpg" alt="">
        </div>
    </div>
</header>
<main class="container">
    <div class="login">
        <h1>Password</h1>
        <form action="Change.php" method="post">
            <label for="oldPass">old password</label>
            <input type="password" name="oldPass" id="oldPass">  

            <label for="newPassword">new password</label>
            <input type="password" name="newPassword" id="newPassword">
            
        <?php if (isset($done)): ?>
            <p class="loginSucess">password changed! Redirecting...</p>
        <?php endif; ?>
        
            <button type="submit" id="submit">Change password</button>
        </form>
    </div>
</main>
</body>
</html>