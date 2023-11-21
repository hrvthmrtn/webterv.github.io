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
<header>
    <?php
    navigacioGeneralasa("fooldal");
    ?>
</header>
<main>
    <div id="scroll-to-top">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})">▲</button>
    </div>
    <?php
    include_once "osztalyok/kapcsolatAdatok.php";

    $kapcsolatok = adatokBetoltese("adatok/kapcsolat.txt");

    $nev = $_POST["name"];
    $email = $_POST["email"];
    $uzenet = $_POST["subject"];
    

            $kapcsolat = new kapcsolatAdatok($nev, $email, $uzenet);
            $kapcsolatok[] = $kapcsolat;
            adatokMentese("adatok/kapcsolat.txt", $kapcsolatok);
    
    ?>
    Köszönjük, hogy felvette a kapcsolatot velünk, <?php echo $_POST["name"]; ?><br/>
    Az email-cím amit megadott: <?php echo $_POST["email"]; ?><br/>
    Közlendő: <?php echo $_POST["subject"];?>

    


</main>

    

<div class="footer">
    <footer>Copyright © Webtervezés Kft. 2022</footer>
    </div>

</body>
</html>