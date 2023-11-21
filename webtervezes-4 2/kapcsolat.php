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
<title>Kapcsolat - Webtervezés Kft.</title>
<link rel="shortcut icon" href="shortcut.jpeg">
</head>
<body>
<header>
    <?php
    navigacioGeneralasa("kapcsolat");
    ?>
</header>
<main>
    <div id="scroll-to-top">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})">▲</button>
    </div>
    <div class="container" id="container">
        <h2>A Webtervezés Kft. elérhetősége</h2>
    <div class="grid-container">
        <div class="grid-item">
            <table class="contact-table">
                <tr>
                    <td>
                        Cím
                    </td>
                    <td>
                        Szeged, Aradi Vértanúk tere 1.
                    </td>
                </tr>

                <tr>
                    <td>
                        Adószám
                    </td>
                    <td>
                        12345678-1-01
                    </td>
                </tr>

                <tr>
                    <td>
                        Cégjegyzékszám
                    </td>
                    <td>
                        01-02-345678
                    </td>
                </tr>

                <tr>
                    <td>
                        Telefon
                    </td>
                    <td>
                        06/70 ott repül BatMan :)
                    </td>
                </tr>

                <tr>
                    <td>
                        Weboldal
                    </td>
                    <td>
                        <a href="https://www.webtervezeskft.hu" target="_blank">www.webtervezeskft.hu</a>
                    </td>
                </tr>

                <tr>
                    <td>
                        E-mail
                    </td>
                    <td>
                        <a href="mailto:info@webtervezeskft.hu" target="_blank">info@webtervezeskft.hu</a>
                    </td>
                </tr>
            </table>
            	
        </div>
        <div class="grid-item">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2759.1479611297705!2d20.14548251570841!3d46.247286288869674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474487e03cf373d5%3A0x728039e91cb2e380!2sTanulm%C3%A1nyi%20Oszt%C3%A1ly%20SZTE%20TTIK!5e0!3m2!1shu!2shu!4v1646589888819!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>

    <div class="contact-form" id="contact-form">
        <h2>Vegye fel velünk a kapcsolatot!</h2>
        <p>Bármilyen kérdése van, töltse ki a kapcsolati űrlapot!</p>
        <div class="form-container-contact">
        <form action="kapcsolat-feldolgoz.php" method="POST">
                
        <label for="lname" class="required-label">Név</label>
        <input type="text" id="lname" name="name" placeholder="Vezetékneved..." required>
        <label for="emailaddress" class="required-label">E-mail cím</label>
        <input type="email" id="emailaddress" name="email" placeholder="E-mail címed..." required>

          <label for="subject" class="required-label">Üzenet</label>
          <textarea id="subject" name="subject" placeholder="Írj valamit..." style="height:200px" required></textarea>
      
          <input type="submit" value="Elküld">
      
        </form>
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
            var kapcsolat = $('#container');
            kapcsolat.addClass("visible");
        });
    </script>
    <script>
        $(window).scroll(function() {
            var y = $(this).scrollTop();
            if (y > 25) {
                $('#contact-form').fadeIn(2000);
            } 
        });
    </script>

</body>
</html>