<?php
include 'init.php';
$sikeresbejelentkezes=true;
$felhasznalok = adatokBetoltese("adatok/felhasznalok.txt");
$hibak = [];

if (isset($_POST["login-btn"])) {
    $felhasznalonev = $_POST["username"];
    $jelszo = $_POST["password"];

    foreach ($felhasznalok as $felhasznalo) {
        if ($felhasznalo->getFelhasznalonev() === $felhasznalonev && password_verify($jelszo, $felhasznalo->getJelszo())) {
            $_SESSION["user"] = $felhasznalo;
            $sikeresbejelentkezes=true;
            header("Location: profil.php");
        }else{
            $sikeresbejelentkezes=false;

        }

    }

}
if($sikeresbejelentkezes==false){
    $hibak[] = "Hibás felhasználónév vagy jelszó!";
}


?>

<!DOCTYPE html>
<html lang ="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/stilus.css">
<link rel="stylesheet" href="css/mobile.css">
<title>Bejelentkezés - Webtervezés Kft.</title>
<link rel="shortcut icon" href="img/shortcut.jpeg">
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
    <h2 class="login">Bejelentkezés</h2>

        <div class="form-container">
            <img src="img/profile.png" alt="Profile" class="profile" width="250">
            <form method="POST" autocomplete="off">
                <label for="uname">Felhasználónév: </label>
                <input type="text" name="username" id="uname" required>

                <label for="pswd">Jelszó:</label>
                <input type="password" name="password" id="pswd" required>

                <input type="submit" name="login-btn" value="Bejelentkezés">
            </form>
            <p>Még nem regisztrált? <a href="signup.php" class="regist">Kattintson ide!</a></p>
        </div>
</main>
<?php
    if(count($hibak) !== 0) {
        print_r($hibak);
    }

    ?>

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