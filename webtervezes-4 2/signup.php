<?php
include 'init.php';

$felhasznalok = adatokBetoltese("adatok/felhasznalok.txt");

$hibak = [];

if (isset($_POST["signup-btn"])) {
    $felhasznalonev = $_POST["username"];
    $jelszo = $_POST["password"];
    $ellenorzoJelszo = $_POST["password-check"];
    $email = $_POST["email"];

    if (trim($felhasznalonev) === "" || trim($jelszo) === "" || trim($ellenorzoJelszo) === "" ||
        trim($email) === "") {
        $hibak[] = "Minden kötelezően kitöltendő mezőt ki kell tölteni!";
    }


    if (!preg_match("/[0-9a-z.-]+@([0-9a-z-]+\.)+[a-z]{2,4}/", $email)) {
        $hibak[] = "A megadott e-mail cím formátuma nem megfelelő!";
    }

    if ($jelszo !== $ellenorzoJelszo) {
        $hibak[] = "A két jelszó nem egyezik!";
    }


    foreach ($felhasznalok as $felhasznalo) {
        if ($felhasznalo->getFelhasznalonev() === $felhasznalonev) {
            $hibak[] = "A felhasználónév már foglalt!";
        }
    }

    foreach ($felhasznalok as $felhasznalo) {
        if ($felhasznalo->getEmail() === $email) {
            $hibak[] = "Az e-mail cím már foglalt!";
        }
    }

    if (count($hibak) === 0) {
        $jelszo = password_hash($jelszo, PASSWORD_DEFAULT);
        $felhasznalo = new Felhasznalok($felhasznalonev, $jelszo, $email);
        $felhasznalok[] = $felhasznalo;
        adatokMentese("adatok/felhasznalok.txt", $felhasznalok);
    }else {
        print_r($hibak);
    }
}
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
    navigacioGeneralasa("bejelentkezes");
    ?>
</header>
<main>
    <div id="scroll-to-top">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})">▲</button>
    </div>
        <h2 class="login">Regisztráció</h2>
    <div class="form-container">
        <form method="POST" autocomplete="off" enctype="multipart/form-data">
            <label for="uname" class="required-label">Felhasználónév (kötelező): </label>
            <input type="text" name="username" id="uname" value="" required maxlength="50">

            <label for="pswd" class="required-label">Jelszó (kötelező): </label>
            <input type="password" name="password" id="pswd" value="" required>

            <label for="pswd-check" class="required-label">Jelszó ismét (kötelező): </label>
            <input type="password" name="password-check" id="pswd-check" value="" required>

            <label for="email" class="required-label">E-mail cím: </label>
            <input type="email" name="email" id="email" placeholder="valaki@pelda.com" value="">

            <input type="reset" name="reset-btn" value="Visszaállítás">
            <input type="submit" name="signup-btn" value="Regisztráció">
        </form>
    </div>
</main>

    

<div class="footer">
    <footer>Copyright © Webtervezés Kft. 2022</footer>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script>
        $(window).show(function() {
            var bejelentkezes = $('.form-container');
            bejelentkezes.addClass("visible");
        });
    </script>


</body>
</html>