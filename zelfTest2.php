<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Mulish:wght@455&family=Protest+Revolution&display=swap" rel="stylesheet">
    <title>Simple Self Test</title>
    <link rel="stylesheet" href="css/zelfTest.css">
</head>
    <?php include_once 'php/header.php';?>
<body>
    <div class="quiz-container">
        <h1>Lorem</h1>
        <div id="questions">
            <h2>Question 1</h2>
            <p>Lorem ipsum?</p>
            <input type="text" id="color">
            <button onclick="nextQuestion()">Next</button>
        </div>
        <div id="result" style="display: none;">
            <h2 id="result-text"></h2>
        </div>
    </div>
    <script src="js/index.js"></script>
</body>
</html>
