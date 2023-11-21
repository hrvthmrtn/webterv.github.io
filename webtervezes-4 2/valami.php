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
<title>Regisztráció - Webtervezés Kft.</title>
<link rel="shortcut icon" href="shortcut.jpeg">
</head>
<body>
<header>
    <?php
    navigacioGeneralasa("profile");
    ?>
</header>
<main>
    <div id="scroll-to-top">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})">▲</button>
    </div>
    <div class="forum1">
    <h1>Valami</h1>
        <table class="temak-table">
                <tr><th>Készítő</th><th>Üzenet</th></tr>
                <tr><td>Én</td><td>Hozzászólt: Péntek, 2022 03 18, 23:49</td></tr>
                <tr><td>Fórum szerkesztő<br><img src="img/enprofilkep.jpg" alt="elmeszaznyadbamar" width="50"></td><td>Ez az első üzenet a fórumon. Mindennek a kezdete.</td></tr>
        </table>
    </div>
</main>


<div class="footer">
    <footer>Copyright © Webtervezés Kft. 2022</footer>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script>
        $(window).show(function() {
            var forum1 = $('.forum1');
            forum1.addClass("visible");
        });
    </script>
</body>
</html>