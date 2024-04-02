<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Mulish:wght@455&family=Protest+Revolution&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact</title>
    </head>
    
    <body background="img/Index1.png">
    <?php include_once 'php/header.php';?>
    <h1 class="content">Contact</h1>
    <main>
    <div class="parent">
     <div class="container ">
         <img src="img/phone-call.png" alt="Phone Call" id="phone" class="pic" >
         <h2>Hulplijnen</h2>
         <div class="contact-info">
             <p>H B Hulplijnen:</p>
            <a href="tel:0880767000">088 0767 000</a>

            <p>De Luisterlijn:</p>
            <a href="tel:0880767000">088 0767 000</a>

            <p>MIND Korrelatie:</p>
            <a href="tel:09001450">(0900) 1450</a>
            <p>Stichting 113 Zelfmoordpreventie:</p>
            <a href="tel:09000113">(0900) 0113</a>
        </div>
     </div>
        

        <div class="container">
            <img src="img/user.png" alt="user" class="pic">
            <h3>Contact</h3>
            <!-- <div class="container"> -->
            <div class="contact-info">
                    <p>Contact:</p>
                    <a href="mailto:schizofrenie@gmail.com">Email: schizofrenie@gmail.com</a>
                    <a href="tel:0880956000">Telefoon: 088 0956 000</a>
                <p class="address">Adres:</p>
                <p class="address">Soestwetering 1, 3543 AZ Utrecht</p>
            </div>
        <!-- </div> -->

    </div>
    </div>
    </main>

        <script src="js/nav.js"></script>
    
    </body>
    </html>