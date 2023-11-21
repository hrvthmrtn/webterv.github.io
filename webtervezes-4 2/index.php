<?php
require_once 'init.php';
?>

<!DOCTYPE html>
<html lang ="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/stilus.css">
<link rel="stylesheet" href="css/mobile.css">
<title>Kezdőlap - Webtervezés Kft.</title>
<link rel="shortcut icon" href="img/shortcut.jpeg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <?php
    navigacioGeneralasa("fooldal");
    ?>
</header>
<main>
    <div id="scroll-to-top">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})">▲</button>
    </div>
    
    <div class="kezdolap">
        <div>
        <h1>Válaszd a legegyszerűbb módot weboldalad elkészítéséhez! Válassz minket!</h1>
        </div>

        <div class="socialmedia">
            <h1>Elérhetőek vagyunk az alábbi közösségi oldalakon is!</h1>
            <p>Kövess minket!</p>
            <div class="socialmedia-rounded">
                <a href="https://www.facebook.com/hrvthmrtn" target="_blank" class="fa fa-facebook"></a>
                <a href="https://www.reddit.com/user/hrvthmrtn/" target="_blank" class="fa fa-reddit"></a>
                <a href="https://www.snapchat.com/" target="_blank" class="fa fa-snapchat"></a>
                <a href="https://www.youtube.com/channel/webtervezeskft" target="_blank" class="fa fa-youtube"></a>

            </div>
        </div>


        <div class="hirlevel">
            <h1>Iratkozz fel hírlevelünkre!</h1>
            <p>Iratkozz fel hírlevelünkre, hogy folyamatosan értesülj a legfrissebb híreinkről!</p>
            <div class="newsletter-rounded">
                <form action="hirlevel.php" method="POST">
                    <label for="full-name" class="required-label">Teljes név: </label>
                    <input type="text" name="full-name" id="full-name" required>

                    <label for="email" class="required-label">E-mail cím: </label>
                    <input type="email" name="email" id="email" required>
                    <input type="submit" class="rounded" value="Feliratkozás">
                </form>
            </div>
        </div>
    </div>

</main>

    
<div class="footer">
<footer>Copyright © Webtervezés Kft. 2022</footer>
</div>





<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="main.js"></script>

<script>
    $(window).show(function() {
        var kezdolap = $('.socialmedia');
        kezdolap.addClass("visible");
    });
</script>


<script>
    $(window).show(function() {
        var kezdolap = $('.hirlevel');
        kezdolap.addClass("visible");
    });
</script>
</body>
</html>