<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Mulish:wght@455&family=Protest+Revolution&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/zelfTest.css">
    <title>Document</title>
</head>
    <?php include_once 'php/header.php';?>
<body>
    <!-- Dit stukje code zorgt ervoor dat het alleen werkt als je ingelogd ben. Haal het weg als je eraan gaat werken -Zico-->
    <?php if (!isset($_SESSION['user'])) {
    header('refresh: 0, url=/php/login.php');
    }?> 



    <script src="js/index.js"></script>
    
</body>
</html>