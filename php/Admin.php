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
    <?php include_once 'header.php'; ?>
    <h1>Admin Dashboard</h1>
    <main>
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
    </main>

    <script src="/js/index.js"></script>
</body>
</html>