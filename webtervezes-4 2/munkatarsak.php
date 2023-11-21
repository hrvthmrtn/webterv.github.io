<?php
include 'init.php';
?>

<!DOCTYPE html>
<html lang ="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/stilus.css">
<link rel="stylesheet" href="css/mobile.css">
<title>Munkatársak - Webtervezés Kft.</title>
<link rel="shortcut icon" href="shortcut.jpeg">
</head>
<body>
<header>
    <?php
    navigacioGeneralasa("munkatarsak");
    ?>
</header>
<main>
    <div id="scroll-to-top">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})">▲</button>
    </div>

    <div class="container">
        <div class="employee">
            <img src="img/employee01.jpeg" alt="employee01" class="employee01" width="200">
            <p class="nev">Kala Pál</p>
            <p>Ügyvezető igazgató</p>
            <p>Email: <a href="mailto:kalapal@webtervezeskft.hu">kalapal@webtervezeskft.hu</a></p>
            <p>Telefon: +36 30/123-0102</p> 
        </div>

        <div class="employee">
            <img src="img/employee02.png" alt="employee02" class="employee02" width="200">
            <p class="nev">Remek Elek</p>
            <p>Marketing menedzser</p>
            <p>Email: <a href="mailto:remekelek@webtervezeskft.hu">remekelek@webtervezeskft.hu</a></p>
            <p>Telefon: +36 30/456-0304</p>    
        </div>

        <div class="employee">
            <img src="img/employee03.jpeg" alt="employee03" class="employee03" width="200">
            <p class="nev">Zsíros B. Ödön</p>
            <p>Értékesítő</p>
            <p>Email: <a href="mailto:zsirosbodon@webtervezeskft.hu">zsirosbodon@webtervezeskft.hu</a></p>
            <p>Telefon: +36 30/789-0506</p>
        </div>
        </div>
</main>

    

<div class="footer">
    <footer>Copyright © Webtervezés Kft. 2022</footer>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script>
        $(window).scroll(function() {
            var employees = $('.employee');
            employees.addClass("visible");

        });
    </script>
</body>
</html>