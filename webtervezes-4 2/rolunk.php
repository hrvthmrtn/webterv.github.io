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
<title>Rólunk - Webtervezés Kft.</title>
<link rel="shortcut icon" href="shortcut.jpeg">
</head>
<body>
<header>
    <?php
    navigacioGeneralasa("rolunk");
    ?>
</header>
    <main class="rolunkcucc">
    <div id="scroll-to-top">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})">▲</button>
    </div>

    <img src="img/cegalapitas.jpeg" alt="cegalapitas" class="cegalapitas" width="400">
        <div class="hogyan_indult">
            <h1>Indulásunk</h1>
            <p>
                Cégünk 2021 januárjában kezdte meg működését 3 fővel, akikkel a mai napig együtt dolgozunk.<br/>
                Vállalkozásunk elíndításakor a célunk az volt, hogy sikeres weboldalakat készítsünk cégek és kisválallkozók számára.
            </p>
        </div>

        <img src="img/lepesttartunk.jpeg" alt="lepesttartunk" class="lepesttartunk" width="400">
            <div class="lepestartas">
            <h1>Lépést tartunk a világgal</h1>
            <p>
                Ha modern és letisztult weboldra vágysz, akkor jó helyen jársz, ugyanis programozóink folyamatosan azon dolgoznak, hogy a modern kor legfejlettebb módszereivel készítsék el a megrendelők weboldalait.<br/>
            </p>
            </div>
            
            <img src="img/ugyfelpartnerseg.jpeg" alt="ugyfelpartnerseg" class="ugyfelpartnerseg" width="400">
            <div class="ugyfelpartner">
                <h1>Nálunk az ügyfél partner</h1>
                <p>
                    Ha felkeresel minket, akkor egy alapos konzultációra kerül sor.<br/>
                    Kollégáink minden apró részletet a Te igényeidre szabnak, és a munkafolyamat közben is van lehetőség módosításokra.
                </p>
            </div>
</main>

<div class="footer">
    <footer>Copyright © Webtervezés Kft. 2022</footer>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="main.js"></script>

    <script>
        $(window).show(function() {
            var rolunk = $('.hogyan_indult');
            rolunk.addClass("visible");
        });
    </script>

    <script>
        $(window).show(function() {
            var rolunk = $('.cegalapitas');
            rolunk.addClass("visible");
        });
    </script>

    <script>
        $(window).show(function() {
            var rolunk = $('.lepestartas');
            rolunk.addClass("visible");
        });
    </script>
        
        <script>
            $(window).show(function() {
                var rolunk = $('.lepesttartunk');
                rolunk.addClass("visible");
            });
        </script>

    <script>
        $(window).show(function() {
            var rolunk = $('.ugyfelpartner');
            rolunk.addClass("visible");
        });
    </script>

    <script>
        $(window).show(function() {
            var rolunk = $('.ugyfelpartnerseg');
            rolunk.addClass("visible");
        });
    </script>
    


</body>
</html>