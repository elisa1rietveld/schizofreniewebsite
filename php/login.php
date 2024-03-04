<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Mulish:wght@455&family=Protest+Revolution&display=swap" rel="stylesheet">
    <title>Log in</title>
</head>
<body>
<header>
    <div class="background">
        <img src="../img/login-background.jpg" alt="">
    </div>
</header>
<main class="container">
    <div class="login">
        <h1>log In!</h1>
        <form action="login.php" method="post">
            <label for="username">Gebruikersnaam</label>
            <input type="text" name="username" id="username">  
            <br>
            <label for="password">wachtwoord</label>
            <input type="password" name="password" id="password">
        </form>
    </div>
</main>
</body>
</html>