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
<title>Fórum - Webtervezés Kft.</title>
<link rel="shortcut icon" href="shortcut.jpeg">
</head>
<body>
<header>
    <?php
    navigacioGeneralasa("forum");
    ?>
</header>
<main>
    <div id="scroll-to-top">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})">▲</button>
    </div>
    <div class="forum">
        <h1>Kereső</h1>
        <table class="kereso-table">
                <tr><td>Kulcsszavas kereső</td><td><input type="text" ></td></tr>
                <tr><td>Keresés szerző alapján</td><td><input type="text"></td></tr>
                <tr><td>Bejegyzés létrehozásának dátuma</td><td><input type="date"></td></tr>
                <tr><td>Kerülendő szavak</td><td><input type="text"></td></tr>
                <tr><td>Legnépszerűbb bejegyzés</td><td><input type="checkbox"></td></tr>
                <tr><td>Legújabb bejegyzés</td><td><input type="checkbox"></td></tr>
        </table>
        <input type="button" onclick="alert('Keressük tesókám, keressük. Am kajak elhitted, hogy majd működni fog?')" value="Keresés">
    </div>
    <div class="forum1">
        <table class="temak-table">
            <tr><th class="forum-tabla1">Témakör</th><th>Készítő</th><th>Üzenetek</th><th>Megtekintések</th><th>Legutóbbi hozzászólás</th></tr>
            <tr><td class="forum-tabla-nev"><a href="valami.php">Valami</a></td><td>Én</td><td>1</td><td>2313</td><td>2022.03.18 23:49</td></tr>
            <tr><td class="forum-tabla-nev">Placeholder</td><td>Én</td><td>0</td><td>1</td><td>2022.03.18 23:49</td></tr>
            <tr><td class="forum-tabla-nev">Placeholder</td><td>Én</td><td>0</td><td>1</td><td>2022.03.18 23:49</td></tr>
            <tr><td class="forum-tabla-nev">Placeholder</td><td>Én</td><td>0</td><td>1</td><td>2022.03.18 23:49</td></tr>
            <tr><td class="forum-tabla-nev">Placeholder</td><td>Én</td><td>0</td><td>1</td><td>2022.03.18 23:49</td></tr>
            <tr><td class="forum-tabla-nev">Placeholder</td><td>Én</td><td>0</td><td>1</td><td>2022.03.18 23:49</td></tr>
            <tr><td class="forum-tabla-nev">Placeholder</td><td>Én</td><td>0</td><td>1</td><td>2022.03.18 23:49</td></tr>
            <tr><td class="forum-tabla-nev">Placeholder</td><td>Én</td><td>0</td><td>1</td><td>2022.03.18 23:49</td></tr>
            <tr><td class="forum-tabla-nev">Placeholder</td><td>Én</td><td>0</td><td>1</td><td>2022.03.18 23:49</td></tr>
            <tr><td class="forum-tabla-nev">Placeholder</td><td>Én</td><td>0</td><td>1</td><td>2022.03.18 23:49</td></tr>
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
            var forum = $('.forum');
            forum.addClass("visible");
        });
    </script>

    <script>
        $(window).show(function() {
            var forum = $('.forum1');
            forum.addClass("visible");
        });
    </script>
    
</body>
</html>