<?php
    session_start();
    include_once 'Controllers/Admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/Admin.css">
    <title>Admin</title>
</head>
<body>
    <div class='background'>
        <img src="../img/Index1.png" alt="">
    </div>
    <?php include_once 'header.php'; ?>
    <main>
        <h1>Admin Dashboard</h1>
        <div class="container">
            <section class='user-managing'>
                <h2>Users</h2>
                <table>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>userType</th>
            </tr>
            <?php echo $tablerow;?>
        </table>
    </section>

    <section class="manage">
        <h2>Account</h2>
        <p>Gebruikersnaam: <?php echo $_SESSION['user']?></p>
        <p>Password: ***********</p>
    </section>
        </div>
    </main>

    <script src="/js/index.js"></script>
</body>
</html>